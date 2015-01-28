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
                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Daftar Kecamatan (Di list dari database)</h3>
            </div>
            <div class="panel-body">
            	<!-- di looping dari database nama kecamatannya -->
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        
                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                    </a>
                    <a href="#" class="list-group-item">
                        
                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                    </a>
                    <a href="#" class="list-group-item">
                        
                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                    </a>
                    <a href="#" class="list-group-item">
                        
                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                    </a>
                    <a href="#" class="list-group-item">
                        
                        <i class="fa fa-fw fa-user"></i> A new user has been added
                    </a>
                    <a href="#" class="list-group-item">
                        
                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                    </a>
                    <a href="#" class="list-group-item">
                        
                        <i class="fa fa-fw fa-globe"></i> Saved the world
                    </a>
                    <a href="#" class="list-group-item">
                        
                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                    </a>
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
                                
                                <th>User</th>
                                <th>Terakhir Mengakses</th>
                                
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
                                    <td><?php echo $tampil; ?></td>
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