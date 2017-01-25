<?php

class ServiciosController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='/layouts/main';

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
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array(
                    'admin',
                    'create',
                    'view',
                    'update',
                    'estado',
                    'delete_servicio'
                ),
                'users'=>array('@'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $scriptsAdd = array(
            array(
                'type'=>'css',
                'file'=>'assets/admin/libs/jquery-datatables/css/dataTables.bootstrap'
            ),
            array(
                'type'=>'css',
                'file'=>'assets/admin/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/jquery-datatables/js/jquery.dataTables.min'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/jquery-datatables/js/dataTables.bootstrap'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min'
            )
        );
        $this->addScripts($scriptsAdd);
        $this->writeScripts();

        $servicios = Servicios::model()->findAll(array('condition'=>'t.estado != 2', 'order'=>'t.id_servicios DESC'));

        $this->render('admin',array(
            'servicios'=>$servicios,
        ));
    }


    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->writeScripts();

        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }
    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
         $scriptsAdd = array(
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/ckeditor/ckeditor'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/ckeditor/adapters/jquery'
            )
        );
        $this->addScripts($scriptsAdd, 'admin');
        $this->writeScripts();

        $model = new Servicios;

        if(isset($_POST['Servicios']))
        {
            $errors = false;

            $model->attributes=$_POST['Servicios'];
           
            $model->clearErrors();
            $model->imagen = "default.jpg";

            if($model->validate(null, false)){
                if(($_FILES['logo']['size'] > 0)){
                    $server = $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl.'/images/';
                    
                    $uploadLogo = MyMethods::uploadImage($_FILES['logo'], 250, 'servicios/');

                    if(!$uploadLogo['status']){
                        $model->addError('imagen', $uploadLogo['message']);
                        $errors = true;
                    }
                    else{
                        $model->imagen = $uploadLogo['imageName'];

                        MyMethods::resizeImage($server.'servicios/', $model->imagen, 250, 250);
                    }
                }
                else{
                    $model->addError('imagen', 'Debe agregar una imagen para la entrada.');
                    $errors = true;
                }

                if(!$errors && $model->save()){
                    $this->redirect(array('view','id'=>$model->id_servicios));
                }
            }
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }



    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
         $scriptsAdd = array(
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/ckeditor/ckeditor'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/ckeditor/adapters/jquery'
            )
        );
        $this->addScripts($scriptsAdd, 'admin');
        $this->writeScripts();

        $model = $this->loadModel($id);

        if(isset($_POST['Servicios']))
        {
            $errors = false;

            $model->attributes=$_POST['Servicios'];
           
            $model->clearErrors();

            if($model->validate(null, false)){
                if(($_FILES['logo']['size'] > 0)){
                    $server = $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl.'/images/';
                    
                    $uploadLogo = MyMethods::uploadImage($_FILES['logo'], 250, 'servicios/');

                    if(!$uploadLogo['status']){
                        $model->addError('imagen', $uploadLogo['message']);
                        $errors = true;
                    }
                    else{
                        $model->imagen = $uploadLogo['imageName'];

                        MyMethods::resizeImage($server.'servicios/', $model->imagen, 250, 250);
                    }
                }

                if(!$errors && $model->save()){
                    $this->redirect(array('view','id'=>$model->id_servicios));
                }
            }
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    public function actionEstado($id){
        $entry = $this->loadModel($id);
        if($entry->estado == 1)
            $entry->estado = 0;
        else if($entry->estado == 0)
            $entry->estado = 1;
        else
            throw new CHttpException(404,'The requested page does not exist.');

        $entry->save();
        $this->redirect(array('admin'));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete_servicio($id)
    {
        $entry = $this->loadModel($id);

        $entry->estado = 2;
        if($entry->save()){
            @unlink($_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/servicios/".$entry->imagen);
            @unlink($_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/servicios/250x250/".$entry->imagen);
        }

        $this->redirect(array('admin'));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return News the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Servicios::model()->findByAttributes(array('id_servicios'=>$id), array('condition'=>'t.estado != 2'));
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param News $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='servicios-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}