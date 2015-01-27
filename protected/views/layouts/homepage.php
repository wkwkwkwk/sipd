<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Pembangunana Daerah - Kabupaten Purbalingga</title>

    <link rel="shortcut icon" id="favicon" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/img/Logo_Pbg.png" alt="SIPD" />

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/css/bootstrap.css" rel="stylesheet">

    <!--  Log In CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/css/login.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- jQuery -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/js/bootstrap.min.js"></script>   
            
    <?php echo $content; ?>

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
            Copyright &copy; 2015. Design by <a href="http://getbootstrap.com" target="_blank">Bootstrap</a>&nbsp;|&nbsp; <a href="#" data-toggle="modal" data-target="#myModal">Developer Team</a>
        </div>
    </footer>

    <!-- Plugin JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/js/grayscale.js"></script>

    <script>
		$(document).ready(function(){
    	//Handles menu drop down
   			$('.dropdown-menu').find('form').click(function (e) {
        	e.stopPropagation();
    		});
		});

        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
        });
	</script>

</body>

</html>
