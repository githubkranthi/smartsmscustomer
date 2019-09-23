<?php
namespace frontend\modules\home\models;

use yii\db\ActiveRecord;
use Yii;
use yii\db\Query;

class Template extends ActiveRecord
{

    public static function tableName()
    {
        return 'templates';
    }

    public static function getDb()
    {
        return Yii::$app->db;
    }

    public static function add($arrInputs)
    {
        $intInsert = Yii::$app->db->createCommand()
            ->batchInsert('templates', [
            'user_id',
            'category_type',
            'template_type',
            'name',
            'template',
            'status',
            'created_by',
            'created_date'
        ], $arrInputs)
            ->execute();
        unset($arrInputs);
        return $intInsert;
    }

    public static function list($arrInputs = array())
    {
        $objQuery = new Query();
        $objQuery->select([
            't.user_id',
            't.category_type',
            't.template_type',
            't.name as template_name',
            't.template',
            't.status'
        ]);
        $objQuery->from('templates as t');

        // Status
        if (isset($arrInputs['status']) && ! empty($arrInputs['status'])) {
            $objQuery->andWhere('t.status=:status', [
                ':status' => $arrInputs['status']
            ]);
        }

        // Category Type
        if (isset($arrInputs['category_type']) && ! empty($arrInputs['category_type'])) {
            $objQuery->andWhere('t.category_type=:category_type', [
                ':category_type' => $arrInputs['category_type']
            ]);
        }

        // Template Type
        if (isset($arrInputs['template_type']) && ! empty($arrInputs['template_type'])) {
            $objQuery->andWhere('t.template_type=:template_type', [
                ':template_type' => $arrInputs['template_type']
            ]);
        }

        // User Id
        if (isset($arrInputs['user_id']) && ! empty($arrInputs['user_id'])) {
            $objQuery->andWhere('t.user_id=:user_id', [
                ':user_id' => $arrInputs['user_id']
            ]);
        }

        // Name
        if (isset($arrInputs['name']) && ! empty($arrInputs['name'])) {
            $objQuery->andWhere('t.name=:name', [
                ':name' => $arrInputs['name']
            ]);
        }

        $arrTemplates = $objQuery->all();
        unset($arrInputs);
        return $arrTemplates;
    }
}