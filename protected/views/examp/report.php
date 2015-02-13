
<table border="1" width="120%">
	<center><strong style="font-size:16px;">7 KELOMPOK DATA SISTEM PEMBANGUNAN DAERAH<br/>KABUPATEN PURBALINGGA<br/>PARUH TAHUN <?php echo $initahun; ?></strong></center>
	
		<thead>
            <th class="text-center" style="font-size:10px;">NAMA</th>
            <th class="text-center" style="font-size:10px;"><?php echo $initahun; ?></th>
            <th class="text-center" style="font-size:10px;">SATUAN</th>
            <th class="text-center" style="font-size:10px;">KETERSEDIAAN</th>
            <th class="text-center" style="font-size:10px;">SUMBER DATA</th>
        </thead>
        
        <tbody>
            <!-- Mulai -->
            <?php 
                foreach ($dataLuasWilayah as $y) :$isilah = explode("#", $y['isian']);endforeach;
            ?>
            <tr>
                <td colspan="5"><strong>DATA UMUM - Geografi</strong></td>
            </tr>
            <?php $i=0; foreach ($tblLuasWilayah as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataTopografi as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            
            <?php $i=0; foreach ($tblTopografi as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataLuasLahan as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            
            <?php $i=0; foreach ($tblLuasLahan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataIklimRata as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            
            <?php $i=0; foreach ($tblIklimRata as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPulau as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            
            <?php $i=0; foreach ($tblPulau as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataGunung as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
           
            <?php $i=0; foreach ($tblGunung as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
             <?php foreach ($dataBatasDarat as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            
            <?php $i=0; foreach ($tblBatasDarat as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataFisiografi as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblFisiografi as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>DATA UMUM - Pemerintahan (Administrasi Pemerintahan, Aparatur Negara, Administrasi Kepegawaian)</strong></td>
            </tr>
            <?php foreach ($dataAdminPmr as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblAdminPmr as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataOtonomi as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblOtonomi as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPerdaIjin as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPerdaIjin as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataSarpras as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblSarpras as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKonSarpras as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKonSarpras as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>DATA UMUM - Demografi</strong></td>
            </tr>
            <?php foreach ($dataCapil as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblCapil as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataOrangLahan as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblOrangLahan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataFamJob as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblFamJob as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataOrgUsia as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblOrgUsia as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataDeprat as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblDeprat as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataDatduk as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblDatduk as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataInoutsave as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblInoutsave as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataTenagakerja as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblTenagakerja as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPblmu as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPblmu as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataTumduk as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblTumduk as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataAngkaHidup as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblAngkaHidup as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPendudukDidik as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPendudukDidik as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKeluarga as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKeluarga as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataRumtang as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblRumtang as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataUrumtang as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblUrumtang as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataRumTing as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblRumTing as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataTanilayan as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblTanilayan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPAnak as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPAnak as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataTkunder as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblTkunder as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>SOSIAL BUDAYA - Kesehatan</strong></td>
            </tr>
            <?php foreach ($dataSarkes as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblSarkes as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataSIIF as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblSIIF as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKesmas as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKesmas as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataDagkes as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblDagkes as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataTenkes as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblTenkes as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKompbidan as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKompbidan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataUci as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblUci as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPPPP as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPPPP as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPKRPMM as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPKRPMM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPKDPMM as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPKDPMM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKunbay as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKunbay as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKlb as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKlb as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataSiagaaktif as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblSiagaaktif as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>SOSIAL BUDAYA - Pendidikan, Kebudayaan Nasional Pemuda dan Olah Raga</strong></td>
            </tr>
            <?php foreach ($dataDidikumum as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblDidikumum as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataSenbud as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblSenbud as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataCabudtari as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblCabudtari as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPora as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPora as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataExpo as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblExpo as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPerpus as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPerpus as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKPBPS as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKPBPS as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataLulusanke as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblLulusanke as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKualifikasiguru as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKualifikasiguru as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPenuhguru as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPenuhguru as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataMiliksekolah as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblMiliksekolah as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataSMKPT as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblSMKPT as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataLuluskerja as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblLuluskerja as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataCabudda as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblCabudda as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>SOSIAL BUDAYA - Kesejahteraan Sosial</strong></td>
            </tr>
            <?php foreach ($dataIPM as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblIPM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataJPM as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblJPM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataP1 as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblP1 as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataP2 as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblP2 as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataJamkesmasda as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblJamkesmasda as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKemiskinan as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKemiskinan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKMTK as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKMTK as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataJPKLSM as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblJPKLSM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPSKS as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPSKS as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPMKS as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPMKS as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataMasos as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblMasos as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPKK as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPKK as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPKTK as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPKTK as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataIndeksGini as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblIndeksGini as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPPVBD as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPPVBD as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataWilliamson as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblWilliamson as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>SOSIAL BUDAYA - Agama</strong></td>
            </tr>
            <?php foreach ($dataAgamaPeluk as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblAgamaPeluk as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataSarib as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblSarib as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataHaji as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblHaji as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKUA as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKUA as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPenyuluhagama as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPenyuluhagama as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataLembagaAgama as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblLembagaAgama as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Start SDA -->
            <tr>
                <td colspan="5"><strong>SUMBER DAYA ALAM - Pertanian, Kehutanan, Kelautan, Perikanan, Peternakan, Perkebunan</strong></td>
            </tr>
            <!-- Mulai -->
            <?php 
                foreach ($dataTani as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblTani as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataHorti as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblHorti as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataPerek as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblPerek as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataPeter as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblPeter as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php /*echo $isilah[$i];*/ ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataLikan as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblLikan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataKetan as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblKetan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataKesos as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblKesos as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <tr>
                <td colspan="5"><strong>SUMBER DAYA ALAM - Pertambangan dan Energi</strong></td>
            </tr>
            <!-- Mulai -->
            <?php 
                foreach ($dataTambang as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblTambang as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataEnergi as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblEnergi as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <tr>
                <td colspan="5"><strong>SUMBER DAYA ALAM - Lingkungan Hidup, Tata Ruang dan Pertanahan</strong></td>
            </tr>
            <!-- Mulai -->
            <?php 
                foreach ($dataLiup as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblLiup as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataRuli as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblRuli as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataTarlink as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblTarlink as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataTarung as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblTarung as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataPerah as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblPerah as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataAlink as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblAlink as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataSampah as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblSampah as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataAlim as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblAlim as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- End SDA -->
            <!-- Start Infrastruktur -->
            <tr>
                <td colspan="5"><strong>INFRASTRUKTUR - Perumahan dan Permukiman</strong></td>
            </tr>
            <!-- Mulai -->
            <?php 
                foreach ($dataPerum as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblPerum as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataJarah as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblJarah as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataLurah as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblLurah as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataAmuk as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblAmuk as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataJambang as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblJambang as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataKumuh as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblKumuh as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataIlegal as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblIlegal as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataBantar as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblBantar as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataSutet as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblSutet as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataRubik as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblRubik as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataRusa as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblRusa as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <tr>
                <td colspan="5"><strong>INFRASTRUKTUR - Pekerjaan Umum</strong></td>
            </tr>
            <!-- Mulai -->
            <?php 
                foreach ($dataPejalan as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblPejalan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataKonjalan as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblKonjalan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataJakon as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblJakon as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataJalung as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblJalung as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataBrug as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblBrug as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataPungsi as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblPungsi as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataPakam as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblPakam as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataPair as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblPair as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataPemilik as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblPemilik as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataSempadan as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblSempadan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataDrain as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblDrain as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataTurap as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblTurap as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataSuram as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblSuram as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataMuai as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblMuai as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataDaykam as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblDaykam as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <tr>
                <td colspan="5"><strong>INFRASTRUKTUR - Pariwisata, POS, Telekomunikasi dan Informatika</strong></td>
            </tr>
            <!-- Mulai -->
            <?php 
                foreach ($dataParwis as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblParwis as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataTelkom as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblTelkom as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataKabar as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblKabar as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataSiar as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblSiar as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataSipeda as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblSipeda as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <tr>
                <td colspan="5"><strong>INFRASTRUKTUR - Perhubungan dan Transportasi</strong></td>
            </tr>
            <!-- Mulai -->
            <?php 
                foreach ($dataPerhub as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblPerhub as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataAngkum as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblAngkum as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataTrans as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblTrans as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataImot as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblImot as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- End Infrastruktur -->
            <!-- Start Ekonomi -->
            <tr>
                <td colspan="5"><strong>EKONOMI - Industri, Perdagangan, Pengembangan Usaha Nasional, Lembaga Keuangan dan Koperasi</strong></td>
            </tr>
            <!-- Mulai -->
            <?php 
                foreach ($dataEkoIndustri as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblEkoIndustri as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php /*echo $isilah[$i];*/ ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataEsper as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblEsper as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataEsunas as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblEsunas as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataEkomigas as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblEkomigas as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataIon as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblIon as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataEkoijin as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblEkoijin as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataSuse as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblSuse as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <tr>
                <td colspan="5"><strong>EKONOMI - BUMD, Perbankan Daerah dan Lembaga Keuangan Daerah</strong></td>
            </tr>
            <!-- Mulai -->
            <?php 
                foreach ($dataEkopma as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblEkopma as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataEkopmdn as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblEkopmdn as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataEkobpr as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblEkobpr as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataBangku as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblBangku as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataAru as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblAru as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataAji as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblAji as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataNavas as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblNavas as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataJau as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblJau as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataNoob as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblNoob as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php 
                foreach ($dataPerban as $y) :
                    $isilah = explode("#", $y['isian']);
                endforeach;
            ?>
            <?php $i=0; foreach ($tblPerban as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="text-center e"><?php echo $isilah[$i]; ?></td>
                <td class="text-center e"><?php echo $x['satuan']; ?></td>
                <td class="text-center e"><?php echo $x['ketersediaan']; ?></td>
                <td class="text-center e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- End Ekonomi -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>POLITIK, HUKUM, DAN KEAMANAN - Politik Dalam Negeri dan Pengawasan</strong></td>
            </tr>
            <?php foreach ($dataDPRD as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblDPRD as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKomposisiDPRD as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKomposisiDPRD as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataJumlahfraksi as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblJumlahfraksi as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataParpol as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblParpol as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKpm as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKpm as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataTpp as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblTpp as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataOrmas as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblOrmas as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataLPM as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblLPM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPPM as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPPM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataJSSM as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblJSSM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataJPPMD as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblJPPMD as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataLSM as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblLSM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataJKPPD as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblJKPPD as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>POLITIK, HUKUM, DAN KEAMANAN - Hukum</strong></td>
            </tr>
            <?php foreach ($dataPH as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPH as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataJKTD as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblJKTD as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataJKYT as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblJKYT as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKelembagaan as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKelembagaan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataTindakkriminal as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblTindakkriminal as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKriminaltangan as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKriminaltangan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>POLITIK, HUKUM, DAN KEAMANAN - Keamanan, Ketertiban Masyarakat</strong></td>
            </tr>
            <?php foreach ($dataKKM as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKKM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>INSIDENSIAL - Bencana Alam</strong></td>
            </tr>
            <?php foreach ($dataPengungsi as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPengungsi as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPengungsian as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPengungsian as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPengungsiBalik as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPengungsiBalik as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataPengungsiRelokasi as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblPengungsiRelokasi as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKorbanBencana as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKorbanBencana as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataLokasiBencana as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblLokasiBencana as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKecamatanLokasiBencana as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKecamatanLokasiBencana as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataRugiBencana as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblRugiBencana as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKebutuhanBantuan as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKebutuhanBantuan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>INSIDENSIAL - Penyakit Menular</strong></td>
            </tr>
            <?php foreach ($dataKasusWabah as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKasusWabah as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataEndemiHewan as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblEndemiHewan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>INSIDENSIAL - Pencurian Ikan</strong></td>
            </tr>
            <?php foreach ($dataKasusCuriIkan as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKasusCuriIkan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKapalCuriIkan as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKapalCuriIkan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataLokasiCuriIkan as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblLokasiCuriIkan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>INSIDENSIAL - Kebakaran Hutan</strong></td>
            </tr>
            <?php foreach ($dataHutanBakar as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblHutanBakar as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKorbanHutanBakar as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKorbanHutanBakar as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataLokasiHutanBakar as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblLokasiHutanBakar as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <tr>
                <td colspan="5"><strong>INSIDENSIAL - Pencurian dan Penyelundupan Kayu</strong></td>
            </tr>
            <?php foreach ($dataVolumeKayu as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblVolumeKayu as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataKasusCuriKayu as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblKasusCuriKayu as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
            <!-- Mulai -->
            <?php foreach ($dataLokasiCuriKayu as $y) :$isilah = explode("#", $y['isian']);endforeach; ?>
            <?php $i=0; foreach ($tblLokasiCuriKayu as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x['id']==1){echo "<strong>";echo $x['properti'];echo $x['nama'];echo "</strong>";}else{echo $x['properti'];echo $x['nama'];}?>
                </td>
                <td class="e"><?php echo $isilah[$i]; ?></td>
                <td class="e"><?php echo $x['satuan']; ?></td>
                <td class="e"><?php echo $x['ketersediaan']; ?></td>
                <td class="e"><?php echo $x['sumber_data']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
            <!-- Akhir -->
        </tbody>
</table>