<?php 
mysql_connect('localhost','root','');
mysql_select_db("sipd");
$orang=Yii::app()->user->username;

$tahe = date("Y");
$iya = date("m");
$sqlin = "SELECT `$tahe` FROM `sipd`.`infra_turap`";
$sqlin1 = "SELECT * FROM `sipd`.`log` WHERE `namatabel` = 'infra_rmhsanitasi' AND `kecamatan` = '$orang' AND `tahun` = '$tahe'";
$sqlin2 = "SELECT * FROM `sipd`.`log` WHERE `namatabel` = 'infra_dayamakam' AND `kecamatan` = '$orang' AND `tahun` = '$tahe'";
$sqlin3 = "SELECT * FROM `sipd`.`log` WHERE `namatabel` = 'infra_sip' AND `kecamatan` = '$orang' AND `tahun` = '$tahe'";
$sqlin4 = "SELECT * FROM `sipd`.`log` WHERE `namatabel` = 'infra_bermotor' AND `kecamatan` = '$orang' AND `tahun` = '$tahe'";

$kuein = mysql_query($sqlin);
$kuein1 = mysql_query($sqlin1);
$kuein2 = mysql_query($sqlin2);
$kuein3 = mysql_query($sqlin3);
$kuein4 = mysql_query($sqlin4);

if($kuein){
    if($iya=="01" || $iya=="02" || $iya=="03" || $iya=="04" || $iya=="05" || $iya=="06" || $iya=="07" || $iya=="12"){
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Infrastruktur <small>(Perumahan dan Pemukiman, Pekerjaan Umum, Pariwisata, POS, Telekomunikasi dan Informatika, Perhubungan dan Transportasi)</small>
        </h1>
    </div>
</div>
<?php 
        if(!($hasil = mysql_fetch_array($kuein1))){
 ?>
<div class="row">
	<div class="col-lg-12 col-xs-12">
        <!-- Perumahan dan Pemukiman -->
        <form role="form" method="post" action="simpanrumah">
    		<div class="box panel panel-primary">
    			<div class="panel-heading">
                    <h3 class="panel-title"> Perumahan dan Pemukiman</h3>
                    <div class="box-icon">
                    	<a href="#" class="btn btn-minimize btn-round btn-default">
                    	<i class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>

                <div class="box-content row">
                      <div class="col-lg-12 col-xs-12">
                        
                        <table width="100%">
                            <?php foreach ($dataProvider1 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']==''){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider2 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider3 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider4 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider5 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                            <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider6 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider7 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider8 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider9 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%"><?php echo $x['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider10 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%"><?php echo $x['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider11 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
                
    		</div>
            <br />
            <span class="pull-right">
                <input type="reset" class="btn btn-danger" value="RESET" />
                <input type="submit" class="btn btn-success" value="SIMPAN" />
            </span>
        </form>
            <!-- End Perumahan dan Pemukiman -->
<?php 
        }else{
 ?>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <i class="fa fa-info-circle"></i>  Anda sudah melakukan pengisian data <strong>Perumahan dan Pemukiman</strong>.
        </div>
    </div>
</div>
<?php 
        }
        if(!($hasil = mysql_fetch_array($kuein2))){
 ?>
            <!-- Pekerjaan Umum -->
            <br />
            <br />
        <form role="form" method="post" action="simpanpu">
            <div class="box panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> Pekerjaan Umum</h3>
                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default">
                        <i class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content row">
                    <div class="col-lg-12 col-xs-12">                    
                        <table width="100%">
                            <?php foreach ($dataProvider12 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider13 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider14 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider15 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider16 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider17 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider18 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider19 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider20 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider21 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider22 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider23 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider24 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider25 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>                            
                            <?php foreach ($dataProvider26 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                      </div>
                </div>
            </div>
            <br />
            <span class="pull-right">
                <input type="reset" class="btn btn-danger" value="RESET" />
                <input type="submit" class="btn btn-success" value="SIMPAN" />
            </span>
        </form>
            <!-- End Pekerjaan Umum -->
<?php 
        }else{
 ?>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <i class="fa fa-info-circle"></i>  Anda sudah melakukan pengisian data <strong>Pekerjaan Umum</strong>.
        </div>
    </div>
</div>
<?php 
        }
        if(!($hasil = mysql_fetch_array($kuein3))){
 ?>
            <!-- Pariwisata, POS, Telekomunikasi dan Informatika -->
            <br />
            <br />
        <form role="form" method="post" action="simpanti">
            <div class="box panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> Pariwisata, POS, Telekomunikasi dan Informatika</h3>
                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default">
                        <i class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content row">
                    <div class="col-lg-12 col-xs-12">                    
                        <table width="100%">
                            <?php foreach ($dataProvider27 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider28 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider29 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider30 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider31 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                      </div>
                </div>
            </div>
            <br />
            <span class="pull-right">
                <input type="reset" class="btn btn-danger" value="RESET" />
                <input type="submit" class="btn btn-success" value="SIMPAN" />
            </span>
        </form>
            <!-- End Pariwisata, POS, Telekomunikasi dan Informatika -->
<?php 
        }else{
 ?>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <i class="fa fa-info-circle"></i>  Anda sudah melakukan pengisian data <strong>Pariwisata, POS, Telekomunikasi dan Informatika</strong>.
        </div>
    </div>
</div>
<?php 
        }
        if(!($hasil = mysql_fetch_array($kuein4))){
 ?>
            <!-- Perhubungan dan Transportasi -->
        <br />
        <br />
        <form role="form" method="post" action="simpanhub">
            <div class="box panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> Perhubungan dan Transportasi</h3>
                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default">
                        <i class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content row">
                      <div class="col-lg-12 col-xs-12">
                        
                        <table width="100%">
                            <?php foreach ($dataProvider32 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider33 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider34 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider35 as $x): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($x['id']==1){
                                                echo "<strong>";
                                                echo $x['properti'];
                                                echo $x['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $x['properti'];
                                                echo $x['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%">
                                        <input type="text" class="form-control" 
                                            <?php
                                                if($x['ketersediaan']=='Tidak Ada'){
                                                    echo "value='0' ";
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo " placeholder=''";
                                                }else{
                                                    echo "name='";
                                                    echo $x['nm_field'];
                                                    echo "'";
                                                    echo "value='0' ";
                                                }
                                            ?> />
                                    </td>
                                    <td width="5%">
                                        <?php echo $x['satuan']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Perhubungan dan Transportasi -->
            <br />  
            <span class="pull-right">
                <input type="reset" class="btn btn-danger" value="RESET" />
                <input type="submit" class="btn btn-success" value="SIMPAN" />
            </span>        
    
</form>
<?php 
        }else{
 ?>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <i class="fa fa-info-circle"></i>  Anda sudah melakukan pengisian data <strong>Perhubungan dan Transportasi</strong>.
        </div>
    </div>
</div>
<?php 
        }
    }
}else{
?>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <i class="fa fa-info-circle"></i>  Maaf, Pengisian Data SIPD <?php echo date("Y"); ?> Belum Dibuka</strong>. Tunggulah beberapa saat lagi.
        </div>
    </div>
</div>

<!-- /.row -->
<?php 
}
?>