<form role="form" method="post" action="simpan">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Sumber Daya Alam <small>(Pertanian, Kehutanan, Kelautan, Perikanan, Peternakan, Perkebunan, Pertambangan dan Energi, Lingkungan Hidup, Tata Ruang dan Pertanahan)</small>
        </h1>
    </div>
</div>

<div class="row">
	<div class="col-lg-12 col-xs-12">
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
                                                            echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                        <?php endforeach; ?>

                    </table>

                  </div>
            </div>

		</div>
        <!-- End Pertanian, Kehutanan, Kelautan, Perikanan, Peternakan, Perkebunan -->

        <!-- Pertambangan dan Energi -->
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
                                                            echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                        <?php endforeach; ?>

                    </table>

                  </div>
            </div>

        </div>
        <!-- End Pertambangan dan Energi -->

        <!-- Lingkungan Hidup, Tata Ruang dan Pertanahan -->
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
                                                            echo "readonly='readonly' ";
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
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
                                                            echo " placeholder='Tidak Ada'";
                                                      }else{
                                                            echo "name='";
                                                            echo $x['nm_field'];
                                                            echo "'";
                                                      }
                                                ?> /></td>
                                                <td width="5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                        <?php endforeach; ?>

                    </table>

                  </div>
            </div>

        </div>
        <!-- End Lingkungan Hidup, Tata Ruang dan Pertanahan -->
        
	</div>
</div>
<br /><span class="pull-right">
            <input type="reset" class="btn btn-danger" value="RESET" />
            <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>

</form>