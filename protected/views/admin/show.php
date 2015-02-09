<?php 
	mysql_connect('localhost','root','');
	mysql_select_db("sipd");
	
	$iya = date("m");
	if($iya=="01" || $iya=="02" || $iya=="03" || $iya=="04" || $iya=="05" || $iya=="06" || $iya=="07"){
		$tahe = date("Y");
		$sqlin = "SELECT `$tahe` FROM `sipd`.`ppk_vk`";
		$kuein = mysql_query($sqlin);
		if($kuein){
			$hiasin = "disabled";
		}else{
			$hiasin = "";
		}
	}else{
		$hiasin = "";
	}

	if(isset($_POST['bukain'])){
		$aa = date("m");
		if($aa=="01" || $aa=="02" || $aa=="03" || $aa=="04" || $aa=="05" || $aa=="06" || $aa=="07"){
			$thn = date("Y");
			$mm = $thn - 1;
			$sql = "SELECT `$thn` FROM `sipd`.`eko_usahanas`";
			$kue = mysql_query($sql);
			if($kue){
				echo "<script type='text/javascript'>alert('Peringatan! Pengisian SIPD tahun ";
				echo $thn;
				echo " sudah terbuka.')</script>";
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
				$sql70 = "ALTER TABLE `sipd`.`ag_haji` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql71 = "ALTER TABLE `sipd`.`ag_jmlpeluk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql72 = "ALTER TABLE `sipd`.`ag_kua` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql73 = "ALTER TABLE `sipd`.`ag_lembagadidik` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql74 = "ALTER TABLE `sipd`.`ag_nyuluh` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql75 = "ALTER TABLE `sipd`.`ag_sarib` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql76 = "ALTER TABLE `sipd`.`ben_jkba` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql77 = "ALTER TABLE `sipd`.`ben_jklb` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql78 = "ALTER TABLE `sipd`.`ben_jlb` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql79 = "ALTER TABLE `sipd`.`ben_jpa` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql80 = "ALTER TABLE `sipd`.`ben_jpd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql81 = "ALTER TABLE `sipd`.`ben_jpkab` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql82 = "ALTER TABLE `sipd`.`ben_jpkl` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql83 = "ALTER TABLE `sipd`.`ben_jpl` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql84 = "ALTER TABLE `sipd`.`ben_kb` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql85 = "ALTER TABLE `sipd`.`dmg_angkahidup` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql86 = "ALTER TABLE `sipd`.`dmg_capil` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql87 = "ALTER TABLE `sipd`.`dmg_deprat` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql88 = "ALTER TABLE `sipd`.`dmg_famjob` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql89 = "ALTER TABLE `sipd`.`dmg_inoutsave` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql90 = "ALTER TABLE `sipd`.`dmg_jmlrmhtgl` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql91 = "ALTER TABLE `sipd`.`dmg_keluarga` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql92 = "ALTER TABLE `sipd`.`dmg_lahan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql93 = "ALTER TABLE `sipd`.`dmg_padatpenduduk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql94 = "ALTER TABLE `sipd`.`dmg_pblmu` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql95 = "ALTER TABLE `sipd`.`dmg_pendudukdidik` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql96 = "ALTER TABLE `sipd`.`dmg_perempuananak` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql97 = "ALTER TABLE `sipd`.`dmg_rumtang` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql98 = "ALTER TABLE `sipd`.`dmg_tanilayan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql99 = "ALTER TABLE `sipd`.`dmg_tk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql100 = "ALTER TABLE `sipd`.`dmg_tkunder` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql101 = "ALTER TABLE `sipd`.`dmg_tumduk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql102 = "ALTER TABLE `sipd`.`dmg_urumtang` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql103 = "ALTER TABLE `sipd`.`dmg_usia` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql104 = "ALTER TABLE `sipd`.`geo_batasnl` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql105 = "ALTER TABLE `sipd`.`geo_fisiografi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql106 = "ALTER TABLE `sipd`.`geo_iklimavg` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql107 = "ALTER TABLE `sipd`.`geo_jmlgunung` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql108 = "ALTER TABLE `sipd`.`geo_jmlpulau` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql109 = "ALTER TABLE `sipd`.`geo_luaslahan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql110 = "ALTER TABLE `sipd`.`geo_luas_wil` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql111 = "ALTER TABLE `sipd`.`geo_topografi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql112 = "ALTER TABLE `sipd`.`huk_jktd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql113 = "ALTER TABLE `sipd`.`huk_jkyt` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql114 = "ALTER TABLE `sipd`.`huk_jtk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql115 = "ALTER TABLE `sipd`.`huk_jtkd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql116 = "ALTER TABLE `sipd`.`huk_kel` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql117 = "ALTER TABLE `sipd`.`huk_ph` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql118 = "ALTER TABLE `sipd`.`kesos_indeksgini` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql119 = "ALTER TABLE `sipd`.`kesos_ipm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql120 = "ALTER TABLE `sipd`.`kesos_jamkesmasda` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql121 = "ALTER TABLE `sipd`.`kesos_jkplsm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql122 = "ALTER TABLE `sipd`.`kesos_jpm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql123 = "ALTER TABLE `sipd`.`kesos_kemiskinan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql124 = "ALTER TABLE `sipd`.`kesos_kmtk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql125 = "ALTER TABLE `sipd`.`kesos_masos` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql126 = "ALTER TABLE `sipd`.`kesos_p1` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql127 = "ALTER TABLE `sipd`.`kesos_p2` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql128 = "ALTER TABLE `sipd`.`kesos_pkk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql129 = "ALTER TABLE `sipd`.`kesos_pktk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql130 = "ALTER TABLE `sipd`.`kesos_pmks` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql131 = "ALTER TABLE `sipd`.`kesos_ppvbd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql132 = "ALTER TABLE `sipd`.`kesos_psks` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql133 = "ALTER TABLE `sipd`.`kesos_williamson` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql134 = "ALTER TABLE `sipd`.`kes_dagkes` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql135 = "ALTER TABLE `sipd`.`kes_kesmas` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql136 = "ALTER TABLE `sipd`.`kes_klb` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql137 = "ALTER TABLE `sipd`.`kes_kompbidan` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql138 = "ALTER TABLE `sipd`.`kes_kunbay` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql139 = "ALTER TABLE `sipd`.`kes_pkdpmm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql140 = "ALTER TABLE `sipd`.`kes_pkrpmm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql141 = "ALTER TABLE `sipd`.`kes_pppp` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql142 = "ALTER TABLE `sipd`.`kes_sarkes` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql143 = "ALTER TABLE `sipd`.`kes_siagaaktif` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql144 = "ALTER TABLE `sipd`.`kes_siif` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql145 = "ALTER TABLE `sipd`.`kes_tenkes` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql146 = "ALTER TABLE `sipd`.`kes_uci` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql147 = "ALTER TABLE `sipd`.`khut_jkj` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql148 = "ALTER TABLE `sipd`.`khut_jlkh` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql149 = "ALTER TABLE `sipd`.`khut_lah` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql150 = "ALTER TABLE `sipd`.`kkm_kkm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql151 = "ALTER TABLE `sipd`.`pdnp_jad` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql152 = "ALTER TABLE `sipd`.`pdnp_jfd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql153 = "ALTER TABLE `sipd`.`pdnp_jkppd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql154 = "ALTER TABLE `sipd`.`pdnp_jlpm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql155 = "ALTER TABLE `sipd`.`pdnp_jppm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql156 = "ALTER TABLE `sipd`.`pdnp_jppmd` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql157 = "ALTER TABLE `sipd`.`pdnp_jsmm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql158 = "ALTER TABLE `sipd`.`pdnp_kadbjk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql159 = "ALTER TABLE `sipd`.`pdnp_kpm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql160 = "ALTER TABLE `sipd`.`pdnp_lswm` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql161 = "ALTER TABLE `sipd`.`pdnp_ormas` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql162 = "ALTER TABLE `sipd`.`pdnp_parpol` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql163 = "ALTER TABLE `sipd`.`pdnp_tpp` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql164 = "ALTER TABLE `sipd`.`pikan_jikap` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql165 = "ALTER TABLE `sipd`.`pikan_jkpi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql166 = "ALTER TABLE `sipd`.`pikan_jlpi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql167 = "ALTER TABLE `sipd`.`pknpo_cabudda` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql168 = "ALTER TABLE `sipd`.`pknpo_cabudtari` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql169 = "ALTER TABLE `sipd`.`pknpo_didikumum` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql170 = "ALTER TABLE `sipd`.`pknpo_expotaun` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql171 = "ALTER TABLE `sipd`.`pknpo_kpbps` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql172 = "ALTER TABLE `sipd`.`pknpo_kualifikasiguru` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql173 = "ALTER TABLE `sipd`.`pknpo_lulusanke` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql174 = "ALTER TABLE `sipd`.`pknpo_luluskerja` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql175 = "ALTER TABLE `sipd`.`pknpo_miliksekolah` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql176 = "ALTER TABLE `sipd`.`pknpo_penuhguru` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql177 = "ALTER TABLE `sipd`.`pknpo_perpus` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql178 = "ALTER TABLE `sipd`.`pknpo_pora` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql179 = "ALTER TABLE `sipd`.`pknpo_senbud` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql180 = "ALTER TABLE `sipd`.`pknpo_smkpt` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql181 = "ALTER TABLE `sipd`.`pmr_adminpmr` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql182 = "ALTER TABLE `sipd`.`pmr_konsarpras` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql183 = "ALTER TABLE `sipd`.`pmr_perdaijin` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql184 = "ALTER TABLE `sipd`.`pmr_sarpras` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql185 = "ALTER TABLE `sipd`.`pmr_statusotonomi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql186 = "ALTER TABLE `sipd`.`pm_eph` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql187 = "ALTER TABLE `sipd`.`pm_jkw` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql188 = "ALTER TABLE `sipd`.`ppk_jk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql189 = "ALTER TABLE `sipd`.`ppk_jlpp` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				$sql190 = "ALTER TABLE `sipd`.`ppk_vk` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";

				$kue1 = mysql_query($sql1);
				$kue2 = mysql_query($sql2);
				$kue3 = mysql_query($sql3);
				$kue4 = mysql_query($sql4);
				$kue5 = mysql_query($sql5);
				$kue6 = mysql_query($sql6);
				$kue7 = mysql_query($sql7);
				$kue8 = mysql_query($sql8);
				$kue9 = mysql_query($sql9);
				$kue10 = mysql_query($sql10);
				$kue11 = mysql_query($sql11);
				$kue12 = mysql_query($sql12);
				$kue13 = mysql_query($sql13);
				$kue14 = mysql_query($sql14);
				$kue15 = mysql_query($sql15);
				$kue16 = mysql_query($sql16);
				$kue17 = mysql_query($sql17);
				$kue18 = mysql_query($sql18);
				$kue19 = mysql_query($sql19);
				$kue20 = mysql_query($sql20);
				$kue21 = mysql_query($sql21);
				$kue22 = mysql_query($sql22);
				$kue23 = mysql_query($sql23);
				$kue24 = mysql_query($sql24);
				$kue25 = mysql_query($sql25);
				$kue26 = mysql_query($sql26);
				$kue27 = mysql_query($sql27);
				$kue28 = mysql_query($sql28);
				$kue29 = mysql_query($sql29);
				$kue30 = mysql_query($sql30);
				$kue31 = mysql_query($sql31);
				$kue32 = mysql_query($sql32);
				$kue33 = mysql_query($sql33);
				$kue34 = mysql_query($sql34);
				$kue35 = mysql_query($sql35);
				$kue36 = mysql_query($sql36);
				$kue37 = mysql_query($sql37);
				$kue38 = mysql_query($sql38);
				$kue39 = mysql_query($sql39);
				$kue40 = mysql_query($sql40);
				$kue41 = mysql_query($sql41);
				$kue42 = mysql_query($sql42);
				$kue43 = mysql_query($sql43);
				$kue44 = mysql_query($sql44);
				$kue45 = mysql_query($sql45);
				$kue46 = mysql_query($sql46);
				$kue47 = mysql_query($sql47);
				$kue48 = mysql_query($sql48);
				$kue49 = mysql_query($sql49);
				$kue50 = mysql_query($sql50);
				$kue51 = mysql_query($sql51);
				$kue52 = mysql_query($sql52);
				$kue53 = mysql_query($sql53);
				$kue54 = mysql_query($sql54);
				$kue55 = mysql_query($sql55);
				$kue56 = mysql_query($sql56);
				$kue57 = mysql_query($sql57);
				$kue58 = mysql_query($sql58);
				$kue59 = mysql_query($sql59);
				$kue60 = mysql_query($sql60);
				$kue61 = mysql_query($sql61);
				$kue62 = mysql_query($sql62);
				$kue63 = mysql_query($sql63);
				$kue64 = mysql_query($sql64);
				$kue65 = mysql_query($sql65);
				$kue66 = mysql_query($sql66);
				$kue67 = mysql_query($sql67);
				$kue68 = mysql_query($sql68);
				$kue69 = mysql_query($sql69);
				$kue70 = mysql_query($sql70);
				$kue71 = mysql_query($sql71);			
				$kue72 = mysql_query($sql72);
				$kue73 = mysql_query($sql73);
				$kue74 = mysql_query($sql74);
				$kue75 = mysql_query($sql75);
				$kue76 = mysql_query($sql76);
				$kue77 = mysql_query($sql77);
				$kue78 = mysql_query($sql78);
				$kue79 = mysql_query($sql79);
				$kue80 = mysql_query($sql80);
				$kue81 = mysql_query($sql81);
				$kue82 = mysql_query($sql82);
				$kue83 = mysql_query($sql83);
				$kue84 = mysql_query($sql84);
				$kue85 = mysql_query($sql85);
				$kue86 = mysql_query($sql86);
				$kue87 = mysql_query($sql87);
				$kue88 = mysql_query($sql88);
				$kue89 = mysql_query($sql89);
				$kue90 = mysql_query($sql90);
				$kue91 = mysql_query($sql91);
				$kue92 = mysql_query($sql92);
				$kue93 = mysql_query($sql93);
				$kue94 = mysql_query($sql94);
				$kue95 = mysql_query($sql95);
				$kue96 = mysql_query($sql96);
				$kue97 = mysql_query($sql97);
				$kue98 = mysql_query($sql98);
				$kue99 = mysql_query($sql99);
				$kue100 = mysql_query($sql100);
				$kue101 = mysql_query($sql101);
				$kue102 = mysql_query($sql102);
				$kue103 = mysql_query($sql103);
				$kue104 = mysql_query($sql104);
				$kue105 = mysql_query($sql105);
				$kue106 = mysql_query($sql106);
				$kue107 = mysql_query($sql107);
				$kue108 = mysql_query($sql108);
				$kue109 = mysql_query($sql109);
				$kue110 = mysql_query($sql110);
				$kue111 = mysql_query($sql111);
				$kue112 = mysql_query($sql112);
				$kue113 = mysql_query($sql113);
				$kue114 = mysql_query($sql114);
				$kue115 = mysql_query($sql115);
				$kue116 = mysql_query($sql116);
				$kue117 = mysql_query($sql117);
				$kue118 = mysql_query($sql118);
				$kue119 = mysql_query($sql119);
				$kue120 = mysql_query($sql120);
				$kue121 = mysql_query($sql121);
				$kue122 = mysql_query($sql122);
				$kue123 = mysql_query($sql123);
				$kue124 = mysql_query($sql124);
				$kue125 = mysql_query($sql125);
				$kue126 = mysql_query($sql126);
				$kue127 = mysql_query($sql127);
				$kue128 = mysql_query($sql128);
				$kue129 = mysql_query($sql129);
				$kue130 = mysql_query($sql130);
				$kue131 = mysql_query($sql131);
				$kue132 = mysql_query($sql132);
				$kue133 = mysql_query($sql133);
				$kue134 = mysql_query($sql134);
				$kue135 = mysql_query($sql135);
				$kue136 = mysql_query($sql136);
				$kue137 = mysql_query($sql137);
				$kue138 = mysql_query($sql138);
				$kue139 = mysql_query($sql139);
				$kue140 = mysql_query($sql140);
				$kue141 = mysql_query($sql141);
				$kue142 = mysql_query($sql142);
				$kue143 = mysql_query($sql143);
				$kue144 = mysql_query($sql144);
				$kue145 = mysql_query($sql145);
				$kue146 = mysql_query($sql146);
				$kue147 = mysql_query($sql147);
				$kue148 = mysql_query($sql148);
				$kue149 = mysql_query($sql149);
				$kue150 = mysql_query($sql150);
				$kue151 = mysql_query($sql151);
				$kue152 = mysql_query($sql152);
				$kue153 = mysql_query($sql153);
				$kue154 = mysql_query($sql154);
				$kue155 = mysql_query($sql155);
				$kue156 = mysql_query($sql156);
				$kue157 = mysql_query($sql157);
				$kue158 = mysql_query($sql158);
				$kue159 = mysql_query($sql159);
				$kue160 = mysql_query($sql160);
				$kue161 = mysql_query($sql161);
				$kue162 = mysql_query($sql162);
				$kue163 = mysql_query($sql163);
				$kue164 = mysql_query($sql164);
				$kue165 = mysql_query($sql165);
				$kue166 = mysql_query($sql166);
				$kue167 = mysql_query($sql167);
				$kue168 = mysql_query($sql168);
				$kue169 = mysql_query($sql169);
				$kue170 = mysql_query($sql170);
				$kue171 = mysql_query($sql171);			
				$kue172 = mysql_query($sql172);
				$kue173 = mysql_query($sql173);
				$kue174 = mysql_query($sql174);
				$kue175 = mysql_query($sql175);
				$kue176 = mysql_query($sql176);
				$kue177 = mysql_query($sql177);
				$kue178 = mysql_query($sql178);
				$kue179 = mysql_query($sql179);
				$kue180 = mysql_query($sql180);
				$kue181 = mysql_query($sql181);
				$kue182 = mysql_query($sql182);
				$kue183 = mysql_query($sql183);
				$kue184 = mysql_query($sql184);
				$kue185 = mysql_query($sql185);
				$kue186 = mysql_query($sql186);
				$kue187 = mysql_query($sql187);
				$kue188 = mysql_query($sql188);
				$kue189 = mysql_query($sql189);
				$kue190 = mysql_query($sql190);

				if($kue17){
					echo "<script type='text/javascript'>alert('Pengisian SIPD tahun ";
					echo $thn;
					echo " berhasil.')</script>";
					echo "<meta http-equiv='refresh' content=0;url='show'>";
				}
			}
		}else{
			$tahu = date("Y");
			$sqlin1 = "DELETE * FROM `sipd`.`log` WHERE `tahun` = '$tahu'";

			$kuein1 = mysql_query($sqlin1);

			if($kuein1){
				echo "<script type='text/javascript'>alert('Pengisian SIPD tahun ";
				echo $tahu;
				echo " berhasil.')</script>";
				echo "<meta http-equiv='refresh' content=0;url='show'>";
			}
		}
	}else if(isset($_POST['rekap'])){
		$anu = date("Y");
		$wkwk = $_POST['repil'];
		$hehe = array();
		if($wkwk == "datum"){
			$hehe = array("geo_luas_wil&8","geo_topografi&7","geo_luaslahan&63","geo_iklimavg&13","geo_fisiografi&5",
				"pmr_adminpmr&20","pmr_statusotonomi&5","pmr_perdaijin&26","pmr_sarpras&171","pmr_konsarpras&23",
				"dmg_capil&15","dmg_lahan&3","dmg_famjob&3","dmg_usia&16","dmg_deprat&1","dmg_padatpenduduk&3",
				"dmg_inoutsave&7","dmg_tk&39","dmg_pblmu&10","dmg_tumduk&11","dmg_angkahidup&3","dmg_pendudukdidik&9",
				"dmg_keluarga&3","dmg_rumtang&1","dmg_urumtang&1","dmg_tanilayan&11","dmg_perempuananak&7",
				"dmg_tkunder&3","geo_jmlpulau&44","geo_jmlgunung&4","geo_batasnl&4","dmg_jmlrmhtgl&1");
		}else if($wkwk == "sbd"){
			$hehe = array("kes_sarkes&50","kes_siif&8","kes_kesmas&34","kes_dagkes&3","kes_tenkes&25","kes_kompbidan&7",
				"kes_uci&2","kes_pppp&13","kes_pkrpmm&2","kes_pkdpmm&1","kes_kunbay&3","kes_klb&1","kes_siagaaktif&1",
				"pknpo_didikumum&307","pknpo_senbud&7","pknpo_cabudtari&5","pknpo_pora&7","pknpo_expotaun&1",
				"pknpo_perpus&6","pknpo_kpbps&5","pknpo_lulusanke&4","pknpo_kualifikasiguru&5","pknpo_penuhguru&5",
				"pknpo_miliksekolah&5","pknpo_smkpt&1","pknpo_luluskerja&1","pknpo_cabudda&5","kesos_ipm&1","kesos_jpm&3",
				"kesos_p1&3","kesos_p2&3","kesos_jamkesmasda&3","kesos_kemiskinan&10","kesos_kmtk&6","kesos_jkplsm&4",
				"kesos_psks&5","kesos_pmks&4","kesos_masos&43","kesos_pkk&3","kesos_pktk&4","kesos_indeksgini&1","kesos_ppvbd&1",
				"kesos_williamson&1","ag_jmlpeluk&8","ag_sarib&7","ag_haji&3","ag_kua&4","ag_nyuluh&3","ag_lembagadidik&6");
		}else if($wkwk == "suda"){
			$hehe = array("sda_air_limbah&3","sda_energi&47","sda_hortikultura&235","sda_kehutanan&26","sda_kel_sos&14",
				"sda_kendalilink&4","sda_laut_ikan&143","sda_linkhidup&42","sda_pelestarianlink&10","sda_perkebunan&103",
				"sda_pertambangan&72","sda_pertanahan&36","sda_pertanian&65","sda_peternakan&50","sda_rusaklinkhidup&15",
				"sda_sampah&7","sda_tataruang&18");
		}else if($wkwk == "infras"){
			$hehe = array("infra_angkum&29","infra_arealmukim&7","infra_bantaran&4","infra_bermotor&5","infra_dayamakam&5",
				"infra_drainase&4","infra_ilegal&13","infra_jembatan&3","infra_jmlbangun&3","infra_jmlrmh&7","infra_kondisijln&7",
				"infra_kumuh&7","infra_lsrmh&7","infra_mutuair&7","infra_pariwisata&42","infra_pemakaman&5","infra_pengairan&9",
				"infra_penghubung&3","infra_penyiaran&7","infra_perhubungan&54","infra_perumahan&19","infra_pjfungsi&5",
				"infra_pjjln&8","infra_pjkondisi&4","infra_pjmilik&5","infra_rmhsanitasi&5","infra_rpublik&7","infra_sam&8",
				"infra_sempadan&3","infra_sip&3","infra_srtkabar&3","infra_sutet&4","infra_telekomunikasi&17",
				"infra_transportasi&13","infra_turap&4");
		}else if($wkwk == "eko"){
			$hehe = array("eko_asjiwa&4","eko_asrugi&3","eko_bankumum&3","eko_bpr&3","eko_einonmigas&5","eko_indsubsektor&24",
				"eko_industri&41","eko_invnas&9","eko_ioindustri&21","eko_jasauang&19","eko_perbankan&3","eko_perdagangan&34",
				"eko_perijinan&30","eko_pma&11","eko_pmdn&15","eko_ukmnon&4","eko_usahanas&14");
		}else if($wkwk == "polhuk"){
			$hehe = array("pdnp_jad&1","pdnp_kadbjk&3","pdnp_jfd&1","pdnp_parpol&3","pdnp_kpm&2","pdnp_tpp&2","pdnp_ormas&3",
				"pdnp_jlpm&3","pdnp_jppm&1","pdnp_jsmm&1","pdnp_jppmd&1","pdnp_lswm&10","pdnp_jkppd&1","huk_ph&18","huk_jktd&1",
				"huk_jkyt&1","huk_kel&6","huk_jtk&8","huk_jtkd&8","kkm_kkm&37");
		}else if($wkwk == "insiden"){
			$hehe = array("ben_jpa&8","ben_jpl&1","ben_jpkl&1","ben_jpd&1","ben_jkba&4","ben_jlb&1","ben_jklb&1","ben_jpkab&1",
				"ben_kb&11","pm_jkw&14","pm_eph&5","pikan_jkpi&1","pikan_jikap&1","pikan_jlpi&1","khut_lah&1","khut_jkj&1",
				"khut_jlkh&1","ppk_vk&1","ppk_jk&1","ppk_jlpp&1");
		}

		$z = 0;
		$gg = count($hehe);
		for ($wp=0;$wp<$gg;$wp++) {
			$ckck = $hehe[$z];
			$pegat = explode("&", $ckck);
			$nata = $pegat[0];
			$ufi = $pegat[1];
			/*echo $nata."=".$ufi."<br>";*/
			$lalu = "SELECT `isian` FROM `sipd`.`log` WHERE `namatabel` = '$nata'";
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
			for ($i=0; $i < $ufi; $i++) {
				for ($x=1; $x < $n; $x++) { 
					$rekam[0][$i] = $rekam[0][$i] + $rekam[$x][$i];				
				}
			}
			$y = 1;
			for ($m=0; $m < $ufi; $m++) { 
				$simpan = number_format($rekam[0][$m],'3',',','.');
				echo $simpan."<br>";
				$kaki = "UPDATE `$nata` SET `$anu` = '$simpan' WHERE `id` = '$y'";
				$tangan = mysql_query($kaki);
				$y++;
			}
			$z++;
		}		
	}
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
        Extra Menu <small>(Buka Pengisian Data, Rekap Data dan Evaluasi Keterisian Data SIPD)</small>
        </h1>
    </div>
</div>

	<form method="post" action="" name="ara" role="form">
        <!-- Start Buka Pengisian -->
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-github fa-fw"></i> Buka Pengisian Data SIPD Tahun <?php $tt=date("Y");echo $tt; ?></h3>
                    </div>
                    <div class="panel-body">
                        <center><input type="submit" class="btn btn-success" name="bukain" value="Buka Pengisian Data SIPD" <?php echo $hiasin; ?> /></center>
                    </div>
                </div>
            </div>
        <!-- End Buka Pengisian -->
    <!-- </form>
   <form method="post" action="rekap"> -->
        <!-- Start Rekap Data -->
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-github fa-fw"></i> Rekap Data SIPD Tahun <?php $vv=date("Y");echo $vv; ?></h3>
                    </div>
                    <div class="panel-body">
                        <label>Pilih Sub Data &nbsp;&nbsp;</label>
                        <select name="repil">
                        	<option value="datum">Data Umum</option>>
                        	<option value="sbd">Sosial Budaya</option>
                        	<option value="suda">Sumber Daya Alam</option>
                        	<option value="infras">Infrastruktur</option>
                        	<option value="eko">Ekonomi</option>
                        	<option value="polhuk">Polhukam</option>
                        	<option value="insiden">Insidensial</option>
                        </select>&nbsp;&nbsp;
                        <input type="submit" class="btn btn-success" name="rekap" value="Mulai Rekap Data" />
                    </div>
                </div>
            </div>
        <!-- End Rekap Data -->
   <!--  </form>
    <form method="post" action="eval"> -->
        <!-- Start Rekap Data -->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-github fa-fw"></i> Evaluasi Keterisian Data SIPD Tahun <?php $w=date("Y");echo $w; ?></h3>
                    </div>
                    <div class="panel-body">
                        <input type="submit" class="btn btn-success" name="eval" value="Evaluasi Keterisian Data" />
                    </div>
                </div>
            </div>
        </div>
        <!-- End Rekap Data -->
    </form>