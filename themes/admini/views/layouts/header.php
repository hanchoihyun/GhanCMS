<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title></title>
<?php
Yii::app()->clientScript->registerCssFile( Yii::app()->theme->baseUrl.'/static/css/reset.css' );
Yii::app()->clientScript->registerCssFile( Yii::app()->theme->baseUrl.'/static/css/common.css' );
?>

<?php
Yii::app()->clientScript->registerScriptFile( Yii::app()->baseUrl.'/static/js/jquery-1.11.1.min.js' , CClientScript::POS_END );
Yii::app()->clientScript->registerScriptFile( Yii::app()->baseUrl.'/static/js/jquery-migrate-1.2.1.min.js' , CClientScript::POS_END );
Yii::app()->clientScript->registerScriptFile( Yii::app()->theme->baseUrl.'/static/js/menubar.js' , CClientScript::POS_END );
?>
</head>
<body>
    <div id="Warp">
        <div id="header">
            <div id="logo">ADMINISTRATOR</div>
        </div>
        <div id="Container">
            <div class="Lefter">
                <dl class="menubar">
                    <?php foreach( $this->menubar as $array ){ ?>
                    <dd>
                        <a href="javascript:void(0);" class="<?php echo isset($array['active']) ? 'active' : '' ?>">
                            <?php echo $array['subject'] ?>
                        </a>
                        <?php if( isset($array['submenu']) ){ ?>
                        <ul>
                            <?php foreach( $array['submenu'] as $item ){ ?>
                                <li><a href="<?php echo $item['url'] ?>"><?php echo $item['title'] ?></a></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </dd>
                    <?php } ?>
                </dl>
            </div>
