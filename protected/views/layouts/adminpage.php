<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8" />
    <title>.:Halaman Admin SIPD Purbalingga:.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template." />
    <meta name="author" content="Charisma by : Muhammad Usman" />
    <meta name="developer" content="Roberto Yuniar Rilando" />
    <meta name="developer" content="Caraka Wedhatama" />
    <meta name="developer" content="Aula Miftahul Hak" />

    <!-- The styles -->
    <link id="bs-css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/css/bootstrap-simplex.min.css" rel="stylesheet">

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/css/animate.min.css' rel='stylesheet'>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/img/favicon.ico">

</head>

<body>
    <!-- jQuery -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/jquery/jquery.min.js"></script>

    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/index.html"> <img alt="Charisma Logo" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/img/logo20.png" class="hidden-xs"/>
                <span>Admin Page</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo Yii::app()->user->username; ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo $this->createUrl("admin/logout"); ?>">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/index.html"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/ui.html"><i class="glyphicon glyphicon-eye-open"></i><span> UI Features</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/form.html"><i
                                    class="glyphicon glyphicon-edit"></i><span> Forms</span></a></li>
                        <li><a class="ajax-link" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/chart.html"><i class="glyphicon glyphicon-list-alt"></i><span> Charts</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/typography.html"><i class="glyphicon glyphicon-font"></i><span> Typography</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/gallery.html"><i class="glyphicon glyphicon-picture"></i><span> Gallery</span></a>
                        </li>
                        <li class="nav-header hidden-md">Sample Section</li>
                        <li><a class="ajax-link" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/table.html"><i
                                    class="glyphicon glyphicon-align-justify"></i><span> Tables</span></a></li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Accordion Menu</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Child Menu 1</a></li>
                                <li><a href="#">Child Menu 2</a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/calendar.html"><i class="glyphicon glyphicon-calendar"></i><span> Calendar</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/grid.html"><i
                                    class="glyphicon glyphicon-th"></i><span> Grid</span></a></li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/tour.html"><i class="glyphicon glyphicon-globe"></i><span> Tour</span></a></li>
                        <li><a class="ajax-link" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/icon.html"><i
                                    class="glyphicon glyphicon-star"></i><span> Icons</span></a></li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/error.html"><i class="glyphicon glyphicon-ban-circle"></i><span> Error Page</span></a>
                        </li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/login.html"><i class="glyphicon glyphicon-lock"></i><span> Login Page</span></a>
                        </li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            
            <?php echo $content; ?>

            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well">
                            <h2><i class="glyphicon glyphicon-info-sign"></i> Introduction</h2>

                            <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round btn-default"><i
                                        class="glyphicon glyphicon-cog"></i></a>
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round btn-default"><i
                                        class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content row">
                            <div class="col-lg-7 col-md-12">
                                <h1>Charisma <br>
                                    <small>free, premium quality, responsive, multiple skin admin template.</small>
                                </h1>
                                <p>Its a live demo of the template. I have created Charisma to ease the repeat work I have to do on my
                                    projects. Now I re-use Charisma as a base for my admin panel work and I am sharing it with you
                                    :)</p>

                                <p><b>All pages in the menu are functional, take a look at all, please share this with your
                                        followers.</b></p>

                                <p class="center-block download-buttons">
                                    <a href="http://usman.it/free-responsive-admin-template/" class="btn btn-primary btn-lg"><i
                                            class="glyphicon glyphicon-chevron-left glyphicon-white"></i> Back to article</a>
                                    <a href="http://usman.it/free-responsive-admin-template/" class="btn btn-default btn-lg"><i
                                            class="glyphicon glyphicon-download-alt"></i> Download Page</a>
                                </p>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="box col-md-4">
                    <div class="box-inner homepage-box">
                        <div class="box-header well">
                            <h2><i class="glyphicon glyphicon-th"></i> Tabs</h2>

                            <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round btn-default"><i
                                        class="glyphicon glyphicon-cog"></i></a>
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round btn-default"><i
                                        class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#info">Info</a></li>
                                <li><a href="#custom">Custom</a></li>
                                <li><a href="#messages">Messages</a></li>
                            </ul>

                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane active" id="info">
                                    <h3>Charisma
                                        <small>a full featured template</small>
                                    </h3>
                                    <p>Its a full featured, responsive template for your admin panel. It is optimized for tablets
                                        and mobile phones.</p>

                                    <p>Check how it looks on different devices:</p>
                                    <a href="http://www.responsinator.com/?url=usman.it%2Fthemes%2Fcharisma"
                                       target="_blank"><strong>Preview on iPhone size.</strong></a>
                                    <br>
                                    <a href="http://www.responsinator.com/?url=usman.it%2Fthemes%2Fcharisma"
                                       target="_blank"><strong>Preview on iPad size.</strong></a>
                                </div>
                                <div class="tab-pane" id="custom">
                                    <h3>Custom
                                        <small>small text</small>
                                    </h3>
                                    <p>Sample paragraph.</p>

                                    <p>Your custom text.</p>
                                </div>
                                <div class="tab-pane" id="messages">
                                    <h3>Messages
                                        <small>small text</small>
                                    </h3>
                                    <p>Sample paragraph.</p>

                                    <p>Your custom text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/span-->

                <div class="box col-md-4">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-user"></i> Member Activity</h2>

                            <div class="box-icon">
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round btn-default"><i
                                        class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="box-content">
                                <ul class="dashboard-list">
                                    <li>
                                        <a href="#">
                                            <img class="dashboard-avatar" alt="Usman"
                                                 src="http://www.gravatar.com/avatar/f0ea51fa1e4fae92608d8affee12f67b.png?s=50"></a>
                                        <strong>Name:</strong> <a href="#">Usman
                                        </a><br>
                                        <strong>Since:</strong> 17/05/2014<br>
                                        <strong>Status:</strong> <span class="label-success label label-default">Approved</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="dashboard-avatar" alt="Sheikh Heera"
                                                 src="http://www.gravatar.com/avatar/3232415a0380253cfffe19163d04acab.png?s=50"></a>
                                        <strong>Name:</strong> <a href="#">Sheikh Heera
                                        </a><br>
                                        <strong>Since:</strong> 17/05/2014<br>
                                        <strong>Status:</strong> <span class="label-warning label label-default">Pending</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="dashboard-avatar" alt="Abdullah"
                                                 src="http://www.gravatar.com/avatar/46056f772bde7c536e2086004e300a04.png?s=50"></a>
                                        <strong>Name:</strong> <a href="#">Abdullah
                                        </a><br>
                                        <strong>Since:</strong> 25/05/2014<br>
                                        <strong>Status:</strong> <span class="label-default label label-danger">Banned</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="dashboard-avatar" alt="Sana Amrin"
                                                 src="http://www.gravatar.com/avatar/hash"></a>
                                        <strong>Name:</strong> <a href="#">Sana Amrin</a><br>
                                        <strong>Since:</strong> 17/05/2014<br>
                                        <strong>Status:</strong> <span class="label label-info">Updates</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/span-->

                <div class="box col-md-4">
                    <div class="box-inner homepage-box">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-list-alt"></i> Open Source</h2>

                            <div class="box-icon">
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round btn-default"><i
                                        class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <h3>Charisma is Open Source</h3>
                            <a class="btn btn-default center-block col-md-6" title="GitHub"
                               href="https://github.com/usmanhalalit/charisma" target="_blank"><i class="icon-edit"></i> View on
                                GitHub</a>

                            <div class="clearfix"></div>
                            <br>
                            <ul class="github-buttons center-block">
                                <li>
                                    <iframe
                                        src="http://ghbtns.com/github-btn.html?user=usmanhalalit&amp;repo=charisma&amp;type=watch&amp;count=true"
                                        height="20" width="100" frameborder="0" scrolling="0"></iframe>
                                </li>
                                <li>
                                    <iframe
                                        src="http://ghbtns.com/github-btn.html?user=usmanhalalit&amp;repo=charisma&amp;type=fork&amp;count=true"
                                        height="20" width="98" frameborder="0" scrolling="0"></iframe>
                                </li>
                            </ul>
                            <div class="clearfix"></div>

                            <div class="donate">
                                <div>
                                    <small>Help development of Charisma</small>
                                </div>
                                <a class="btn btn-default" href="http://flattr.com/thing/1507720/usmanhalalitcharisma-on-GitHub"
                                   target="_blank"><i class="glyphicon glyphicon-usd green"></i> Donate</a>
                            </div>
                            <br/>

                            <p>You may like my other open source work, check my profile on <a href="http://github.com/usmanhalalit"
                                                                                              target="_blank">GitHub</a>.</p>

                        </div>
                    </div>
                </div>
                <!--/span-->
            </div><!--/row-->

            <div class="row">
                <div class="box col-md-4">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-list"></i> Buttons</h2>

                            <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round btn-default"><i
                                        class="glyphicon glyphicon-cog"></i></a>
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round btn-default"><i
                                        class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content buttons">
                            <p class="btn-group">
                                <button class="btn btn-default">Left</button>
                                <button class="btn btn-default">Middle</button>
                                <button class="btn btn-default">Right</button>
                            </p>
                            <p>
                                <button class="btn btn-default btn-sm"><i class="glyphicon glyphicon-star"></i> Icon button</button>
                                <button class="btn btn-primary btn-sm">Small button</button>
                                <button class="btn btn-danger btn-sm">Small button</button>
                            </p>
                            <p>
                                <button class="btn btn-warning btn-sm">Small button</button>
                                <button class="btn btn-success btn-sm">Small button</button>
                                <button class="btn btn-info btn-sm">Small button</button>
                            </p>
                            <p>
                                <button class="btn btn-inverse btn-default btn-sm">Small button</button>
                                <button class="btn btn-primary btn-round btn-lg">Round button</button>
                                <button class="btn btn-round btn-default btn-lg"><i class="glyphicon glyphicon-ok"></i></button>
                                <button class="btn btn-primary"><i class="glyphicon glyphicon-edit glyphicon-white"></i></button>
                            </p>
                            <p>
                                <button class="btn btn-default btn-xs">Mini button</button>
                                <button class="btn btn-primary btn-xs">Mini button</button>
                                <button class="btn btn-danger btn-xs">Mini button</button>
                                <button class="btn btn-warning btn-xs">Mini button</button>
                            </p>
                            <p>
                                <button class="btn btn-info btn-xs">Mini button</button>
                                <button class="btn btn-success btn-xs">Mini button</button>
                                <button class="btn btn-inverse btn-default btn-xs">Mini button</button>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/span-->

                <div class="box col-md-4">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-list"></i> Buttons</h2>

                            <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round btn-default"><i
                                        class="glyphicon glyphicon-cog"></i></a>
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round btn-default"><i
                                        class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content  buttons">
                            <p>
                                <button class="btn btn-default btn-lg">Large button</button>
                                <button class="btn btn-primary btn-lg">Large button</button>
                            </p>
                            <p>
                                <button class="btn btn-danger btn-lg">Large button</button>
                                <button class="btn btn-warning btn-lg">Large button</button>
                            </p>
                            <p>
                                <button class="btn btn-success btn-lg">Large button</button>
                                <button class="btn btn-info btn-lg">Large button</button>
                            </p>
                            <p>
                                <button class="btn btn-inverse btn-default btn-lg">Large button</button>
                            </p>
                            <div class="btn-group">
                                <button class="btn btn-default btn-lg">Large Dropdown</button>
                                <button class="btn dropdown-toggle btn-default btn-lg" data-toggle="dropdown"><span
                                        class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="glyphicon glyphicon-star"></i> Action</a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-tag"></i> Another action</a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-download-alt"></i> Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-tint"></i> Separated link</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/span-->

                <div class="box col-md-4">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-list"></i> Weekly Stat</h2>

                            <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round btn-default"><i
                                        class="glyphicon glyphicon-cog"></i></a>
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round btn-default"><i
                                        class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <ul class="dashboard-list">
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-arrow-up"></i>
                                        <span class="green">92</span>
                                        New Comments
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-arrow-down"></i>
                                        <span class="red">15</span>
                                        New Registrations
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-minus"></i>
                                        <span class="blue">36</span>
                                        New Articles
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-comment"></i>
                                        <span class="yellow">45</span>
                                        User reviews
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-arrow-up"></i>
                                        <span class="green">112</span>
                                        New Comments
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-arrow-down"></i>
                                        <span class="red">31</span>
                                        New Registrations
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-minus"></i>
                                        <span class="blue">93</span>
                                        New Articles
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-comment"></i>
                                        <span class="yellow">254</span>
                                        User reviews
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/span-->
            </div><!--/row-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright"> 2015 &copy; <a href="https://fb.com/wedhatamacaraka" target="_blank">Caraka W</a> | <a href="https://fb.com/" target="_blank">Aula MH</a> | <a href="https://fb.com/betonakal" target="_blank">Roberto YR</a></p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/moment/min/moment.min.js'></script>
<script src='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin/js/charisma.js"></script>


</body>
</html>
