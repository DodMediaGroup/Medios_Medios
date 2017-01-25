<?php

/**
 * This is the model class for table "medios".
 *
 * The followings are the available columns in table 'medios':
 * @property integer $id
 * @property string $nombre
 * @property double $ubicacion_latitud
 * @property double $ubicacion_longitud
 * @property string $tarifas
 * @property string $tipo
 * @property string $conceptos
 * @property string $condiciones
 * @property integer $producto
 * @property integer $zona
 * @property string $imagen
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Productos $producto0
 * @property Zonas $zona0
 */
class Medios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'medios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, producto, zona, imagen', 'required'),
			array('producto, zona, estado', 'numerical', 'integerOnly'=>true),
			array('ubicacion_latitud, ubicacion_longitud', 'numerical'),
			array('nombre', 'length', 'max'=>155),
			array('imagen', 'length', 'max'=>255),
			array('tarifas, tipo, conceptos, condiciones', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, ubicacion_latitud, ubicacion_longitud, tarifas, tipo, conceptos, condiciones, producto, zona, imagen, estado', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'producto0' => array(self::BELONGS_TO, 'Productos', 'producto'),
			'zona0' => array(self::BELONGS_TO, 'Zonas', 'zona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'ubicacion_latitud' => 'Ubicacion Latitud',
			'ubicacion_longitud' => 'Ubicacion Longitud',
			'tarifas' => 'Tarifas',
			'tipo' => 'Tipo',
			'conceptos' => 'Conceptos',
			'condiciones' => 'Condiciones',
			'producto' => 'Producto',
			'zona' => 'Zona',
			'imagen' => 'Imagen',
			'estado' => 'Estado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('ubicacion_latitud',$this->ubicacion_latitud);
		$criteria->compare('ubicacion_longitud',$this->ubicacion_longitud);
		$criteria->compare('tarifas',$this->tarifas,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('conceptos',$this->conceptos,true);
		$criteria->compare('condiciones',$this->condiciones,true);
		$criteria->compare('producto',$this->producto);
		$criteria->compare('zona',$this->zona);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Medios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
