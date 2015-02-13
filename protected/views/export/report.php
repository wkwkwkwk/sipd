<?php
    mysql_connect('localhost','root','');
    mysql_select_db("sipd");

    $tahe = date("Y");
    $sqlin = "SELECT `$tahe` FROM `sipd`.`ppk_vk`";
    $kuein = mysql_query($sqlin);
    if($kuein){
        $dulu=$tahunini-4;
    }else{
        $dulu=$tahunini-5;
        $tahunini = $tahunini-1;
    }
    
    $taun1=$dulu;
    $taun2=$dulu+1;
    $taun3=$dulu+2;
    $taun4=$dulu+3;
    $taun5=$dulu+4;
?>
<table border="1" width="120%">
    <caption class="text-center">8 KELOMPOK DATA SISTEM PEMBNGUNAN DAERAH<br/>KABUPATEN PURBALINGGA<br/>PARUH TAHUN <?php echo $tahunini; ?> </caption>
    
        <thead>
            <th class="text-center" style="font-size:10px;">NAMA</th>
            <th class="text-center" style="font-size:10px;"><?php echo $taun1; ?></th>
            <th class="text-center" style="font-size:10px;"><?php echo $taun2; ?></th>
            <th class="text-center" style="font-size:10px;"><?php echo $taun3; ?></th>
            <th class="text-center" style="font-size:10px;"><?php echo $taun4; ?></th>
            <th class="text-center" style="font-size:10px;"><?php echo $taun5; ?></th>
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
            <?php foreach ($dataRumTing as $x) :?>
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

            <!-- Data SDA -->
            <tr><td colspan="9"><strong>SUMBER DAYA ALAM - Pertanian, Kehutanan, Kelautan, Perikanan, Peternakan, Perkebunan</strong></td></tr>
            <?php foreach ($dataPertani as $x) :?>
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
            <?php foreach ($dataKultur as $x) :?>
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
            <?php foreach ($dataPerkebunan as $x) :?>
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
            <?php foreach ($dataPeternakan as $x) :?>
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
            <?php foreach ($dataIkanLaut as $x) :?>
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
            <?php foreach ($dataKeHutan as $x) :?>
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
            <tr><td colspan="9"><strong>SUMBER DAYA ALAM - Pertambangan dan Energi</strong></td></tr>
            <?php foreach ($dataTambang as $x) :?>
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
            <?php foreach ($dataKeleday as $x) :?>
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
            <tr><td colspan="9"><strong>3.9. Pertambangan dan Energi</strong></td></tr>
            <?php foreach ($dataKukuBima as $x) :?>
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
            <?php foreach ($dataTambang as $x) :?>
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
            <?php foreach ($dataLinkup as $x) :?>
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
            <?php foreach ($dataLinkupRusak as $x) :?>
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
            <?php foreach ($dataPelik as $x) :?>
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
            <?php foreach ($dataTarung as $x) :?>
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
            <?php foreach ($dataPerta as $x) :?>
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
            <?php foreach ($dataSalink as $x) :?>
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
            <?php foreach ($dataBuang as $x) :?>
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
            <?php foreach ($dataAlim as $x) :?>
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
            <!-- End SDA -->
            <!-- Data Infrastruktur -->
            <tr><td colspan="9"><strong>INFRASTRUKTUR - Perumahan dan Permukiman</strong></td></tr>
            <?php foreach ($dataPerum as $x) :?>
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
            <?php foreach ($dataJumah as $x) :?>
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
            <?php foreach ($dataLumah as $x) :?>
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
            <?php foreach ($dataPmukiman as $x) :?>
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
            <?php foreach ($dataJumBang as $x) :?>
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
            <?php foreach ($dataTiKum as $x) :?>
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
            <?php foreach ($dataIlegal as $x) :?>
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
            <?php foreach ($dataBantaran as $x) :?>
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
            <?php foreach ($dataRusut as $x) :?>
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
            <?php foreach ($dataRuPublik as $x) :?>
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
            <?php foreach ($dataRutasi as $x) :?>
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
            <tr><td colspan="9"><strong>INFRASTRUKTUR - Pekerjaan Umum</strong></td></tr>
            <?php foreach ($dataPJJLAN as $x) :?>
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
            <?php foreach ($dataKonJalan as $x) :?>
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
            <?php foreach ($dataPakon as $x) :?>
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
            <?php foreach ($dataJabung as $x) :?>
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
            <?php foreach ($dataJembatan as $x) :?>
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
            <?php foreach ($dataPFungsi as $x) :?>
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
            <?php foreach ($dataKuburan as $x) :?>
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
            <?php foreach ($dataAiri as $x) :?>
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
            <?php foreach ($dataPaLik as $x) :?>
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
            <?php foreach ($dataSempadan as $x) :?>
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
            <?php foreach ($dataDrainase as $x) :?>
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
            <?php foreach ($dataTurap as $x) :?>
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
            <?php foreach ($dataSuram as $x) :?>
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
            <tr><td colspan="9"><strong>INFRASTRUKTUR - Pariwisata, POS, Telekomunikasi dan Informatika</strong></td></tr>
            <?php foreach ($dataParwis as $x) :?>
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
            <?php foreach ($dataTelkom as $x) :?>
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
            <?php foreach ($dataKoran as $x) :?>
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
            <?php foreach ($dataMedelek as $x) :?>
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
            <?php foreach ($dataSipeda as $x) :?>
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
            <tr><td colspan="9"><strong>INFRASTRUKTUR - Perhubungan dan Transportasi</strong></td></tr>
            <?php foreach ($dataPerhub as $x) :?>
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
            <?php foreach ($dataAngkutUmum as $x) :?>
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
            <?php foreach ($dataTransprot as $x) :?>
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
            <?php foreach ($dataKendaraMotor as $x) :?>
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
            <!-- End Data Infrastruktur -->
            <!-- Data Ekonomi -->
            <tr><td colspan="9"><strong>EKONOMI - Industri, Perdagangan, Pengembangan Usaha Nasional, Lembaga Keuangan dan Koperasi</strong></td></tr>
            <?php foreach ($dataIndustri as $x) :?>
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
            <?php foreach ($dataPerdagangan as $x) :?>
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
            <?php foreach ($dataUsahaNas as $x) :?>
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
            <?php foreach ($dataNonMigas as $x) :?>
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
            <?php foreach ($dataIOIndustri as $x) :?>
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
            <?php foreach ($dataPerijinan as $x) :?>
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
            <?php foreach ($dataSubSektor as $x) :?>
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
            <tr><td colspan="9"><strong>EKONOMI - BUMD, Perbankan Daerah dan Lembaga Keuangan Daerah</strong></td></tr>
            <?php foreach ($dataPma as $x) :?>
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
            <?php foreach ($dataPmdn as $x) :?>
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
            <?php foreach ($dataBpr as $x) :?>
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
            <?php foreach ($dataBankUmum as $x) :?>
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
            <?php foreach ($dataAsuRugi as $x) :?>
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
            <?php foreach ($dataAsuJiwa as $x) :?>
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
            <?php foreach ($dataInvesNas as $x) :?>
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
            <?php foreach ($dataJasaUang as $x) :?>
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
            <?php foreach ($dataUkmNon as $x) :?>
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
            <?php foreach ($dataPerbankan as $x) :?>
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
            <!-- End Data Ekonomi -->

         <tr><td colspan="9"><strong>POLITIK, HUKUM DAN KEAMANAN - Politik Dalam Negeri dan Pengawasan</strong></td></tr>
            <?php foreach ($dataDPRD as $x) :?>
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
            <?php foreach ($dataKomposisiDPRD as $x) :?>
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
            <?php foreach ($dataJumlahfraksi as $x) :?>
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
            <?php foreach ($dataParpol as $x) :?>
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
            <?php foreach ($dataKpm as $x) :?>
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
            <?php foreach ($dataTpp as $x) :?>
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
            <?php foreach ($dataOrmas as $x) :?>
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
            <?php foreach ($dataLPM as $x) :?>
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
            <?php foreach ($dataPPM as $x) :?>
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
            <?php foreach ($dataJSSM as $x) :?>
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
            <?php foreach ($dataJPPMD as $x) :?>
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
            <?php foreach ($dataLSM as $x) :?>
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
            <?php foreach ($dataJKPPD as $x) :?>
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

        <tr><td colspan="9"><strong>POLITIK, HUKUM DAN KEAMANAN - Hukum</strong></td></tr>
            <?php foreach ($dataPH as $x) :?>
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
            <?php foreach ($dataJKTD as $x) :?>
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
            <?php foreach ($dataJKYT as $x) :?>
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
            <?php foreach ($dataKelembagaan as $x) :?>
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
            <?php foreach ($dataTindakkriminal as $x) :?>
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
            <?php foreach ($dataKriminaltangan as $x) :?>
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

        <tr><td colspan="9"><strong>POLITIK, HUKUM DAN KEAMANAN - Keamanan, Ketertiban Masyarakat</strong></td></tr>
            <?php foreach ($dataKKM as $x) :?>
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

        <tr><td colspan="9"><strong>INSIDENSIAL - Bencana Alam</strong></td></tr>
            <?php foreach ($dataPengungsi as $x) :?>
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
            <?php foreach ($dataPengungsian as $x) :?>
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
            <?php foreach ($dataPengungsiBalik as $x) :?>
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
            <?php foreach ($dataPengungsiRelokasi as $x) :?>
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
            <?php foreach ($dataKorbanBencana as $x) :?>
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
            <?php foreach ($dataLokasiBencana as $x) :?>
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
            <?php foreach ($dataKecamatanLokasiBencana as $x) :?>
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
            <?php foreach ($dataRugiBencana as $x) :?>
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
            <?php foreach ($dataKebutuhanBantuan as $x) :?>
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

        <tr><td colspan="9"><strong>INSIDENSIAL - Penyakit Menular</strong></td></tr>
            <?php foreach ($dataKasusWabah as $x) :?>
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
            <?php foreach ($dataEndemiHewan as $x) :?>
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

        <tr><td colspan="9"><strong>INSIDENSIAL - Pencurian Ikan</strong></td></tr>
            <?php foreach ($dataKasusCuriIkan as $x) :?>
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
            <?php foreach ($dataKapalCuriIkan as $x) :?>
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
            <?php foreach ($dataLokasiCuriIkan as $x) :?>
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

        <tr><td colspan="9"><strong>INSIDENSIAL - Kebakaran Hutan</strong></td></tr>
            <?php foreach ($dataHutanBakar as $x) :?>
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
            <?php foreach ($dataKorbanHutanBakar as $x) :?>
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
            <?php foreach ($dataLokasiHutanBakar as $x) :?>
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

        <tr><td colspan="9"><strong>INSIDENSIAL - Pencurian dan Penyelundupan Kayu</strong></td></tr>
            <?php foreach ($dataVolumeKayu as $x) :?>
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
            <?php foreach ($dataKasusCuriKayu as $x) :?>
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
            <?php foreach ($dataLokasiCuriKayu as $x) :?>
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