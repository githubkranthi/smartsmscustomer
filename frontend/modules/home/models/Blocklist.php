<?php
namespace frontend\modules\home\models;

use yii\db\ActiveRecord;
use Yii;
use yii\db\Query;

class Blocklist extends ActiveRecord
{

    public static function tableName()
    {
        return 'blocklist';
    }

    public static function getDb()
    {
        return Yii::$app->db;
    }

    public static function add($arrInputs)
    {
        $intInsert = Yii::$app->db->createCommand()
            ->batchInsert('blocklist', [
            'user_id',
            'category_type',
            'blocked_item',
            'status',
            'created_date',
            'created_by'
        ], $arrInputs)
            ->execute();
        unset($arrInputs);
        return $intInsert;
    }

    public static function list($arrInputs = array())
    {
        $objQuery = new Query();
        $objQuery->select([
            'b.user_id',
            'b.category_type',
            'b.blocked_item',
            'b.status',
            'b.created_date'
        ]);
        $objQuery->from('blocklist as b');

        // Status
        if (isset($arrInputs['status']) && ! empty($arrInputs['status'])) {
            $objQuery->andWhere('b.status=:status', [
                ':status' => $arrInputs['status']
            ]);
        }

        // Category Type
        if (isset($arrInputs['category_type']) && ! empty($arrInputs['category_type'])) {
            $objQuery->andWhere('b.category_type=:category_type', [
                ':category_type' => $arrInputs['category_type']
            ]);
        }
        // User Id
        if (isset($arrInputs['user_id']) && ! empty($arrInputs['user_id'])) {
            $objQuery->andWhere('b.user_id=:user_id', [
                ':user_id' => $arrInputs['user_id']
            ]);
        }
        $arrBlockList = $objQuery->all();
        unset($arrInputs);
        return $arrBlockList;
    }
}