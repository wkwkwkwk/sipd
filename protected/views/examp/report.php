<table class="table table-bordered table-hover" width="150%">
    <caption class="text-center">8 KELOMPOK DATA SISTEM PEMBNGUNAN DAERAH<br/>KABUPATEN PURBALINGGA<br/>PARUH TAHUN <?php echo $initahun; ?> </caption>
    
        <thead>
            <th class="text-center" style="font-size:10px;">NAMA</th>
            <th class="text-center" style="font-size:10px;"><?php echo $initahun; ?></th>
            <th class="text-center" style="font-size:10px;">SATUAN</th>
            <th class="text-center" style="font-size:10px;">KETERSEDIAAN</th>
            <th class="text-center" style="font-size:10px;">SUMBER DATA</th>
        </thead>
        
        <tbody>
            <!-- Start Data SDA -->
            <tr>
                <td colspan="5"><strong>DATA SUMBER DAYA ALAM - Pertanian, Kehutanan, Kelautan, Perikanan, Peternakan, Perkebunan</strong></td>
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
                <td colspan="5"><strong>DATA SUMBER DAYA ALAM - Pertambangan dan Energi</strong></td>
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
                <td colspan="5"><strong>DATA SUMBER DAYA ALAM - Lingkungan Hidup, Tata Ruang dan Pertanahan</strong></td>
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
            <!-- End Data SDA -->
            <!-- Start Data Infrastruktur -->
            <tr>
                <td colspan="5"><strong>DATA INFRASTRUKTUR - Perumahan dan Permukiman</strong></td>
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
                <td colspan="5"><strong>DATA INFRASTRUKTUR - Pekerjaan Umum</strong></td>
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
                <td colspan="5"><strong>DATA INFRASTRUKTUR - Pariwisata, POS, Telekomunikasi dan Informatika</strong></td>
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
                <td colspan="5"><strong>DATA INFRASTRUKTUR - Perhubungan dan Transportasi</strong></td>
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
            <!-- End Data Infrastruktur -->
            <!-- Start Data Ekonomi -->
            <tr>
                <td colspan="5"><strong>DATA EKONOMI - Industri, Perdagangan, Pengembangan Usaha Nasional, Lembaga Keuangan dan Koperasi</strong></td>
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
                <td colspan="5"><strong>DATA EKONOMI - BUMD, Perbankan Daerah dan Lembaga Keuangan Daerah</strong></td>
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
            <!-- End Data Ekonomi -->
        </tbody>
</table>