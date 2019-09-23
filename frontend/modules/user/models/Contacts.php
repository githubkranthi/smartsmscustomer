<?php
namespace frontend\modules\home\models;

use yii\db\ActiveRecord;
use Yii;
use yii\db\Query;

class Contacts extends ActiveRecord
{

    public static function tableName()
    {
        return 'contacts';
    }

    public static function getDb()
    {
        return Yii::$app->db;
    }

    public static function add($arrInputs)
    {
        $intInsert = Yii::$app->db->createCommand()
            ->batchInsert('contacts', [
            'user_id',
            'group_name',
            'category_type',
            'fullname',
            'contact_item',
            'status',
            'created_date',
            'created_by'
        ], $arrInputs)
            ->execute();
        unset($arrInputs);
        return $intInsert;
    }

    public static function list($arrInputs = [])
    {
        $objQuery = new Query();
        $objQuery->select([
            'c.id',
            'c.user_id',
            'c.group_name',
            'c.category_type',
            'c.fullname',
            'c.contact_item',
            'c.status'
        ]);
        $objQuery->from('contacts as c');

        // Status
        if (isset($arrInputs['status']) && ! empty($arrInputs['status'])) {
            $objQuery->andWhere('c.status=:status', [
                ':status' => $arrInputs['status']
            ]);
        }

        // Category Type
        if (isset($arrInputs['category_type']) && ! empty($arrInputs['category_type'])) {
            $objQuery->andWhere('c.category_type=:category_type', [
                ':category_type' => $arrInputs['category_type']
            ]);
        }
        // User Id
        if (isset($arrInputs['user_id']) && ! empty($arrInputs['user_id'])) {
            $objQuery->andWhere('c.user_id=:user_id', [
                ':user_id' => $arrInputs['user_id']
            ]);
        }

        // Id
        if (isset($arrInputs['id']) && ! empty($arrInputs['id'])) {
            $objQuery->andWhere('c.id=:id', [
                ':id' => $arrInputs['id']
            ]);
        }

        // Group Name
        if (isset($arrInputs['group_name']) && ! empty($arrInputs['group_name'])) {
            $objQuery->andWhere('c.group_name=:group_name', [
                ':group_name' => $arrInputs['group_name']
            ]);
        }
        $arrContacts = $objQuery->all();
        unset($arrInputs);
        return $arrContacts;
    }
}