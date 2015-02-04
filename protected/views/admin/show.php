<?php 
	mysql_connect('localhost','root','');
	mysql_select_db("sipd");

	if(isset($_POST['bukain'])){
		$aa = date("m");
		if($aa=="01" || $aa=="02" || $aa=="03" || $aa=="04" || $aa=="05" || $aa=="06" || $aa=="07"){
			$thn = date("Y");
			$mm = $thn - 1;
			$sql = "SELECT `$thn` FROM `sipd`.`sda_energi`";
			$kue = mysql_query($sql);
			if($kue){
				echo "Peringatan! Pengisian SIPD tahun ";
				echo $thn;
				echo " sudah terbuka.";
			}else{
				$sql1 = "ALTER TABLE `sipd`.`sda_energi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";

				$kue1 = mysql_query($sql1);
			}
		}else{
			echo "Hapus Data";
		}
	}
	
?>
	<form method="post" action="" role="form">
        <!-- Start Buka Pengisian -->
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-github fa-fw"></i> Buka Pengisian Data SIPD</h3>
                    </div>
                    <div class="panel-body">
                        <input type="submit" class="btn btn-success" name="bukain" value="Buka" />
                    </div>
                </div>
            </div>
        <!-- End Buka Pengisian -->
    <!-- </form>
   <form method="post" action="rekap"> -->
        <!-- Start Rekap Data -->
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-github fa-fw"></i> Rekap Data SIPD</h3>
                    </div>
                    <div class="panel-body">
                        <input type="submit" class="btn btn-success" name="rekap" value="Mulai Rekap Data" />
                    </div>
                </div>
            </div>
        <!-- End Rekap Data -->
    <!-- </form>
    <form method="post" action="eval"> -->
        <!-- Start Rekap Data -->
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-github fa-fw"></i> Evaluasi</h3>
                    </div>
                    <div class="panel-body">
                        <input type="submit" class="btn btn-success" name="eval" value="Evaluasi Keterisian Data" />
                    </div>
                </div>
            </div>
        </div>
        <!-- End Rekap Data -->
    </form>