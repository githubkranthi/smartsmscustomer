<?php
namespace app\modules\user\controllers;

use yii\web\Controller;
use Yii;
use GuzzleHttp\Client as GuzzleHttpClient;
use yii\helpers\Json;
use common\components\FileReader;

class UserController extends Controller
{

    private $objGclient;

    // Need to send csrf token or add csrf validation :: Future enhancement
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function init()
    {
        $this->objGclient = new GuzzleHttpClient();
    }

    public function actionHome()
    {
        $arrResponse = [];
        $arrInputs = $this->inputs();
        switch ($arrInputs['action']) {
            case 'newsenderid':
                $arrInputs = $this->addOns($arrInputs);
                $arrResponse = $this->fire($arrInputs);
                break;
            case 'listsenderids':
                $this->fire($arrInputs);
                break;
        }
        $this->makeJson($arrResponse);
    }

    private function makeJson($arrData)
    {
        $strJson = NULL;
        if (! empty($arrData)) {
            $strJson = Json::encode($arrData, JSON_PRETTY_PRINT);
            unset($arrData);
            // \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        }
        echo $strJson;
    }

    private function fire($arrInputs)
    {
        $arrParams = Yii::$app->params['service_params'];
        $strURL = $arrParams['url'] . 'fire';
        unset($arrParams['url']);
        $arrInputs = array_merge($arrInputs, $arrParams);
        $arrHeaders = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-type' => 'application/json'
            ]
        ];
        // Request
        $objRequest = $this->objGclient->request(Yii::$app->request->method, $strURL, [
            'form_params' => $arrInputs
        ], $arrHeaders);
        unset($arrInputs, $arrParams, $arrHeaders, $strURL);
        // Response
        $arrResponse = Json::decode($objRequest->getBody(), TRUE);
        return $arrResponse;
    }

    private function inputs()
    {
        $arrResponse = [];
        switch (Yii::$app->request->method) {
            case 'GET':
                $arrResponse = Yii::$app->request->get();
                break;
            case 'POST':
                $arrResponse = Yii::$app->request->post();
                break;
        }
        return $arrResponse;
    }

    private function addOns($arrInputs)
    {
        $arrResponse = $arrAddOns = [];
        switch ($arrInputs['action']) {
            case 'newsenderid':
                $arrAddOns = [
                    'userid' => 1,
                    'created_by' => 1
                ];
                break;
            case 'listsenderids':

                break;
        }
        $arrResponse = array_merge($arrInputs, $arrAddOns);
        unset($arrInputs, $arrAddOns);
        return $arrResponse;
    }

    public function actionSample()
    {
        $arrInputs = [
            'file_path' => Yii::getAlias('@webroot') . '/uploads/templates/sender_id.xlsx'
        ];
        $objFileReader = new FileReader();
        $arrData = $objFileReader->doImport($arrInputs);
        print_r($arrData);
        die();

        return $this->render('/test');
    }

    public function actionSenderId()
    {
        return $this->render('/senderid');
    }

    public function actionLogin()
    {
        return $this->render('/login');
    }

    public function actionAddUser()
    {
        return $this->render('/addUser');
    }

    public function actionListUser()
    {
        return $this->render('/listUser');
    }

    public function actionAccountSettings()
    {
        return $this->render('/accountSettings');
    }
}
