<?php 
mysql_connect('localhost','root','');
mysql_select_db("sipd");
$orang=Yii::app()->user->username;

$tahe = date("Y");
$iya = date("m");
$sqlin = "SELECT `$tahe` FROM `sipd`.`sda_tataruang`";
$sqlin1 = "SELECT * FROM `sipd`.`log` WHERE `namatabel` = 'sda_kel_sos' AND `kecamatan` = '$orang' AND `tahun` = '$tahe'";
$sqlin2 = "SELECT * FROM `sipd`.`log` WHERE `namatabel` = 'sda_energi' AND `kecamatan` = '$orang' AND `tahun` = '$tahe'";
$sqlin3 = "SELECT * FROM `sipd`.`log` WHERE `namatabel` = 'sda_air_limbah' AND `kecamatan` = '$orang' AND `tahun` = '$tahe'";

$kuein = mysql_query($sqlin);
$kuein1 = mysql_query($sqlin1);
$kuein2 = mysql_query($sqlin2);
$kuein3 = mysql_query($sqlin3);

if($kuein){
    if($iya=="01" || $iya=="02" || $iya=="03" || $iya=="04" || $iya=="05" || $iya=="06" || $iya=="07" || $iya=="12"){
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Sumber Daya Alam <small>(Pertanian, Kehutanan, Kelautan, Perikanan, Peternakan, Perkebunan, Pertambangan dan Energi, Lingkungan Hidup, Tata Ruang dan Pertanahan)</small>
        </h1>
    </div>
</div>
<?php 
        if(!($hasil = mysql_fetch_array($kuein1))){
 ?>
<div class="row">
	<div class="col-lg-12 col-xs-12">
        <form role="form" method="post" action="simpantani">
        <!-- Pertanian, Kehutanan, Kelautan, Perikanan, Peternakan, Perkebunan -->
		<div class="box panel panel-primary">
			<div class="panel-heading">
                <h3 class="panel-title"> Pertanian, Kehutanan, Kelautan, Perikanan, Peternakan, Perkebunan</h3>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                        <?php endforeach; ?>

                    </table>

                  </div>
            </div>

		</div>
<br /><span class="pull-right">
            
            <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>
        </form>
        <!-- End Pertanian, Kehutanan, Kelautan, Perikanan, Peternakan, Perkebunan -->
<?php 
        }else{
 ?>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <i class="fa fa-info-circle"></i>  Anda sudah melakukan pengisian data <strong>Pertanian, Kehutanan, Kelautan, Perikanan, Peternakan, Perkebunan</strong>.
        </div>
    </div>
</div>
<?php 
        }
        if(!($hasil = mysql_fetch_array($kuein2))){
 ?>
        <!-- Pertambangan dan Energi -->
<br />
<br />
        <form role="form" method="post" action="simpanenergi">
        <div class="box panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Pertambangan dan Energi</h3>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default">
                    <i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                  <div class="col-lg-12 col-xs-12">
                    
                    <table width="100%">
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                        <?php endforeach; ?>

                    </table>

                  </div>
            </div>

        </div>
<br /><span class="pull-right">
            
            <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>
        </form>
        <!-- End Pertambangan dan Energi -->
<?php 
        }else{
 ?>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <i class="fa fa-info-circle"></i>  Anda sudah melakukan pengisian data <strong>Pertambangan dan Energi</strong>.
        </div>
    </div>
</div>
<?php 
        }
        if(!($hasil = mysql_fetch_array($kuein3))){
 ?>
        <!-- Lingkungan Hidup, Tata Ruang dan Pertanahan -->
<br />
<br />
        <form role="form" method="post" action="simpanhidup">
        <div class="box panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Lingkungan Hidup, Tata Ruang dan Pertanahan</h3>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default">
                    <i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                  <div class="col-lg-12 col-xs-12">
                    
                    <table width="100%">
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                        <?php endforeach; ?>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else if($x['satuan']=='%'){
                                                            echo "value='0' ";echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo "value='0' ";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                        <?php endforeach; ?>

                    </table>

                  </div>
            </div>

        </div>
        <br /><span class="pull-right">
            
            <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>
        <!-- End Lingkungan Hidup, Tata Ruang dan Pertanahan -->
       
</form>
<?php 
        }else{
 ?>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <i class="fa fa-info-circle"></i>  Anda sudah melakukan pengisian data <strong>Lingkungan Hidup, Tata Ruang dan Pertanahan</strong>.
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