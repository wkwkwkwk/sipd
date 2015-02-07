
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
		    Dashboard <small>Statistics Overview</small>
        </h1>
       	
    </div>
</div>
<!-- /.row -->

<div class="row">
	<div class="col-lg-12">
    	<div class="alert alert-info alert-dismissable">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            	<i class="fa fa-info-circle"></i>  Selamat datang di SIPD Kabupaten Purbalingga, user <strong><?php echo Yii::app()->user->username; ?></strong>. Silahkan jika ingin mengakses sistem ini, menu terdapat di sebelah kiri.
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <?php if (Yii::app()->user->username!='bappeda') { ?>
        <div class="col-lg-12 col-xs-12">
            <div class="box panel panel-default">
                <div class="panel-heading">
                      <h3 class="panel-title text-center"> Kecamatan <?php foreach ($dataMasuk as $key): ?>
                          <?php echo $key['namakecamatan']; ?> - Kabupaten Purbalingga</h3>
                          <div class="box-icon">
                            
                          </div>
                </div>
            <div class="box-content row">
                <div class="col-lg-12 col-xs-12 col-lg-push-3">
                    <table width="100%">
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $key['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <td><?php echo $key['notelp']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $key['email']; ?></td>
                        </tr>
                    </table>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php }else{ ?>
        <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Daftar Kecamatan</h3>
            </div>
            <div class="panel-body">
                <!-- di looping dari database nama kecamatannya -->
                <div class="list-group">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <th><center>No.</center></th>
                            <th><center>Nama Kecamatan</center></th>
                        </thead>
                        <tbody>
                            <?php foreach ($dataKecamatan as $kec): ?>
                            <tr>
                                <td><center><?php echo $kec['idkecamatan']; ?>.</center></td>
                                <td><?php echo $kec['namakecamatan']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Aktivitas</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                
                                <th><center>User</center></th>
                                <th><center>Terakhir Mengakses</center></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dataAktivitas as $ak): ?>
                                <tr>
                                    <td><?php echo $ak['username']; ?></td>
                                        <?php
                                            $waktu=$ak['terakhir_masuk'];
                                            $pisah=explode(" ", $waktu);
                                            $tgl=explode("-", $pisah[0]);
                                            $hari = $tgl[2];
                                            $bulan = $tgl[1];
                                            $tahun = $tgl[0];
                                            $apalah = array($hari, $bulan, $tahun);
                                            $gabung = implode("-", $apalah);
                                            $hasil = array($gabung, $pisah[1]);
                                            $tampil = implode(" ", $hasil);
                                        ?>
                                    <td><center><?php echo $tampil; ?></center></td>
                                </tr>
                            <?php  endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<!-- /.row -->