<?php
namespace frontend\modules\home\models\User;

use yii\db\ActiveRecord;
use Yii;
use yii\db\Query;

class User extends ActiveRecord
{

    public static function tableName()
    {
        return 'users';
    }

    public static function getDb()
    {
        return Yii::$app->db;
    }

    public static function add($arrInputs)
    {
        $intInsert = Yii::$app->db->createCommand()
            ->batchInsert('users', [
            'fullname',
            'mobile',
            'email',
            'password',
            'organization',
            'status',
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
            'u.fullname',
            'u.mobile',
            'u.email',
            'u.password',
            'u.status',
            'u.created_date'
        ]);
        $objQuery->from('users as u');

        // Mobile
        if (isset($arrInputs['mobile']) && ! empty($arrInputs['mobile'])) {
            $objQuery->andWhere('u.mobile=:mobile', [
                ':mobile' => $arrInputs['mobile']
            ]);
        }

        // Password
        if (isset($arrInputs['password']) && ! empty($arrInputs['password'])) {
            $objQuery->andWhere('u.password=:password', [
                ':password' => $arrInputs['password']
            ]);
        }
        // Email
        if (isset($arrInputs['email']) && ! empty($arrInputs['email'])) {
            $objQuery->andWhere('u.email=:email', [
                ':email' => $arrInputs['email']
            ]);
        }
        // Status
        if (isset($arrInputs['status']) && ! empty($arrInputs['status'])) {
            $objQuery->andWhere('u.status=:status', [
                ':status' => $arrInputs['status']
            ]);
        }
        // Created Date
        if (isset($arrInputs['created_date']) && ! empty($arrInputs['created_date'])) {
            $objQuery->andWhere('u.created_date=:created_date', [
                ':created_date' => $arrInputs['created_date']
            ]);
        }
        $arrUsers = $objQuery->all();
        unset($arrInputs);
        return $arrUsers;
    }
}