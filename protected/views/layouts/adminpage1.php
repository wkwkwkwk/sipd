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

    <link rel="shortcut icon" id="favicon" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/img/Logo_Pbg.png" alt="SIPD" />

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
        h3{
            text-transform: capitalize;
        }
        td{padding-bottom: 10px;text-transform: capitalize;}
        td.a{padding-left: 30px;}
        td.b{padding-left: 60px;}
        td.c{padding-left: 45px;}
        td.d{padding-left: 65px;}
        td.e{font-size: 11px;}
        select{text-transform: capitalize;}
    </style>

</head>

<body>

    <!-- jQuery -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin1/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaAdmin1/js/bootstrap.min.js"></script>

    <div id="wrapper">
        <!-- Jika pada browser tidak ada javascript atau fitur javascript disabled=true -->
        <noscript>
            <div class="alert alert-block alert-danger col-md-12">
                <h4 class="alert-heading">Peringatan</h4>
                <p>Anda diwajibkan untuk mengaktifkan fitur <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    di browser Anda agar dapat mengakses laman ini.</p>
            </div>
        </noscript>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>/admin/index">
                <img class="img-responsive img-rounded" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/img/Logo_Pbg.png" alt="SIPD" width="20px" />
                <span>SIPD Purbalingga</span></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo Yii::app()->user->username; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
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
                        $URL_halaman_ini = apache_getenv("HTTP_HOST") . apache_getenv("REQUEST_URI");
                        $eks = explode("/", $URL_halaman_ini);
                        if($eks[3] != NULL){
                            $belakang = $eks[3];
                        }else{
                            $belakang = $eks[2];
                            $anu = "";
                            $ini = "";
                            $apa = "";
                            $ana = "";$chat="";$chat2="";$examp="";
                            $itu = "active";
                        }
                        
                        /*echo $belakang;*/
                        if($belakang == "index" && $eks[2] == "admin"){
                            $itu = "active";
                            $anu = "";
                            $ini = "";
                            $apa = "";
                            $ana = "";$iya = "";$chat="";$chat2="";$examp="";
                        }else if($belakang == "dataumum" || $belakang == "sosbud"){
                            $anu = "active";
                            $itu = "";
                            $ini = "";
                            $apa = "";
                            $ana = "";$iya = "";$chat="";$chat2="";$examp="";
                        }else if($belakang == "ekonomi" || $belakang == "infrastruktur" || $belakang == "sda"){
                            $ini = "active";
                            $anu = "";
                            $itu = "";
                            $apa = "";
                            $ana = "";$iya = "";$chat="";$chat2="";$examp="";
                        }else if($belakang == "polhukam" || $belakang == "insidensial"){
                            $apa = "active";
                            $anu = "";
                            $itu = "";
                            $ini = "";
                            $ana = "";$iya = "";$chat="";$chat2="";$examp="";
                        }else if($belakang == "tampilkandata" || $belakang == "export"){
                            $ana = "active";
                            $anu = "";
                            $itu = "";
                            $ini = "";
                            $apa = "";$iya = "";$chat="";$chat2="";$examp="";
                        }else if($belakang == "index" && $eks[2] == "export"){
                            $ana = "active";
                            $anu = "";
                            $itu = "";
                            $ini = "";
                            $apa = "";$iya = "";$chat="";$chat2="";$examp="";
                         }else if($belakang == "show"){
                            $iya = "active";
                            $anu = "";
                            $itu = "";
                            $ini = "";
                            $apa = "";
                            $ana = "";$chat="";$chat2="";$examp="";
                        }else if ($belakang == "chat") {
                            
                            $anu = "";
                            $itu = "";
                            $ini = "";
                            $apa = "";
                            $ana = "";$iya = "";$chat="active";$chat2="";$examp="";
                        }else if ($belakang == "index" && $eks[2] == "chatroom") {
                            
                            $anu = "";
                            $itu = "";
                            $ini = "";
                            $apa = "";
                            $ana = "";$iya = "";$chat="";$chat2="active";$examp="";
                        }else if ($belakang == "index" && $eks[2] == "examp") {
                            
                            $anu = "";
                            $itu = "";
                            $ini = "";
                            $apa = "";
                            $ana = "";$iya = "";$chat="";$chat2="";$examp="active";
                        }
                    ?>
                    <li class="<?php echo $itu; ?>">
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/index"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <?php if (Yii::app()->user->username!='bappeda') { ?>
                    <li class="<?php echo $anu; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-list"></i> Sub Data Umum<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <?php echo CHtml::link('Data Umum',array('admin/dataumum')); ?>
                            </li>
                            <li>
                                <?php echo CHtml::link('Sosial Budaya',array('admin/sosbud')); ?>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php echo $ini; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-list"></i> Sub Ekonomi<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <?php echo CHtml::link('Ekonomi',array('admin/ekonomi')); ?>
                            </li>
                            <li>
                                <?php echo CHtml::link('Infrastruktur',array('admin/infrastruktur')); ?>
                            </li>
                            <li>
                                <?php echo CHtml::link('Sumber Daya Alam',array('admin/sda')); ?>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php echo $apa; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-list"></i> Sub Keamanan<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <?php echo CHtml::link('Polhukam',array('admin/polhukam')); ?>
                            </li>
                            <li>
                                <?php echo CHtml::link('Insidensial',array('admin/insidensial')); ?>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php echo $examp; ?>">
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/examp/index"><i class="fa fa-fw fa-list-alt"></i>Tampilkan Data</a>
                    </li>
                    <?php }else{ ?>
                    <li class="<?php echo $iya; ?>">
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/show"><i class="fa fa-fw fa-star"></i>Extra Menu</a>
                    </li>
                    <li class="<?php echo $ana; ?>">
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/export/index"><i class="fa fa-fw fa-list-alt"></i>Tampilkan Data</a>
                        
                    </li>
                    <?php } ?>
                    <li class="<?php echo $chat; ?>">
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/chat"><i class="fa fa fa-comments"></i> Chat Room</a>
                    </li>
                    <li class="<?php echo $chat2; ?>">
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/chatroom/index"><i class="fa fa fa-steam-square"></i> Chat Room v2</a>
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
