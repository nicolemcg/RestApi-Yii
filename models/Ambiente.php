<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ambiente".
 *
 * @property int $id
 * @property string|null $nombre
 * @property int|null $latitud
 * @property int|null $longitud
 * @property string|null $descripcion
 */
class Ambiente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ambiente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'latitud', 'longitud'], 'integer'],
            [['nombre', 'descripcion'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'descripcion' => 'Descripcion',
        ];
    }
}
