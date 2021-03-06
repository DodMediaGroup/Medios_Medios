<?php

class ProductoController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='//layouts/main';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('view'),
                'users'=>array('*'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $id = explode('_', $id);
        $id = $id[0];

        $producto = $this->loadModel($id);
        $zonas = Zonas::model()->findAllByAttributes(array('estado'=>1));

        $zona = null;
        $zonaSelect = '0';
        $medios = array();
        if(isset($_POST['zona'])){
            $zona = Zonas::model()->findByAttributes(array('id'=>$_POST['zona'], 'estado'=>1));
            if($zona != null){
                $zonaSelect = $_POST['zona'];

                $zonaMedios = Medios::model()->findAllByAttributes(array('producto'=>$producto->id, 'zona'=>$zona->id, 'estado'=>1));
                $tempMedios = array(
                    'zona'=>$zona,
                    'medios'=>$zonaMedios
                );
                $medios[] = $tempMedios;
            }
        }

        if($zona == null){
            $tempZonas = Zonas::model()->findAllByAttributes(array('estado'=>1));
            foreach ($tempZonas as $key => $itemZona) {
                $zonaMedios = Medios::model()->findAllByAttributes(array('producto'=>$producto->id, 'zona'=>$itemZona->id, 'estado'=>1));
                $medios[] = array(
                    'zona'=>$itemZona,
                    'medios'=>$zonaMedios
                );
            }
        }
        
        $this->render('view',array(
            'producto'=>$producto,
            'zonas'=>$zonas,
            'zonaSelect'=>$zonaSelect,
            'medios'=>$medios,
            'zonaMap'=>$zona
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Proyectos the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Productos::model()->findByAttributes(array('id'=>$id, 'estado'=>1));
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Proyectos $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='productos-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}