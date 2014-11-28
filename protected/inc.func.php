<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * URL 路由
 * URL 라우터
 * @param type $str
 * @param type $requestURI
 * @example ModuleID/ControllerID/ActionID , array('id'=>1)
 * @example ControllerID/ActionID , array('id'=>1)
 */
function createUrl( $str , $requestURI = array() ){
    return Yii::app()->createUrl( $str , $requestURI );
}


/**
 * 跳转
 * 페이지 이동
 * @param type $url
 * @example redirect( createUrl( 'xxx/bbb/ccc' ) );
 * @example redirect( createUrl( 'xxx/bbb/ccc' , array('n1'=>1,'n2'=>2,'nn'=>'n') ) );
 */
function redirect( $url ){
    Yii::app()->request->redirect( $url );
}

