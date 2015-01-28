<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
		    Dashboard <small>Statistics Overview</small>
        </h1>
       	<ol class="breadcrumb">
        	<li class="active">
            	<i class="fa fa-dashboard"></i> Dashboard
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
	<div class="col-lg-12">
    	<div class="alert alert-info alert-dismissable">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            	<i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Daftar Kecamatan</h3>
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
</div>
<!-- /.row -->