<?php 
mysql_connect('localhost','root','');
mysql_select_db("sipd");
$orang=Yii::app()->user->username;

$tahe = date("Y");
$iya = date("m");
$sqlin = "SELECT `$tahe` FROM `sipd`.`ag_lembagadidik`";
$sqlin1 = "SELECT * FROM `sipd`.`log` WHERE `namatabel` = 'kes_siagaaktif' AND `kecamatan` = '$orang' AND `tahun` = '$tahe'";
$sqlin2 = "SELECT * FROM `sipd`.`log` WHERE `namatabel` = 'pknpo_cabudda' AND `kecamatan` = '$orang' AND `tahun` = '$tahe'";
$sqlin3 = "SELECT * FROM `sipd`.`log` WHERE `namatabel` = 'kesos_williamson' AND `kecamatan` = '$orang' AND `tahun` = '$tahe'";
$sqlin4 = "SELECT * FROM `sipd`.`log` WHERE `namatabel` = 'ag_lembagadidik' AND `kecamatan` = '$orang' AND `tahun` = '$tahe'";
$kuein = mysql_query($sqlin);$kuein1 = mysql_query($sqlin1);
$kuein2 = mysql_query($sqlin2);
$kuein3 = mysql_query($sqlin3);$kuein4 = mysql_query($sqlin4);
if($kuein){
    if($iya=="01" || $iya=="02" || $iya=="03" || $iya=="04" || $iya=="05" || $iya=="06" || $iya=="07" || $iya=="12"){
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
		    Sosial Budaya <small>(Kesehatan, Pendidikan, Kebudayaan Nasional Pemuda dan Olahraga, Kesejahteraan Sosial, Agama)</small>
        </h1>
    </div>
</div>
<?php 
        if(!($hasil = mysql_fetch_array($kuein1))){
 ?>
<div class="row">
	<div class="col-lg-12 col-xs-12">
		<!-- Kesehatan -->
        <form role="form" method="post" action="simpankesehatan">
		<div class="box panel panel-primary">
			<div class="panel-heading">
                <h3 class="panel-title"> Kesehatan</h3>
                <div class="box-icon">
                	<a href="#" class="btn btn-minimize btn-round btn-default">
                	<i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
            	<div class="col-lg-12 col-xs-12">
            		
            			<table width="100%">
                            <?php foreach ($dataProvider1 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider2 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider3 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider4 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider5 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider6 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider7 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider8 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider9 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider10 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider11 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider12 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider13 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    
                </div>
            </div>

        </div>
        <!-- End Kesehatan -->
        <br /><span class="pull-right">
        
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
                <i class="fa fa-info-circle"></i>  Anda sudah melakukan pengisian data <strong>Kesehatan</strong>.
        </div>
    </div>
</div>
<?php 
        }
        if(!($hasil = mysql_fetch_array($kuein2))){
 ?>
        <!-- Pendidikan, KNPO -->
        <br /><br />
        <form role="form" method="post" action="simpanpendidikan">
        <div class="box panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Pendidikan, Kebudayaan Nasional Pemuda dan Olahraga</h3>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default">
                    <i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                <div class="col-lg-12 col-xs-12">
                    
                        <table width="100%">
                            <?php foreach ($dataProvider14 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider15 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider16 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider17 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider18 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider19 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider20 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider21 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider22 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider23 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider24 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider25 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider26 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider27 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    
                </div>
            </div>

        </div>
        <!-- End Pendidikan, KNPO -->
        <br /><span class="pull-right">
        
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
                <i class="fa fa-info-circle"></i>  Anda sudah melakukan pengisian data <strong>Pendidikan, Kebudayaan Nasional Pemuda dan Olahraga</strong>.
        </div>
    </div>
</div>
<?php 
        }
        if(!($hasil = mysql_fetch_array($kuein3))){
 ?>
        <!-- Kesejahteraan Sosial -->
        <br /><br />
        <form role="form" method="post" action="simpankesos">
        <div class="box panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Kesejahteraan Sosial</h3>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default">
                    <i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                <div class="col-lg-12 col-xs-12">
                    
                        <table width="100%">
                            <?php foreach ($dataProvider28 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider29 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider30 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider31 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider32 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider33 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider34 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider35 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider36 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider37 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider38 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider39 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider40 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider41 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider42 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider43 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    
                </div>
            </div>

        </div>
        <!-- End Kesejahteraan Sosial -->
        <br /><span class="pull-right">
        
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
                <i class="fa fa-info-circle"></i>  Anda sudah melakukan pengisian data <strong>Kesejahteraan Sosial</strong>.
        </div>
    </div>
</div>
<?php 
        }
        if(!($hasil = mysql_fetch_array($kuein4))){
 ?>
        <!-- Agama -->
        <br /><br />
        <form role="form" method="post" action="simpanagama">
        <div class="box panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Agama</h3>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default">
                    <i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                <div class="col-lg-12 col-xs-12">
                    
                        <table width="100%">
                            <?php foreach ($dataProvider44 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider45 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider46 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider47 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider48 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider49 as $y): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($y['id']==1){
                                                echo "<strong>";
                                                echo $y['properti'];
                                                echo $y['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $y['properti'];
                                                echo $y['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($y['ketersediaan']=='Tidak Ada'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else if($y['satuan']=='%'){
                                                echo "value='0' ";echo "readonly='readonly' ";
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                            }else{
                                                echo "name='";
                                                echo $y['nm_field'];
                                                echo "'";
                                                echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $y['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    
                </div>
            </div>

        </div>
        <!-- End Agama -->
<br /><span class="pull-right">
            
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
                <i class="fa fa-info-circle"></i>  Anda sudah melakukan pengisian data <strong>Agama</strong>.
        </div>
    </div>
</div>
<?php 
    }}
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