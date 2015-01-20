<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="SIPD, Purbalingga, Sistem Informasi Pembangunan Daerah, Yii Framework" />
    <meta name="description" content="" />
    <meta name="author" content="Roberto Yuniar Rilando, Caraka Wedhatama, Aula Miftahul Hak" />

    <title>Sistem Informasi Pembangunan Daerah - Kabupaten Purbalingga</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin1/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin1/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin1/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Special -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin1/css/special.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        td{
            padding-bottom: 10px;
        }
        td.a{
            padding-left: 30px;
        }
        td.b{
            padding-left: 60px;
        }
        td.c{
            padding-left: 45px;
        }
    </style>

</head>

<body>

    <!-- jQuery -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin1/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin1/js/bootstrap.min.js"></script>

    <!-- Jika tidak ada javascript atau fitur javascript disabled=true -->
    <!-- <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Peringatan!</h4>
    
                <p>Anda diwajibkan untuk mengaktifkan fitur<a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    di browser Anda agar dapat mengakses laman ini.</p>
            </div>
    </noscript> -->

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>/admin/index">SIPD Purbalingga</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo Yii::app()->user->username; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo $this->createUrl("admin/logout"); ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <?php 

                        //kalo yang diakses bukan halaman dashboard, li nggak active. tapi kalo pas di dashboard, li class=active

                    ?>
                    <li class="active">
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/index"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin1/forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin1/bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Isi Data <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <?php echo CHtml::link('Sub Data Umum',array('admin/subdataumum')); ?>
                            </li>
                            <li>
                                <?php echo CHtml::link('Sub Ekonomi',array('admin/subekonomi')); ?>
                            </li>
                            <li>
                                <?php echo CHtml::link('Sub Keamanan',array('admin/subkeamanan')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?php echo CHtml::link('Tampilkan Data',array('admin/tampilkandata')); ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <?php echo $content; ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Special Javascript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin1/js/special.js"></script>

</body>

</html>
