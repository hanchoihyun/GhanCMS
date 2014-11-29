<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Yii APP对象
 * @return type
 */
function app(){
    return Yii::app();
}


function baseUrl(){
    return app()->baseUrl;
}


function theme_baseUrl(){
    return app()->theme->baseUrl;
}


/**
 * URL 路由
 * URL 라우터
 * @param type $str
 * @param type $requestURI
 * @example ModuleID/ControllerID/ActionID , array('id'=>1)
 * @example ControllerID/ActionID , array('id'=>1)
 */
function createUrl( $str , $requestURI = array() ){
    return app()->createUrl( $str , $requestURI );
}


/**
 * 跳转
 * 페이지 이동
 * @param type $url
 * @example redirect( createUrl( 'xxx/bbb/ccc' ) );
 * @example redirect( createUrl( 'xxx/bbb/ccc' , array('n1'=>1,'n2'=>2,'nn'=>'n') ) );
 */
function redirect( $url ){
    app()->request->redirect( $url );
}


/**
 * 缩略图函数
 * 썸네일 함수
 * @param type $module_id 모듈ID 模块ID
 * @param type $dirname 폴더명  文件夹名称
 * @param type $filename 파일명 文件名称
 * @param type $width 가로폭    宽度
 * @param type $height 세로폭   高度
 * @param type $option 옵션
 * @return string
 */
function imageResize( $module_id , $dirname , $filename , $width = 300 , $height = 200 , $option = -1 ){
    
    $source_path = $_SERVER['DOCUMENT_ROOT'].'/data/file/'.$module_id.'/'.$dirname.'/';
    
    $target_path = $_SERVER['DOCUMENT_ROOT'].'/data/file/'.$module_id.'/thumb/';
    
    $return_path = '/data/file/'.$module_id.'/thumb/'.$filename;
    
    if( ! is_dir($source_path) ){
        mkdir($source_path,0777,true);
    }
    
    if( ! is_dir($target_path) ){
        mkdir($target_path,0777,true);
    }
    
    $source_file = $source_path.$filename;
    $target_file = $target_path.$filename;
    
    
    $thumb = Yii::app()->thumb;
    $thumb->source_path = $source_file;
    $thumb->target_path = $target_file;
    if( ! $thumb->resize( $width , $height , $thumb::ZEBRA_IMAGE_BOXED, $option ) ){
        return '';
    }
    return $return_path;
}



/**
 * 加载SCRIPT
 * @param type $path
 * @return type
 */
function registerScript( $path , $option = CClientScript::POS_HEAD ){
    return app()->clientScript->registerScriptFile( $path , $option );
}

/**
 * 加载CSS
 * @param type $path
 * @return type
 */
function registerCss( $path ){
    return app()->clientScript->registerCssFile( $path );
}