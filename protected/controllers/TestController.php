<?php


class TestController extends Controller{

	public $layout = '';
	public function actionIndex(){

		$data = '';
		if( Yii::app()->request->getPost('content') ){
			$data = base64_encode( addslashes(Yii::app()->request->getPost('content') ) );
		}

		$this->render('test',array(
			'data' => $data
		));

	}

}