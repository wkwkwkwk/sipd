<?php
    $dulu=$tahunini-5;
    $taun1=$dulu;
    $taun2=$dulu+1;
    $taun3=$dulu+2;
    $taun4=$dulu+3;
    $taun5=$dulu+4;
    
?>
<table border="1" width="120%">
    <caption>Uji Coba Laporan hingga tahun <?php echo $tahunini; ?> </caption>
    
        <thead>
            <th class="text-center" style="font-size:10px;">NAMA</th>
            <th class="text-center" style="font-size:10px;">2010</th>
            <th class="text-center" style="font-size:10px;">2011</th>
            <th class="text-center" style="font-size:10px;">2012</th>
            <th class="text-center" style="font-size:10px;">2013</th>
            <th class="text-center" style="font-size:10px;">2014</th>
            <th class="text-center" style="font-size:10px;">SATUAN</th>
            <th class="text-center" style="font-size:10px;">KETERSEDIAAN</th>
            <th class="text-center" style="font-size:10px;">SUMBER DATA</th>
        </thead>
        
        <tbody>
        <tr><td colspan="9"><strong>DATA UMUM - Geografi</strong></td></tr>
        <?php foreach ($dataLuasWilayah as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
        <?php foreach ($dataTopografi as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
        <?php foreach ($dataLuasLahan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataIklimRata as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPulau as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataGunung as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataBatasDarat as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataFisiografi as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>

        <tr><td colspan="9"><strong>DATA UMUM - Pemerintahan (Administrasi Pemerintahan, Aparatur Negara, Administrasi Kepegawaian)</strong></td></tr>
            <?php foreach ($dataAdminPmr as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataOtonomi as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPerdaIjin as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataSarpras as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>    
            <?php foreach ($dataKonSarpras as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>

        <tr><td colspan="9"><strong>DATA UMUM - Demografi</strong></td></tr>
            <?php foreach ($dataCapil as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataOrangLahan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataFamJob as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataOrgUsia as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataDeprat as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataDatduk as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataInoutsave as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataTenagakerja as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPblmu as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataTumduk as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataAngkaHidup as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPendudukDidik as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataKeluarga as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataRumtang as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataUrumtang as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataTanilayan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPAnak as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataTkunder as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>

        <tr><td colspan="9"><strong>SOSIAL BUDAYA - Kesehatan</strong></td></tr>
            <?php foreach ($dataSarkes as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataSIIF as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataKesmas as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataDagkes as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataTenkes as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataKompbidan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataUci as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPPPP as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPKRPMM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPKDPMM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataKunbay as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataKlb as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataSiagaaktif as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>

        <tr><td colspan="9"><strong>SOSIAL BUDAYA - Pendidikan, Kebudayaan Nasional Pemuda dan Olah Raga</strong></td></tr>
            <?php foreach ($dataDidikumum as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataSenbud as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataCabudtari as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPora as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataExpo as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPerpus as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataKPBPS as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataLulusanke as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataKualifikasiguru as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPenuhguru as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataMiliksekolah as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataSMKPT as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataLuluskerja as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataCabudda as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>

        <tr><td colspan="9"><strong>SOSIAL BUDAYA - Kesejahteraan Sosial</strong></td></tr>
            <?php foreach ($dataIPM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataJPM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataP1 as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataP2 as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataJamkesmasda as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataKemiskinan as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataKMTK as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataJPKLSM as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPSKS as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPMKS as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataMasos as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPKK as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPKTK as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataIndeksGini as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPPVBD as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataWilliamson as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>

        <tr><td colspan="9"><strong>SOSIAL BUDAYA - Agama</strong></td></tr>
            <?php foreach ($dataAgamaPeluk as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataSarib as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataHaji as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataKUA as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataPenyuluhagama as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
            <?php foreach ($dataLembagaAgama as $x) :?>
            <tr>
                <td width="60%" class="e">
                    <?php
                        if($x->id==1){echo "<strong>";echo $x->properti;echo $x->nama;echo "</strong>";}else{echo $x->properti;echo $x->nama;}?>
                </td>
                <td class="e"><?php echo $x->$taun1; ?></td>
                <td class="e"><?php echo $x->$taun2; ?></td>
                <td class="e"><?php echo $x->$taun3; ?></td>
                <td class="e"><?php echo $x->$taun4; ?></td>
                <td class="e"><?php echo $x->$taun5; ?></td>
                <!-- <td class="e"><?php /*echo $x->*/$tahunini; ?></td> -->
                <td class="e"><?php echo $x->satuan; ?></td>
                <td class="e"><?php echo $x->ketersediaan; ?></td>
                <td class="e"><?php echo $x->sumber_data; ?></td>
            </tr><?php endforeach; ?>
        </tbody>
       
</table>