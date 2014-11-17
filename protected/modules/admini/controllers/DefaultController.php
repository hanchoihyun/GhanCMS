<?php

class DefaultController extends AdminiConfigController
{	
	public $layout = '//layouts/main1';
	public function actionIndex()
	{
		//echo $this->layout;
		//echo Yii::app()->theme;
		//echo Yii::app()->theme->baseUrl;
		$this->render('index');
	}
}