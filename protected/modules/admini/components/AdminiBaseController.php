<?php


class AdminiBaseController extends Controller{
    /**
     * 관리자 메뉴 설정
     * 后台 菜单 设置
     * @var type array
     */
    public $menubar = array();
    
    public $module_id ;
    
    public function setMenu(){
        
        $ControllerID = $this->getId();

        $this->menubar = array(
            'site'=>array(
                'subject' => '사이트 관리',
                'submenu' => array(
                    array(),
                    array(),
                    array(),
                    array(),
                )
            ),
            'menu'=>array(
                'subject' => '메뉴 관리',
                'submenu' => array(
                    array(),
                    array(),
                    array(),
                    array(),
                )
            ),
            'member'=>array(
                'subject' => '회원관리',
                'submenu' => array(
                    array('title'=>'회원목록','url'=>  createUrl('admini/member/index')),
                    array('title'=>'포인트설정','url'=>createUrl('admini/member/point')),
                    array('title'=>'메일설정','url'=>createUrl('admini/member/mail')),
                    array('title'=>'가입설정','url'=>createUrl('admini/member/form')),
                    array('title'=>'접속통계','url'=>createUrl('admini/member/poll')),
                    array('title'=>'블랙목록','url'=>createUrl('admini/member/blacklist')),
                    array('title'=>'탈퇴목록','url'=>createUrl('admini/member/outlist')),
                )
            ),
            'bbs'=>array(
                'subject' => '게시판 관리',
                'submenu' => array(
                    array(),
                    array(),
                    array(),
                    array(),
                )
            ),
            'gallery'=>array(
                'subject' => '갤러리 관리',
                'submenu' => array(
                    array(),
                    array(),
                    array(),
                    array(),
                )
            ),
            'video'=>array(
                'subject' => '동영상 관리',
                'submenu' => array(
                    array(),
                    array(),
                    array(),
                    array(),
                )
            ),
            'music'=>array(
                'subject' => '뮤직 관리',
                'submenu' => array(
                    array(),
                    array(),
                    array(),
                    array(),
                )
            ),
        );
        
        $this->menubar[$ControllerID]['active'] = true;
    }
    
    
    public function setModule_id(){
        $this->module_id = $this->getModule()->id;
    }
    
    public function getModule_id(){
        return $this->module_id;
    }
    
    function beforeAction($action) {
        parent::beforeAction($action);
        $this->setMenu();
        $this->setModule_id();
        return true;
    }
    
    


}