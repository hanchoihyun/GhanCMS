<?php

class SiteController extends AdminiConfigController
{	
	
    public function actionIndex()
    {
        
        imageResize( $this->getModule_id() , '1129' , 'aaa.jpg');
        $this->render('index');
    }
}