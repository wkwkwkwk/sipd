<form role="form" method="post" action="simpan">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Infrastruktur <small>(Perumahan dan Pemukiman, Pekerjaan Umum, Pariwisata, POS, Telekomunikasi dan Informatika, Perhubungan dan Transportasi)</small>
        </h1>
    </div>
</div>

<div class="row">
	<div class="col-lg-12 col-xs-12">
        <!-- Perumahan dan Pemukiman -->
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

                    </table>

                  </div>
            </div>

		</div>
        <!-- End Perumahan dan Pemukiman -->

        <!-- Pekerjaan Umum -->
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
                                    <tr>
                                          <td><strong>XVI. Jumlah Rumah Tinggal</strong></td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Unit</td>
                                    </tr>
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
        <!-- End Pekerjaan Umum -->

        <!-- Pariwisata, POS, Telekomunikasi dan Informatika -->
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
        <!-- End Pariwisata, POS, Telekomunikasi dan Informatika -->

        <!-- Perhubungan dan Transportasi -->
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
        <!-- End Perhubungan dan Transportasi -->
	</div>
</div>
<br /><span class="pull-right">
            <input type="reset" class="btn btn-danger" value="RESET" />
            <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>

</form>