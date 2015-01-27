<form role="form" method="post" action="simpan">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
		    Data Umum <small>(Geografi, Pemerintahan, Demografi)</small>
        </h1>
    </div>
</div>

<div class="row">
	<div class="col-lg-12 col-xs-12">
		<!-- Geografi -->
		<div class="box panel panel-primary">
		    <div class="panel-heading">
                      <h3 class="panel-title"> Geografi</h3>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                          <td><strong>V. Jumlah Pulau</strong></td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td></td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;1. Pulau Berpenghuni</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1). Jumlah Penduduk</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Jiwa</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2). Jumlah KK</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>KK</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3). Luas Daratan Pulau Berpenghuni</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Ha</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4). Luas Lahan Produktif Pulau Berpenghuni</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Ha</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5). Luas Lahan Budidaya Pulau Berpenghuni</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6). Jumlah Mercusuar</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;2. Pulau Berpenghuni Tidak Tetap</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1). Jumlah Penduduk Singgah</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Jiwa</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2). Luas Daratan Pulau Berpenghuni Tidak Tetap</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Ha</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3). Luas Lahan Produktif Pulau Berpenghuni Tidak Tetap</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Ha</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4). Luas Lahan Budidaya Pulau Berpenghuni Tidak Tetap</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5). Jumlah Mercusuar</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;3. Pulau Tidak Berpenghuni</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;4. Pulau Bernama</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1). Jumlah Penduduk</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Jiwa</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2). Jumlah KK</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>KK</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3). Luas Daratan Pulau Bernama</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Ha</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4). Luas Lahan Produktif Pulau Bernama</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Ha</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5). Luas Lahan Budidaya Pulau Bernama</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6). Jumlah Mercusuar</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;5. Pulau Tidak Bernama</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1). Jumlah Penduduk</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Jiwa</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2). Jumlah KK</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>KK</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3). Luas Daratan Pulau Tidak Bernama</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Ha</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4). Luas Lahan Produktif Pulau Tidak Bernama</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Ha</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5). Luas Lahan Budidaya Pulau Tidak Bernama</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6). Jumlah Mercusuar</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;6. Pulau-Pulau Kecil (Luas di bawah 100 km <sup>2</sup> )</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1). Jumlah Penduduk</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Jiwa</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2). Jumlah KK</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>KK</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3). Luas Daratan Pulau-Pulau Kecil</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Ha</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3). Luas Lahan Produktif Pulau-Pulau Kecil</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Ha</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4). Luas Lahan Budidaya Pulau-Pulau Kecil</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5). Jumlah Mercusuar</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;7. Pulau Terluar / Perbatasan Dengan Negara Lain</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1). Jumlah Penduduk</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Jiwa</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2). Jumlah KK</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>KK</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3). Luas Daratan Pulau Berpenghuni</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Ha</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4). Luas Lahan Produktif Pulau Terluar</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Ha</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5). Luas Lahan Budidaya Pulau Terluar</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6). Jumlah Mercusuar</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>

                                    <tr>
                                          <td><strong>VI. Jumlah Gunung</strong></td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;1. Aktif</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;2. Non-Aktif</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;3. Vulkanik</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Buah</td>
                                    </tr>

                                    <tr>
                                          <td><strong>VII. Panjang Perbatasan Darat Dengan Negara Lain</strong></td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Km</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;1. Papua - Papua Nugini</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Km</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;2. Kalimantan - Malaysia</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Km</td>
                                    </tr>
                                    <tr>
                                          <td>&nbsp;&nbsp;3. NTT - Timor Leste</td>
                                          <td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
                                          <td>Km</td>
                                    </tr>

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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                              </table>
                  	</div>
                  </div>
            </div>
            <!-- End Geografi -->

            <!-- Pemerintahan -->
            <div class="box panel panel-primary">
                <div class="panel-heading">
                      <h3 class="panel-title"> Pemerintahan (Administrasi Pemerintahan, Aparatur Negara, Administrasi Kepegawaian)</h3>
                      <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default">
                        <i class="glyphicon glyphicon-chevron-up"></i></a>
                      </div>
                </div>

                <div class="box-content row">
                  <div class="col-lg-12 col-xs-12">
                        
                              <table width="100%">
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                              </table>

                  </div>
                </div>
            </div>
            <!-- End Pemerintahan -->

            <!-- Demografi -->
            <div class="box panel panel-primary">
                <div class="panel-heading">
                      <h3 class="panel-title"> Demografi</h3>
                      <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default">
                        <i class="glyphicon glyphicon-chevron-up"></i></a>
                      </div>
                </div>

                <div class="box-content row">
                  <div class="col-lg-12 col-xs-12">
                        
                              <table width="100%">
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
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
                                                <td width="0.5%"><?php echo $x['satuan']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                              </table>

                  </div>
                </div>
            </div>
            <!-- End Demografi -->

		<br /><span class="pull-right">
			<input type="reset" class="btn btn-danger" value="RESET" />
			<input type="submit" class="btn btn-success" value="SIMPAN" />
		</span>

</form>