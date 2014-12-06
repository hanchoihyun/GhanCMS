<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Matrix Admin</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <?php //base URL css
        
       ?>
        
        <?php // theme base URL css
        registerCss(theme_baseUrl() . '/static/css/bootstrap.min.css');
        registerCss(theme_baseUrl() . '/static/css/bootstrap-responsive.min.css');
        registerCss(theme_baseUrl() . '/static/css/fullcalendar.css');
        registerCss(theme_baseUrl() . '/static/css/matrix-style.css');
        registerCss(theme_baseUrl() . '/static/css/matrix-media.css');
        registerCss(theme_baseUrl() . '/static/font-awesome/css/font-awesome.css');
        registerCss(theme_baseUrl() . '/static/css/jquery.gritter.css');
        ?>
        <?php //base URL JS
        registerScript( baseUrl().'/static/js/jquery-1.11.1.min.js' , CClientScript::POS_END );
        registerScript( baseUrl().'/static/js/jquery-migrate-1.2.1.min.js', CClientScript::POS_END );
       ?>
        
        <?php //theme base URL js
       registerScript(theme_baseUrl().'/static/js/jquery.ui.custom.js' , CClientScript::POS_END );
       registerScript(theme_baseUrl().'/static/js/bootstrap.min.js' , CClientScript::POS_END );
       registerScript(theme_baseUrl().'/static/js/matrix.js' , CClientScript::POS_END );
       registerScript(theme_baseUrl().'/static/js/jquery.uniform.js' , CClientScript::POS_END );
       registerScript(theme_baseUrl().'/static/js/select2.min.js' , CClientScript::POS_END );
       registerScript(theme_baseUrl().'/static/js/matrix.tables.js' , CClientScript::POS_END );
       registerScript(theme_baseUrl().'/static/js/jquery.dataTables.min.js' , CClientScript::POS_END );
       ?>
    </head>
    <body>

        <!--Header-part-->
        <div id="header">
            <h1><a href="dashboard.html">Matrix Admin</a></h1>
        </div>
        <!--close-Header-part-->
        <div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav">
                <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                        <li class="divider"></li>
                        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                        <li class="divider"></li>
                        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                        <li class="divider"></li>
                        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
                    </ul>
                </li>
                <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
                <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
            </ul>
        </div>
        <!--sidebar-menu-->
        <div id="sidebar">
            <a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
            <ul>
                <li class="submenu active">
                    
                    <a href="#"><i class="icon icon-file"></i> <span>사이트관리</span>
                    <span class="label label-important">5</span></a>
                    <ul>
                        <li><a href="index2.html">Dashboard2</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="chat.html">Chat option</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--sidebar-menu-->
        
        