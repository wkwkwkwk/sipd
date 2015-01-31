
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Insidensial <small>(Bencana Alam, Penyakit Menular, Pencurian Ikan, Kebakaran Hutan, Pencurian dan Penyelundupan Kayu)</small>
        </h1>
    </div>
</div>

<div class="row">
	<div class="col-lg-12 col-xs-12">
        <!-- Bencana Alam -->
        <form role="form" method="post" action="simpanbencana">
		<div class="box panel panel-primary">
			<div class="panel-heading">
                <h3 class="panel-title"> Bencana Alam</h3>
                <div class="box-icon">
                	<a href="#" class="btn btn-minimize btn-round btn-default">
                	<i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                  <div class="col-lg-12 col-xs-12">
                    
                    <table width="100%">
                        <?php foreach ($dataProvider1 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider2 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider3 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                           if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider4 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider5 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider6 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider7 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider8 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider9 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                    </table>

                  </div>
            </div>

		</div>
        <!-- End Bencana Alam -->
        <br /><span class="pull-right">
        <input type="reset" class="btn btn-danger" value="RESET" />
        <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>
        </form>

        <!-- Penyakit Menular --><br /><br /><form role="form" method="post" action="simpanpenyakit">
        <div class="box panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Penyakit Menular</h3>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default">
                    <i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                  <div class="col-lg-12 col-xs-12">
                    
                    <table width="100%">
                        <?php foreach ($dataProvider10 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider11 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                    </table>

                  </div>
            </div>

        </div>
        <!-- End Penyakit Menular -->
        <br /><span class="pull-right">
        <input type="reset" class="btn btn-danger" value="RESET" />
        <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>
        </form>

        <!-- Pencurian Ikan --><br /><br /><form role="form" method="post" action="simpanikan">
        <div class="box panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Pencurian Ikan</h3>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default">
                    <i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                  <div class="col-lg-12 col-xs-12">
                    
                    <table width="100%">
                        <?php foreach ($dataProvider12 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider13 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider14 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                    </table>

                  </div>
            </div>

        </div>
        <!-- End Pencurian Ikan -->
        <br /><span class="pull-right">
        <input type="reset" class="btn btn-danger" value="RESET" />
        <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>
        </form>

        <!-- Kebakaran Hutan --><br /><br /><form role="form" method="post" action="simpanhutan">
        <div class="box panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Kebakaran Hutan</h3>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default">
                    <i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                  <div class="col-lg-12 col-xs-12">
                    
                    <table width="100%">
                        <?php foreach ($dataProvider15 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider16 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider17 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                    </table>

                  </div>
            </div>

        </div>
        <!-- End Kebakaran Hutan -->
        <br /><span class="pull-right">
        <input type="reset" class="btn btn-danger" value="RESET" />
        <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>
        </form>

        <!-- Pencurian dan Penyelundupan Kayu --><br /><br /><form role="form" method="post" action="simpankayu">
        <div class="box panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Pencurian dan Penyelundupan Kayu</h3>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default">
                    <i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                  <div class="col-lg-12 col-xs-12">
                    
                    <table width="100%">
                        <?php foreach ($dataProvider18 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider19 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider20 as $in): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($in['id']==1){
                                                echo "<strong>";
                                                echo $in['properti'];
                                                echo $in['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $in['properti'];
                                                echo $in['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($in['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $in['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $in['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                    </table>

                  </div>
            </div>

        </div>
        <!-- End Pencurian dan Penyelundupan Kayu -->
	</div>
</div>
<br /><span class="pull-right">
            <input type="reset" class="btn btn-danger" value="RESET" />
            <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>

</form>