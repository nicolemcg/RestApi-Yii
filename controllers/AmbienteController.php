<?php

namespace app\controllers;

use app\models\Ambiente;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\Request;

class AmbienteController extends Controller
{   
    public $modelClass= 'app\models\Ambiente';
    public $enableCsrfValidation = false;


    //devuelve un ambiente dado su id
    public function actionView($id) 
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        $ambiente = Ambiente::findOne(['id' => $id]);
            $array = $ambiente ->attributes;
            return [
                'data' => $array
            ];
        
    }

    //devuelve todos los ambientes
    public function actionGetAll() 
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        
        $ambiente = Ambiente::find()->all();
            return [
                'data' => $ambiente
            ];
        
    }

    //crea un ambiente 
    public function actionCreate()
    {
        $request = \Yii::$app->request;

        $ambiente = new Ambiente();

        $ambiente->id = $request->post('id');
        $ambiente->nombre = $request->post('nombre');
        $ambiente->latitud = $request->post('latitud');
        $ambiente->longitud = $request->post('longitud');
        $ambiente->descripcion = $request->post('descripcion');

        $ambiente -> save();
    }

    //actualiza datos de un ambiente dado su id
    public function actionUpdate($id)
    {
        $ambiente = Ambiente::findOne(['id' => $id]);

        $request = \Yii::$app->request;
        $ambiente->id = $request->post('id');
        $ambiente->nombre = $request->post('nombre');
        $ambiente->latitud = $request->post('latitud');
        $ambiente->longitud = $request->post('longitud');
        $ambiente->descripcion = $request->post('descripcion');
        $ambiente -> save();
    }

    //elimina un ambiente dado su id
    public function actionDelete($id)
    {
        $ambiente = Ambiente::findOne(['id' => $id])->delete();
    }

    
}