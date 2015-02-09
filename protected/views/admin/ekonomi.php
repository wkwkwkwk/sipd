<?php 
mysql_connect('localhost','root','');
mysql_select_db("sipd");
$orang=Yii::app()->user->username;

$tahe = date("Y");
$iya = date("m");
$sqlin = "SELECT `$tahe` FROM `sipd`.`eko_usahanas`";
$sqlin1 = "SELECT * FROM `sipd`.`log` WHERE `namatabel` = 'eko_indsubsektor' AND `kecamatan` = '$orang' AND `tahun` = '$tahe'";
$sqlin2 = "SELECT * FROM `sipd`.`log` WHERE `namatabel` = 'eko_perbankan' AND `kecamatan` = '$orang' AND `tahun` = '$tahe'";

$kuein = mysql_query($sqlin);
$kuein1 = mysql_query($sqlin1);
$kuein2 = mysql_query($sqlin2);

if($kuein){
    if($iya=="01" || $iya=="02" || $iya=="03" || $iya=="04" || $iya=="05" || $iya=="06" || $iya=="07" || $iya=="12"){
?>
<form role="form" method="post" action="simpanindus">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Ekonomi <small>(Industri, Perdagangan, Pengembangan Usaha Nasional, Lembaga Keuangan dan Koperasi, BUMD, Perbankan Daerah dan Lembaga Keuangan Daerah)</small>
        </h1>
    </div>
</div>
<?php 
        if(!($hasil = mysql_fetch_array($kuein1))){
 ?>
<div class="row">
	<div class="col-lg-12 col-xs-12">
        <!-- Industri, Perdagangan, Pengembangan Usaha Nasional, Lembaga Keuangan dan Koperasi -->
		<div class="box panel panel-primary">
			<div class="panel-heading">
                <h3 class="panel-title"> Industri, Perdagangan, Pengembangan Usaha Nasional, Lembaga Keuangan dan Koperasi</h3>
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
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                        <?php endforeach; ?>

                    </table>

                  </div>
            </div>

		</div>
        <br /><span class="pull-right">
            <input type="reset" class="btn btn-danger" value="RESET" />
            <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>
</form>
        <!-- End Industri, Perdagangan, Pengembangan Usaha Nasional, Lembaga Keuangan dan Koperasi -->
<?php 
        }else{
 ?>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <i class="fa fa-info-circle"></i>  Anda sudah melakukan pengisian data Industri, Perdagangan, Pengembangan Usaha Nasional, Lembaga Keuangan dan Koperasi</strong>.
        </div>
    </div>
</div>
<?php 
        }
        if(!($hasil = mysql_fetch_array($kuein2))){
 ?>
        <!-- BUMD, Perbankan Daerah dan Lembaga Keuangan Daerah -->
        <br /><br />
<form role="form" method="post" action="simpanbumd">
        <div class="box panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> BUMD, Perbankan Daerah dan Lembaga Keuangan Daerah</h3>
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
                                                            echo "readonly='readonly' ";
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
                                                            echo "readonly='readonly' ";
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
                                                ?> /></td>
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
                                            <td width="45%"><input type="text" class="form-control" 
                                                <?php
                                                      if($x['ketersediaan']=='Tidak Ada'){
                                                            echo "readonly='readonly' ";
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
                                                            echo "readonly='readonly' ";
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
                                                            echo "readonly='readonly' ";
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
                                                            echo "readonly='readonly' ";
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
                                                            echo "readonly='readonly' ";
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
                                                            echo "readonly='readonly' ";
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
                                                            echo "readonly='readonly' ";
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
                                                            echo "readonly='readonly' ";
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
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                        <?php endforeach; ?>

                    </table>

                  </div>
            </div>

        </div>
        <!-- End BUMD, Perbankan Daerah dan Lembaga Keuangan Daerah -->
	</div>
</div>
<br /><span class="pull-right">
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
                <i class="fa fa-info-circle"></i>  Anda sudah melakukan pengisian data BUMD, Perbankan Daerah dan Lembaga Keuangan Daerah</strong>.
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