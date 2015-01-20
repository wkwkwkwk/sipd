<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIPD Purbalingga</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/css/grayscale.css" rel="stylesheet">
   

    <!--  Log In CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/css/login.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	
	<!-- jQuery -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse-1">
                    <i class="fa fa-bars"></i>
                </button>
                
                    <a class="navbar-brand page-scroll">
                        <i class="fa fa-home"></i>
                        <?php echo CHtml::link('HOME',array('/index'),array('class'=>'navbar-brand page-scroll')); ?>
                    </a>
                
            </div>
        </div>
    </nav>

    <header class="intro-login">
        <div class="intro-body">
            <div class="container">
	           <div class="container">
            	   <form class="form-signin" role="form" method="post">
                       <?php echo $content; ?>
            	   </form>
	           </div>
            </div>
        </div>
    </header>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center" id="myModalLabel">Tim Pengembang</h4>
          </div>
          <div class="modal-body">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/img/beto.jpg" width="70px;" alt="Roberto Yuniar Rilando" class="img-circle" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://facebook.com/beto.nakal/" target="_blank">
                Roberto Yuniar Rilando - Sistem Informasi</a>
                <br /><br />
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/img/wedha.jpg" width="70px;" alt="Caraka Wedhatama" class="img-circle" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://facebook.com/wedhatamacaraka/" target="_blank">
                Caraka Wedhatama - Rekayasa Perangkat Lunak</a>
                <br /><br />
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/img/aula.jpg" width="70px;" alt="Aula Miftahul Hak" class="img-circle" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://facebook.com/aulia.tanpai/" target="_blank">
                Aula Miftahul Hak - Rekayasa Perangkat Lunak</a>
          </div>
          <div class="modal-footer">
            Teknik Informatika 2012 | Universitas Jenderal Soedirman
          </div>
        </div>
      </div>
    </div>
	
    <!-- Footer -->
    <hr />
    <footer>
        <div class="text-center">
            Copyright &copy; 2015. Design by <a href="http://getbootstrap.com" target="_blank">Bootstrap.</a>&nbsp;|&nbsp; <a href="#" data-toggle="modal" data-target="#myModal">Developer Team</a>
        </div>
    </footer>

</body>
</html>

