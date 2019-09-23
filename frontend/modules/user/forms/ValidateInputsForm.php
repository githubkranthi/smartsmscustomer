<?php
namespace frontend\modules\home\forms;

use Yii;
use yii\base\Model;
use frontend\modules\home\models\User\User;
use yii\helpers\Json;
use frontend\modules\home\models\Senderid;
use frontend\modules\home\models\Contacts;
use frontend\modules\home\models\Template;

class ValidateInputsForm extends Model
{

    public $action;

    public $fullname;

    public $mobile;

    public $email;

    public $userid;

    public $mobiles;

    public $status;

    public $created_date;

    public $category_type;

    public $created_by;

    public $senderids;

    public $comments;

    public $contacts;

    public $group_name;

    public $organization;

    public $templates;

    public $template_type;

    public $query;

    public $file_content;

    public function rules()
    {
        return [
            // Required
            [
                [
                    'action',
                    'fullname',
                    'mobile',
                    'email',
                    'organization'
                ],
                'required',
                'on' => 'newuser',
                'message' => '{attribute} is required'
            ],

            [
                [
                    'action',
                    'userid',
                    'mobiles',
                    'status',
                    'category_type',
                    'created_by'
                ],
                'required',
                'on' => 'blockmobile',
                'message' => '{attribute} is required'
            ],
            [
                [
                    'action',
                    'userid',
                    'category_type',
                    'senderids',
                    'created_by'
                ],
                'required',
                'on' => 'newsenderid',
                'message' => '{attribute} is required'
            ],
            [
                [
                    'action',
                    'userid',
                    'group_name',
                    'category_type',
                    'contacts',
                    'created_by'
                ],
                'required',
                'on' => 'contacts',
                'message' => '{attribute} is required'
            ],
            [
                [
                    'action',
                    'userid',
                    'category_type',
                    'template_type',
                    'templates',
                    'created_by'
                ],
                'required',
                'on' => 'templates',
                'message' => '{attribute} is required'
            ],
            [
                [
                    'action',
                    'userid',
                    'category_type',
                    'query'
                ],
                'required',
                'on' => 'queries',
                'message' => '{attribute} is required'
            ],
            [
                [
                    'comments'
                ],
                'safe',
                'on' => 'newsenderid'
            ],
            [
                [
                    'file_content'
                ],
                'safe',
                'on' => 'queries'
            ],
            // Min and Max Validations
            [
                [
                    'mobile'
                ],
                'string',
                'min' => 10,
                'max' => 10
            ],
            [
                [
                    'email'
                ],
                'string',
                'min' => 1,
                'max' => 75
            ],
            [
                [
                    'fullname'
                ],
                'string',
                'min' => 2,
                'max' => 75
            ],
            [
                [
                    'organization'
                ],
                'string',
                'min' => 2,
                'max' => 100
            ],
            [
                [
                    'group_name'
                ],
                'string',
                'min' => 1,
                'max' => 75
            ],
            // Patterns
            // Email
            [
                'email',
                'email'
            ],
            // Mobile
            [
                [
                    'mobile'
                ],
                'match',
                'pattern' => Yii::$app->params['newuser.form.mobile']
            ],
            // Fullname
            [
                [
                    'fullname'
                ],
                'match',
                'pattern' => Yii::$app->params['newuser.form.fullname']
            ],
            // Category Type
            [
                [
                    'category_type'
                ],
                'match',
                'pattern' => Yii::$app->params['blockmobile.form.category_type']
            ],
            // Query
            [
                [
                    'query'
                ],
                'match',
                'pattern' => Yii::$app->params['queries.form.query']
            ],

            // Status
            [
                [
                    'status'
                ],
                'match',
                'pattern' => Yii::$app->params['blockmobile.form.status']
            ],
            // Organization
            [
                [
                    'organization'
                ],
                'match',
                'pattern' => Yii::$app->params['newuser.form.organization']
            ],
            // Group Name
            [
                [
                    'group_name'
                ],
                'match',
                'pattern' => Yii::$app->params['contacts.form.group_name']
            ],

            // Callback Validations

            [
                'mobile',
                'isValidPhone',
                'on' => 'newuser'
            ],
            [
                'email',
                'isValidEmail',
                'on' => 'newuser'
            ],
            [
                'mobiles',
                'validateMobiles',
                'on' => 'blockmobile'
            ],
            [
                'status',
                'validateStatus',
                'on' => 'blockmobile'
            ],
            [
                'category_type',
                'validateCategoryType',
                'on' => 'blockmobile'
            ],
            [
                'category_type',
                'validateContactsCategoryType',
                'on' => 'contacts'
            ],
            [
                'category_type',
                'validateSenderIdCategoryType',
                'on' => 'newsenderid'
            ],
            [
                'category_type',
                'validateTemplateCategoryType',
                'on' => 'templates'
            ],
            [
                'category_type',
                'validateQueryCategoryType',
                'on' => 'queries'
            ],
            [
                'template_type',
                'validateTemplateType',
                'on' => 'templates'
            ],
            [
                'senderids',
                'validateSenderIds',
                'on' => 'newsenderid'
            ],
            [
                'senderids',
                'validateOnDBSenderId',
                'on' => 'newsenderid'
            ],
            [
                'group_name',
                'validateGroupName',
                'on' => 'contacts'
            ],
            [
                'contacts',
                'validateContacts',
                'on' => 'contacts'
            ],
            [
                'templates',
                'validateTemplates',
                'on' => 'templates'
            ],
            [
                'templates',
                'validateOnDBTemplate',
                'on' => 'templates'
            ],
            [
                'file_content',
                'validateFileContent',
                'on' => 'queries'
            ]
        ];
    }

    public function scenarios()
    {
        $arrScenarios = parent::scenarios();

        $arrScenarios['newuser'] = [
            'action',
            'fullname',
            'mobile',
            'email',
            'organization'
        ];
        $arrScenarios['blockmobile'] = [
            'action',
            'userid',
            'mobiles',
            'status',
            'category_type',
            'created_by'
        ];
        $arrScenarios['newsenderid'] = [
            'action',
            'userid',
            'category_type',
            'senderids',
            'comments',
            'created_by'
        ];
        $arrScenarios['contacts'] = [
            'action',
            'userid',
            'group_name',
            'category_type',
            'contacts',
            'created_by'
        ];

        $arrScenarios['templates'] = [
            'action',
            'userid',
            'category_type',
            'template_type',
            'templates',
            'created_by'
        ];

        $arrScenarios['queries'] = [
            'action',
            'userid',
            'category_type',
            'query',
            'file_content'
        ];

        return $arrScenarios;
    }

    public function attributeLabels()
    {
        return [
            'action' => 'Action',
            'fullname' => 'Fullname',
            'mobile' => 'Mobile',
            'email' => 'Email'
        ];
    }

    public function isValidPhone($attribute, $params)
    {
        $arrUser = User::list([
            'mobile' => $this->mobile
        ]);
        if (! empty($arrUser)) {
            $this->addError('mobile', 'Mobile is already exists');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function isValidEmail($attribute, $params)
    {
        $arrUser = User::list([
            'email' => $this->email
        ]);
        if (! empty($arrUser)) {
            $this->addError('email', 'Email is already exists');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function validateMobiles($attribute, $params)
    {
        $arrInvalid = [];
        $arrMobiles = explode(',', $this->mobiles);
        $strMobileRegExp = Yii::$app->params['blockmobile.form.validate_mobile'];
        foreach ($arrMobiles as $intKey => $strMobile) {
            (1 !== preg_match($strMobileRegExp, $strMobile)) ? ($arrInvalid[] = $strMobile) : '';
        }
        unset($arrMobiles, $strMobileRegExp);
        if (! empty($arrInvalid)) {
            $this->addError('mobiles', 'Invalid mobiles - ' . Json::encode($arrInvalid));
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function validateStatus($attribute, $params)
    {
        $arrStatus = Yii::$app->params['block_mobile_status'];
        if (! in_array($this->status, $arrStatus)) {
            $this->addError('status', 'Invalid status');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function validateCategoryType($attribute, $params)
    {
        $arrCategoryType = Yii::$app->params['block_mobile_category_type'];
        if (! in_array($this->category_type, $arrCategoryType)) {
            $this->addError('category_type', 'Invalid category');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function validateSenderIdCategoryType($attribute, $params)
    {
        $arrCategoryType = Yii::$app->params['senderid_category_type'];
        if (! in_array($this->category_type, $arrCategoryType)) {
            $this->addError('category_type', 'Invalid category');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function validateContactsCategoryType($attribute, $params)
    {
        $arrCategoryType = Yii::$app->params['contacts_category_type'];
        if (! in_array($this->category_type, $arrCategoryType)) {
            $this->addError('category_type', 'Invalid category');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function validateTemplateCategoryType($attribute, $params)
    {
        $arrCategoryType = Yii::$app->params['template_category_type'];
        if (! in_array($this->category_type, $arrCategoryType)) {
            $this->addError('category_type', 'Invalid category');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function validateQueryCategoryType($attribute, $params)
    {
        $arrCategoryType = Yii::$app->params['query_category_type'];
        if (! in_array($this->category_type, $arrCategoryType)) {
            $this->addError('category_type', 'Invalid category');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function validateTemplateType($attribute, $params)
    {
        $arrTemplateType = Yii::$app->params['template_type'];
        if (! in_array($this->template_type, $arrTemplateType)) {
            $this->addError('template_type', 'Invalid template');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function addOns()
    {
        $arrAddOns = [];
        switch ($this->scenario) {
            case "newuser":
                $strPassword = Yii::$app->getSecurity()->generateRandomString(6);
                $arrAddOns = [
                    'password' => Yii::$app->getSecurity()->generatePasswordHash($strPassword),
                    'status' => 'active',
                    'created_date' => date('Y-m-d H:i:s'),
                    'message' => 'User Created Successfully'
                ];
                unset($strPassword);
                break;
            case "blockmobile":
                $arrAddOns = [
                    'created_date' => date('Y-m-d H:i:s'),
                    'message' => ('block' == $this->status) ? 'Successfully Blocked' : 'Successfully Unblocked'
                ];
                break;
            case "newsenderid":
                $arrAddOns = [
                    'status' => 'notapproved',
                    'created_date' => date('Y-m-d H:i:s'),
                    'message' => 'Senderids are successfully submitted for approval'
                ];
                break;
            case "contacts":
                $arrAddOns = [
                    'status' => 'active',
                    'created_date' => date('Y-m-d H:i:s'),
                    'message' => 'Contacts are saved successfully'
                ];
                break;
            case "templates":
                $arrAddOns = [
                    'status' => 'notapproved',
                    'created_date' => date('Y-m-d H:i:s'),
                    'message' => 'Template saved successfully'
                ];
                break;
            case "queries":
                $arrAddOns = [
                    'status' => 'active',
                    'created_date' => date('Y-m-d H:i:s'),
                    'message' => 'Query submitted successfully'
                ];
                break;
        }
        return $arrAddOns;
    }

    public function validateSenderIds($attribute, $params)
    {
        $arrInvalid = [];
        $arrSenderIds = explode(',', $this->senderids);
        $strSenderIdRegExp = Yii::$app->params['newsenderid.form.validate_senderid'];
        foreach ($arrSenderIds as $intKey => $strSenderId) {
            (0 === preg_match($strSenderIdRegExp, $strSenderId)) ? ($arrInvalid[] = $strSenderId) : '';
        }
        unset($arrSenderIds, $strSenderIdRegExp);
        if (count($arrInvalid) > 0) {
            $this->addError('senderids', 'Invalid senderids - ' . Json::encode($arrInvalid));
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function validateOnDBSenderId($attribute, $params)
    {
        $arrInvalid = [];
        $arrSenderIds = explode(',', $this->senderids);
        foreach ($arrSenderIds as $intKey => $strSenderId) {
            $arrSenderId = Senderid::list([
                'user_id' => $this->userid,
                'category_type' => $this->category_type,
                'senderid' => $strSenderId
            ]);
            (count($arrSenderId) > 0) ? ($arrInvalid[] = $strSenderId) : '';
        }
        unset($arrSenderIds);
        if (count($arrInvalid) > 0) {
            $this->addError('senderids', 'Senderids are already existed for the user - ' . Json::encode($arrInvalid));
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function validateOnDBTemplate($attribute, $params)
    {
        $arrInvalid = [];
        $arrTemplates = Json::decode($this->templates);
        foreach ($arrTemplates as $arrTemplate) {
            $arrTemplateInfo = Template::list([
                'user_id' => $this->userid,
                'category_type' => $this->category_type,
                'template_type' => $this->template_type,
                'name' => $arrTemplate['name']
            ]);
            (count($arrTemplateInfo) > 0) ? ($arrInvalid[] = $arrTemplate) : '';
        }
        unset($arrTemplates);
        if (count($arrInvalid) > 0) {
            $this->addError('templates', 'Templates are already existed for the user - ' . Json::encode($arrInvalid));
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function validateGroupName($attribute, $params)
    {
        $arrContact = Contacts::list([
            'group_name' => $this->group_name,
            'user_id' => $this->userid
        ]);
        if (! empty($arrContact)) {
            $this->addError('group_name', 'Group name is already exists');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function validateContacts($attribute, $params)
    {
        $arrContacts = $this->contacts;
        $arrContacts = Json::decode($arrContacts);
        if (! empty($arrContacts)) {
            $arrUnique = [];
            foreach ($arrContacts as $arrContact) {
                $arrUnique[$arrContact['contact_item']] = [
                    'fullname' => $arrContact['fullname'],
                    'contact_item' => $arrContact['contact_item']
                ];
            }
            $arrUnique = array_values($arrUnique);
            $this->contacts = Json::encode($arrUnique);
            unset($arrContacts);
        }
        return TRUE;
    }

    public function validateTemplates($attribute, $params)
    {
        $arrTemplates = $this->templates;
        $arrTemplates = Json::decode($arrTemplates);
        if (! empty($arrTemplates)) {
            $arrUnique = [];
            foreach ($arrTemplates as $arrTemplate) {
                $arrUnique[$arrTemplate['name']] = [
                    'name' => $arrTemplate['name'],
                    'template' => $arrTemplate['template']
                ];
            }
            $arrUnique = array_values($arrUnique);
            $this->templates = Json::encode($arrUnique);
            unset($arrTemplates);
        }
        return TRUE;
    }

    public function validateFileContent($attribute, $params)
    {
        if (! empty($this->file_content)) {}
        return TRUE;
    }
}

?>