<?php
namespace frontend\modules\home\models;

use yii\db\ActiveRecord;
use Yii;
use yii\db\Query;

class Senderid extends ActiveRecord
{

    public static function tableName()
    {
        return 'senderids';
    }

    public static function getDb()
    {
        return Yii::$app->db;
    }

    public static function add($arrInputs)
    {
        $intInsert = Yii::$app->db->createCommand()
            ->batchInsert('senderids', [
            'user_id',
            'category_type',
            'senderid',
            'status',
            'comments',
            'created_by',
            'created_date'
        ], $arrInputs)
            ->execute();
        unset($arrInputs);
        return $intInsert;
    }

    public static function list($arrInputs = [])
    {
        $objQuery = new Query();
        $objQuery->select([
            's.user_id',
            's.category_type',
            's.senderid',
            's.status',
            's.comments',
            's.approved_date',
            's.approved_by'
        ]);
        $objQuery->from('senderids as s');

        // Status
        if (isset($arrInputs['status']) && ! empty($arrInputs['status'])) {
            $objQuery->andWhere('s.status=:status', [
                ':status' => $arrInputs['status']
            ]);
        }

        // Category Type
        if (isset($arrInputs['category_type']) && ! empty($arrInputs['category_type'])) {
            $objQuery->andWhere('s.category_type=:category_type', [
                ':category_type' => $arrInputs['category_type']
            ]);
        }
        // User Id
        if (isset($arrInputs['user_id']) && ! empty($arrInputs['user_id'])) {
            $objQuery->andWhere('s.user_id=:user_id', [
                ':user_id' => $arrInputs['user_id']
            ]);
        }

        // Sender Id
        if (isset($arrInputs['senderid']) && ! empty($arrInputs['senderid'])) {
            $objQuery->andWhere('s.senderid=:senderid', [
                ':senderid' => $arrInputs['senderid']
            ]);
        }
        $arrBlockList = $objQuery->all();
        unset($arrInputs);
        return $arrBlockList;
    }
}