<?php 
	mysql_connect('localhost','root','');
	mysql_select_db("sipd");

	$orahan = date("m");
    if($orahan=="01" || $orahan=="02" || $orahan=="03" || $orahan=="04" || $orahan=="05" || $orahan=="06" || $orahan=="07"){
        $tahe = date("Y");
        $cekin1 = "SELECT `$tahe` FROM `sipd`.`geo_luas_wil`";
        $kuekna1 = mysql_query($cekin1);
        if($kuekna1){$hiasan1 = "disabled";}else{$hiasan1 = "";}}else{$hiasan1 = "";}
    $ora1 = date("m");
    if($ora1=="01" || $ora1=="02" || $ora1=="03" || $ora1=="04" || $ora1=="05" || $ora1=="06" || $ora1=="07"){
        $tahe = date("Y");
        $cekin2 = "SELECT `$tahe` FROM `sipd`.`kes_sarkes`";
        $kuekna2 = mysql_query($cekin2);
        if($kuekna2){$hiasan2 = "disabled";}else{$hiasan2 = "";}}else{$hiasan2 = "";}
    $ora2 = date("m");
    if($ora2=="01" || $ora2=="02" || $ora2=="03" || $ora2=="04" || $ora2=="05" || $ora2=="06" || $ora2=="07"){
        $tahe = date("Y");
        $cekin3 = "SELECT `$tahe` FROM `sipd`.`pdnp_jad`";$cekin4 = "SELECT `$tahe` FROM `sipd`.`kes_sarkes`";
        $kuekna3 = mysql_query($cekin3);$kuekna4 = mysql_query($cekin4);
        if($kuekna3){$hiasan3 = "disabled";}else{$hiasan3 = "";}}else{$hiasan3 = "";}
    $ora3 = date("m");
    if($ora3=="01" || $ora3=="02" || $ora3=="03" || $ora3=="04" || $ora3=="05" || $ora3=="06" || $ora3=="07"){
        $tahe = date("Y");
        $cekin4 = "SELECT `$tahe` FROM `sipd`.`ben_jkba`";
        $kuekna4 = mysql_query($cekin4);
        if($kuekna4){$hiasan4 = "disabled";}else{$hiasan4 = "";}}else{$hiasan4 = "";}
    $ora = date("m");
    if($ora=="01" || $ora=="02" || $ora=="03" || $ora=="04" || $ora=="05" || $ora=="06" || $ora=="07"){
        $tahe = date("Y");
        $sqlin = "SELECT `$tahe` FROM `sipd`.`infra_turap`";
        $kuein = mysql_query($sqlin);
        if($kuein){$hiasan = "disabled";}else{$hiasan = "";}}else{$hiasan = "";}
    $iya = date("m");
    if($iya=="01" || $iya=="02" || $iya=="03" || $iya=="04" || $iya=="05" || $iya=="06" || $iya=="07"){
        $tahe = date("Y");
        $sqlin = "SELECT `$tahe` FROM `sipd`.`infra_turap`";
        $kuein = mysql_query($sqlin);
        if($kuein){$hiasan = "disabled";}else{$hiasin = "";}}else{$hiasin = "";}
    $ina = date("m");
    if($ina=="01" || $ina=="02" || $ina=="03" || $ina=="04" || $ina=="05" || $ina=="06" || $ina=="07"){
        $tahe = date("Y");
        $sqlin = "SELECT `$tahe` FROM `sipd`.`infra_turap`";
        $kuein = mysql_query($sqlin);
        if($kuein){$hiaslah = "disabled";}else{$hiaslah = "";}}else{$hiaslah = "";}
    
    if(isset($_POST['bukainsi'])){
		$aa = date("m");
        if($aa=="01" || $aa=="02" || $aa=="03" || $aa=="04" || $aa=="05" || $aa=="06" || $aa=="07"){
            $thn = date("Y");$mm = $thn - 1;
                $sql = "SELECT `$thn` FROM `sipd`.`ag_sarib`";
                $kue = mysql_query($sql);
                if($kue){
                    echo "<script type=text/javascript>alert('Peringatan! Pengisian SIPD tahun ";
                    echo $thn;
                    echo " kelompok Insidensial sudah terbuka.')</script>";
                }else{
                    $sql1 = "ALTER TABLE `sipd`.`ben_jkba` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql2 = "ALTER TABLE `sipd`.`ben_jklb` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql3 = "ALTER TABLE `sipd`.`ben_jlb` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql4 = "ALTER TABLE `sipd`.`ben_jpa` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql5 = "ALTER TABLE `sipd`.`ben_jpd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql6 = "ALTER TABLE `sipd`.`ben_jpkl` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql7 = "ALTER TABLE `sipd`.`ben_jpl` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql8 = "ALTER TABLE `sipd`.`ben_jpkab` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql9 = "ALTER TABLE `sipd`.`ben_kb` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql10 = "ALTER TABLE `sipd`.`pm_jkw` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql11 = "ALTER TABLE `sipd`.`pm_eph` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql12 = "ALTER TABLE `sipd`.`pikan_jkpi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql13 = "ALTER TABLE `sipd`.`pikan_jikap` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql14 = "ALTER TABLE `sipd`.`pikan_jlpi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql15 = "ALTER TABLE `sipd`.`khut_lah` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql16 = "ALTER TABLE `sipd`.`khut_jkj` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql17 = "ALTER TABLE `sipd`.`khut_jlkh` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql18 = "ALTER TABLE `sipd`.`ppk_vk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql19 = "ALTER TABLE `sipd`.`ppk_jk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql20 = "ALTER TABLE `sipd`.`ppk_jlpp` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql21 = "ALTER TABLE `sipd`.`kesos_kemiskinan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql22 = "ALTER TABLE `sipd`.`kesos_kmtk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql23 = "ALTER TABLE `sipd`.`kesos_jkplsm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql24 = "ALTER TABLE `sipd`.`ag_nyuluh` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql25 = "ALTER TABLE `sipd`.`ag_sarib` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $kue1 = mysql_query($sql1);$kue2 = mysql_query($sql2);$kue3 = mysql_query($sql3);$kue4 = mysql_query($sql4);$kue5 = mysql_query($sql5);$kue6 = mysql_query($sql6);$kue7 = mysql_query($sql7);$kue8 = mysql_query($sql8);$kue9 = mysql_query($sql9);$kue10 = mysql_query($sql10);$kue11 = mysql_query($sql11);$kue12 = mysql_query($sql12);$kue13 = mysql_query($sql13);$kue14 = mysql_query($sql14);$kue15 = mysql_query($sql15);$kue16 = mysql_query($sql16);$kue17 = mysql_query($sql17);$kue18 = mysql_query($sql18);$kue19 = mysql_query($sql19);$kue20 = mysql_query($sql20);$kue21 = mysql_query($sql21);$kue22 = mysql_query($sql22);$kue23 = mysql_query($sql23);$kue24 = mysql_query($sql24);$kue25 = mysql_query($sql25);
                    if($kue25){echo "<script type='text/javascript'>alert('Pengisian SIPD tahun ";echo $thn;echo " kelompok Insidensial berhasil.')</script>";echo "<meta http-equiv='refresh' content=0;url='show' />";}
                }
        }else{
            $tahu = date("Y");
            $sqlin1 = "DELETE `$tahu` FROM `sipd`.`ben_jkba`";$sqlin2 = "DELETE `$tahu` FROM `sipd`.`ben_jklb`";
            $sqlin3 = "DELETE `$tahu` FROM `sipd`.`ben_jlb`";$sqlin4 = "DELETE `$tahu` FROM `sipd`.`ben_jpa`";
            $sqlin5 = "DELETE `$tahu` FROM `sipd`.`ben_jpd`";$sqlin6 = "DELETE `$tahu` FROM `sipd`.`ben_jpkl`";
            $sqlin7 = "DELETE `$tahu` FROM `sipd`.`ben_jpl`";$sqlin8 = "DELETE `$tahu` FROM `sipd`.`ben_jpkab`";
            $sqlin9 = "DELETE `$tahu` FROM `sipd`.`ben_kb`";$sqlin10 = "DELETE `$tahu` FROM `sipd`.`pm_jkw`";
            $sqlin11 = "DELETE `$tahu` FROM `sipd`.`pm_eph`";$sqlin12 = "DELETE `$tahu` FROM `sipd`.`pikan_jkpi`";
            $sqlin13 = "DELETE `$tahu` FROM `sipd`.`pikan_jikap`";$sqlin14 = "DELETE `$tahu` FROM `sipd`.`pikan_jlpi`";
            $sqlin15 = "DELETE `$tahu` FROM `sipd`.`khut_lah`";$sqlin16 = "DELETE `$tahu` FROM `sipd`.`khut_jkj`";
            $sqlin17 = "DELETE `$tahu` FROM `sipd`.`khut_jlkh`";$sqlin18 = "DELETE `$tahu` FROM `sipd`.`ppk_vk`";
            $sqlin19 = "DELETE `$tahu` FROM `sipd`.`ppk_jk`";$sqlin20 = "DELETE `$tahu` FROM `sipd`.`ppk_jlpp`";
            $sqlin21 = "DELETE `$tahu` FROM `sipd`.`kesos_kemiskinan`";$sqlin22 = "DELETE `$tahu` FROM `sipd`.`kesos_kmtk`";
            $sqlin23 = "DELETE `$tahu` FROM `sipd`.`kesos_jkplsm`";$sqlin24 = "DELETE `$tahu` FROM `sipd`.`ag_nyuluh`";$sqlin25 = "DELETE `$tahu` FROM `sipd`.`ag_sarib`";
            $kuein1 = mysql_query($sqlin1);$kuein2 = mysql_query($sqlin2);$kuein3 = mysql_query($sqlin3);$kuein4 = mysql_query($sqlin4);$kuein5 = mysql_query($sqlin5);$kuein6 = mysql_query($sqlin6);$kuein7 = mysql_query($sqlin7);$kuein8 = mysql_query($sqlin8);$kuein9 = mysql_query($sqlin9);$kuein10 = mysql_query($sqlin10);$kuein11 = mysql_query($sqlin11);$kuein12 = mysql_query($sqlin12);$kuein13 = mysql_query($sqlin13);$kuein14 = mysql_query($sqlin14);$kuein15 = mysql_query($sqlin15);$kuein16 = mysql_query($sqlin16);$kuein17 = mysql_query($sqlin17);$kuein18 = mysql_query($sqlin18);$kuein19 = mysql_query($sqlin19);$kuein20 = mysql_query($sqlin20);$kuein21 = mysql_query($sqlin21);$kuein22 = mysql_query($sqlin22);$kuein23 = mysql_query($sqlin23);$kuein24 = mysql_query($sqlin24);$kuein25 = mysql_query($sqlin25);
	   }
	}else if(isset($_POST['bukapol'])){
        $aa = date("m");
        if($aa=="01" || $aa=="02" || $aa=="03" || $aa=="04" || $aa=="05" || $aa=="06" || $aa=="07"){
            $thn = date("Y");
            $mm = $thn - 1;
                $sql = "SELECT `$thn` FROM `sipd`.`ag_lembagadidik`";
                $kue = mysql_query($sql);
                if($kue){
                    echo "<script type=text/javascript>alert('Peringatan! Pengisian SIPD tahun ";
                    echo $thn;
                    echo " kelompok Polhukam sudah terbuka.')</script>";
                }else{
                    $sql1 = "ALTER TABLE `sipd`.`pdnp_jad` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql2 = "ALTER TABLE `sipd`.`pdnp_kadbjk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql3 = "ALTER TABLE `sipd`.`pdnp_jfd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql4 = "ALTER TABLE `sipd`.`pdnp_parpol` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql5 = "ALTER TABLE `sipd`.`pdnp_kpm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql6 = "ALTER TABLE `sipd`.`pdnp_tpp` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql7 = "ALTER TABLE `sipd`.`pdnp_ormas` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql8 = "ALTER TABLE `sipd`.`pdnp_jlpm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql9 = "ALTER TABLE `sipd`.`pdnp_jppm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql10 = "ALTER TABLE `sipd`.`pdnp_jsmm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql11 = "ALTER TABLE `sipd`.`pdnp_jppmd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql12 = "ALTER TABLE `sipd`.`pdnp_lswm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql13 = "ALTER TABLE `sipd`.`pdnp_jkppd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql14 = "ALTER TABLE `sipd`.`huk_ph` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql15 = "ALTER TABLE `sipd`.`huk_jktd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql16 = "ALTER TABLE `sipd`.`huk_jkyt` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql17 = "ALTER TABLE `sipd`.`huk_kel` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql18 = "ALTER TABLE `sipd`.`huk_jtk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql19 = "ALTER TABLE `sipd`.`huk_jtkd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql20 = "ALTER TABLE `sipd`.`kkm_kkm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql21 = "ALTER TABLE `sipd`.`kesos_psks` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql22 = "ALTER TABLE `sipd`.`kesos_pmk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql23 = "ALTER TABLE `sipd`.`kesos_masos` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql24 = "ALTER TABLE `sipd`.`kesos_pkk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql25 = "ALTER TABLE `sipd`.`kesos_pktk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql26 = "ALTER TABLE `sipd`.`kesos_indeksgini` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql27 = "ALTER TABLE `sipd`.`kesos_ppvbd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql28 = "ALTER TABLE `sipd`.`kesos_williamson` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql29 = "ALTER TABLE `sipd`.`ag_haji` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql30 = "ALTER TABLE `sipd`.`ag_jmlpeluk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql31 = "ALTER TABLE `sipd`.`ag_kua` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql32 = "ALTER TABLE `sipd`.`ag_lembagadidik` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $kue1 = mysql_query($sql1);$kue2 = mysql_query($sql2);$kue3 = mysql_query($sql3);$kue4 = mysql_query($sql4);$kue5 = mysql_query($sql5);$kue6 = mysql_query($sql6);$kue7 = mysql_query($sql7);$kue8 = mysql_query($sql8);$kue9 = mysql_query($sql9);$kue10 = mysql_query($sql10);$kue11 = mysql_query($sql11);$kue12 = mysql_query($sql12);$kue13 = mysql_query($sql13);$kue14 = mysql_query($sql14);$kue15 = mysql_query($sql15);$kue16 = mysql_query($sql16);$kue17 = mysql_query($sql17);$kue18 = mysql_query($sql18);$kue19 = mysql_query($sql19);$kue20 = mysql_query($sql20);$kue21 = mysql_query($sql21);$kue22 = mysql_query($sql22);$kue23 = mysql_query($sql23);$kue24 = mysql_query($sql24);$kue25 = mysql_query($sql25);$kue26 = mysql_query($sql26);$kue27 = mysql_query($sql27);$kue28 = mysql_query($sql28);$kue29 = mysql_query($sql29);$kue30 = mysql_query($sql30);$kue31 = mysql_query($sql31);$kue32 = mysql_query($sql32);
                    if($kue32){echo "<script type='text/javascript'>alert('Pengisian SIPD tahun ";echo $thn;echo " kelompok Polhukam berhasil.')</script>";echo "<meta http-equiv='refresh' content=0;url='show' />";}
                }
        }else{
            $tahu = date("Y");
            $sqlin1 = "DELETE `$tahu` FROM `sipd`.`pdnp_jad`";$sqlin2 = "DELETE `$tahu` FROM `sipd`.`pdnp_kadbjk`";
            $sqlin3 = "DELETE `$tahu` FROM `sipd`.`pdnp_jfd`";$sqlin4 = "DELETE `$tahu` FROM `sipd`.`pdnp_parpol`";
            $sqlin5 = "DELETE `$tahu` FROM `sipd`.`pdnp_kpm`";$sqlin6 = "DELETE `$tahu` FROM `sipd`.`pdnp_tpp`";
            $sqlin7 = "DELETE `$tahu` FROM `sipd`.`pdnp_ormas`";$sqlin8 = "DELETE `$tahu` FROM `sipd`.`pdnp_jlpm`";
            $sqlin9 = "DELETE `$tahu` FROM `sipd`.`pdnp_jppm`";$sqlin10 = "DELETE `$tahu` FROM `sipd`.`pdnp_jsmm`";
            $sqlin11 = "DELETE `$tahu` FROM `sipd`.`pdnp_jppmd`";$sqlin12 = "DELETE `$tahu` FROM `sipd`.`pdnp_lswm`";
            $sqlin13 = "DELETE `$tahu` FROM `sipd`.`pdnp_jkppd`";$sqlin14 = "DELETE `$tahu` FROM `sipd`.`huk_ph`";
            $sqlin15 = "DELETE `$tahu` FROM `sipd`.`huk_jktd`";$sqlin16 = "DELETE `$tahu` FROM `sipd`.`huk_jkyt`";
            $sqlin17 = "DELETE `$tahu` FROM `sipd`.`huk_kel`";$sqlin18 = "DELETE `$tahu` FROM `sipd`.`huk_jtk`";
            $sqlin19 = "DELETE `$tahu` FROM `sipd`.`huk_jtkd`";$sqlin20 = "DELETE `$tahu` FROM `sipd`.`kkm_kkm`";
            $sqlin21 = "DELETE `$tahu` FROM `sipd`.`kesos_psks`";$sqlin22 = "DELETE `$tahu` FROM `sipd`.`kesos_pmk`";
            $sqlin23 = "DELETE `$tahu` FROM `sipd`.`kesos_masos`";$sqlin24 = "DELETE `$tahu` FROM `sipd`.`kesos_pkk`";
            $sqlin25 = "DELETE `$tahu` FROM `sipd`.`kesos_pktk`";$sqlin26 = "DELETE `$tahu` FROM `sipd`.`kesos_indeksgini`";
            $sqlin27 = "DELETE `$tahu` FROM `sipd`.`kesos_ppvbd`";$sqlin28 = "DELETE `$tahu` FROM `sipd`.`kesos_williamson`";
            $sqlin29 = "DELETE `$tahu` FROM `sipd`.`ag_haji`";$sqlin30 = "DELETE `$tahu` FROM `sipd`.`ag_jmlpeluk`";
            $sqlin31 = "DELETE `$tahu` FROM `sipd`.`ag_kua`";$sqlin32 = "DELETE `$tahu` FROM `sipd`.`ag_lembagadidik`";
            $kuein1 = mysql_query($sqlin1);$kuein2 = mysql_query($sqlin2);$kuein3 = mysql_query($sqlin3);$kuein4 = mysql_query($sqlin4);$kuein5 = mysql_query($sqlin5);$kuein6 = mysql_query($sqlin6);$kuein7 = mysql_query($sqlin7);$kuein8 = mysql_query($sqlin8);$kuein9 = mysql_query($sqlin9);$kuein10 = mysql_query($sqlin10);$kuein11 = mysql_query($sqlin11);$kuein12 = mysql_query($sqlin12);$kuein13 = mysql_query($sqlin13);$kuein14 = mysql_query($sqlin14);$kuein15 = mysql_query($sqlin15);$kuein16 = mysql_query($sqlin16);$kuein17 = mysql_query($sqlin17);$kuein18 = mysql_query($sqlin18);$kuein19 = mysql_query($sqlin19);$kuein20 = mysql_query($sqlin20);$kuein21 = mysql_query($sqlin21);$kuein22 = mysql_query($sqlin22);$kuein23 = mysql_query($sqlin23);$kuein24 = mysql_query($sqlin24);$kuein25 = mysql_query($sqlin25);$kuein26 = mysql_query($sqlin26);$kuein27 = mysql_query($sqlin27);$kuein28 = mysql_query($sqlin28);$kuein29 = mysql_query($sqlin29);$kuein30 = mysql_query($sqlin30);$kuein31 = mysql_query($sqlin31);$kuein32 = mysql_query($sqlin32);
       }
    }else if(isset($_POST['bukadu'])){
        $aa = date("m");
        if($aa=="01" || $aa=="02" || $aa=="03" || $aa=="04" || $aa=="05" || $aa=="06" || $aa=="07"){
            $thn = date("Y");
            $mm = $thn - 1;
            $sql = "SELECT `$thn` FROM `sipd`.`dmg_jmlrmhtgl`";
                $kue = mysql_query($sql);
                if($kue){
                    echo "<script type=text/javascript>alert('Peringatan! Pengisian SIPD tahun ";
                    echo $thn;
                    echo " kelompok Data Umum sudah terbuka.')</script>";
                }else{
                    $sql1 = "ALTER TABLE `sipd`.`geo_luas_wil` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql2 = "ALTER TABLE `sipd`.`geo_topografi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql3 = "ALTER TABLE `sipd`.`geo_luaslahan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql4 = "ALTER TABLE `sipd`.`geo_iklimavg` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql5 = "ALTER TABLE `sipd`.`geo_fisiografi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql6 = "ALTER TABLE `sipd`.`pmr_adminpmr` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql7 = "ALTER TABLE `sipd`.`pmr_statusotonomi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql8 = "ALTER TABLE `sipd`.`pmr_perdaijin` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql9 = "ALTER TABLE `sipd`.`pmr_sarpras` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql10 = "ALTER TABLE `sipd`.`pmr_konsarpras` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql11 = "ALTER TABLE `sipd`.`dmg_capil` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql12 = "ALTER TABLE `sipd`.`dmg_lahan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql13 = "ALTER TABLE `sipd`.`dmg_famjob` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql14 = "ALTER TABLE `sipd`.`dmg_usia` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql15 = "ALTER TABLE `sipd`.`dmg_deprat` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql16 = "ALTER TABLE `sipd`.`dmg_padatpenduduk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql17 = "ALTER TABLE `sipd`.`dmg_inoutsave` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql18 = "ALTER TABLE `sipd`.`dmg_tk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql19 = "ALTER TABLE `sipd`.`dmg_pblmu` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql20 = "ALTER TABLE `sipd`.`dmg_tumduk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql21 = "ALTER TABLE `sipd`.`dmg_angkahidup` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql22 = "ALTER TABLE `sipd`.`dmg_pendudukdidik` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql23 = "ALTER TABLE `sipd`.`dmg_keluarga` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql24 = "ALTER TABLE `sipd`.`dmg_rumtang` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql25 = "ALTER TABLE `sipd`.`dmg_urumtang` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql26 = "ALTER TABLE `sipd`.`dmg_tanilayan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql27 = "ALTER TABLE `sipd`.`dmg_perempuananak` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql28 = "ALTER TABLE `sipd`.`dmg_tkunder` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql29 = "ALTER TABLE `sipd`.`geo_jmlpulau` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql30 = "ALTER TABLE `sipd`.`geo_jmlgunung` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql31 = "ALTER TABLE `sipd`.`geo_batasnl` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql32 = "ALTER TABLE `sipd`.`dmg_jmlrmhtgl` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $kue1 = mysql_query($sql1);$kue2 = mysql_query($sql2);$kue3 = mysql_query($sql3);$kue4 = mysql_query($sql4);$kue5 = mysql_query($sql5);$kue6 = mysql_query($sql6);$kue7 = mysql_query($sql7);$kue8 = mysql_query($sql8);$kue9 = mysql_query($sql9);$kue10 = mysql_query($sql10);$kue11 = mysql_query($sql11);$kue12 = mysql_query($sql12);$kue13 = mysql_query($sql13);$kue14 = mysql_query($sql14);$kue15 = mysql_query($sql15);$kue16 = mysql_query($sql16);$kue17 = mysql_query($sql17);$kue18 = mysql_query($sql18);$kue19 = mysql_query($sql19);$kue20 = mysql_query($sql20);$kue21 = mysql_query($sql21);$kue22 = mysql_query($sql22);$kue23 = mysql_query($sql23);$kue24 = mysql_query($sql24);$kue25 = mysql_query($sql25);$kue26 = mysql_query($sql26);$kue27 = mysql_query($sql27);$kue28 = mysql_query($sql28);$kue29 = mysql_query($sql29);$kue30 = mysql_query($sql30);$kue31 = mysql_query($sql31);$kue32 = mysql_query($sql32);
                    if($kue32){echo "<script type='text/javascript'>alert('Pengisian SIPD tahun ";echo $thn;echo " kelompok Data Umum berhasil.')</script>";echo "<meta http-equiv='refresh' content=0;url='show' />";}
                }
        }else{
            $tahu = date("Y");
            $sqlin1 = "DELETE `$tahu` FROM `sipd`.`geo_luas_wil`";$sqlin2 = "DELETE `$tahu` FROM `sipd`.`geo_topografi`";
            $sqlin3 = "DELETE `$tahu` FROM `sipd`.`geo_luaslahan`";$sqlin4 = "DELETE `$tahu` FROM `sipd`.`geo_iklimavg`";
            $sqlin5 = "DELETE `$tahu` FROM `sipd`.`geo_fisiografi`";$sqlin6 = "DELETE `$tahu` FROM `sipd`.`pmr_adminpmr`";
            $sqlin7 = "DELETE `$tahu` FROM `sipd`.`pmr_statusotonomi`";$sqlin8 = "DELETE `$tahu` FROM `sipd`.`pmr_perdaijin`";
            $sqlin9 = "DELETE `$tahu` FROM `sipd`.`pmr_sarpras`";$sqlin10 = "DELETE `$tahu` FROM `sipd`.`pmr_konsarpras`";
            $sqlin11 = "DELETE `$tahu` FROM `sipd`.`dmg_capil`";$sqlin12 = "DELETE `$tahu` FROM `sipd`.`dmg_lahan`";
            $sqlin13 = "DELETE `$tahu` FROM `sipd`.`dmg_famjob`";$sqlin14 = "DELETE `$tahu` FROM `sipd`.`dmg_usia`";
            $sqlin15 = "DELETE `$tahu` FROM `sipd`.`dmg_deprat`";$sqlin16 = "DELETE `$tahu` FROM `sipd`.`dmg_padatpenduduk`";
            $sqlin17 = "DELETE `$tahu` FROM `sipd`.`dmg_inoutsave`";$sqlin18 = "DELETE `$tahu` FROM `sipd`.`dmg_tk`";
            $sqlin19 = "DELETE `$tahu` FROM `sipd`.`dmg_pblmu`";$sqlin20 = "DELETE `$tahu` FROM `sipd`.`dmg_tumduk`";
            $sqlin21 = "DELETE `$tahu` FROM `sipd`.`dmg_angkahidup`";$sqlin22 = "DELETE `$tahu` FROM `sipd`.`dmg_pendudukdidik`";
            $sqlin23 = "DELETE `$tahu` FROM `sipd`.`dmg_keluarga`";$sqlin24 = "DELETE `$tahu` FROM `sipd`.`dmg_rumtang`";
            $sqlin25 = "DELETE `$tahu` FROM `sipd`.`dmg_urumtang`";$sqlin26 = "DELETE `$tahu` FROM `sipd`.`dmg_tanilayan`";
            $sqlin27 = "DELETE `$tahu` FROM `sipd`.`dmg_perempuananak`";$sqlin28 = "DELETE `$tahu` FROM `sipd`.`dmg_tkunder`";
            $sqlin29 = "DELETE `$tahu` FROM `sipd`.`geo_jmlpulau`";$sqlin30 = "DELETE `$tahu` FROM `sipd`.`geo_jmlgunung`";
            $sqlin31 = "DELETE `$tahu` FROM `sipd`.`geo_batasnl`";$sqlin32 = "DELETE `$tahu` FROM `sipd`.`dmg_jmlrmhtgl`";
            $kuein1 = mysql_query($sqlin1);$kuein2 = mysql_query($sqlin2);$kuein3 = mysql_query($sqlin3);$kuein4 = mysql_query($sqlin4);$kuein5 = mysql_query($sqlin5);$kuein6 = mysql_query($sqlin6);$kuein7 = mysql_query($sqlin7);$kuein8 = mysql_query($sqlin8);$kuein9 = mysql_query($sqlin9);$kuein10 = mysql_query($sqlin10);$kuein11 = mysql_query($sqlin11);$kuein12 = mysql_query($sqlin12);$kuein13 = mysql_query($sqlin13);$kuein14 = mysql_query($sqlin14);$kuein15 = mysql_query($sqlin15);$kuein16 = mysql_query($sqlin16);$kuein17 = mysql_query($sqlin17);$kuein18 = mysql_query($sqlin18);$kuein19 = mysql_query($sqlin19);$kuein20 = mysql_query($sqlin20);$kuein21 = mysql_query($sqlin21);$kuein22 = mysql_query($sqlin22);$kuein23 = mysql_query($sqlin23);$kuein24 = mysql_query($sqlin24);$kuein25 = mysql_query($sqlin25);$kuein26 = mysql_query($sqlin26);$kuein27 = mysql_query($sqlin27);$kuein28 = mysql_query($sqlin28);$kuein29 = mysql_query($sqlin29);$kuein30 = mysql_query($sqlin30);$kuein31 = mysql_query($sqlin31);$kuein32 = mysql_query($sqlin32);
        }
    }else if(isset($_POST['bukasos'])){
        $aa = date("m");
        if($aa=="01" || $aa=="02" || $aa=="03" || $aa=="04" || $aa=="05" || $aa=="06" || $aa=="07"){
            $thn = date("Y");
            $mm = $thn - 1;
                $sql = "SELECT `$thn` FROM `sipd`.`kesos_jamkesmasda`";
                $kue = mysql_query($sql);
                if($kue){
                    echo "<script type=text/javascript>alert('Peringatan! Pengisian SIPD tahun ";
                    echo $thn;
                    echo " kelompok Sosial Budaya sudah terbuka.')</script>";
                }else{
                    $sql1 = "ALTER TABLE `sipd`.`kes_sarkes` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql2 = "ALTER TABLE `sipd`.`kes_siif` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql3 = "ALTER TABLE `sipd`.`kes_kesmas` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql4 = "ALTER TABLE `sipd`.`kes_dagkes` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql5 = "ALTER TABLE `sipd`.`kes_tenkes` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql6 = "ALTER TABLE `sipd`.`kes_kompbidan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql7 = "ALTER TABLE `sipd`.`kes_uci` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql8 = "ALTER TABLE `sipd`.`kes_pppp` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql9 = "ALTER TABLE `sipd`.`kes_pkrpmm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql10 = "ALTER TABLE `sipd`.`kes_pkdpmm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql11 = "ALTER TABLE `sipd`.`kes_kunbay` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql12 = "ALTER TABLE `sipd`.`kes_klb` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql13 = "ALTER TABLE `sipd`.`kes_siagaaktif` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql14 = "ALTER TABLE `sipd`.`pknpo_didikumum` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql15 = "ALTER TABLE `sipd`.`pknpo_senbud` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql16 = "ALTER TABLE `sipd`.`pknpo_cabudtari` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql17 = "ALTER TABLE `sipd`.`pknpo_pora` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql18 = "ALTER TABLE `sipd`.`pknpo_expotaun` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql19 = "ALTER TABLE `sipd`.`pknpo_perpus` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql20 = "ALTER TABLE `sipd`.`pknpo_kpbps` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql21 = "ALTER TABLE `sipd`.`pknpo_lulusanke` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql22 = "ALTER TABLE `sipd`.`pknpo_kualifikasiguru` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql23 = "ALTER TABLE `sipd`.`pknpo_penuhguru` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql24 = "ALTER TABLE `sipd`.`pknpo_miliksekolah` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql25 = "ALTER TABLE `sipd`.`pknpo_smkpt` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql26 = "ALTER TABLE `sipd`.`pknpo_luluskerja` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql27 = "ALTER TABLE `sipd`.`pknpo_cabudda` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql28 = "ALTER TABLE `sipd`.`kesos_ipm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql29 = "ALTER TABLE `sipd`.`kesos_jpm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql30 = "ALTER TABLE `sipd`.`kesos_p1` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql31 = "ALTER TABLE `sipd`.`kesos_p2` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $sql32 = "ALTER TABLE `sipd`.`kesos_jamkesmasda` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                    $kue1 = mysql_query($sql1);$kue2 = mysql_query($sql2);$kue3 = mysql_query($sql3);$kue4 = mysql_query($sql4);$kue5 = mysql_query($sql5);
                    $kue6 = mysql_query($sql6);$kue7 = mysql_query($sql7);$kue8 = mysql_query($sql8);$kue9 = mysql_query($sql9);$kue10 = mysql_query($sql10);
                    $kue11 = mysql_query($sql11);$kue12 = mysql_query($sql12);$kue13 = mysql_query($sql13);$kue14 = mysql_query($sql14);$kue15 = mysql_query($sql15);
                    $kue16 = mysql_query($sql16);$kue17 = mysql_query($sql17);$kue18 = mysql_query($sql18);$kue19 = mysql_query($sql19);$kue20 = mysql_query($sql20);
                    $kue21 = mysql_query($sql21);$kue22 = mysql_query($sql22);$kue23 = mysql_query($sql23);$kue24 = mysql_query($sql24);$kue25 = mysql_query($sql25);
                    $kue26 = mysql_query($sql26);$kue27 = mysql_query($sql27);$kue28 = mysql_query($sql28);$kue29 = mysql_query($sql29);$kue30 = mysql_query($sql30);
                    $kue31 = mysql_query($sql31);$kue32 = mysql_query($sql32);
                }
        }else{
            $tahu = date("Y");
            $sqlin1 = "DELETE `$tahu` FROM `sipd`.`kes_sarkes`";$sqlin2 = "DELETE `$tahu` FROM `sipd`.`kes_siif`";
            $sqlin3 = "DELETE `$tahu` FROM `sipd`.`kes_kesmas`";$sqlin4 = "DELETE `$tahu` FROM `sipd`.`kes_dagkes`";
            $sqlin5 = "DELETE `$tahu` FROM `sipd`.`kes_tenkes`";$sqlin6 = "DELETE `$tahu` FROM `sipd`.`kes_kompbidan`";
            $sqlin7 = "DELETE `$tahu` FROM `sipd`.`kes_uci`";$sqlin8 = "DELETE `$tahu` FROM `sipd`.`kes_pppp`";
            $sqlin9 = "DELETE `$tahu` FROM `sipd`.`kes_pkrpmm`";$sqlin10 = "DELETE `$tahu` FROM `sipd`.`kes_pkdpmm`";
            $sqlin11 = "DELETE `$tahu` FROM `sipd`.`kes_kunbay`";$sqlin12 = "DELETE `$tahu` FROM `sipd`.`kes_klb`";
            $sqlin13 = "DELETE `$tahu` FROM `sipd`.`kes_siagaaktif`";$sqlin14 = "DELETE `$tahu` FROM `sipd`.`pknpo_didikumum`";
            $sqlin15 = "DELETE `$tahu` FROM `sipd`.`pknpo_senbud`";$sqlin16 = "DELETE `$tahu` FROM `sipd`.`pknpo_cabudtari`";
            $sqlin17 = "DELETE `$tahu` FROM `sipd`.`pknpo_pora`";$sqlin18 = "DELETE `$tahu` FROM `sipd`.`pknpo_expotaun`";
            $sqlin19 = "DELETE `$tahu` FROM `sipd`.`pknpo_perpus`";$sqlin20 = "DELETE `$tahu` FROM `sipd`.`pknpo_kpbps`";
            $sqlin21 = "DELETE `$tahu` FROM `sipd`.`pknpo_lulusanke`";$sqlin22 = "DELETE `$tahu` FROM `sipd`.`pknpo_kualifikasiguru`";
            $sqlin23 = "DELETE `$tahu` FROM `sipd`.`pknpo_penuhguru`";$sqlin24 = "DELETE `$tahu` FROM `sipd`.`pknpo_miliksekolah`";
            $sqlin25 = "DELETE `$tahu` FROM `sipd`.`pknpo_smkpt`";$sqlin26 = "DELETE `$tahu` FROM `sipd`.`pknpo_luluskerja`";
            $sqlin27 = "DELETE `$tahu` FROM `sipd`.`pknpo_cabudda`";$sqlin28 = "DELETE `$tahu` FROM `sipd`.`kesos_ipm`";
            $sqlin29 = "DELETE `$tahu` FROM `sipd`.`kesos_jpm`";$sqlin30 = "DELETE `$tahu` FROM `sipd`.`kesos_p1`";
            $sqlin31 = "DELETE `$tahu` FROM `sipd`.`kesos_p2`";$sqlin32 = "DELETE `$tahu` FROM `sipd`.`kesos_jamkesmasda`";
            $kuein1 = mysql_query($sqlin1);$kuein2 = mysql_query($sqlin2);$kuein3 = mysql_query($sqlin3);$kuein4 = mysql_query($sqlin4);$kuein5 = mysql_query($sqlin5);$kuein6 = mysql_query($sqlin6);$kuein7 = mysql_query($sqlin7);$kuein8 = mysql_query($sqlin8);$kuein9 = mysql_query($sqlin9);$kuein10 = mysql_query($sqlin10);$kuein11 = mysql_query($sqlin11);$kuein12 = mysql_query($sqlin12);$kuein13 = mysql_query($sqlin13);$kuein14 = mysql_query($sqlin14);$kuein15 = mysql_query($sqlin15);$kuein16 = mysql_query($sqlin16);$kuein17 = mysql_query($sqlin17);$kuein18 = mysql_query($sqlin18);$kuein19 = mysql_query($sqlin19);$kuein20 = mysql_query($sqlin20);$kuein21 = mysql_query($sqlin21);$kuein22 = mysql_query($sqlin22);$kuein23 = mysql_query($sqlin23);$kuein24 = mysql_query($sqlin24);$kuein25 = mysql_query($sqlin25);$kuein26 = mysql_query($sqlin26);$kuein27 = mysql_query($sqlin27);$kuein28 = mysql_query($sqlin28);$kuein29 = mysql_query($sqlin29);$kuein30 = mysql_query($sqlin30);$kuein31 = mysql_query($sqlin31);$kuein32 = mysql_query($sqlin32);
       }
    }else if(isset($_POST['bukaan'])){
        $aa = date("m");
        if($aa=="01" || $aa=="02" || $aa=="03" || $aa=="04" || $aa=="05" || $aa=="06" || $aa=="07"){
            $thn = date("Y");
            $mm = $thn - 1;
            $sql = "SELECT `$thn` FROM `sipd`.`infra_turap`";
            $kue = mysql_query($sql);
            if($kue){
                echo "<script type='text/javascript'>alert('Peringatan! Pengisian SIPD tahun ";
                echo $thn;
                echo " kelompok Infrastruktur sudah terbuka.')</script>";
            }else{              
                $sql18 = "ALTER TABLE `sipd`.`infra_angkum` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql19 = "ALTER TABLE `sipd`.`infra_arealmukim` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql20 = "ALTER TABLE `sipd`.`infra_bantaran` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql21 = "ALTER TABLE `sipd`.`infra_bermotor` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql22 = "ALTER TABLE `sipd`.`infra_dayamakam` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql23 = "ALTER TABLE `sipd`.`infra_drainase` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql24 = "ALTER TABLE `sipd`.`infra_ilegal` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql25 = "ALTER TABLE `sipd`.`infra_jembatan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql26 = "ALTER TABLE `sipd`.`infra_jmlbangun` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql27 = "ALTER TABLE `sipd`.`infra_jmlrmh` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql28 = "ALTER TABLE `sipd`.`infra_kondisijln` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql29 = "ALTER TABLE `sipd`.`infra_kumuh` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql30 = "ALTER TABLE `sipd`.`infra_lsrmh` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql31 = "ALTER TABLE `sipd`.`infra_mutuair` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql32 = "ALTER TABLE `sipd`.`infra_pariwisata` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql33 = "ALTER TABLE `sipd`.`infra_pemakaman` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql34 = "ALTER TABLE `sipd`.`infra_pengairan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql35 = "ALTER TABLE `sipd`.`infra_penghubung` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql36 = "ALTER TABLE `sipd`.`infra_penyiaran` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql37 = "ALTER TABLE `sipd`.`infra_perhubungan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql38 = "ALTER TABLE `sipd`.`infra_perumahan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql39 = "ALTER TABLE `sipd`.`infra_pjfungsi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql40 = "ALTER TABLE `sipd`.`infra_pjjln` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql41 = "ALTER TABLE `sipd`.`infra_pjkondisi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql42 = "ALTER TABLE `sipd`.`infra_pjmilik` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql43 = "ALTER TABLE `sipd`.`infra_rmhsanitasi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql44 = "ALTER TABLE `sipd`.`infra_rpublik` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql45 = "ALTER TABLE `sipd`.`infra_sam` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql46 = "ALTER TABLE `sipd`.`infra_sempadan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql47 = "ALTER TABLE `sipd`.`infra_sip` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql48 = "ALTER TABLE `sipd`.`infra_srtkabar` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql49 = "ALTER TABLE `sipd`.`infra_sutet` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql50 = "ALTER TABLE `sipd`.`infra_telekomunikasi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql51 = "ALTER TABLE `sipd`.`infra_transportasi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql52 = "ALTER TABLE `sipd`.`infra_turap` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $kue18 = mysql_query($sql18);$kue19 = mysql_query($sql19);$kue20 = mysql_query($sql20);$kue21 = mysql_query($sql21);$kue22 = mysql_query($sql22);$kue23 = mysql_query($sql23);$kue24 = mysql_query($sql24);$kue25 = mysql_query($sql25);$kue26 = mysql_query($sql26);$kue27 = mysql_query($sql27);$kue28 = mysql_query($sql28);$kue29 = mysql_query($sql29);$kue30 = mysql_query($sql30);$kue31 = mysql_query($sql31);$kue32 = mysql_query($sql32);$kue33 = mysql_query($sql33);$kue34 = mysql_query($sql34);$kue35 = mysql_query($sql35);$kue36 = mysql_query($sql36);$kue37 = mysql_query($sql37);$kue38 = mysql_query($sql38);$kue39 = mysql_query($sql39);$kue40 = mysql_query($sql40);$kue41 = mysql_query($sql41);$kue42 = mysql_query($sql42);$kue43 = mysql_query($sql43);$kue44 = mysql_query($sql44);$kue45 = mysql_query($sql45);$kue46 = mysql_query($sql46);$kue47 = mysql_query($sql47);$kue48 = mysql_query($sql48);$kue49 = mysql_query($sql49);$kue50 = mysql_query($sql50);$kue51 = mysql_query($sql51);$kue52 = mysql_query($sql52);
                if($kue52){
                    echo "<script type='text/javascript'>alert('Pengisian SIPD tahun ";
                    echo $thn;
                    echo " kelompok Sumber Daya Alam berhasil.')</script>";
                    echo "<meta http-equiv='refresh' content=0;url='show' />";
                }
            }
        }else{
            /*hapus data*/
            $sqlin18 = "DELETE `$tahu` FROM `sipd`.`infra_angkum`";
            $sqlin19 = "DELETE `$tahu` FROM `sipd`.`infra_arealmukim`";
            $sqlin20 = "DELETE `$tahu` FROM `sipd`.`infra_bantaran`";
            $sqlin21 = "DELETE `$tahu` FROM `sipd`.`infra_bermotor`";
            $sqlin22 = "DELETE `$tahu` FROM `sipd`.`infra_dayamakam`";
            $sqlin23 = "DELETE `$tahu` FROM `sipd`.`infra_drainase`";
            $sqlin24 = "DELETE `$tahu` FROM `sipd`.`infra_ilegal`";
            $sqlin25 = "DELETE `$tahu` FROM `sipd`.`infra_jembatan`";
            $sqlin26 = "DELETE `$tahu` FROM `sipd`.`infra_jmlbangun`";
            $sqlin27 = "DELETE `$tahu` FROM `sipd`.`infra_jmlrmh`";
            $sqlin28 = "DELETE `$tahu` FROM `sipd`.`infra_kondisijln`";
            $sqlin29 = "DELETE `$tahu` FROM `sipd`.`infra_kumuh`";
            $sqlin30 = "DELETE `$tahu` FROM `sipd`.`infra_lsrmh`";
            $sqlin31 = "DELETE `$tahu` FROM `sipd`.`infra_mutuair`";
            $sqlin32 = "DELETE `$tahu` FROM `sipd`.`infra_pariwisata`";
            $sqlin33 = "DELETE `$tahu` FROM `sipd`.`infra_pemakaman`";
            $sqlin34 = "DELETE `$tahu` FROM `sipd`.`infra_pengairan`";
            $sqlin35 = "DELETE `$tahu` FROM `sipd`.`infra_penghubung`";
            $sqlin36 = "DELETE `$tahu` FROM `sipd`.`infra_penyiaran`";
            $sqlin37 = "DELETE `$tahu` FROM `sipd`.`infra_perhubungan`";
            $sqlin38 = "DELETE `$tahu` FROM `sipd`.`infra_perumahan`";
            $sqlin39 = "DELETE `$tahu` FROM `sipd`.`infra_pjfungsi`";
            $sqlin40 = "DELETE `$tahu` FROM `sipd`.`infra_pjjln`";
            $sqlin41 = "DELETE `$tahu` FROM `sipd`.`infra_pjkondisi`";
            $sqlin42 = "DELETE `$tahu` FROM `sipd`.`infra_pjmilik`";
            $sqlin43 = "DELETE `$tahu` FROM `sipd`.`infra_rmhsanitasi`";
            $sqlin44 = "DELETE `$tahu` FROM `sipd`.`infra_rpublik`";
            $sqlin45 = "DELETE `$tahu` FROM `sipd`.`infra_sam`";
            $sqlin46 = "DELETE `$tahu` FROM `sipd`.`infra_sempadan`";
            $sqlin47 = "DELETE `$tahu` FROM `sipd`.`infra_sip`";
            $sqlin48 = "DELETE `$tahu` FROM `sipd`.`infra_srtkabar`";
            $sqlin49 = "DELETE `$tahu` FROM `sipd`.`infra_sutet`";
            $sqlin50 = "DELETE `$tahu` FROM `sipd`.`infra_telekomunikasi`";
            $sqlin51 = "DELETE `$tahu` FROM `sipd`.`infra_transportasi`";
            $sqlin52 = "DELETE `$tahu` FROM `sipd`.`infra_turap`";

            $kuein18 = mysql_query($sqlin18);
            $kuein19 = mysql_query($sqlin19);
            $kuein20 = mysql_query($sqlin20);
            $kuein21 = mysql_query($sqlin21);
            $kuein22 = mysql_query($sqlin22);
            $kuein23 = mysql_query($sqlin23);
            $kuein24 = mysql_query($sqlin24);
            $kuein25 = mysql_query($sqlin25);
            $kuein26 = mysql_query($sqlin26);
            $kuein27 = mysql_query($sqlin27);
            $kuein28 = mysql_query($sqlin28);
            $kuein29 = mysql_query($sqlin29);
            $kuein30 = mysql_query($sqlin30);
            $kuein31 = mysql_query($sqlin31);
            $kuein32 = mysql_query($sqlin32);
            $kuein33 = mysql_query($sqlin33);
            $kuein34 = mysql_query($sqlin34);
            $kuein35 = mysql_query($sqlin35);
            $kuein36 = mysql_query($sqlin36);
            $kuein37 = mysql_query($sqlin37);
            $kuein38 = mysql_query($sqlin38);
            $kuein39 = mysql_query($sqlin39);
            $kuein40 = mysql_query($sqlin40);
            $kuein41 = mysql_query($sqlin41);
            $kuein42 = mysql_query($sqlin42);
            $kuein43 = mysql_query($sqlin43);
            $kuein44 = mysql_query($sqlin44);
            $kuein45 = mysql_query($sqlin45);
            $kuein46 = mysql_query($sqlin46);
            $kuein47 = mysql_query($sqlin47);
            $kuein48 = mysql_query($sqlin48);
            $kuein49 = mysql_query($sqlin49);
            $kuein50 = mysql_query($sqlin50);
            $kuein51 = mysql_query($sqlin51);
            $kuein52 = mysql_query($sqlin52);
        }
    }else if(isset($_POST['bukalah'])){
        $aa = date("m");
        if($aa=="01" || $aa=="02" || $aa=="03" || $aa=="04" || $aa=="05" || $aa=="06" || $aa=="07"){
            $thn = date("Y");
            $mm = $thn - 1;
            $sql = "SELECT `$thn` FROM `sipd`.`sda_tataruang`";
            $kue = mysql_query($sql);
            if($kue){
                echo "<script type='text/javascript'>alert('Peringatan! Pengisian SIPD tahun ";
                echo $thn;
                echo " kelompok Sumber Daya Alam sudah terbuka.')</script>";
            }else{
                /*input*/
                $sql53 = "ALTER TABLE `sipd`.`sda_air_limbah` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql54 = "ALTER TABLE `sipd`.`sda_energi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql55 = "ALTER TABLE `sipd`.`sda_hortikultura` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql56 = "ALTER TABLE `sipd`.`sda_kehutanan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql57 = "ALTER TABLE `sipd`.`sda_kel_sos` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql58 = "ALTER TABLE `sipd`.`sda_kendalilink` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql59 = "ALTER TABLE `sipd`.`sda_laut_ikan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql60 = "ALTER TABLE `sipd`.`sda_linkhidup` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql61 = "ALTER TABLE `sipd`.`sda_pelestarianlink` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql62 = "ALTER TABLE `sipd`.`sda_perkebunan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql63 = "ALTER TABLE `sipd`.`sda_pertambangan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql64 = "ALTER TABLE `sipd`.`sda_pertanahan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql65 = "ALTER TABLE `sipd`.`sda_pertanian` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql66 = "ALTER TABLE `sipd`.`sda_peternakan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql67 = "ALTER TABLE `sipd`.`sda_rusaklinkhidup` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql68 = "ALTER TABLE `sipd`.`sda_sampah` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql69 = "ALTER TABLE `sipd`.`sda_tataruang` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $kue53 = mysql_query($sql53);$kue54 = mysql_query($sql54);$kue55 = mysql_query($sql55);$kue56 = mysql_query($sql56);$kue57 = mysql_query($sql57);$kue58 = mysql_query($sql58);$kue59 = mysql_query($sql59);$kue60 = mysql_query($sql60);$kue61 = mysql_query($sql61);$kue62 = mysql_query($sql62);$kue63 = mysql_query($sql63);$kue64 = mysql_query($sql64);$kue65 = mysql_query($sql65);$kue66 = mysql_query($sql66);$kue67 = mysql_query($sql67);$kue68 = mysql_query($sql68);$kue69 = mysql_query($sql69);
                if($kue69){
                    echo "<script type='text/javascript'>alert('Pengisian SIPD tahun ";
                    echo $thn;
                    echo " kelompok Sumber Daya Alam berhasil.')</script>";
                    echo "<meta http-equiv='refresh' content=0;url='show' />";
                }
            }
        }else{
            /*hapus data*/
            $sqlin53 = "DELETE `$tahu` FROM `sipd`.`sda_air_limbah`";
            $sqlin54 = "DELETE `$tahu` FROM `sipd`.`sda_energi`";
            $sqlin55 = "DELETE `$tahu` FROM `sipd`.`sda_hortikultura`";
            $sqlin56 = "DELETE `$tahu` FROM `sipd`.`sda_kehutanan`";
            $sqlin57 = "DELETE `$tahu` FROM `sipd`.`sda_kel_sos`";
            $sqlin58 = "DELETE `$tahu` FROM `sipd`.`sda_kendalilink`";
            $sqlin59 = "DELETE `$tahu` FROM `sipd`.`sda_laut_ikan`";
            $sqlin60 = "DELETE `$tahu` FROM `sipd`.`sda_linkhidup`";
            $sqlin61 = "DELETE `$tahu` FROM `sipd`.`sda_pelestarianlink`";
            $sqlin62 = "DELETE `$tahu` FROM `sipd`.`sda_perkebunan`";
            $sqlin63 = "DELETE `$tahu` FROM `sipd`.`sda_pertambangan`";
            $sqlin64 = "DELETE `$tahu` FROM `sipd`.`sda_pertanahan`";
            $sqlin65 = "DELETE `$tahu` FROM `sipd`.`sda_pertanian`";
            $sqlin66 = "DELETE `$tahu` FROM `sipd`.`sda_peternakan`";
            $sqlin67 = "DELETE `$tahu` FROM `sipd`.`sda_rusaklinkhidup`";
            $sqlin68 = "DELETE `$tahu` FROM `sipd`.`sda_sampah`";
            $sqlin69 = "DELETE `$tahu` FROM `sipd`.`sda_tataruang`";

            $kuein53 = mysql_query($sqlin53);
            $kuein54 = mysql_query($sqlin54);
            $kuein55 = mysql_query($sqlin55);
            $kuein56 = mysql_query($sqlin56);
            $kuein57 = mysql_query($sqlin57);
            $kuein58 = mysql_query($sqlin58);
            $kuein59 = mysql_query($sqlin59);
            $kuein60 = mysql_query($sqlin60);
            $kuein61 = mysql_query($sqlin61);
            $kuein62 = mysql_query($sqlin62);
            $kuein63 = mysql_query($sqlin63);
            $kuein64 = mysql_query($sqlin64);
            $kuein65 = mysql_query($sqlin65);
            $kuein66 = mysql_query($sqlin66);
            $kuein67 = mysql_query($sqlin67);
            $kuein68 = mysql_query($sqlin68);
            $kuein69 = mysql_query($sqlin69);
        }
    }else if(isset($_POST['bukain'])){
        $aa = date("m");
        if($aa=="01" || $aa=="02" || $aa=="03" || $aa=="04" || $aa=="05" || $aa=="06" || $aa=="07"){
            $thn = date("Y");
            $mm = $thn - 1;
            $sql = "SELECT `$thn` FROM `sipd`.`eko_usahanas`";
            $kue = mysql_query($sql);
            if($kue){
                echo "<script type='text/javascript'>alert('Peringatan! Pengisian SIPD tahun ";
                echo $thn;
                echo " kelompok Ekonomi sudah terbuka.')</script>";
            }else{
                $sql1 = "ALTER TABLE `sipd`.`eko_asjiwa` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql2 = "ALTER TABLE `sipd`.`eko_asrugi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql3 = "ALTER TABLE `sipd`.`eko_bankumum` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql4 = "ALTER TABLE `sipd`.`eko_bpr` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql5 = "ALTER TABLE `sipd`.`eko_einonmigas` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql6 = "ALTER TABLE `sipd`.`eko_indsubsektor` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql7 = "ALTER TABLE `sipd`.`eko_industri` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql8 = "ALTER TABLE `sipd`.`eko_invnas` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql9 = "ALTER TABLE `sipd`.`eko_ioindustri` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql10 = "ALTER TABLE `sipd`.`eko_jasauang` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql11 = "ALTER TABLE `sipd`.`eko_perbankan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql12 = "ALTER TABLE `sipd`.`eko_perdagangan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql13 = "ALTER TABLE `sipd`.`eko_perijinan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql14 = "ALTER TABLE `sipd`.`eko_pma` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql15 = "ALTER TABLE `sipd`.`eko_pmdn` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql16 = "ALTER TABLE `sipd`.`eko_ukmnon` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $sql17 = "ALTER TABLE `sipd`.`eko_usahanas` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
                $kue1 = mysql_query($sql1);$kue2 = mysql_query($sql2);$kue3 = mysql_query($sql3);$kue4 = mysql_query($sql4);$kue5 = mysql_query($sql5);$kue6 = mysql_query($sql6);$kue7 = mysql_query($sql7);$kue8 = mysql_query($sql8);$kue9 = mysql_query($sql9);$kue10 = mysql_query($sql10);$kue11 = mysql_query($sql11);$kue12 = mysql_query($sql12);$kue13 = mysql_query($sql13);$kue14 = mysql_query($sql14);$kue15 = mysql_query($sql15);$kue16 = mysql_query($sql16);$kue17 = mysql_query($sql17);                           
                if($kue17){
                    echo "<script type='text/javascript'>alert('Pengisian SIPD tahun ";
                    echo $thn;
                    echo " kelompok Ekonomi berhasil.')</script>";
                    echo "<meta http-equiv='refresh' content=0;url='show'/>";
                }
            }
        }else{
            $tahu = date("Y");
            $sqlin1 = "DELETE `$tahu` FROM `sipd`.`eko_asjiwa`";$sqlin2 = "DELETE `$tahu` FROM `sipd`.`eko_asrugi`";
            $sqlin3 = "DELETE `$tahu` FROM `sipd`.`eko_bankumum`";$sqlin4 = "DELETE `$tahu` FROM `sipd`.`eko_bpr`";
            $sqlin5 = "DELETE `$tahu` FROM `sipd`.`eko_einonmigas`";$sqlin6 = "DELETE `$tahu` FROM `sipd`.`eko_indsubsektor`";
            $sqlin7 = "DELETE `$tahu` FROM `sipd`.`eko_industri`";$sqlin8 = "DELETE `$tahu` FROM `sipd`.`eko_invnas`";
            $sqlin9 = "DELETE `$tahu` FROM `sipd`.`eko_ioindustri`";$sqlin10 = "DELETE `$tahu` FROM `sipd`.`eko_jasauang`";
            $sqlin11 = "DELETE `$tahu` FROM `sipd`.`eko_perbankan`";$sqlin12 = "DELETE `$tahu` FROM `sipd`.`eko_perdagangan`";
            $sqlin13 = "DELETE `$tahu` FROM `sipd`.`eko_perijinan`";$sqlin14 = "DELETE `$tahu` FROM `sipd`.`eko_pma`";
            $sqlin15 = "DELETE `$tahu` FROM `sipd`.`eko_pmdn`";$sqlin16 = "DELETE `$tahu` FROM `sipd`.`eko_ukmnon`";
            $sqlin17 = "DELETE `$tahu` FROM `sipd`.`eko_usahanas`";
            $kuein1 = mysql_query($sqlin1);$kuein2 = mysql_query($sqlin2);$kuein3 = mysql_query($sqlin3);$kuein4 = mysql_query($sqlin4);$kuein5 = mysql_query($sqlin5);$kuein6 = mysql_query($sqlin6);$kuein7 = mysql_query($sqlin7);$kuein8 = mysql_query($sqlin8);$kuein9 = mysql_query($sqlin9);$kuein10 = mysql_query($sqlin10);$kuein11 = mysql_query($sqlin11);$kuein12 = mysql_query($sqlin12);$kuein13 = mysql_query($sqlin13);$kuein14 = mysql_query($sqlin14);$kuein15 = mysql_query($sqlin15);$kuein16 = mysql_query($sqlin16);$kuein17 = mysql_query($sqlin17);           
        }
    }else if(isset($_POST['rekap'])){
        $anu = date("Y");
        $lalu = "SELECT `isian` FROM `sipd`.`log` WHERE `namatabel` = 'sda_energi'";
        $daun = mysql_query($lalu);
        $rekam = array();
        $tampung = array();
        $n = 0;
        $isi = "";
        while ($hasil = mysql_fetch_array($daun)) {
            $isi = $hasil[0];
            $tampung[0] = explode("#", $isi);
            $rekam[$n] = $tampung[0];
            $n++;
        }
        echo $n;
        for ($i=0; $i < 47; $i++) {
            for ($x=1; $x < $n; $x++) { 
                $rekam[0][$i] = $rekam[0][$i] + $rekam[$x][$i];             
            }
            echo $rekam[0][$i]."<br>";
        }
        $y = 1;
        for ($m=0; $m < 47; $m++) { 
            echo $y."#";
            $simpan = number_format($rekam[0][$m],'3',',','.');
            echo $simpan."<br>";
            $kaki = "UPDATE `sda_energi` SET `$anu` = '$simpan' WHERE `id` = '$y'";
            $tangan = mysql_query($kaki);
            $y++;
        }
    }
?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Extra Menu</h1></div>
</div>
<!-- /.row -->

	<form method="post" action="" role="form">
        <!-- Start Buka Pengisian -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-github fa-fw"></i> Buka Pengisian Data SIPD tahun <?php echo $tahunini; ?></h3>
                    </div>
                    <div class="panel-body">
                        <center><input type="submit" class="btn btn-success" name="bukadu" value="Buka Data Umum" <?php echo $hiasan1; ?>/>
                        <input type="submit" class="btn btn-success" name="bukasos" value="Buka Sosial Budaya" <?php echo $hiasan2; ?>/>
                        <input type="submit" class="btn btn-success" name="bukapol" value="Buka Polhukam" <?php echo $hiasan3; ?>/>
                        <input type="submit" class="btn btn-success" name="bukainsi" value="Buka Insidensial" <?php echo $hiasan4; ?>/>
                        <input type="submit" class="btn btn-success" name="bukain" value="Buka SDA" <?php echo $hiasin; ?> />
                        <input type="submit" class="btn btn-success" name="bukaan" value="Buka Infrastruktur" <?php echo $hiasan; ?> />
                        <input type="submit" class="btn btn-success" name="bukalah" value="Buka Ekonomi" <?php echo $hiaslah; ?> /></center>
                    </div>
                </div>
            </div>
        <!-- End Buka Pengisian -->
    <!-- </form>
   <form method="post" action="rekap"> -->
        <!-- Start Rekap Data -->
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-github fa-fw"></i> Rekap Data SIPD</h3>
                    </div>
                    <div class="panel-body">
                        <input type="submit" class="btn btn-success" name="rekap" value="Mulai Rekap Data" />
                    </div>
                </div>
            </div>
        <!-- End Rekap Data -->
    <!-- </form>
    <form method="post" action="eval"> -->
        <!-- Start Rekap Data -->
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-github fa-fw"></i> Evaluasi</h3>
                    </div>
                    <div class="panel-body">
                        <input type="submit" class="btn btn-success" name="eval" value="Evaluasi Keterisian Data" />
                    </div>
                </div>
            </div>
        </div>
        <!-- End Rekap Data -->
    </form>