<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ticket".
 *
 * @property int $No
 * @property string $Nama
 * @property int $Telepon
 * @property string $Seat
 */
class Ticket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ticket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nama', 'Telepon', 'Seat'], 'required'],
            [['Telepon'], 'integer'],
            [['Nama'], 'string', 'max' => 100],
            [['Seat'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'No' => 'No',
            'Nama' => 'Nama',
            'Telepon' => 'Telepon',
            'Seat' => 'Seat',
        ];
    }

    /**
     * @inheritdoc
     * @return TicketQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TicketQuery(get_called_class());
    }
}
