
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Politik, Hukum dan Keamanan <small>(Politik Dalam Negeri dan Pengawasan, Hukum, Keamanan, Ketertiban Masyarakat)</small>
        </h1>
    </div>
</div>

<div class="row">
	<div class="col-lg-12 col-xs-12">
        <!-- Politik Dalam Negeri dan Pengawasan -->
        <form role="form" method="post" action="simpanpolitik">
		<div class="box panel panel-primary">
			<div class="panel-heading">
                <h3 class="panel-title"> Politik Dalam Negeri dan Pengawasan</h3>
                <div class="box-icon">
                	<a href="#" class="btn btn-minimize btn-round btn-default">
                	<i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                  <div class="col-lg-12 col-xs-12">
                    
                    <table width="100%">
                        <?php foreach ($dataProvider1 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider2 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider3 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider4 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider5 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider6 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider7 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider8 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider9 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider10 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider11 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider12 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider13 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                    </table>

                  </div>
            </div>

		</div>
        <!-- End Politik Dalam Negeri dan Pengawasan -->
        <br /><span class="pull-right">
        <input type="reset" class="btn btn-danger" value="RESET" />
        <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>
        </form>

        <!-- Hukum --><br /><br /><form role="action" method="post" action="simpanhukum">
        <div class="box panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Hukum</h3>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default">
                    <i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                  <div class="col-lg-12 col-xs-12">
                    
                    <table width="100%">
                        <?php foreach ($dataProvider14 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider15 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            
                            <?php foreach ($dataProvider17 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider18 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider19 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php foreach ($dataProvider20 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                    </table>

                  </div>
            </div>

        </div>
        <!-- End Hukum -->
        <br /><span class="pull-right">
        <input type="reset" class="btn btn-danger" value="RESET" />
        <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>
        </form>

        <!-- Keamanan, Ketertiban Masyarakat --><br /><br /><form role="form" method="post" action="simpanaman">
        <div class="box panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Keamanan, Ketertiban Masyarakat</h3>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default">
                    <i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                  <div class="col-lg-12 col-xs-12">
                    
                    <table width="100%">
                        <?php foreach ($dataProvider21 as $huk): ?>
                                <tr>
                                    <td>
                                        <?php
                                            if($huk['id']==1){
                                                echo "<strong>";
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                                echo "</strong>";
                                            }else{
                                                echo $huk['properti'];
                                                echo $huk['nama'];
                                            }
                                        ?>
                                    </td>
                                    <td width="45%"><input type="text" class="form-control" 
                                        <?php
                                            if($huk['ketersediaan']=='Tidak Ada'){
                                                echo "readonly='readonly' ";echo "value='0' ";
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";
                                                echo " placeholder='Tidak Ada'";
                                            }else{
                                                echo "name='";
                                                echo $huk['nm_field'];
                                                echo "'";echo "value='0' ";
                                            }
                                        ?> /></td>
                                    <td width="0.5%"><?php echo $huk['satuan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                    </table>

                  </div>
            </div>

        </div>
        <!-- End Keamanan, Ketertiban Masyarakat -->
        
	</div>
</div>
<br /><span class="pull-right">
            <input type="reset" class="btn btn-danger" value="RESET" />
            <input type="submit" class="btn btn-success" value="SIMPAN" />
        </span>

</form>