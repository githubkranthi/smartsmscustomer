<?php
namespace frontend\modules\home\models;

use yii\db\ActiveRecord;
use Yii;
use yii\db\Query;

class Queries extends ActiveRecord
{

    public static function tableName()
    {
        return 'user_queries';
    }

    public static function getDb()
    {
        return Yii::$app->db;
    }

    public static function add($arrInputs)
    {
        $intInsert = Yii::$app->db->createCommand()
            ->batchInsert('user_queries', [
            'user_id',
            'category_type',
            'query',
            'file_name',
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
            'uq.user_id',
            'uq.category_type',
            'uq.query',
            'uq.file_name',
            'uq.status',
            'uq.created_date'
        ]);
        $objQuery->from('user_queries as uq');

        // Status
        if (isset($arrInputs['status']) && ! empty($arrInputs['status'])) {
            $objQuery->andWhere('uq.status=:status', [
                ':status' => $arrInputs['status']
            ]);
        }

        // Category Type
        if (isset($arrInputs['category_type']) && ! empty($arrInputs['category_type'])) {
            $objQuery->andWhere('uq.category_type=:category_type', [
                ':category_type' => $arrInputs['category_type']
            ]);
        }

        // Id
        if (isset($arrInputs['id']) && ! empty($arrInputs['id'])) {
            $objQuery->andWhere('uq.id=:id', [
                ':id' => $arrInputs['id']
            ]);
        }

        // User Id
        if (isset($arrInputs['user_id']) && ! empty($arrInputs['user_id'])) {
            $objQuery->andWhere('uq.user_id=:user_id', [
                ':user_id' => $arrInputs['user_id']
            ]);
        }

        $arrQueries = $objQuery->all();
        unset($arrInputs);
        return $arrQueries;
    }
}