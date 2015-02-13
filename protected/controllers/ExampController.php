<?php 

	class ExampController extends YiinigoController
	{
		public $layout="adminpage1";
		
		public function actionIndex(){
			$orang = Yii::app()->user->username;
			$taini = date("Y");
			$isilah = array();
			
			$sqlw1 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_luas_wil' AND `tahun` = '$taini'";
			$sqlw1a = "SELECT * FROM `sipd`.`geo_luas_wil`";
			$sqlw2 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_topografi' AND `tahun` = '$taini'";
			$sqlw2a = "SELECT * FROM `sipd`.`geo_topografi`";
			$sqlw3 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_luaslahan' AND `tahun` = '$taini'";
			$sqlw3a = "SELECT * FROM `sipd`.`geo_luaslahan`";
			$sqlw4 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_iklimavg' AND `tahun` = '$taini'";
			$sqlw4a = "SELECT * FROM `sipd`.`geo_iklimavg`";
			$sqlw5 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_jmlpulau' AND `tahun` = '$taini'";
			$sqlw5a = "SELECT * FROM `sipd`.`geo_jmlpulau`";
			$sqlw6 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_jmlgunung' AND `tahun` = '$taini'";
			$sqlw6a = "SELECT * FROM `sipd`.`geo_jmlgunung`";
			$sqlw7 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_batasnl' AND `tahun` = '$taini'";
			$sqlw7a = "SELECT * FROM `sipd`.`geo_batasnl`";
			$sqlw8 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_fisiografi' AND `tahun` = '$taini'";
			$sqlw8a = "SELECT * FROM `sipd`.`geo_fisiografi`";
			$sqlw9 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pmr_adminpmr' AND `tahun` = '$taini'";
			$sqlw9a = "SELECT * FROM `sipd`.`pmr_adminpmr`";
			$sqlw10 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pmr_statusotonomi' AND `tahun` = '$taini'";
			$sqlw10a = "SELECT * FROM `sipd`.`pmr_statusotonomi`";
			$sqlw11 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pmr_perdaijin' AND `tahun` = '$taini'";
			$sqlw11a = "SELECT * FROM `sipd`.`pmr_perdaijin`";
			$sqlw12 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pmr_sarpras' AND `tahun` = '$taini'";
			$sqlw12a = "SELECT * FROM `sipd`.`pmr_sarpras`";
			$sqlw13 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pmr_konsarpras' AND `tahun` = '$taini'";
			$sqlw13a = "SELECT * FROM `sipd`.`pmr_konsarpras`";
			$sqlw14 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_capil' AND `tahun` = '$taini'";
			$sqlw14a = "SELECT * FROM `sipd`.`dmg_capil`";
			$sqlw15 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_lahan' AND `tahun` = '$taini'";
			$sqlw15a = "SELECT * FROM `sipd`.`dmg_lahan`";
			$sqlw16 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_famjob' AND `tahun` = '$taini'";
			$sqlw16a = "SELECT * FROM `sipd`.`dmg_famjob`";
			$sqlw17 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_usia' AND `tahun` = '$taini'";
			$sqlw17a = "SELECT * FROM `sipd`.`dmg_usia`";
			$sqlw18 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_deprat' AND `tahun` = '$taini'";
			$sqlw18a = "SELECT * FROM `sipd`.`dmg_deprat`";
			$sqlw19 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_padatpenduduk' AND `tahun` = '$taini'";
			$sqlw19a = "SELECT * FROM `sipd`.`dmg_padatpenduduk`";
			$sqlw20 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_inoutsave' AND `tahun` = '$taini'";
			$sqlw20a = "SELECT * FROM `sipd`.`dmg_inoutsave`";
			$sqlw21 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_tk' AND `tahun` = '$taini'";
			$sqlw21a = "SELECT * FROM `sipd`.`dmg_tk`";
			$sqlw22 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_pblmu' AND `tahun` = '$taini'";
			$sqlw22a = "SELECT * FROM `sipd`.`dmg_pblmu`";
			$sqlw23 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_tumduk' AND `tahun` = '$taini'";
			$sqlw23a = "SELECT * FROM `sipd`.`dmg_tumduk`";
			$sqlw24 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_angkahidup' AND `tahun` = '$taini'";
			$sqlw24a = "SELECT * FROM `sipd`.`dmg_angkahidup`";
			$sqlw25 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_pendudukdidik' AND `tahun` = '$taini'";
			$sqlw25a = "SELECT * FROM `sipd`.`dmg_pendudukdidik`";
			$sqlw26 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_keluarga' AND `tahun` = '$taini'";
			$sqlw26a = "SELECT * FROM `sipd`.`dmg_keluarga`";
			$sqlw27 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_rumtang' AND `tahun` = '$taini'";
			$sqlw27a = "SELECT * FROM `sipd`.`dmg_rumtang`";
			$sqlw28 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_urumtang' AND `tahun` = '$taini'";
			$sqlw28a = "SELECT * FROM `sipd`.`dmg_urumtang`";
			$sqlw29 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_jmlrmhtgl' AND `tahun` = '$taini'";
			$sqlw29a = "SELECT * FROM `sipd`.`dmg_jmlrmhtgl`";
			$sqlw30 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_tanilayan' AND `tahun` = '$taini'";
			$sqlw30a = "SELECT * FROM `sipd`.`dmg_tanilayan`";
			$sqlw31 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_perempuananak' AND `tahun` = '$taini'";
			$sqlw31a = "SELECT * FROM `sipd`.`dmg_perempuananak`";
			$sqlw32 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_tkunder' AND `tahun` = '$taini'";
			$sqlw32a = "SELECT * FROM `sipd`.`dmg_tkunder`";
			$sqlw33 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_sarkes' AND `tahun` = '$taini'";
			$sqlw33a = "SELECT * FROM `sipd`.`kes_sarkes`";
			$sqlw34 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_siif' AND `tahun` = '$taini'";
			$sqlw34a = "SELECT * FROM `sipd`.`kes_siif`";
			$sqlw35 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_kesmas' AND `tahun` = '$taini'";
			$sqlw35a = "SELECT * FROM `sipd`.`kes_kesmas`";
			$sqlw36 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_dagkes' AND `tahun` = '$taini'";
			$sqlw36a = "SELECT * FROM `sipd`.`kes_dagkes`";
			$sqlw37 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_tenkes' AND `tahun` = '$taini'";
			$sqlw37a = "SELECT * FROM `sipd`.`kes_tenkes`";
			$sqlw38 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_kompbidan' AND `tahun` = '$taini'";
			$sqlw38a = "SELECT * FROM `sipd`.`kes_kompbidan`";
			$sqlw39 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_uci' AND `tahun` = '$taini'";
			$sqlw39a = "SELECT * FROM `sipd`.`kes_uci`";
			$sqlw40 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_pppp' AND `tahun` = '$taini'";
			$sqlw40a = "SELECT * FROM `sipd`.`kes_pppp`";
			$sqlw41 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_pkrpmm' AND `tahun` = '$taini'";
			$sqlw41a = "SELECT * FROM `sipd`.`kes_pkrpmm`";
			$sqlw42 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_pkdpmm' AND `tahun` = '$taini'";
			$sqlw42a = "SELECT * FROM `sipd`.`kes_pkdpmm`";
			$sqlw43 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_kunbay' AND `tahun` = '$taini'";
			$sqlw43a = "SELECT * FROM `sipd`.`kes_kunbay`";
			$sqlw44 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_klb' AND `tahun` = '$taini'";
			$sqlw44a = "SELECT * FROM `sipd`.`kes_klb`";
			$sqlw45 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_siagaaktif' AND `tahun` = '$taini'";
			$sqlw45a = "SELECT * FROM `sipd`.`kes_siagaaktif`";
			$sqlw46 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_didikumum' AND `tahun` = '$taini'";
			$sqlw46a = "SELECT * FROM `sipd`.`pknpo_didikumum`";
			$sqlw47 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_senbud' AND `tahun` = '$taini'";
			$sqlw47a = "SELECT * FROM `sipd`.`pknpo_senbud`";
			$sqlw48 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_cabudtari' AND `tahun` = '$taini'";
			$sqlw48a = "SELECT * FROM `sipd`.`pknpo_cabudtari`";
			$sqlw49 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_pora' AND `tahun` = '$taini'";
			$sqlw49a = "SELECT * FROM `sipd`.`pknpo_pora`";
			$sqlw50 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_expotaun' AND `tahun` = '$taini'";
			$sqlw50a = "SELECT * FROM `sipd`.`pknpo_expotaun`";
			$sqlw51 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_perpus' AND `tahun` = '$taini'";
			$sqlw51a = "SELECT * FROM `sipd`.`pknpo_perpus`";
			$sqlw52 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_kpbps' AND `tahun` = '$taini'";
			$sqlw52a = "SELECT * FROM `sipd`.`pknpo_kpbps`";
			$sqlw53 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_lulusanke' AND `tahun` = '$taini'";
			$sqlw53a = "SELECT * FROM `sipd`.`pknpo_lulusanke`";
			$sqlw54 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_kualifikasiguru' AND `tahun` = '$taini'";
			$sqlw54a = "SELECT * FROM `sipd`.`pknpo_kualifikasiguru`";
			$sqlw55 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_penuhguru' AND `tahun` = '$taini'";
			$sqlw55a = "SELECT * FROM `sipd`.`pknpo_penuhguru`";
			$sqlw56 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_miliksekolah' AND `tahun` = '$taini'";
			$sqlw56a = "SELECT * FROM `sipd`.`pknpo_miliksekolah`";
			$sqlw57 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_smkpt' AND `tahun` = '$taini'";
			$sqlw57a = "SELECT * FROM `sipd`.`pknpo_smkpt`";
			$sqlw58 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_luluskerja' AND `tahun` = '$taini'";
			$sqlw58a = "SELECT * FROM `sipd`.`pknpo_luluskerja`";
			$sqlw59 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_cabudda' AND `tahun` = '$taini'";
			$sqlw59a = "SELECT * FROM `sipd`.`pknpo_cabudda`";
			$sqlw60 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_ipm' AND `tahun` = '$taini'";
			$sqlw60a = "SELECT * FROM `sipd`.`kesos_ipm`";
			$sqlw61 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_jpm' AND `tahun` = '$taini'";
			$sqlw61a = "SELECT * FROM `sipd`.`kesos_jpm`";
			$sqlw62 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_p1' AND `tahun` = '$taini'";
			$sqlw62a = "SELECT * FROM `sipd`.`kesos_p1`";
			$sqlw63 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_p2' AND `tahun` = '$taini'";
			$sqlw63a = "SELECT * FROM `sipd`.`kesos_p2`";
			$sqlw64 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_jamkesmasda' AND `tahun` = '$taini'";
			$sqlw64a = "SELECT * FROM `sipd`.`kesos_jamkesmasda`";
			$sqlw65 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_kemiskinan' AND `tahun` = '$taini'";
			$sqlw65a = "SELECT * FROM `sipd`.`kesos_kemiskinan`";
			$sqlw66 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_kmtk' AND `tahun` = '$taini'";
			$sqlw66a = "SELECT * FROM `sipd`.`kesos_kmtk`";
			$sqlw67 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_jkplsm' AND `tahun` = '$taini'";
			$sqlw67a = "SELECT * FROM `sipd`.`kesos_jkplsm`";
			$sqlw68 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_psks' AND `tahun` = '$taini'";
			$sqlw68a = "SELECT * FROM `sipd`.`kesos_psks`";
			$sqlw69 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_pmks' AND `tahun` = '$taini'";
			$sqlw69a = "SELECT * FROM `sipd`.`kesos_pmks`";
			$sqlw70 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_masos' AND `tahun` = '$taini'";
			$sqlw70a = "SELECT * FROM `sipd`.`kesos_masos`";
			$sqlw71 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_pkk' AND `tahun` = '$taini'";
			$sqlw71a = "SELECT * FROM `sipd`.`kesos_pkk`";
			$sqlw72 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_pktk' AND `tahun` = '$taini'";
			$sqlw72a = "SELECT * FROM `sipd`.`kesos_pktk`";
			$sqlw73 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_indeksgini' AND `tahun` = '$taini'";
			$sqlw73a = "SELECT * FROM `sipd`.`kesos_indeksgini`";
			$sqlw74 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_ppvbd' AND `tahun` = '$taini'";
			$sqlw74a = "SELECT * FROM `sipd`.`kesos_ppvbd`";
			$sqlw75 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_williamson' AND `tahun` = '$taini'";
			$sqlw75a = "SELECT * FROM `sipd`.`kesos_williamson`";
			$sqlw76 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ag_jmlpeluk' AND `tahun` = '$taini'";
			$sqlw76a = "SELECT * FROM `sipd`.`ag_jmlpeluk`";
			$sqlw77 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ag_sarib' AND `tahun` = '$taini'";
			$sqlw77a = "SELECT * FROM `sipd`.`ag_sarib`";
			$sqlw78 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ag_haji' AND `tahun` = '$taini'";
			$sqlw78a = "SELECT * FROM `sipd`.`ag_haji`";
			$sqlw79 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ag_kua' AND `tahun` = '$taini'";
			$sqlw79a = "SELECT * FROM `sipd`.`ag_kua`";
			$sqlw80 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ag_nyuluh' AND `tahun` = '$taini'";
			$sqlw80a = "SELECT * FROM `sipd`.`ag_nyuluh`";
			$sqlw81 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ag_lembagadidik' AND `tahun` = '$taini'";
			$sqlw81a = "SELECT * FROM `sipd`.`ag_lembagadidik`";
			$sqlw82 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jad' AND `tahun` = '$taini'";
			$sqlw82a = "SELECT * FROM `sipd`.`pdnp_jad`";
			$sqlw83 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_kadbjk' AND `tahun` = '$taini'";
			$sqlw83a = "SELECT * FROM `sipd`.`pdnp_kadbjk`";
			$sqlw84 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jfd' AND `tahun` = '$taini'";
			$sqlw84a = "SELECT * FROM `sipd`.`pdnp_jfd`";
			$sqlw85 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_parpol' AND `tahun` = '$taini'";
			$sqlw85a = "SELECT * FROM `sipd`.`pdnp_parpol`";
			$sqlw86 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_kpm' AND `tahun` = '$taini'";
			$sqlw86a = "SELECT * FROM `sipd`.`pdnp_kpm`";
			$sqlw87 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_tpp' AND `tahun` = '$taini'";
			$sqlw87a = "SELECT * FROM `sipd`.`pdnp_tpp`";
			$sqlw88 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_ormas' AND `tahun` = '$taini'";
			$sqlw88a = "SELECT * FROM `sipd`.`pdnp_ormas`";
			$sqlw89 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jlpm' AND `tahun` = '$taini'";
			$sqlw89a = "SELECT * FROM `sipd`.`pdnp_jlpm`";
			$sqlw90 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jppm' AND `tahun` = '$taini'";
			$sqlw90a = "SELECT * FROM `sipd`.`pdnp_jppm`";
			$sqlw91 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jsmm' AND `tahun` = '$taini'";
			$sqlw91a = "SELECT * FROM `sipd`.`pdnp_jsmm`";
			$sqlw92 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jppmd' AND `tahun` = '$taini'";
			$sqlw92a = "SELECT * FROM `sipd`.`pdnp_jppmd`";
			$sqlw93 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_lswm' AND `tahun` = '$taini'";
			$sqlw93a = "SELECT * FROM `sipd`.`pdnp_lswm`";
			$sqlw94 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jkppd' AND `tahun` = '$taini'";
			$sqlw94a = "SELECT * FROM `sipd`.`pdnp_jkppd`";
			$sqlw95 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'huk_ph' AND `tahun` = '$taini'";
			$sqlw95a = "SELECT * FROM `sipd`.`huk_ph`";
			$sqlw96 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'huk_jktd' AND `tahun` = '$taini'";
			$sqlw96a = "SELECT * FROM `sipd`.`huk_jktd`";
			$sqlw97 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'huk_jkyt' AND `tahun` = '$taini'";
			$sqlw97a = "SELECT * FROM `sipd`.`huk_jkyt`";
			$sqlw98 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'huk_kel' AND `tahun` = '$taini'";
			$sqlw98a = "SELECT * FROM `sipd`.`huk_kel`";
			$sqlw99 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'huk_jtk' AND `tahun` = '$taini'";
			$sqlw99a = "SELECT * FROM `sipd`.`huk_jtk`";
			$sqlw100 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'huk_jtkd' AND `tahun` = '$taini'";
			$sqlw100a = "SELECT * FROM `sipd`.`huk_jtkd`";
			$sqlw101 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kkm_kkm' AND `tahun` = '$taini'";
			$sqlw101a = "SELECT * FROM `sipd`.`kkm_kkm`";
			$sqlw102 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jpa' AND `tahun` = '$taini'";
			$sqlw102a = "SELECT * FROM `sipd`.`ben_jpa`";
			$sqlw103 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jpl' AND `tahun` = '$taini'";
			$sqlw103a = "SELECT * FROM `sipd`.`ben_jpl`";
			$sqlw104 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jpkl' AND `tahun` = '$taini'";
			$sqlw104a = "SELECT * FROM `sipd`.`ben_jpkl`";
			$sqlw105 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jpd' AND `tahun` = '$taini'";
			$sqlw105a = "SELECT * FROM `sipd`.`ben_jpd`";
			$sqlw106 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jkba' AND `tahun` = '$taini'";
			$sqlw106a = "SELECT * FROM `sipd`.`ben_jkba`";
			$sqlw107 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jlb' AND `tahun` = '$taini'";
			$sqlw107a = "SELECT * FROM `sipd`.`ben_jlb`";
			$sqlw108 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jklb' AND `tahun` = '$taini'";
			$sqlw108a = "SELECT * FROM `sipd`.`ben_jklb`";
			$sqlw109 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jpkab' AND `tahun` = '$taini'";
			$sqlw109a = "SELECT * FROM `sipd`.`ben_jpkab`";
			$sqlw110 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_kb' AND `tahun` = '$taini'";
			$sqlw110a = "SELECT * FROM `sipd`.`ben_kb`";
			$sqlw111 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pm_jkw' AND `tahun` = '$taini'";
			$sqlw111a = "SELECT * FROM `sipd`.`pm_jkw`";
			$sqlw112 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pm_eph' AND `tahun` = '$taini'";
			$sqlw112a = "SELECT * FROM `sipd`.`pm_eph`";
			$sqlw113 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pikan_jkpi' AND `tahun` = '$taini'";
			$sqlw113a = "SELECT * FROM `sipd`.`pikan_jkpi`";
			$sqlw114 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pikan_jikap' AND `tahun` = '$taini'";
			$sqlw114a = "SELECT * FROM `sipd`.`pikan_jikap`";
			$sqlw115 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pikan_jlpi' AND `tahun` = '$taini'";
			$sqlw115a = "SELECT * FROM `sipd`.`pikan_jlpi`";
			$sqlw116 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'khut_lah' AND `tahun` = '$taini'";
			$sqlw116a = "SELECT * FROM `sipd`.`khut_lah`";
			$sqlw117 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'khut_jkj' AND `tahun` = '$taini'";
			$sqlw117a = "SELECT * FROM `sipd`.`khut_jkj`";
			$sqlw118 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'khut_jlkh' AND `tahun` = '$taini'";
			$sqlw118a = "SELECT * FROM `sipd`.`khut_jlkh`";
			$sqlw119 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ppk_vk' AND `tahun` = '$taini'";
			$sqlw119a = "SELECT * FROM `sipd`.`ppk_vk`";
			$sqlw120 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ppk_jk' AND `tahun` = '$taini'";
			$sqlw120a = "SELECT * FROM `sipd`.`ppk_jk`";
			$sqlw121 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ppk_jlpp' AND `tahun` = '$taini'";
			$sqlw121a = "SELECT * FROM `sipd`.`ppk_jlpp`";
			$sql1 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_industri' AND `tahun` = '$taini'";
			$sql2 = "SELECT * FROM `sipd`.`eko_industri`";
			$sql3 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_perdagangan' AND `tahun` = '$taini'";
			$sql4 = "SELECT * FROM `sipd`.`eko_perdagangan`";
			$sql5 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_usahanas' AND `tahun` = '$taini'";
			$sql6 = "SELECT * FROM `sipd`.`eko_usahanas`";
			$sql7 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_einonmigas' AND `tahun` = '$taini'";
			$sql8 = "SELECT * FROM `sipd`.`eko_einonmigas`";
			$sql9 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_ioindustri' AND `tahun` = '$taini'";
			$sql10 = "SELECT * FROM `sipd`.`eko_ioindustri`";
			$sql11 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_perijinan' AND `tahun` = '$taini'";
			$sql12 = "SELECT * FROM `sipd`.`eko_perijinan`";
			$sql13 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_indsubsektor' AND `tahun` = '$taini'";
			$sql14 = "SELECT * FROM `sipd`.`eko_indsubsektor`";
			$sql15 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_pma' AND `tahun` = '$taini'";
			$sql16 = "SELECT * FROM `sipd`.`eko_pma`";
			$sql17 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_pmdn' AND `tahun` = '$taini'";
			$sql18 = "SELECT * FROM `sipd`.`eko_pmdn`";
			$sql19 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_bpr' AND `tahun` = '$taini'";
			$sql20 = "SELECT * FROM `sipd`.`eko_bpr`";
			$sql21 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_bankumum' AND `tahun` = '$taini'";
			$sql22 = "SELECT * FROM `sipd`.`eko_bankumum`";
			$sql23 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_asrugi' AND `tahun` = '$taini'";
			$sql24 = "SELECT * FROM `sipd`.`eko_asrugi`";
			$sql25 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_asjiwa' AND `tahun` = '$taini'";
			$sql26 = "SELECT * FROM `sipd`.`eko_asjiwa`";
			$sql27 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_invnas' AND `tahun` = '$taini'";
			$sql28 = "SELECT * FROM `sipd`.`eko_invnas`";
			$sql29 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_jasauang' AND `tahun` = '$taini'";
			$sql30 = "SELECT * FROM `sipd`.`eko_jasauang`";
			$sql31 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_ukmnon' AND `tahun` = '$taini'";
			$sql32 = "SELECT * FROM `sipd`.`eko_ukmnon`";
			$sql33 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_perbankan' AND `tahun` = '$taini'";
			$sql34 = "SELECT * FROM `sipd`.`eko_perbankan`";
			$sql35 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_perumahan' AND `tahun` = '$taini'";
			$sql36 = "SELECT * FROM `sipd`.`infra_perumahan`";
			$sql37 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_jmlrmh' AND `tahun` = '$taini'";
			$sql38 = "SELECT * FROM `sipd`.`infra_jmlrmh`";
			$sql39 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_lsrmh' AND `tahun` = '$taini'";
			$sql40 = "SELECT * FROM `sipd`.`infra_lsrmh`";
			$sql41 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_arealmukim' AND `tahun` = '$taini'";
			$sql42 = "SELECT * FROM `sipd`.`infra_arealmukim`";
			$sql43 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_jmlbangun' AND `tahun` = '$taini'";
			$sql44 = "SELECT * FROM `sipd`.`infra_jmlbangun`";
			$sql45 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_kumuh' AND `tahun` = '$taini'";
			$sql46 = "SELECT * FROM `sipd`.`infra_kumuh`";
			$sql47 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_ilegal' AND `tahun` = '$taini'";
			$sql48 = "SELECT * FROM `sipd`.`infra_ilegal`";
			$sql49 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_bantaran' AND `tahun` = '$taini'";
			$sql50 = "SELECT * FROM `sipd`.`infra_bantaran`";
			$sql51 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_sutet' AND `tahun` = '$taini'";
			$sql52 = "SELECT * FROM `sipd`.`infra_sutet`";
			$sql53 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_rpublik' AND `tahun` = '$taini'";
			$sql54 = "SELECT * FROM `sipd`.`infra_rpublik`";
			$sql55 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_rmhsanitasi' AND `tahun` = '$taini'";
			$sql56 = "SELECT * FROM `sipd`.`infra_rmhsanitasi`";
			$sql57 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pjjln' AND `tahun` = '$taini'";
			$sql58 = "SELECT * FROM `sipd`.`infra_pjjln`";
			$sql59 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_kondisijln' AND `tahun` = '$taini'";
			$sql60 = "SELECT * FROM `sipd`.`infra_kondisijln`";
			$sql61 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pjkondisi' AND `tahun` = '$taini'";
			$sql62 = "SELECT * FROM `sipd`.`infra_pjkondisi`";
			$sql63 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_penghubung' AND `tahun` = '$taini'";
			$sql64 = "SELECT * FROM `sipd`.`infra_penghubung`";
			$sql65 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_jembatan' AND `tahun` = '$taini'";
			$sql66 = "SELECT * FROM `sipd`.`infra_jembatan`";
			$sql67 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pjfungsi' AND `tahun` = '$taini'";
			$sql68 = "SELECT * FROM `sipd`.`infra_pjfungsi`";
			$sql69 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pemakaman' AND `tahun` = '$taini'";
			$sql70 = "SELECT * FROM `sipd`.`infra_pemakaman`";
			$sql71 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pengairan' AND `tahun` = '$taini'";
			$sql72 = "SELECT * FROM `sipd`.`infra_pengairan`";
			$sql73 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pjmilik' AND `tahun` = '$taini'";
			$sql74 = "SELECT * FROM `sipd`.`infra_pjmilik`";
			$sql75 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_sempadan' AND `tahun` = '$taini'";
			$sql76 = "SELECT * FROM `sipd`.`infra_sempadan`";
			$sql77 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_drainase' AND `tahun` = '$taini'";
			$sql78 = "SELECT * FROM `sipd`.`infra_drainase`";
			$sql79 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_turap' AND `tahun` = '$taini'";
			$sql80 = "SELECT * FROM `sipd`.`infra_turap`";
			$sql81 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_sam' AND `tahun` = '$taini'";
			$sql82 = "SELECT * FROM `sipd`.`infra_sam`";
			$sql83 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_mutuair' AND `tahun` = '$taini'";
			$sql84 = "SELECT * FROM `sipd`.`infra_mutuair`";
			$sql85 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_dayamakam' AND `tahun` = '$taini'";
			$sql86 = "SELECT * FROM `sipd`.`infra_dayamakam`";
			$sql87 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pariwisata' AND `tahun` = '$taini'";
			$sql88 = "SELECT * FROM `sipd`.`infra_pariwisata`";
			$sql89 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_telekomunikasi' AND `tahun` = '$taini'";
			$sql90 = "SELECT * FROM `sipd`.`infra_telekomunikasi`";
			$sql91 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_srtkabar' AND `tahun` = '$taini'";
			$sql92 = "SELECT * FROM `sipd`.`infra_srtkabar`";
			$sql93 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_penyiaran' AND `tahun` = '$taini'";
			$sql94 = "SELECT * FROM `sipd`.`infra_penyiaran`";
			$sql95 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_sip' AND `tahun` = '$taini'";
			$sql96 = "SELECT * FROM `sipd`.`infra_sip`";
			$sql97 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_perhubungan' AND `tahun` = '$taini'";
			$sql98 = "SELECT * FROM `sipd`.`infra_perhubungan`";
			$sql99 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_angkum' AND `tahun` = '$taini'";
			$sql100 = "SELECT * FROM `sipd`.`infra_angkum`";
			$sql101 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_transportasi' AND `tahun` = '$taini'";
			$sql102 = "SELECT * FROM `sipd`.`infra_transportasi`";
			$sql103 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_bermotor' AND `tahun` = '$taini'";
			$sql104 = "SELECT * FROM `sipd`.`infra_bermotor`";
			$sql105 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_pertanian' AND `tahun` = '$taini'";
			$sql106 = "SELECT * FROM `sipd`.`sda_pertanian`";
			$sql107 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_hortikultura' AND `tahun` = '$taini'";
			$sql108 = "SELECT * FROM `sipd`.`sda_hortikultura`";
			$sql109 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_perkebunan' AND `tahun` = '$taini'";
			$sql110 = "SELECT * FROM `sipd`.`sda_perkebunan`";
			$sql111 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_peternakan' AND `tahun` = '$taini'";
			$sql112 = "SELECT * FROM `sipd`.`sda_peternakan`";
			$sql113 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_laut_ikan' AND `tahun` = '$taini'";
			$sql114 = "SELECT * FROM `sipd`.`sda_laut_ikan`";
			$sql115 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_kehutanan' AND `tahun` = '$taini'";
			$sql116 = "SELECT * FROM `sipd`.`sda_kehutanan`";
			$sql117 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_kel_sos' AND `tahun` = '$taini'";
			$sql118 = "SELECT * FROM `sipd`.`sda_kel_sos`";
			$sql119 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_pertambangan' AND `tahun` = '$taini'";
			$sql120 = "SELECT * FROM `sipd`.`sda_pertambangan`";
			$sql121 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_energi' AND `tahun` = '$taini'";
			$sql122 = "SELECT * FROM `sipd`.`sda_energi`";
			$sql123 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_linkhidup' AND `tahun` = '$taini'";
			$sql124 = "SELECT * FROM `sipd`.`sda_linkhidup`";
			$sql125 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_rusaklinkhidup' AND `tahun` = '$taini'";
			$sql126 = "SELECT * FROM `sipd`.`sda_rusaklinkhidup`";
			$sql127 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_pelestarianlink' AND `tahun` = '$taini'";
			$sql128 = "SELECT * FROM `sipd`.`sda_pelestarianlink`";
			$sql129 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_tataruang' AND `tahun` = '$taini'";
			$sql130 = "SELECT * FROM `sipd`.`sda_tataruang`";
			$sql131 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_pertanahan' AND `tahun` = '$taini'";
			$sql132 = "SELECT * FROM `sipd`.`sda_pertanahan`";
			$sql133 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_kendalilink' AND `tahun` = '$taini'";
			$sql134 = "SELECT * FROM `sipd`.`sda_kendalilink`";
			$sql135 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_sampah' AND `tahun` = '$taini'";
			$sql136 = "SELECT * FROM `sipd`.`sda_sampah`";
			$sql137 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_air_limbah' AND `tahun` = '$taini'";
			$sql138 = "SELECT * FROM `sipd`.`sda_air_limbah`";
			$connection = Yii::app()->db;
			$commandw1 = $connection->createCommand($sqlw1);
			$commandw1a = $connection->createCommand($sqlw1a);
			$commandw2 = $connection->createCommand($sqlw2);
			$commandw2a = $connection->createCommand($sqlw2a);
			$commandw3 = $connection->createCommand($sqlw3);
			$commandw3a = $connection->createCommand($sqlw3a);
			$commandw4 = $connection->createCommand($sqlw4);
			$commandw4a = $connection->createCommand($sqlw4a);
			$commandw5 = $connection->createCommand($sqlw5);
			$commandw5a = $connection->createCommand($sqlw5a);
			$commandw6 = $connection->createCommand($sqlw6);
			$commandw6a = $connection->createCommand($sqlw6a);
			$commandw7 = $connection->createCommand($sqlw7);
			$commandw7a = $connection->createCommand($sqlw7a);
			$commandw8 = $connection->createCommand($sqlw8);
			$commandw8a = $connection->createCommand($sqlw8a);
			$commandw9 = $connection->createCommand($sqlw9);
			$commandw9a = $connection->createCommand($sqlw9a);
			$commandw10 = $connection->createCommand($sqlw10);
			$commandw10a = $connection->createCommand($sqlw10a);
			$commandw11 = $connection->createCommand($sqlw11);
			$commandw11a = $connection->createCommand($sqlw11a);
			$commandw12 = $connection->createCommand($sqlw12);
			$commandw12a = $connection->createCommand($sqlw12a);
			$commandw13 = $connection->createCommand($sqlw13);
			$commandw13a = $connection->createCommand($sqlw13a);
			$commandw14 = $connection->createCommand($sqlw14);
			$commandw14a = $connection->createCommand($sqlw14a);
			$commandw15 = $connection->createCommand($sqlw15);
			$commandw15a = $connection->createCommand($sqlw15a);
			$commandw16 = $connection->createCommand($sqlw16);
			$commandw16a = $connection->createCommand($sqlw16a);
			$commandw17 = $connection->createCommand($sqlw17);
			$commandw17a = $connection->createCommand($sqlw17a);
			$commandw18 = $connection->createCommand($sqlw18);
			$commandw18a = $connection->createCommand($sqlw18a);
			$commandw19 = $connection->createCommand($sqlw19);
			$commandw19a = $connection->createCommand($sqlw19a);
			$commandw20 = $connection->createCommand($sqlw20);
			$commandw20a = $connection->createCommand($sqlw20a);
			$commandw21 = $connection->createCommand($sqlw21);
			$commandw21a = $connection->createCommand($sqlw21a);
			$commandw22 = $connection->createCommand($sqlw22);
			$commandw22a = $connection->createCommand($sqlw22a);
			$commandw23 = $connection->createCommand($sqlw23);
			$commandw23a = $connection->createCommand($sqlw23a);
			$commandw24 = $connection->createCommand($sqlw24);
			$commandw24a = $connection->createCommand($sqlw24a);
			$commandw25 = $connection->createCommand($sqlw25);
			$commandw25a = $connection->createCommand($sqlw25a);
			$commandw26 = $connection->createCommand($sqlw26);
			$commandw26a = $connection->createCommand($sqlw26a);
			$commandw27 = $connection->createCommand($sqlw27);
			$commandw27a = $connection->createCommand($sqlw27a);
			$commandw28 = $connection->createCommand($sqlw28);
			$commandw28a = $connection->createCommand($sqlw28a);
			$commandw29 = $connection->createCommand($sqlw29);
			$commandw29a = $connection->createCommand($sqlw29a);
			$commandw30 = $connection->createCommand($sqlw30);
			$commandw30a = $connection->createCommand($sqlw30a);
			$commandw31 = $connection->createCommand($sqlw31);
			$commandw31a = $connection->createCommand($sqlw31a);
			$commandw32 = $connection->createCommand($sqlw32);
			$commandw32a = $connection->createCommand($sqlw32a);
			$commandw33 = $connection->createCommand($sqlw33);
			$commandw33a = $connection->createCommand($sqlw33a);
			$commandw34 = $connection->createCommand($sqlw34);
			$commandw34a = $connection->createCommand($sqlw34a);
			$commandw35 = $connection->createCommand($sqlw35);
			$commandw35a = $connection->createCommand($sqlw35a);
			$commandw36 = $connection->createCommand($sqlw36);
			$commandw36a = $connection->createCommand($sqlw36a);
			$commandw37 = $connection->createCommand($sqlw37);
			$commandw37a = $connection->createCommand($sqlw37a);
			$commandw38 = $connection->createCommand($sqlw38);
			$commandw38a = $connection->createCommand($sqlw38a);
			$commandw39 = $connection->createCommand($sqlw39);
			$commandw39a = $connection->createCommand($sqlw39a);
			$commandw40 = $connection->createCommand($sqlw40);
			$commandw40a = $connection->createCommand($sqlw40a);
			$commandw41 = $connection->createCommand($sqlw41);
			$commandw41a = $connection->createCommand($sqlw41a);
			$commandw42 = $connection->createCommand($sqlw42);
			$commandw42a = $connection->createCommand($sqlw42a);
			$commandw43 = $connection->createCommand($sqlw43);
			$commandw43a = $connection->createCommand($sqlw43a);
			$commandw44 = $connection->createCommand($sqlw44);
			$commandw44a = $connection->createCommand($sqlw44a);
			$commandw45 = $connection->createCommand($sqlw45);
			$commandw45a = $connection->createCommand($sqlw45a);
			$commandw46 = $connection->createCommand($sqlw46);
			$commandw46a = $connection->createCommand($sqlw46a);
			$commandw47 = $connection->createCommand($sqlw47);
			$commandw47a = $connection->createCommand($sqlw47a);
			$commandw48 = $connection->createCommand($sqlw48);
			$commandw48a = $connection->createCommand($sqlw48a);
			$commandw49 = $connection->createCommand($sqlw49);
			$commandw49a = $connection->createCommand($sqlw49a);
			$commandw50 = $connection->createCommand($sqlw50);
			$commandw50a = $connection->createCommand($sqlw50a);
			$commandw51 = $connection->createCommand($sqlw51);
			$commandw51a = $connection->createCommand($sqlw51a);
			$commandw52 = $connection->createCommand($sqlw52);
			$commandw52a = $connection->createCommand($sqlw52a);
			$commandw53 = $connection->createCommand($sqlw53);
			$commandw53a = $connection->createCommand($sqlw53a);
			$commandw54 = $connection->createCommand($sqlw54);
			$commandw54a = $connection->createCommand($sqlw54a);
			$commandw55 = $connection->createCommand($sqlw55);
			$commandw55a = $connection->createCommand($sqlw55a);
			$commandw56 = $connection->createCommand($sqlw56);
			$commandw56a = $connection->createCommand($sqlw56a);
			$commandw57 = $connection->createCommand($sqlw57);
			$commandw57a = $connection->createCommand($sqlw57a);
			$commandw58 = $connection->createCommand($sqlw58);
			$commandw58a = $connection->createCommand($sqlw58a);
			$commandw59 = $connection->createCommand($sqlw59);
			$commandw59a = $connection->createCommand($sqlw59a);
			$commandw60 = $connection->createCommand($sqlw60);
			$commandw60a = $connection->createCommand($sqlw60a);
			$commandw61 = $connection->createCommand($sqlw61);
			$commandw61a = $connection->createCommand($sqlw61a);
			$commandw62 = $connection->createCommand($sqlw62);
			$commandw62a = $connection->createCommand($sqlw62a);
			$commandw63 = $connection->createCommand($sqlw63);
			$commandw63a = $connection->createCommand($sqlw63a);
			$commandw64 = $connection->createCommand($sqlw64);
			$commandw64a = $connection->createCommand($sqlw64a);
			$commandw65 = $connection->createCommand($sqlw65);
			$commandw65a = $connection->createCommand($sqlw65a);
			$commandw66 = $connection->createCommand($sqlw66);
			$commandw66a = $connection->createCommand($sqlw66a);
			$commandw67 = $connection->createCommand($sqlw67);
			$commandw67a = $connection->createCommand($sqlw67a);
			$commandw68 = $connection->createCommand($sqlw68);
			$commandw68a = $connection->createCommand($sqlw68a);
			$commandw69 = $connection->createCommand($sqlw69);
			$commandw69a = $connection->createCommand($sqlw69a);
			$commandw70 = $connection->createCommand($sqlw70);
			$commandw70a = $connection->createCommand($sqlw70a);
			$commandw71 = $connection->createCommand($sqlw71);
			$commandw71a = $connection->createCommand($sqlw71a);
			$commandw72 = $connection->createCommand($sqlw72);
			$commandw72a = $connection->createCommand($sqlw72a);
			$commandw73 = $connection->createCommand($sqlw73);
			$commandw73a = $connection->createCommand($sqlw73a);
			$commandw74 = $connection->createCommand($sqlw74);
			$commandw74a = $connection->createCommand($sqlw74a);
			$commandw75 = $connection->createCommand($sqlw75);
			$commandw75a = $connection->createCommand($sqlw75a);
			$commandw76 = $connection->createCommand($sqlw76);
			$commandw76a = $connection->createCommand($sqlw76a);
			$commandw77 = $connection->createCommand($sqlw77);
			$commandw77a = $connection->createCommand($sqlw77a);
			$commandw78 = $connection->createCommand($sqlw78);
			$commandw78a = $connection->createCommand($sqlw78a);
			$commandw79 = $connection->createCommand($sqlw79);
			$commandw79a = $connection->createCommand($sqlw79a);
			$commandw80 = $connection->createCommand($sqlw80);
			$commandw80a = $connection->createCommand($sqlw80a);
			$commandw81 = $connection->createCommand($sqlw81);
			$commandw81a = $connection->createCommand($sqlw81a);
			$commandw82 = $connection->createCommand($sqlw82);
			$commandw82a = $connection->createCommand($sqlw82a);
			$commandw83 = $connection->createCommand($sqlw83);
			$commandw83a = $connection->createCommand($sqlw83a);
			$commandw84 = $connection->createCommand($sqlw84);
			$commandw84a = $connection->createCommand($sqlw84a);
			$commandw85 = $connection->createCommand($sqlw85);
			$commandw85a = $connection->createCommand($sqlw85a);
			$commandw86 = $connection->createCommand($sqlw86);
			$commandw86a = $connection->createCommand($sqlw86a);
			$commandw87 = $connection->createCommand($sqlw87);
			$commandw87a = $connection->createCommand($sqlw87a);
			$commandw88 = $connection->createCommand($sqlw88);
			$commandw88a = $connection->createCommand($sqlw88a);
			$commandw89 = $connection->createCommand($sqlw89);
			$commandw89a = $connection->createCommand($sqlw89a);
			$commandw90 = $connection->createCommand($sqlw90);
			$commandw90a = $connection->createCommand($sqlw90a);
			$commandw91 = $connection->createCommand($sqlw91);
			$commandw91a = $connection->createCommand($sqlw91a);
			$commandw92 = $connection->createCommand($sqlw92);
			$commandw92a = $connection->createCommand($sqlw92a);
			$commandw93 = $connection->createCommand($sqlw93);
			$commandw93a = $connection->createCommand($sqlw93a);
			$commandw94 = $connection->createCommand($sqlw94);
			$commandw94a = $connection->createCommand($sqlw94a);
			$commandw95 = $connection->createCommand($sqlw95);
			$commandw95a = $connection->createCommand($sqlw95a);
			$commandw96 = $connection->createCommand($sqlw96);
			$commandw96a = $connection->createCommand($sqlw96a);
			$commandw97 = $connection->createCommand($sqlw97);
			$commandw97a = $connection->createCommand($sqlw97a);
			$commandw98 = $connection->createCommand($sqlw98);
			$commandw98a = $connection->createCommand($sqlw98a);
			$commandw99 = $connection->createCommand($sqlw99);
			$commandw99a = $connection->createCommand($sqlw99a);
			$commandw100 = $connection->createCommand($sqlw100);
			$commandw100a = $connection->createCommand($sqlw100a);
			$commandw101 = $connection->createCommand($sqlw101);
			$commandw101a = $connection->createCommand($sqlw101a);
			$commandw102 = $connection->createCommand($sqlw102);
			$commandw102a = $connection->createCommand($sqlw102a);
			$commandw103 = $connection->createCommand($sqlw103);
			$commandw103a = $connection->createCommand($sqlw103a);
			$commandw104 = $connection->createCommand($sqlw104);
			$commandw104a = $connection->createCommand($sqlw104a);
			$commandw105 = $connection->createCommand($sqlw105);
			$commandw105a = $connection->createCommand($sqlw105a);
			$commandw106 = $connection->createCommand($sqlw106);
			$commandw106a = $connection->createCommand($sqlw106a);
			$commandw107 = $connection->createCommand($sqlw107);
			$commandw107a = $connection->createCommand($sqlw107a);
			$commandw108 = $connection->createCommand($sqlw108);
			$commandw108a = $connection->createCommand($sqlw108a);
			$commandw109 = $connection->createCommand($sqlw109);
			$commandw109a = $connection->createCommand($sqlw109a);
			$commandw110 = $connection->createCommand($sqlw110);
			$commandw110a = $connection->createCommand($sqlw110a);
			$commandw111 = $connection->createCommand($sqlw111);
			$commandw111a = $connection->createCommand($sqlw111a);
			$commandw112 = $connection->createCommand($sqlw112);
			$commandw112a = $connection->createCommand($sqlw112a);
			$commandw113 = $connection->createCommand($sqlw113);
			$commandw113a = $connection->createCommand($sqlw113a);
			$commandw114 = $connection->createCommand($sqlw114);
			$commandw114a = $connection->createCommand($sqlw114a);
			$commandw115 = $connection->createCommand($sqlw115);
			$commandw115a = $connection->createCommand($sqlw115a);
			$commandw116 = $connection->createCommand($sqlw116);
			$commandw116a = $connection->createCommand($sqlw116a);
			$commandw117 = $connection->createCommand($sqlw117);
			$commandw117a = $connection->createCommand($sqlw117a);
			$commandw118 = $connection->createCommand($sqlw118);
			$commandw118a = $connection->createCommand($sqlw118a);
			$commandw119 = $connection->createCommand($sqlw119);
			$commandw119a = $connection->createCommand($sqlw119a);
			$commandw120 = $connection->createCommand($sqlw120);
			$commandw120a = $connection->createCommand($sqlw120a);
			$commandw121 = $connection->createCommand($sqlw121);
			$commandw121a = $connection->createCommand($sqlw121a);
			$command1 = $connection->createCommand($sql1);
			$command2 = $connection->createCommand($sql2);
			$command3 = $connection->createCommand($sql3);
			$command4 = $connection->createCommand($sql4);
			$command5 = $connection->createCommand($sql5);
			$command6 = $connection->createCommand($sql6);
			$command7 = $connection->createCommand($sql7);
			$command8 = $connection->createCommand($sql8);
			$command9 = $connection->createCommand($sql9);
			$command10 = $connection->createCommand($sql10);
			$command11 = $connection->createCommand($sql11);
			$command12 = $connection->createCommand($sql12);
			$command13 = $connection->createCommand($sql13);
			$command14 = $connection->createCommand($sql14);
			$command15 = $connection->createCommand($sql15);
			$command16 = $connection->createCommand($sql16);
			$command17 = $connection->createCommand($sql17);
			$command18 = $connection->createCommand($sql18);
			$command19 = $connection->createCommand($sql19);
			$command20 = $connection->createCommand($sql20);
			$command21 = $connection->createCommand($sql21);
			$command22 = $connection->createCommand($sql22);
			$command23 = $connection->createCommand($sql23);
			$command24 = $connection->createCommand($sql24);
			$command25 = $connection->createCommand($sql25);
			$command26 = $connection->createCommand($sql26);
			$command27 = $connection->createCommand($sql27);
			$command28 = $connection->createCommand($sql28);
			$command29 = $connection->createCommand($sql29);
			$command30 = $connection->createCommand($sql30);
			$command31 = $connection->createCommand($sql31);
			$command32 = $connection->createCommand($sql32);
			$command33 = $connection->createCommand($sql33);
			$command34 = $connection->createCommand($sql34);
			$command35 = $connection->createCommand($sql35);
			$command36 = $connection->createCommand($sql36);
			$command37 = $connection->createCommand($sql37);
			$command38 = $connection->createCommand($sql38);
			$command39 = $connection->createCommand($sql39);
			$command40 = $connection->createCommand($sql40);
			$command41 = $connection->createCommand($sql41);
			$command42 = $connection->createCommand($sql42);
			$command43 = $connection->createCommand($sql43);
			$command44 = $connection->createCommand($sql44);
			$command45 = $connection->createCommand($sql45);
			$command46 = $connection->createCommand($sql46);
			$command47 = $connection->createCommand($sql47);
			$command48 = $connection->createCommand($sql48);
			$command49 = $connection->createCommand($sql49);
			$command50 = $connection->createCommand($sql50);
			$command51 = $connection->createCommand($sql51);
			$command52 = $connection->createCommand($sql52);
			$command53 = $connection->createCommand($sql53);
			$command54 = $connection->createCommand($sql54);
			$command55 = $connection->createCommand($sql55);
			$command56 = $connection->createCommand($sql56);
			$command57 = $connection->createCommand($sql57);
			$command58 = $connection->createCommand($sql58);
			$command59 = $connection->createCommand($sql59);
			$command60 = $connection->createCommand($sql60);
			$command61 = $connection->createCommand($sql61);
			$command62 = $connection->createCommand($sql62);
			$command63 = $connection->createCommand($sql63);
			$command64 = $connection->createCommand($sql64);
			$command65 = $connection->createCommand($sql65);
			$command66 = $connection->createCommand($sql66);
			$command67 = $connection->createCommand($sql67);
			$command68 = $connection->createCommand($sql68);
			$command69 = $connection->createCommand($sql69);
			$command70 = $connection->createCommand($sql70);
			$command71 = $connection->createCommand($sql71);
			$command72 = $connection->createCommand($sql72);
			$command73 = $connection->createCommand($sql73);
			$command74 = $connection->createCommand($sql74);
			$command75 = $connection->createCommand($sql75);
			$command76 = $connection->createCommand($sql76);
			$command77 = $connection->createCommand($sql77);
			$command78 = $connection->createCommand($sql78);
			$command79 = $connection->createCommand($sql79);
			$command80 = $connection->createCommand($sql80);
			$command81 = $connection->createCommand($sql81);
			$command82 = $connection->createCommand($sql82);
			$command83 = $connection->createCommand($sql83);
			$command84 = $connection->createCommand($sql84);
			$command85 = $connection->createCommand($sql85);
			$command86 = $connection->createCommand($sql86);
			$command87 = $connection->createCommand($sql87);
			$command88 = $connection->createCommand($sql88);
			$command89 = $connection->createCommand($sql89);
			$command90 = $connection->createCommand($sql90);
			$command91 = $connection->createCommand($sql91);
			$command92 = $connection->createCommand($sql92);
			$command93 = $connection->createCommand($sql93);
			$command94 = $connection->createCommand($sql94);
			$command95 = $connection->createCommand($sql95);
			$command96 = $connection->createCommand($sql96);
			$command97 = $connection->createCommand($sql97);
			$command98 = $connection->createCommand($sql98);
			$command99 = $connection->createCommand($sql99);
			$command100 = $connection->createCommand($sql100);
			$command101 = $connection->createCommand($sql101);
			$command102 = $connection->createCommand($sql102);
			$command103 = $connection->createCommand($sql103);
			$command104 = $connection->createCommand($sql104);
			$command105 = $connection->createCommand($sql105);
			$command106 = $connection->createCommand($sql106);
			$command107 = $connection->createCommand($sql107);
			$command108 = $connection->createCommand($sql108);
			$command109 = $connection->createCommand($sql109);
			$command110 = $connection->createCommand($sql110);
			$command111 = $connection->createCommand($sql111);
			$command112 = $connection->createCommand($sql112);
			$command113 = $connection->createCommand($sql113);
			$command114 = $connection->createCommand($sql114);
			$command115 = $connection->createCommand($sql115);
			$command116 = $connection->createCommand($sql116);
			$command117 = $connection->createCommand($sql117);
			$command118 = $connection->createCommand($sql118);
			$command119 = $connection->createCommand($sql119);
			$command120 = $connection->createCommand($sql120);
			$command121 = $connection->createCommand($sql121);
			$command122 = $connection->createCommand($sql122);
			$command123 = $connection->createCommand($sql123);
			$command124 = $connection->createCommand($sql124);
			$command125 = $connection->createCommand($sql125);
			$command126 = $connection->createCommand($sql126);
			$command127 = $connection->createCommand($sql127);
			$command128 = $connection->createCommand($sql128);
			$command129 = $connection->createCommand($sql129);
			$command130 = $connection->createCommand($sql130);
			$command131 = $connection->createCommand($sql131);
			$command132 = $connection->createCommand($sql132);
			$command133 = $connection->createCommand($sql133);
			$command134 = $connection->createCommand($sql134);
			$command135 = $connection->createCommand($sql135);
			$command136 = $connection->createCommand($sql136);
			$command137 = $connection->createCommand($sql137);
			$command138 = $connection->createCommand($sql138);
			$rw1 = $commandw1->queryAll();
			$rw1a = $commandw1a->queryAll();
			$rw2 = $commandw2->queryAll();
			$rw2a = $commandw2a->queryAll();
			$rw3 = $commandw3->queryAll();
			$rw3a = $commandw3a->queryAll();
			$rw4 = $commandw4->queryAll();
			$rw4a = $commandw4a->queryAll();
			$rw5 = $commandw5->queryAll();
			$rw5a = $commandw5a->queryAll();
			$rw6 = $commandw6->queryAll();
			$rw6a = $commandw6a->queryAll();
			$rw7 = $commandw7->queryAll();
			$rw7a = $commandw7a->queryAll();
			$rw8 = $commandw8->queryAll();
			$rw8a = $commandw8a->queryAll();
			$rw9 = $commandw9->queryAll();
			$rw9a = $commandw9a->queryAll();
			$rw10 = $commandw10->queryAll();
			$rw10a = $commandw10a->queryAll();
			$rw11 = $commandw11->queryAll();
			$rw11a = $commandw11a->queryAll();
			$rw12 = $commandw12->queryAll();
			$rw12a = $commandw12a->queryAll();
			$rw13 = $commandw13->queryAll();
			$rw13a = $commandw13a->queryAll();
			$rw14 = $commandw14->queryAll();
			$rw14a = $commandw14a->queryAll();
			$rw15 = $commandw15->queryAll();
			$rw15a = $commandw15a->queryAll();
			$rw16 = $commandw16->queryAll();
			$rw16a = $commandw16a->queryAll();
			$rw17 = $commandw17->queryAll();
			$rw17a = $commandw17a->queryAll();
			$rw18 = $commandw18->queryAll();
			$rw18a = $commandw18a->queryAll();
			$rw19 = $commandw19->queryAll();
			$rw19a = $commandw19a->queryAll();
			$rw20 = $commandw20->queryAll();
			$rw20a = $commandw20a->queryAll();
			$rw21 = $commandw21->queryAll();
			$rw21a = $commandw21a->queryAll();
			$rw22 = $commandw22->queryAll();
			$rw22a = $commandw22a->queryAll();
			$rw23 = $commandw23->queryAll();
			$rw23a = $commandw23a->queryAll();
			$rw24 = $commandw24->queryAll();
			$rw24a = $commandw24a->queryAll();
			$rw25 = $commandw25->queryAll();
			$rw25a = $commandw25a->queryAll();
			$rw26 = $commandw26->queryAll();
			$rw26a = $commandw26a->queryAll();
			$rw27 = $commandw27->queryAll();
			$rw27a = $commandw27a->queryAll();
			$rw28 = $commandw28->queryAll();
			$rw28a = $commandw28a->queryAll();
			$rw29 = $commandw29->queryAll();
			$rw29a = $commandw29a->queryAll();
			$rw30 = $commandw30->queryAll();
			$rw30a = $commandw30a->queryAll();
			$rw31 = $commandw31->queryAll();
			$rw31a = $commandw31a->queryAll();
			$rw32 = $commandw32->queryAll();
			$rw32a = $commandw32a->queryAll();
			$rw33 = $commandw33->queryAll();
			$rw33a = $commandw33a->queryAll();
			$rw34 = $commandw34->queryAll();
			$rw34a = $commandw34a->queryAll();
			$rw35 = $commandw35->queryAll();
			$rw35a = $commandw35a->queryAll();
			$rw36 = $commandw36->queryAll();
			$rw36a = $commandw36a->queryAll();
			$rw37 = $commandw37->queryAll();
			$rw37a = $commandw37a->queryAll();
			$rw38 = $commandw38->queryAll();
			$rw38a = $commandw38a->queryAll();
			$rw39 = $commandw39->queryAll();
			$rw39a = $commandw39a->queryAll();
			$rw40 = $commandw40->queryAll();
			$rw40a = $commandw40a->queryAll();
			$rw41 = $commandw41->queryAll();
			$rw41a = $commandw41a->queryAll();
			$rw42 = $commandw42->queryAll();
			$rw42a = $commandw42a->queryAll();
			$rw43 = $commandw43->queryAll();
			$rw43a = $commandw43a->queryAll();
			$rw44 = $commandw44->queryAll();
			$rw44a = $commandw44a->queryAll();
			$rw45 = $commandw45->queryAll();
			$rw45a = $commandw45a->queryAll();
			$rw46 = $commandw46->queryAll();
			$rw46a = $commandw46a->queryAll();
			$rw47 = $commandw47->queryAll();
			$rw47a = $commandw47a->queryAll();
			$rw48 = $commandw48->queryAll();
			$rw48a = $commandw48a->queryAll();
			$rw49 = $commandw49->queryAll();
			$rw49a = $commandw49a->queryAll();
			$rw50 = $commandw50->queryAll();
			$rw50a = $commandw50a->queryAll();
			$rw51 = $commandw51->queryAll();
			$rw51a = $commandw51a->queryAll();
			$rw52 = $commandw52->queryAll();
			$rw52a = $commandw52a->queryAll();
			$rw53 = $commandw53->queryAll();
			$rw53a = $commandw53a->queryAll();
			$rw54 = $commandw54->queryAll();
			$rw54a = $commandw54a->queryAll();
			$rw55 = $commandw55->queryAll();
			$rw55a = $commandw55a->queryAll();
			$rw56 = $commandw56->queryAll();
			$rw56a = $commandw56a->queryAll();
			$rw57 = $commandw57->queryAll();
			$rw57a = $commandw57a->queryAll();
			$rw58 = $commandw58->queryAll();
			$rw58a = $commandw58a->queryAll();
			$rw59 = $commandw59->queryAll();
			$rw59a = $commandw59a->queryAll();
			$rw60 = $commandw60->queryAll();
			$rw60a = $commandw60a->queryAll();
			$rw61 = $commandw61->queryAll();
			$rw61a = $commandw61a->queryAll();
			$rw62 = $commandw62->queryAll();
			$rw62a = $commandw62a->queryAll();
			$rw63 = $commandw63->queryAll();
			$rw63a = $commandw63a->queryAll();
			$rw64 = $commandw64->queryAll();
			$rw64a = $commandw64a->queryAll();
			$rw65 = $commandw65->queryAll();
			$rw65a = $commandw65a->queryAll();
			$rw66 = $commandw66->queryAll();
			$rw66a = $commandw66a->queryAll();
			$rw67 = $commandw67->queryAll();
			$rw67a = $commandw67a->queryAll();
			$rw68 = $commandw68->queryAll();
			$rw68a = $commandw68a->queryAll();
			$rw69 = $commandw69->queryAll();
			$rw69a = $commandw69a->queryAll();
			$rw70 = $commandw70->queryAll();
			$rw70a = $commandw70a->queryAll();
			$rw71 = $commandw71->queryAll();
			$rw71a = $commandw71a->queryAll();
			$rw72 = $commandw72->queryAll();
			$rw72a = $commandw72a->queryAll();
			$rw73 = $commandw73->queryAll();
			$rw73a = $commandw73a->queryAll();
			$rw74 = $commandw74->queryAll();
			$rw74a = $commandw74a->queryAll();
			$rw75 = $commandw75->queryAll();
			$rw75a = $commandw75a->queryAll();
			$rw76 = $commandw76->queryAll();
			$rw76a = $commandw76a->queryAll();
			$rw77 = $commandw77->queryAll();
			$rw77a = $commandw77a->queryAll();
			$rw78 = $commandw78->queryAll();
			$rw78a = $commandw78a->queryAll();
			$rw79 = $commandw79->queryAll();
			$rw79a = $commandw79a->queryAll();
			$rw80 = $commandw80->queryAll();
			$rw80a = $commandw80a->queryAll();
			$rw81 = $commandw81->queryAll();
			$rw81a = $commandw81a->queryAll();
			$rw82 = $commandw82->queryAll();
			$rw82a = $commandw82a->queryAll();
			$rw83 = $commandw83->queryAll();
			$rw83a = $commandw83a->queryAll();
			$rw84 = $commandw84->queryAll();
			$rw84a = $commandw84a->queryAll();
			$rw85 = $commandw85->queryAll();
			$rw85a = $commandw85a->queryAll();
			$rw86 = $commandw86->queryAll();
			$rw86a = $commandw86a->queryAll();
			$rw87 = $commandw87->queryAll();
			$rw87a = $commandw87a->queryAll();
			$rw88 = $commandw88->queryAll();
			$rw88a = $commandw88a->queryAll();
			$rw89 = $commandw89->queryAll();
			$rw89a = $commandw89a->queryAll();
			$rw90 = $commandw90->queryAll();
			$rw90a = $commandw90a->queryAll();
			$rw91 = $commandw91->queryAll();
			$rw91a = $commandw91a->queryAll();
			$rw92 = $commandw92->queryAll();
			$rw92a = $commandw92a->queryAll();
			$rw93 = $commandw93->queryAll();
			$rw93a = $commandw93a->queryAll();
			$rw94 = $commandw94->queryAll();
			$rw94a = $commandw94a->queryAll();
			$rw95 = $commandw95->queryAll();
			$rw95a = $commandw95a->queryAll();
			$rw96 = $commandw96->queryAll();
			$rw96a = $commandw96a->queryAll();
			$rw97 = $commandw97->queryAll();
			$rw97a = $commandw97a->queryAll();
			$rw98 = $commandw98->queryAll();
			$rw98a = $commandw98a->queryAll();
			$rw99 = $commandw99->queryAll();
			$rw99a = $commandw99a->queryAll();
			$rw100 = $commandw100->queryAll();
			$rw100a = $commandw100a->queryAll();
			$rw101 = $commandw101->queryAll();
			$rw101a = $commandw101a->queryAll();
			$rw102 = $commandw102->queryAll();
			$rw102a = $commandw102a->queryAll();
			$rw103 = $commandw103->queryAll();
			$rw103a = $commandw103a->queryAll();
			$rw104 = $commandw104->queryAll();
			$rw104a = $commandw104a->queryAll();
			$rw105 = $commandw105->queryAll();
			$rw105a = $commandw105a->queryAll();
			$rw106 = $commandw106->queryAll();
			$rw106a = $commandw106a->queryAll();
			$rw107 = $commandw107->queryAll();
			$rw107a = $commandw107a->queryAll();
			$rw108 = $commandw108->queryAll();
			$rw108a = $commandw108a->queryAll();
			$rw109 = $commandw109->queryAll();
			$rw109a = $commandw109a->queryAll();
			$rw110 = $commandw110->queryAll();
			$rw110a = $commandw110a->queryAll();
			$rw111 = $commandw111->queryAll();
			$rw111a = $commandw111a->queryAll();
			$rw112 = $commandw112->queryAll();
			$rw112a = $commandw112a->queryAll();
			$rw113 = $commandw113->queryAll();
			$rw113a = $commandw113a->queryAll();
			$rw114 = $commandw114->queryAll();
			$rw114a = $commandw114a->queryAll();
			$rw115 = $commandw115->queryAll();
			$rw115a = $commandw115a->queryAll();
			$rw116 = $commandw116->queryAll();
			$rw116a = $commandw116a->queryAll();
			$rw117 = $commandw117->queryAll();
			$rw117a = $commandw117a->queryAll();
			$rw118 = $commandw118->queryAll();
			$rw118a = $commandw118a->queryAll();
			$rw119 = $commandw119->queryAll();
			$rw119a = $commandw119a->queryAll();
			$rw120 = $commandw120->queryAll();
			$rw120a = $commandw120a->queryAll();
			$rw121 = $commandw121->queryAll();
			$rw121a = $commandw121a->queryAll();
			$r1 = $command1->queryAll();
			$r2 = $command2->queryAll();
			$r3 = $command3->queryAll();
			$r4 = $command4->queryAll();
			$r5 = $command5->queryAll();
			$r6 = $command6->queryAll();
			$r7 = $command7->queryAll();
			$r8 = $command8->queryAll();
			$r9 = $command9->queryAll();
			$r10 = $command10->queryAll();
			$r11 = $command11->queryAll();
			$r12 = $command12->queryAll();
			$r13 = $command13->queryAll();
			$r14 = $command14->queryAll();
			$r15 = $command15->queryAll();
			$r16 = $command16->queryAll();
			$r17 = $command17->queryAll();
			$r18 = $command18->queryAll();
			$r19 = $command19->queryAll();
			$r20 = $command20->queryAll();
			$r21 = $command21->queryAll();
			$r22 = $command22->queryAll();
			$r23 = $command23->queryAll();
			$r24 = $command24->queryAll();
			$r25 = $command25->queryAll();
			$r26 = $command26->queryAll();
			$r27 = $command27->queryAll();
			$r28 = $command28->queryAll();
			$r29 = $command29->queryAll();
			$r30 = $command30->queryAll();
			$r31 = $command31->queryAll();
			$r32 = $command32->queryAll();
			$r33 = $command33->queryAll();
			$r34 = $command34->queryAll();
			$r35 = $command35->queryAll();
			$r36 = $command36->queryAll();
			$r37 = $command37->queryAll();
			$r38 = $command38->queryAll();
			$r39 = $command39->queryAll();
			$r40 = $command40->queryAll();
			$r41 = $command41->queryAll();
			$r42 = $command42->queryAll();
			$r43 = $command43->queryAll();
			$r44 = $command44->queryAll();
			$r45 = $command45->queryAll();
			$r46 = $command46->queryAll();
			$r47 = $command47->queryAll();
			$r48 = $command48->queryAll();
			$r49 = $command49->queryAll();
			$r50 = $command50->queryAll();
			$r51 = $command51->queryAll();
			$r52 = $command52->queryAll();
			$r53 = $command53->queryAll();
			$r54 = $command54->queryAll();
			$r55 = $command55->queryAll();
			$r56 = $command56->queryAll();
			$r57 = $command57->queryAll();
			$r58 = $command58->queryAll();
			$r59 = $command59->queryAll();
			$r60 = $command60->queryAll();
			$r61 = $command61->queryAll();
			$r62 = $command62->queryAll();
			$r63 = $command63->queryAll();
			$r64 = $command64->queryAll();
			$r65 = $command65->queryAll();
			$r66 = $command66->queryAll();
			$r67 = $command67->queryAll();
			$r68 = $command68->queryAll();
			$r69 = $command69->queryAll();
			$r70 = $command70->queryAll();
			$r71 = $command71->queryAll();
			$r72 = $command72->queryAll();
			$r73 = $command73->queryAll();
			$r74 = $command74->queryAll();
			$r75 = $command75->queryAll();
			$r76 = $command76->queryAll();
			$r77 = $command77->queryAll();
			$r78 = $command78->queryAll();
			$r79 = $command79->queryAll();
			$r80 = $command80->queryAll();
			$r81 = $command81->queryAll();
			$r82 = $command82->queryAll();
			$r83 = $command83->queryAll();
			$r84 = $command84->queryAll();
			$r85 = $command85->queryAll();
			$r86 = $command86->queryAll();
			$r87 = $command87->queryAll();
			$r88 = $command88->queryAll();
			$r89 = $command89->queryAll();
			$r90 = $command90->queryAll();
			$r91 = $command91->queryAll();
			$r92 = $command92->queryAll();
			$r93 = $command93->queryAll();
			$r94 = $command94->queryAll();
			$r95 = $command95->queryAll();
			$r96 = $command96->queryAll();
			$r97 = $command97->queryAll();
			$r98 = $command98->queryAll();
			$r99 = $command99->queryAll();
			$r100 = $command100->queryAll();
			$r101 = $command101->queryAll();
			$r102 = $command102->queryAll();
			$r103 = $command103->queryAll();
			$r104 = $command104->queryAll();
			$r105 = $command105->queryAll();
			$r106 = $command106->queryAll();
			$r107 = $command107->queryAll();
			$r108 = $command108->queryAll();
			$r109 = $command109->queryAll();
			$r110 = $command110->queryAll();
			$r111 = $command111->queryAll();
			$r112 = $command112->queryAll();
			$r113 = $command113->queryAll();
			$r114 = $command114->queryAll();
			$r115 = $command115->queryAll();
			$r116 = $command116->queryAll();
			$r117 = $command117->queryAll();
			$r118 = $command118->queryAll();
			$r119 = $command119->queryAll();
			$r120 = $command120->queryAll();
			$r121 = $command121->queryAll();
			$r122 = $command122->queryAll();
			$r123 = $command123->queryAll();
			$r124 = $command124->queryAll();
			$r125 = $command125->queryAll();
			$r126 = $command126->queryAll();
			$r127 = $command127->queryAll();
			$r128 = $command128->queryAll();
			$r129 = $command129->queryAll();
			$r130 = $command130->queryAll();
			$r131 = $command131->queryAll();
			$r132 = $command132->queryAll();
			$r133 = $command133->queryAll();
			$r134 = $command134->queryAll();
			$r135 = $command135->queryAll();
			$r136 = $command136->queryAll();
			$r137 = $command137->queryAll();
			$r138 = $command138->queryAll();
			$this->render('index',array(
				"dataLuasWilayah"=>$rw1,
				"tblLuasWilayah"=>$rw1a,
				"dataTopografi"=>$rw2,
				"tblTopografi"=>$rw2a,
				"dataLuasLahan"=>$rw3,
				"tblLuasLahan"=>$rw3a,
				"dataIklimRata"=>$rw4,
				"tblIklimRata"=>$rw4a,
				"dataPulau"=>$rw5,
				"tblPulau"=>$rw5a,
				"dataGunung"=>$rw6,
				"tblGunung"=>$rw6a,
				"dataBatasDarat"=>$rw7,
				"tblBatasDarat"=>$rw7a,
				"dataFisiografi"=>$rw8,
				"tblFisiografi"=>$rw8a,
				"dataAdminPmr"=>$rw9,
				"tblAdminPmr"=>$rw9a,
				"dataOtonomi"=>$rw10,
				"tblOtonomi"=>$rw10a,
				"dataPerdaIjin"=>$rw11,
				"tblPerdaIjin"=>$rw11a,
				"dataSarpras"=>$rw12,
				"tblSarpras"=>$rw12a,
				"dataKonSarpras"=>$rw13,
				"tblKonSarpras"=>$rw13a,
				"dataCapil"=>$rw14,
				"tblCapil"=>$rw14a,
				"dataOrangLahan"=>$rw15,
				"tblOrangLahan"=>$rw15a,
				"dataFamJob"=>$rw16,
				"tblFamJob"=>$rw16a,
				"dataOrgUsia"=>$rw17,
				"tblOrgUsia"=>$rw17a,
				"dataDeprat"=>$rw18,
				"tblDeprat"=>$rw18a,
				"dataDatduk"=>$rw19,
				"tblDatduk"=>$rw19a,
				"dataInoutsave"=>$rw20,
				"tblInoutsave"=>$rw20a,
				"dataTenagakerja"=>$rw21,
				"tblTenagakerja"=>$rw21a,
				"dataPblmu"=>$rw22,
				"tblPblmu"=>$rw22a,
				"dataTumduk"=>$rw23,
				"tblTumduk"=>$rw23a,
				"dataAngkaHidup"=>$rw24,
				"tblAngkaHidup"=>$rw24a,
				"dataPendudukDidik"=>$rw25,
				"tblPendudukDidik"=>$rw25a,
				"dataKeluarga"=>$rw26,
				"tblKeluarga"=>$rw26a,
				"dataRumtang"=>$rw27,
				"tblRumtang"=>$rw27a,
				"dataUrumtang"=>$rw28,
				"tblUrumtang"=>$rw28a,
				"dataRumTing"=>$rw29,
				"tblRumTing"=>$rw29a,
				"dataTanilayan"=>$rw30,
				"tblTanilayan"=>$rw30a,
				"dataPAnak"=>$rw31,
				"tblPAnak"=>$rw31a,
				"dataTkunder"=>$rw32,
				"tblTkunder"=>$rw32a,
				"dataSarkes"=>$rw33,
				"tblSarkes"=>$rw33a,
				"dataSIIF"=>$rw34,
				"tblSIIF"=>$rw34a,
				"dataKesmas"=>$rw35,
				"tblKesmas"=>$rw35a,
				"dataDagkes"=>$rw36,
				"tblDagkes"=>$rw36a,
				"dataTenkes"=>$rw37,
				"tblTenkes"=>$rw37a,
				"dataKompbidan"=>$rw38,
				"tblKompbidan"=>$rw38a,
				"dataUci"=>$rw39,
				"tblUci"=>$rw39a,
				"dataPPPP"=>$rw40,
				"tblPPPP"=>$rw40a,
				"dataPKRPMM"=>$rw41,
				"tblPKRPMM"=>$rw41a,
				"dataPKDPMM"=>$rw42,
				"tblPKDPMM"=>$rw42a,
				"dataKunbay"=>$rw43,
				"tblKunbay"=>$rw43a,
				"dataKlb"=>$rw44,
				"tblKlb"=>$rw44a,
				"dataSiagaaktif"=>$rw45,
				"tblSiagaaktif"=>$rw45a,
				"dataDidikumum"=>$rw46,
				"tblDidikumum"=>$rw46a,
				"dataSenbud"=>$rw47,
				"tblSenbud"=>$rw47a,
				"dataCabudtari"=>$rw48,
				"tblCabudtari"=>$rw48a,
				"dataPora"=>$rw49,
				"tblPora"=>$rw49a,
				"dataExpo"=>$rw50,
				"tblExpo"=>$rw50a,
				"dataPerpus"=>$rw51,
				"tblPerpus"=>$rw51a,
				"dataKPBPS"=>$rw52,
				"tblKPBPS"=>$rw52a,
				"dataLulusanke"=>$rw53,
				"tblLulusanke"=>$rw53a,
				"dataKualifikasiguru"=>$rw54,
				"tblKualifikasiguru"=>$rw54a,
				"dataPenuhguru"=>$rw55,
				"tblPenuhguru"=>$rw55a,
				"dataMiliksekolah"=>$rw56,
				"tblMiliksekolah"=>$rw56a,
				"dataSMKPT"=>$rw57,
				"tblSMKPT"=>$rw57a,
				"dataLuluskerja"=>$rw58,
				"tblLuluskerja"=>$rw58a,
				"dataCabudda"=>$rw59,
				"tblCabudda"=>$rw59a,
				"dataIPM"=>$rw60,
				"tblIPM"=>$rw60a,
				"dataJPM"=>$rw61,
				"tblJPM"=>$rw61a,
				"dataP1"=>$rw62,
				"tblP1"=>$rw62a,
				"dataP2"=>$rw63,
				"tblP2"=>$rw63a,
				"dataJamkesmasda"=>$rw64,
				"tblJamkesmasda"=>$rw64a,
				"dataKemiskinan"=>$rw65,
				"tblKemiskinan"=>$rw65a,
				"dataKMTK"=>$rw66,
				"tblKMTK"=>$rw66a,
				"dataJPKLSM"=>$rw67,
				"tblJPKLSM"=>$rw67a,
				"dataPSKS"=>$rw68,
				"tblPSKS"=>$rw68a,
				"dataPMKS"=>$rw69,
				"tblPMKS"=>$rw69a,
				"dataMasos"=>$rw70,
				"tblMasos"=>$rw70a,
				"dataPKK"=>$rw71,
				"tblPKK"=>$rw71a,
				"dataPKTK"=>$rw72,
				"tblPKTK"=>$rw72a,
				"dataIndeksGini"=>$rw73,
				"tblIndeksGini"=>$rw73a,
				"dataPPVBD"=>$rw74,
				"tblPPVBD"=>$rw74a,
				"dataWilliamson"=>$rw75,
				"tblWilliamson"=>$rw75a,
				"dataAgamaPeluk"=>$rw76,
				"tblAgamaPeluk"=>$rw76a,
				"dataSarib"=>$rw77,
				"tblSarib"=>$rw77a,
				"dataHaji"=>$rw78,
				"tblHaji"=>$rw78a,
				"dataKUA"=>$rw79,
				"tblKUA"=>$rw79a,
				"dataPenyuluhagama"=>$rw80,
				"tblPenyuluhagama"=>$rw80a,
				"dataLembagaAgama"=>$rw81,
				"tblLembagaAgama"=>$rw81a,
				"dataDPRD"=>$rw82,
				"tblDPRD"=>$rw82a,
				"dataKomposisiDPRD"=>$rw83,
				"tblKomposisiDPRD"=>$rw83a,
				"dataJumlahfraksi"=>$rw84,
				"tblJumlahfraksi"=>$rw84a,
				"dataParpol"=>$rw85,
				"tblParpol"=>$rw85a,
				"dataKpm"=>$rw86,
				"tblKpm"=>$rw86a,
				"dataTpp"=>$rw87,
				"tblTpp"=>$rw87a,
				"dataOrmas"=>$rw88,
				"tblOrmas"=>$rw88a,
				"dataLPM"=>$rw89,
				"tblLPM"=>$rw89a,
				"dataPPM"=>$rw90,
				"tblPPM"=>$rw90a,
				"dataJSSM"=>$rw91,
				"tblJSSM"=>$rw91a,
				"dataJPPMD"=>$rw92,
				"tblJPPMD"=>$rw92a,
				"dataLSM"=>$rw93,
				"tblLSM"=>$rw93a,
				"dataJKPPD"=>$rw94,
				"tblJKPPD"=>$rw94a,
				"dataPH"=>$rw95,
				"tblPH"=>$rw95a,
				"dataJKTD"=>$rw96,
				"tblJKTD"=>$rw96a,
				"dataJKYT"=>$rw97,
				"tblJKYT"=>$rw97a,
				"dataKelembagaan"=>$rw98,
				"tblKelembagaan"=>$rw98a,
				"dataTindakkriminal"=>$rw99,
				"tblTindakkriminal"=>$rw99a,
				"dataKriminaltangan"=>$rw100,
				"tblKriminaltangan"=>$rw100a,
				"dataKKM"=>$rw101,
				"tblKKM"=>$rw101a,
				"dataPengungsi"=>$rw102,
				"tblPengungsi"=>$rw102a,
				"dataPengungsian"=>$rw103,
				"tblPengungsian"=>$rw103a,
				"dataPengungsiBalik"=>$rw104,
				"tblPengungsiBalik"=>$rw104a,
				"dataPengungsiRelokasi"=>$rw105,
				"tblPengungsiRelokasi"=>$rw105a,
				"dataKorbanBencana"=>$rw106,
				"tblKorbanBencana"=>$rw106a,
				"dataLokasiBencana"=>$rw107,
				"tblLokasiBencana"=>$rw107a,
				"dataKecamatanLokasiBencana"=>$rw108,
				"tblKecamatanLokasiBencana"=>$rw108a,
				"dataRugiBencana"=>$rw109,
				"tblRugiBencana"=>$rw109a,
				"dataKebutuhanBantuan"=>$rw110,
				"tblKebutuhanBantuan"=>$rw110a,
				"dataKasusWabah"=>$rw111,
				"tblKasusWabah"=>$rw111a,
				"dataEndemiHewan"=>$rw112,
				"tblEndemiHewan"=>$rw112a,
				"dataKasusCuriIkan"=>$rw113,
				"tblKasusCuriIkan"=>$rw113a,
				"dataKapalCuriIkan"=>$rw114,
				"tblKapalCuriIkan"=>$rw114a,
				"dataLokasiCuriIkan"=>$rw115,
				"tblLokasiCuriIkan"=>$rw115a,
				"dataHutanBakar"=>$rw116,
				"tblHutanBakar"=>$rw116a,
				"dataKorbanHutanBakar"=>$rw117,
				"tblKorbanHutanBakar"=>$rw117a,
				"dataLokasiHutanBakar"=>$rw118,
				"tblLokasiHutanBakar"=>$rw118a,
				"dataVolumeKayu"=>$rw119,
				"tblVolumeKayu"=>$rw119a,
				"dataKasusCuriKayu"=>$rw120,
				"tblKasusCuriKayu"=>$rw120a,
				"dataLokasiCuriKayu"=>$rw121,
				"tblLokasiCuriKayu"=>$rw121a,
				"dataEkoIndustri"=>$r1,
				"tblEkoIndustri"=>$r2,
				"dataEsper"=>$r3,
				"tblEsper"=>$r4,
				"dataEsunas"=>$r5,
				"tblEsunas"=>$r6,
				"dataEkomigas"=>$r7,
				"tblEkomigas"=>$r8,
				"dataIon"=>$r9,
				"tblIon"=>$r10,
				"dataEkoijin"=>$r11,
				"tblEkoijin"=>$r12,
				"dataSuse"=>$r13,
				"tblSuse"=>$r14,
				"dataEkopma"=>$r15,
				"tblEkopma"=>$r16,
				"dataEkopmdn"=>$r17,
				"tblEkopmdn"=>$r18,
				"dataEkobpr"=>$r19,
				"tblEkobpr"=>$r20,
				"dataBangku"=>$r21,
				"tblBangku"=>$r22,
				"dataAru"=>$r23,
				"tblAru"=>$r24,
				"dataAji"=>$r25,
				"tblAji"=>$r26,
				"dataNavas"=>$r27,
				"tblNavas"=>$r28,
				"dataJau"=>$r29,
				"tblJau"=>$r30,
				"dataNoob"=>$r31,
				"tblNoob"=>$r32,
				"dataPerban"=>$r33,
				"tblPerban"=>$r34,
				"dataPerum"=>$r35,
				"tblPerum"=>$r36,
				"dataJarah"=>$r37,
				"tblJarah"=>$r38,
				"dataLurah"=>$r39,
				"tblLurah"=>$r40,
				"dataAmuk"=>$r41,
				"tblAmuk"=>$r42,
				"dataJambang"=>$r43,
				"tblJambang"=>$r44,
				"dataKumuh"=>$r45,
				"tblKumuh"=>$r46,
				"dataIlegal"=>$r47,
				"tblIlegal"=>$r48,
				"dataBantar"=>$r49,
				"tblBantar"=>$r50,
				"dataSutet"=>$r51,
				"tblSutet"=>$r52,
				"dataRubik"=>$r53,
				"tblRubik"=>$r54,
				"dataRusa"=>$r55,
				"tblRusa"=>$r56,
				"dataPejalan"=>$r57,
				"tblPejalan"=>$r58,
				"dataKonjalan"=>$r59,
				"tblKonjalan"=>$r60,
				"dataJakon"=>$r61,
				"tblJakon"=>$r62,
				"dataJalung"=>$r63,
				"tblJalung"=>$r64,
				"dataBrug"=>$r65,
				"tblBrug"=>$r66,
				"dataPungsi"=>$r67,
				"tblPungsi"=>$r68,
				"dataPakam"=>$r69,
				"tblPakam"=>$r70,
				"dataPair"=>$r71,
				"tblPair"=>$r72,
				"dataPemilik"=>$r73,
				"tblPemilik"=>$r74,
				"dataSempadan"=>$r75,
				"tblSempadan"=>$r76,
				"dataDrain"=>$r77,
				"tblDrain"=>$r78,
				"dataTurap"=>$r79,
				"tblTurap"=>$r80,
				"dataSuram"=>$r81,
				"tblSuram"=>$r82,
				"dataMuai"=>$r83,
				"tblMuai"=>$r84,
				"dataDaykam"=>$r85,
				"tblDaykam"=>$r86,
				"dataParwis"=>$r87,
				"tblParwis"=>$r88,
				"dataTelkom"=>$r89,
				"tblTelkom"=>$r90,
				"dataKabar"=>$r91,
				"tblKabar"=>$r92,
				"dataSiar"=>$r93,
				"tblSiar"=>$r94,
				"dataSipeda"=>$r95,
				"tblSipeda"=>$r96,
				"dataPerhub"=>$r97,
				"tblPerhub"=>$r98,
				"dataAngkum"=>$r99,
				"tblAngkum"=>$r100,
				"dataTrans"=>$r101,
				"tblTrans"=>$r102,
				"dataImot"=>$r103,
				"tblImot"=>$r104,
				"dataTani"=>$r105,
				"tblTani"=>$r106,
				"dataHorti"=>$r107,
				"tblHorti"=>$r108,
				"dataPerek"=>$r109,
				"tblPerek"=>$r110,
				"dataPeter"=>$r111,
				"tblPeter"=>$r112,
				"dataLikan"=>$r113,
				"tblLikan"=>$r114,
				"dataKetan"=>$r115,
				"tblKetan"=>$r116,
				"dataKesos"=>$r117,
				"tblKesos"=>$r118,
				"dataTambang"=>$r119,
				"tblTambang"=>$r120,
				"dataEnergi"=>$r121,
				"tblEnergi"=>$r122,
				"dataLiup"=>$r123,
				"tblLiup"=>$r124,
				"dataRuli"=>$r125,
				"tblRuli"=>$r126,
				"dataTarlink"=>$r127,
				"tblTarlink"=>$r128,
				"dataTarung"=>$r129,
				"tblTarung"=>$r130,
				"dataPerah"=>$r131,
				"tblPerah"=>$r132,
				"dataAlink"=>$r133,
				"tblAlink"=>$r134,
				"dataSampah"=>$r135,
				"tblSampah"=>$r136,
				"dataAlim"=>$r137,
				"tblAlim"=>$r138,
				"orang"=>$orang,
				"initahun"=>$taini,
				"isilah"=>$isilah));
		}

		public function actionToexcel($fileName){
			$this -> createExcel($fileName);
			$orang = Yii::app()->user->username;
			$taini = date("Y");
			$isilah = array();

			$sqlw1 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_luas_wil' AND `tahun` = '$taini'";
			$sqlw1a = "SELECT * FROM `sipd`.`geo_luas_wil`";
			$sqlw2 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_topografi' AND `tahun` = '$taini'";
			$sqlw2a = "SELECT * FROM `sipd`.`geo_topografi`";
			$sqlw3 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_luaslahan' AND `tahun` = '$taini'";
			$sqlw3a = "SELECT * FROM `sipd`.`geo_luaslahan`";
			$sqlw4 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_iklimavg' AND `tahun` = '$taini'";
			$sqlw4a = "SELECT * FROM `sipd`.`geo_iklimavg`";
			$sqlw5 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_jmlpulau' AND `tahun` = '$taini'";
			$sqlw5a = "SELECT * FROM `sipd`.`geo_jmlpulau`";
			$sqlw6 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_jmlgunung' AND `tahun` = '$taini'";
			$sqlw6a = "SELECT * FROM `sipd`.`geo_jmlgunung`";
			$sqlw7 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_batasnl' AND `tahun` = '$taini'";
			$sqlw7a = "SELECT * FROM `sipd`.`geo_batasnl`";
			$sqlw8 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'geo_fisiografi' AND `tahun` = '$taini'";
			$sqlw8a = "SELECT * FROM `sipd`.`geo_fisiografi`";
			$sqlw9 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pmr_adminpmr' AND `tahun` = '$taini'";
			$sqlw9a = "SELECT * FROM `sipd`.`pmr_adminpmr`";
			$sqlw10 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pmr_statusotonomi' AND `tahun` = '$taini'";
			$sqlw10a = "SELECT * FROM `sipd`.`pmr_statusotonomi`";
			$sqlw11 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pmr_perdaijin' AND `tahun` = '$taini'";
			$sqlw11a = "SELECT * FROM `sipd`.`pmr_perdaijin`";
			$sqlw12 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pmr_sarpras' AND `tahun` = '$taini'";
			$sqlw12a = "SELECT * FROM `sipd`.`pmr_sarpras`";
			$sqlw13 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pmr_konsarpras' AND `tahun` = '$taini'";
			$sqlw13a = "SELECT * FROM `sipd`.`pmr_konsarpras`";
			$sqlw14 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_capil' AND `tahun` = '$taini'";
			$sqlw14a = "SELECT * FROM `sipd`.`dmg_capil`";
			$sqlw15 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_lahan' AND `tahun` = '$taini'";
			$sqlw15a = "SELECT * FROM `sipd`.`dmg_lahan`";
			$sqlw16 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_famjob' AND `tahun` = '$taini'";
			$sqlw16a = "SELECT * FROM `sipd`.`dmg_famjob`";
			$sqlw17 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_usia' AND `tahun` = '$taini'";
			$sqlw17a = "SELECT * FROM `sipd`.`dmg_usia`";
			$sqlw18 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_deprat' AND `tahun` = '$taini'";
			$sqlw18a = "SELECT * FROM `sipd`.`dmg_deprat`";
			$sqlw19 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_padatpenduduk' AND `tahun` = '$taini'";
			$sqlw19a = "SELECT * FROM `sipd`.`dmg_padatpenduduk`";
			$sqlw20 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_inoutsave' AND `tahun` = '$taini'";
			$sqlw20a = "SELECT * FROM `sipd`.`dmg_inoutsave`";
			$sqlw21 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_tk' AND `tahun` = '$taini'";
			$sqlw21a = "SELECT * FROM `sipd`.`dmg_tk`";
			$sqlw22 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_pblmu' AND `tahun` = '$taini'";
			$sqlw22a = "SELECT * FROM `sipd`.`dmg_pblmu`";
			$sqlw23 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_tumduk' AND `tahun` = '$taini'";
			$sqlw23a = "SELECT * FROM `sipd`.`dmg_tumduk`";
			$sqlw24 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_angkahidup' AND `tahun` = '$taini'";
			$sqlw24a = "SELECT * FROM `sipd`.`dmg_angkahidup`";
			$sqlw25 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_pendudukdidik' AND `tahun` = '$taini'";
			$sqlw25a = "SELECT * FROM `sipd`.`dmg_pendudukdidik`";
			$sqlw26 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_keluarga' AND `tahun` = '$taini'";
			$sqlw26a = "SELECT * FROM `sipd`.`dmg_keluarga`";
			$sqlw27 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_rumtang' AND `tahun` = '$taini'";
			$sqlw27a = "SELECT * FROM `sipd`.`dmg_rumtang`";
			$sqlw28 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_urumtang' AND `tahun` = '$taini'";
			$sqlw28a = "SELECT * FROM `sipd`.`dmg_urumtang`";
			$sqlw29 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_jmlrmhtgl' AND `tahun` = '$taini'";
			$sqlw29a = "SELECT * FROM `sipd`.`dmg_jmlrmhtgl`";
			$sqlw30 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_tanilayan' AND `tahun` = '$taini'";
			$sqlw30a = "SELECT * FROM `sipd`.`dmg_tanilayan`";
			$sqlw31 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_perempuananak' AND `tahun` = '$taini'";
			$sqlw31a = "SELECT * FROM `sipd`.`dmg_perempuananak`";
			$sqlw32 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'dmg_tkunder' AND `tahun` = '$taini'";
			$sqlw32a = "SELECT * FROM `sipd`.`dmg_tkunder`";
			$sqlw33 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_sarkes' AND `tahun` = '$taini'";
			$sqlw33a = "SELECT * FROM `sipd`.`kes_sarkes`";
			$sqlw34 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_siif' AND `tahun` = '$taini'";
			$sqlw34a = "SELECT * FROM `sipd`.`kes_siif`";
			$sqlw35 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_kesmas' AND `tahun` = '$taini'";
			$sqlw35a = "SELECT * FROM `sipd`.`kes_kesmas`";
			$sqlw36 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_dagkes' AND `tahun` = '$taini'";
			$sqlw36a = "SELECT * FROM `sipd`.`kes_dagkes`";
			$sqlw37 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_tenkes' AND `tahun` = '$taini'";
			$sqlw37a = "SELECT * FROM `sipd`.`kes_tenkes`";
			$sqlw38 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_kompbidan' AND `tahun` = '$taini'";
			$sqlw38a = "SELECT * FROM `sipd`.`kes_kompbidan`";
			$sqlw39 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_uci' AND `tahun` = '$taini'";
			$sqlw39a = "SELECT * FROM `sipd`.`kes_uci`";
			$sqlw40 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_pppp' AND `tahun` = '$taini'";
			$sqlw40a = "SELECT * FROM `sipd`.`kes_pppp`";
			$sqlw41 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_pkrpmm' AND `tahun` = '$taini'";
			$sqlw41a = "SELECT * FROM `sipd`.`kes_pkrpmm`";
			$sqlw42 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_pkdpmm' AND `tahun` = '$taini'";
			$sqlw42a = "SELECT * FROM `sipd`.`kes_pkdpmm`";
			$sqlw43 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_kunbay' AND `tahun` = '$taini'";
			$sqlw43a = "SELECT * FROM `sipd`.`kes_kunbay`";
			$sqlw44 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_klb' AND `tahun` = '$taini'";
			$sqlw44a = "SELECT * FROM `sipd`.`kes_klb`";
			$sqlw45 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kes_siagaaktif' AND `tahun` = '$taini'";
			$sqlw45a = "SELECT * FROM `sipd`.`kes_siagaaktif`";
			$sqlw46 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_didikumum' AND `tahun` = '$taini'";
			$sqlw46a = "SELECT * FROM `sipd`.`pknpo_didikumum`";
			$sqlw47 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_senbud' AND `tahun` = '$taini'";
			$sqlw47a = "SELECT * FROM `sipd`.`pknpo_senbud`";
			$sqlw48 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_cabudtari' AND `tahun` = '$taini'";
			$sqlw48a = "SELECT * FROM `sipd`.`pknpo_cabudtari`";
			$sqlw49 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_pora' AND `tahun` = '$taini'";
			$sqlw49a = "SELECT * FROM `sipd`.`pknpo_pora`";
			$sqlw50 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_expotaun' AND `tahun` = '$taini'";
			$sqlw50a = "SELECT * FROM `sipd`.`pknpo_expotaun`";
			$sqlw51 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_perpus' AND `tahun` = '$taini'";
			$sqlw51a = "SELECT * FROM `sipd`.`pknpo_perpus`";
			$sqlw52 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_kpbps' AND `tahun` = '$taini'";
			$sqlw52a = "SELECT * FROM `sipd`.`pknpo_kpbps`";
			$sqlw53 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_lulusanke' AND `tahun` = '$taini'";
			$sqlw53a = "SELECT * FROM `sipd`.`pknpo_lulusanke`";
			$sqlw54 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_kualifikasiguru' AND `tahun` = '$taini'";
			$sqlw54a = "SELECT * FROM `sipd`.`pknpo_kualifikasiguru`";
			$sqlw55 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_penuhguru' AND `tahun` = '$taini'";
			$sqlw55a = "SELECT * FROM `sipd`.`pknpo_penuhguru`";
			$sqlw56 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_miliksekolah' AND `tahun` = '$taini'";
			$sqlw56a = "SELECT * FROM `sipd`.`pknpo_miliksekolah`";
			$sqlw57 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_smkpt' AND `tahun` = '$taini'";
			$sqlw57a = "SELECT * FROM `sipd`.`pknpo_smkpt`";
			$sqlw58 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_luluskerja' AND `tahun` = '$taini'";
			$sqlw58a = "SELECT * FROM `sipd`.`pknpo_luluskerja`";
			$sqlw59 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pknpo_cabudda' AND `tahun` = '$taini'";
			$sqlw59a = "SELECT * FROM `sipd`.`pknpo_cabudda`";
			$sqlw60 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_ipm' AND `tahun` = '$taini'";
			$sqlw60a = "SELECT * FROM `sipd`.`kesos_ipm`";
			$sqlw61 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_jpm' AND `tahun` = '$taini'";
			$sqlw61a = "SELECT * FROM `sipd`.`kesos_jpm`";
			$sqlw62 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_p1' AND `tahun` = '$taini'";
			$sqlw62a = "SELECT * FROM `sipd`.`kesos_p1`";
			$sqlw63 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_p2' AND `tahun` = '$taini'";
			$sqlw63a = "SELECT * FROM `sipd`.`kesos_p2`";
			$sqlw64 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_jamkesmasda' AND `tahun` = '$taini'";
			$sqlw64a = "SELECT * FROM `sipd`.`kesos_jamkesmasda`";
			$sqlw65 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_kemiskinan' AND `tahun` = '$taini'";
			$sqlw65a = "SELECT * FROM `sipd`.`kesos_kemiskinan`";
			$sqlw66 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_kmtk' AND `tahun` = '$taini'";
			$sqlw66a = "SELECT * FROM `sipd`.`kesos_kmtk`";
			$sqlw67 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_jkplsm' AND `tahun` = '$taini'";
			$sqlw67a = "SELECT * FROM `sipd`.`kesos_jkplsm`";
			$sqlw68 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_psks' AND `tahun` = '$taini'";
			$sqlw68a = "SELECT * FROM `sipd`.`kesos_psks`";
			$sqlw69 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_pmks' AND `tahun` = '$taini'";
			$sqlw69a = "SELECT * FROM `sipd`.`kesos_pmks`";
			$sqlw70 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_masos' AND `tahun` = '$taini'";
			$sqlw70a = "SELECT * FROM `sipd`.`kesos_masos`";
			$sqlw71 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_pkk' AND `tahun` = '$taini'";
			$sqlw71a = "SELECT * FROM `sipd`.`kesos_pkk`";
			$sqlw72 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_pktk' AND `tahun` = '$taini'";
			$sqlw72a = "SELECT * FROM `sipd`.`kesos_pktk`";
			$sqlw73 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_indeksgini' AND `tahun` = '$taini'";
			$sqlw73a = "SELECT * FROM `sipd`.`kesos_indeksgini`";
			$sqlw74 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_ppvbd' AND `tahun` = '$taini'";
			$sqlw74a = "SELECT * FROM `sipd`.`kesos_ppvbd`";
			$sqlw75 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kesos_williamson' AND `tahun` = '$taini'";
			$sqlw75a = "SELECT * FROM `sipd`.`kesos_williamson`";
			$sqlw76 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ag_jmlpeluk' AND `tahun` = '$taini'";
			$sqlw76a = "SELECT * FROM `sipd`.`ag_jmlpeluk`";
			$sqlw77 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ag_sarib' AND `tahun` = '$taini'";
			$sqlw77a = "SELECT * FROM `sipd`.`ag_sarib`";
			$sqlw78 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ag_haji' AND `tahun` = '$taini'";
			$sqlw78a = "SELECT * FROM `sipd`.`ag_haji`";
			$sqlw79 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ag_kua' AND `tahun` = '$taini'";
			$sqlw79a = "SELECT * FROM `sipd`.`ag_kua`";
			$sqlw80 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ag_nyuluh' AND `tahun` = '$taini'";
			$sqlw80a = "SELECT * FROM `sipd`.`ag_nyuluh`";
			$sqlw81 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ag_lembagadidik' AND `tahun` = '$taini'";
			$sqlw81a = "SELECT * FROM `sipd`.`ag_lembagadidik`";
			$sqlw82 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jad' AND `tahun` = '$taini'";
			$sqlw82a = "SELECT * FROM `sipd`.`pdnp_jad`";
			$sqlw83 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_kadbjk' AND `tahun` = '$taini'";
			$sqlw83a = "SELECT * FROM `sipd`.`pdnp_kadbjk`";
			$sqlw84 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jfd' AND `tahun` = '$taini'";
			$sqlw84a = "SELECT * FROM `sipd`.`pdnp_jfd`";
			$sqlw85 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_parpol' AND `tahun` = '$taini'";
			$sqlw85a = "SELECT * FROM `sipd`.`pdnp_parpol`";
			$sqlw86 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_kpm' AND `tahun` = '$taini'";
			$sqlw86a = "SELECT * FROM `sipd`.`pdnp_kpm`";
			$sqlw87 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_tpp' AND `tahun` = '$taini'";
			$sqlw87a = "SELECT * FROM `sipd`.`pdnp_tpp`";
			$sqlw88 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_ormas' AND `tahun` = '$taini'";
			$sqlw88a = "SELECT * FROM `sipd`.`pdnp_ormas`";
			$sqlw89 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jlpm' AND `tahun` = '$taini'";
			$sqlw89a = "SELECT * FROM `sipd`.`pdnp_jlpm`";
			$sqlw90 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jppm' AND `tahun` = '$taini'";
			$sqlw90a = "SELECT * FROM `sipd`.`pdnp_jppm`";
			$sqlw91 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jsmm' AND `tahun` = '$taini'";
			$sqlw91a = "SELECT * FROM `sipd`.`pdnp_jsmm`";
			$sqlw92 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jppmd' AND `tahun` = '$taini'";
			$sqlw92a = "SELECT * FROM `sipd`.`pdnp_jppmd`";
			$sqlw93 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_lswm' AND `tahun` = '$taini'";
			$sqlw93a = "SELECT * FROM `sipd`.`pdnp_lswm`";
			$sqlw94 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pdnp_jkppd' AND `tahun` = '$taini'";
			$sqlw94a = "SELECT * FROM `sipd`.`pdnp_jkppd`";
			$sqlw95 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'huk_ph' AND `tahun` = '$taini'";
			$sqlw95a = "SELECT * FROM `sipd`.`huk_ph`";
			$sqlw96 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'huk_jktd' AND `tahun` = '$taini'";
			$sqlw96a = "SELECT * FROM `sipd`.`huk_jktd`";
			$sqlw97 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'huk_jkyt' AND `tahun` = '$taini'";
			$sqlw97a = "SELECT * FROM `sipd`.`huk_jkyt`";
			$sqlw98 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'huk_kel' AND `tahun` = '$taini'";
			$sqlw98a = "SELECT * FROM `sipd`.`huk_kel`";
			$sqlw99 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'huk_jtk' AND `tahun` = '$taini'";
			$sqlw99a = "SELECT * FROM `sipd`.`huk_jtk`";
			$sqlw100 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'huk_jtkd' AND `tahun` = '$taini'";
			$sqlw100a = "SELECT * FROM `sipd`.`huk_jtkd`";
			$sqlw101 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'kkm_kkm' AND `tahun` = '$taini'";
			$sqlw101a = "SELECT * FROM `sipd`.`kkm_kkm`";
			$sqlw102 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jpa' AND `tahun` = '$taini'";
			$sqlw102a = "SELECT * FROM `sipd`.`ben_jpa`";
			$sqlw103 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jpl' AND `tahun` = '$taini'";
			$sqlw103a = "SELECT * FROM `sipd`.`ben_jpl`";
			$sqlw104 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jpkl' AND `tahun` = '$taini'";
			$sqlw104a = "SELECT * FROM `sipd`.`ben_jpkl`";
			$sqlw105 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jpd' AND `tahun` = '$taini'";
			$sqlw105a = "SELECT * FROM `sipd`.`ben_jpd`";
			$sqlw106 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jkba' AND `tahun` = '$taini'";
			$sqlw106a = "SELECT * FROM `sipd`.`ben_jkba`";
			$sqlw107 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jlb' AND `tahun` = '$taini'";
			$sqlw107a = "SELECT * FROM `sipd`.`ben_jlb`";
			$sqlw108 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jklb' AND `tahun` = '$taini'";
			$sqlw108a = "SELECT * FROM `sipd`.`ben_jklb`";
			$sqlw109 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_jpkab' AND `tahun` = '$taini'";
			$sqlw109a = "SELECT * FROM `sipd`.`ben_jpkab`";
			$sqlw110 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ben_kb' AND `tahun` = '$taini'";
			$sqlw110a = "SELECT * FROM `sipd`.`ben_kb`";
			$sqlw111 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pm_jkw' AND `tahun` = '$taini'";
			$sqlw111a = "SELECT * FROM `sipd`.`pm_jkw`";
			$sqlw112 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pm_eph' AND `tahun` = '$taini'";
			$sqlw112a = "SELECT * FROM `sipd`.`pm_eph`";
			$sqlw113 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pikan_jkpi' AND `tahun` = '$taini'";
			$sqlw113a = "SELECT * FROM `sipd`.`pikan_jkpi`";
			$sqlw114 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pikan_jikap' AND `tahun` = '$taini'";
			$sqlw114a = "SELECT * FROM `sipd`.`pikan_jikap`";
			$sqlw115 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'pikan_jlpi' AND `tahun` = '$taini'";
			$sqlw115a = "SELECT * FROM `sipd`.`pikan_jlpi`";
			$sqlw116 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'khut_lah' AND `tahun` = '$taini'";
			$sqlw116a = "SELECT * FROM `sipd`.`khut_lah`";
			$sqlw117 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'khut_jkj' AND `tahun` = '$taini'";
			$sqlw117a = "SELECT * FROM `sipd`.`khut_jkj`";
			$sqlw118 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'khut_jlkh' AND `tahun` = '$taini'";
			$sqlw118a = "SELECT * FROM `sipd`.`khut_jlkh`";
			$sqlw119 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ppk_vk' AND `tahun` = '$taini'";
			$sqlw119a = "SELECT * FROM `sipd`.`ppk_vk`";
			$sqlw120 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ppk_jk' AND `tahun` = '$taini'";
			$sqlw120a = "SELECT * FROM `sipd`.`ppk_jk`";
			$sqlw121 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'ppk_jlpp' AND `tahun` = '$taini'";
			$sqlw121a = "SELECT * FROM `sipd`.`ppk_jlpp`";
			$sql1 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_industri' AND `tahun` = '$taini'";
			$sql2 = "SELECT * FROM `sipd`.`eko_industri`";
			$sql3 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_perdagangan' AND `tahun` = '$taini'";
			$sql4 = "SELECT * FROM `sipd`.`eko_perdagangan`";
			$sql5 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_usahanas' AND `tahun` = '$taini'";
			$sql6 = "SELECT * FROM `sipd`.`eko_usahanas`";
			$sql7 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_einonmigas' AND `tahun` = '$taini'";
			$sql8 = "SELECT * FROM `sipd`.`eko_einonmigas`";
			$sql9 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_ioindustri' AND `tahun` = '$taini'";
			$sql10 = "SELECT * FROM `sipd`.`eko_ioindustri`";
			$sql11 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_perijinan' AND `tahun` = '$taini'";
			$sql12 = "SELECT * FROM `sipd`.`eko_perijinan`";
			$sql13 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_indsubsektor' AND `tahun` = '$taini'";
			$sql14 = "SELECT * FROM `sipd`.`eko_indsubsektor`";
			$sql15 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_pma' AND `tahun` = '$taini'";
			$sql16 = "SELECT * FROM `sipd`.`eko_pma`";
			$sql17 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_pmdn' AND `tahun` = '$taini'";
			$sql18 = "SELECT * FROM `sipd`.`eko_pmdn`";
			$sql19 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_bpr' AND `tahun` = '$taini'";
			$sql20 = "SELECT * FROM `sipd`.`eko_bpr`";
			$sql21 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_bankumum' AND `tahun` = '$taini'";
			$sql22 = "SELECT * FROM `sipd`.`eko_bankumum`";
			$sql23 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_asrugi' AND `tahun` = '$taini'";
			$sql24 = "SELECT * FROM `sipd`.`eko_asrugi`";
			$sql25 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_asjiwa' AND `tahun` = '$taini'";
			$sql26 = "SELECT * FROM `sipd`.`eko_asjiwa`";
			$sql27 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_invnas' AND `tahun` = '$taini'";
			$sql28 = "SELECT * FROM `sipd`.`eko_invnas`";
			$sql29 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_jasauang' AND `tahun` = '$taini'";
			$sql30 = "SELECT * FROM `sipd`.`eko_jasauang`";
			$sql31 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_ukmnon' AND `tahun` = '$taini'";
			$sql32 = "SELECT * FROM `sipd`.`eko_ukmnon`";
			$sql33 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'eko_perbankan' AND `tahun` = '$taini'";
			$sql34 = "SELECT * FROM `sipd`.`eko_perbankan`";
			$sql35 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_perumahan' AND `tahun` = '$taini'";
			$sql36 = "SELECT * FROM `sipd`.`infra_perumahan`";
			$sql37 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_jmlrmh' AND `tahun` = '$taini'";
			$sql38 = "SELECT * FROM `sipd`.`infra_jmlrmh`";
			$sql39 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_lsrmh' AND `tahun` = '$taini'";
			$sql40 = "SELECT * FROM `sipd`.`infra_lsrmh`";
			$sql41 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_arealmukim' AND `tahun` = '$taini'";
			$sql42 = "SELECT * FROM `sipd`.`infra_arealmukim`";
			$sql43 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_jmlbangun' AND `tahun` = '$taini'";
			$sql44 = "SELECT * FROM `sipd`.`infra_jmlbangun`";
			$sql45 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_kumuh' AND `tahun` = '$taini'";
			$sql46 = "SELECT * FROM `sipd`.`infra_kumuh`";
			$sql47 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_ilegal' AND `tahun` = '$taini'";
			$sql48 = "SELECT * FROM `sipd`.`infra_ilegal`";
			$sql49 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_bantaran' AND `tahun` = '$taini'";
			$sql50 = "SELECT * FROM `sipd`.`infra_bantaran`";
			$sql51 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_sutet' AND `tahun` = '$taini'";
			$sql52 = "SELECT * FROM `sipd`.`infra_sutet`";
			$sql53 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_rpublik' AND `tahun` = '$taini'";
			$sql54 = "SELECT * FROM `sipd`.`infra_rpublik`";
			$sql55 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_rmhsanitasi' AND `tahun` = '$taini'";
			$sql56 = "SELECT * FROM `sipd`.`infra_rmhsanitasi`";
			$sql57 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pjjln' AND `tahun` = '$taini'";
			$sql58 = "SELECT * FROM `sipd`.`infra_pjjln`";
			$sql59 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_kondisijln' AND `tahun` = '$taini'";
			$sql60 = "SELECT * FROM `sipd`.`infra_kondisijln`";
			$sql61 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pjkondisi' AND `tahun` = '$taini'";
			$sql62 = "SELECT * FROM `sipd`.`infra_pjkondisi`";
			$sql63 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_penghubung' AND `tahun` = '$taini'";
			$sql64 = "SELECT * FROM `sipd`.`infra_penghubung`";
			$sql65 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_jembatan' AND `tahun` = '$taini'";
			$sql66 = "SELECT * FROM `sipd`.`infra_jembatan`";
			$sql67 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pjfungsi' AND `tahun` = '$taini'";
			$sql68 = "SELECT * FROM `sipd`.`infra_pjfungsi`";
			$sql69 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pemakaman' AND `tahun` = '$taini'";
			$sql70 = "SELECT * FROM `sipd`.`infra_pemakaman`";
			$sql71 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pengairan' AND `tahun` = '$taini'";
			$sql72 = "SELECT * FROM `sipd`.`infra_pengairan`";
			$sql73 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pjmilik' AND `tahun` = '$taini'";
			$sql74 = "SELECT * FROM `sipd`.`infra_pjmilik`";
			$sql75 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_sempadan' AND `tahun` = '$taini'";
			$sql76 = "SELECT * FROM `sipd`.`infra_sempadan`";
			$sql77 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_drainase' AND `tahun` = '$taini'";
			$sql78 = "SELECT * FROM `sipd`.`infra_drainase`";
			$sql79 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_turap' AND `tahun` = '$taini'";
			$sql80 = "SELECT * FROM `sipd`.`infra_turap`";
			$sql81 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_sam' AND `tahun` = '$taini'";
			$sql82 = "SELECT * FROM `sipd`.`infra_sam`";
			$sql83 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_mutuair' AND `tahun` = '$taini'";
			$sql84 = "SELECT * FROM `sipd`.`infra_mutuair`";
			$sql85 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_dayamakam' AND `tahun` = '$taini'";
			$sql86 = "SELECT * FROM `sipd`.`infra_dayamakam`";
			$sql87 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_pariwisata' AND `tahun` = '$taini'";
			$sql88 = "SELECT * FROM `sipd`.`infra_pariwisata`";
			$sql89 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_telekomunikasi' AND `tahun` = '$taini'";
			$sql90 = "SELECT * FROM `sipd`.`infra_telekomunikasi`";
			$sql91 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_srtkabar' AND `tahun` = '$taini'";
			$sql92 = "SELECT * FROM `sipd`.`infra_srtkabar`";
			$sql93 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_penyiaran' AND `tahun` = '$taini'";
			$sql94 = "SELECT * FROM `sipd`.`infra_penyiaran`";
			$sql95 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_sip' AND `tahun` = '$taini'";
			$sql96 = "SELECT * FROM `sipd`.`infra_sip`";
			$sql97 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_perhubungan' AND `tahun` = '$taini'";
			$sql98 = "SELECT * FROM `sipd`.`infra_perhubungan`";
			$sql99 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_angkum' AND `tahun` = '$taini'";
			$sql100 = "SELECT * FROM `sipd`.`infra_angkum`";
			$sql101 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_transportasi' AND `tahun` = '$taini'";
			$sql102 = "SELECT * FROM `sipd`.`infra_transportasi`";
			$sql103 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'infra_bermotor' AND `tahun` = '$taini'";
			$sql104 = "SELECT * FROM `sipd`.`infra_bermotor`";
			$sql105 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_pertanian' AND `tahun` = '$taini'";
			$sql106 = "SELECT * FROM `sipd`.`sda_pertanian`";
			$sql107 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_hortikultura' AND `tahun` = '$taini'";
			$sql108 = "SELECT * FROM `sipd`.`sda_hortikultura`";
			$sql109 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_perkebunan' AND `tahun` = '$taini'";
			$sql110 = "SELECT * FROM `sipd`.`sda_perkebunan`";
			$sql111 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_peternakan' AND `tahun` = '$taini'";
			$sql112 = "SELECT * FROM `sipd`.`sda_peternakan`";
			$sql113 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_laut_ikan' AND `tahun` = '$taini'";
			$sql114 = "SELECT * FROM `sipd`.`sda_laut_ikan`";
			$sql115 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_kehutanan' AND `tahun` = '$taini'";
			$sql116 = "SELECT * FROM `sipd`.`sda_kehutanan`";
			$sql117 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_kel_sos' AND `tahun` = '$taini'";
			$sql118 = "SELECT * FROM `sipd`.`sda_kel_sos`";
			$sql119 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_pertambangan' AND `tahun` = '$taini'";
			$sql120 = "SELECT * FROM `sipd`.`sda_pertambangan`";
			$sql121 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_energi' AND `tahun` = '$taini'";
			$sql122 = "SELECT * FROM `sipd`.`sda_energi`";
			$sql123 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_linkhidup' AND `tahun` = '$taini'";
			$sql124 = "SELECT * FROM `sipd`.`sda_linkhidup`";
			$sql125 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_rusaklinkhidup' AND `tahun` = '$taini'";
			$sql126 = "SELECT * FROM `sipd`.`sda_rusaklinkhidup`";
			$sql127 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_pelestarianlink' AND `tahun` = '$taini'";
			$sql128 = "SELECT * FROM `sipd`.`sda_pelestarianlink`";
			$sql129 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_tataruang' AND `tahun` = '$taini'";
			$sql130 = "SELECT * FROM `sipd`.`sda_tataruang`";
			$sql131 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_pertanahan' AND `tahun` = '$taini'";
			$sql132 = "SELECT * FROM `sipd`.`sda_pertanahan`";
			$sql133 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_kendalilink' AND `tahun` = '$taini'";
			$sql134 = "SELECT * FROM `sipd`.`sda_kendalilink`";
			$sql135 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_sampah' AND `tahun` = '$taini'";
			$sql136 = "SELECT * FROM `sipd`.`sda_sampah`";
			$sql137 = "SELECT `isian` FROM `sipd`.`log` WHERE `kecamatan` = '$orang' AND `namatabel` = 'sda_air_limbah' AND `tahun` = '$taini'";
			$sql138 = "SELECT * FROM `sipd`.`sda_air_limbah`";
			$connection = Yii::app()->db;
			$commandw1 = $connection->createCommand($sqlw1);
			$commandw1a = $connection->createCommand($sqlw1a);
			$commandw2 = $connection->createCommand($sqlw2);
			$commandw2a = $connection->createCommand($sqlw2a);
			$commandw3 = $connection->createCommand($sqlw3);
			$commandw3a = $connection->createCommand($sqlw3a);
			$commandw4 = $connection->createCommand($sqlw4);
			$commandw4a = $connection->createCommand($sqlw4a);
			$commandw5 = $connection->createCommand($sqlw5);
			$commandw5a = $connection->createCommand($sqlw5a);
			$commandw6 = $connection->createCommand($sqlw6);
			$commandw6a = $connection->createCommand($sqlw6a);
			$commandw7 = $connection->createCommand($sqlw7);
			$commandw7a = $connection->createCommand($sqlw7a);
			$commandw8 = $connection->createCommand($sqlw8);
			$commandw8a = $connection->createCommand($sqlw8a);
			$commandw9 = $connection->createCommand($sqlw9);
			$commandw9a = $connection->createCommand($sqlw9a);
			$commandw10 = $connection->createCommand($sqlw10);
			$commandw10a = $connection->createCommand($sqlw10a);
			$commandw11 = $connection->createCommand($sqlw11);
			$commandw11a = $connection->createCommand($sqlw11a);
			$commandw12 = $connection->createCommand($sqlw12);
			$commandw12a = $connection->createCommand($sqlw12a);
			$commandw13 = $connection->createCommand($sqlw13);
			$commandw13a = $connection->createCommand($sqlw13a);
			$commandw14 = $connection->createCommand($sqlw14);
			$commandw14a = $connection->createCommand($sqlw14a);
			$commandw15 = $connection->createCommand($sqlw15);
			$commandw15a = $connection->createCommand($sqlw15a);
			$commandw16 = $connection->createCommand($sqlw16);
			$commandw16a = $connection->createCommand($sqlw16a);
			$commandw17 = $connection->createCommand($sqlw17);
			$commandw17a = $connection->createCommand($sqlw17a);
			$commandw18 = $connection->createCommand($sqlw18);
			$commandw18a = $connection->createCommand($sqlw18a);
			$commandw19 = $connection->createCommand($sqlw19);
			$commandw19a = $connection->createCommand($sqlw19a);
			$commandw20 = $connection->createCommand($sqlw20);
			$commandw20a = $connection->createCommand($sqlw20a);
			$commandw21 = $connection->createCommand($sqlw21);
			$commandw21a = $connection->createCommand($sqlw21a);
			$commandw22 = $connection->createCommand($sqlw22);
			$commandw22a = $connection->createCommand($sqlw22a);
			$commandw23 = $connection->createCommand($sqlw23);
			$commandw23a = $connection->createCommand($sqlw23a);
			$commandw24 = $connection->createCommand($sqlw24);
			$commandw24a = $connection->createCommand($sqlw24a);
			$commandw25 = $connection->createCommand($sqlw25);
			$commandw25a = $connection->createCommand($sqlw25a);
			$commandw26 = $connection->createCommand($sqlw26);
			$commandw26a = $connection->createCommand($sqlw26a);
			$commandw27 = $connection->createCommand($sqlw27);
			$commandw27a = $connection->createCommand($sqlw27a);
			$commandw28 = $connection->createCommand($sqlw28);
			$commandw28a = $connection->createCommand($sqlw28a);
			$commandw29 = $connection->createCommand($sqlw29);
			$commandw29a = $connection->createCommand($sqlw29a);
			$commandw30 = $connection->createCommand($sqlw30);
			$commandw30a = $connection->createCommand($sqlw30a);
			$commandw31 = $connection->createCommand($sqlw31);
			$commandw31a = $connection->createCommand($sqlw31a);
			$commandw32 = $connection->createCommand($sqlw32);
			$commandw32a = $connection->createCommand($sqlw32a);
			$commandw33 = $connection->createCommand($sqlw33);
			$commandw33a = $connection->createCommand($sqlw33a);
			$commandw34 = $connection->createCommand($sqlw34);
			$commandw34a = $connection->createCommand($sqlw34a);
			$commandw35 = $connection->createCommand($sqlw35);
			$commandw35a = $connection->createCommand($sqlw35a);
			$commandw36 = $connection->createCommand($sqlw36);
			$commandw36a = $connection->createCommand($sqlw36a);
			$commandw37 = $connection->createCommand($sqlw37);
			$commandw37a = $connection->createCommand($sqlw37a);
			$commandw38 = $connection->createCommand($sqlw38);
			$commandw38a = $connection->createCommand($sqlw38a);
			$commandw39 = $connection->createCommand($sqlw39);
			$commandw39a = $connection->createCommand($sqlw39a);
			$commandw40 = $connection->createCommand($sqlw40);
			$commandw40a = $connection->createCommand($sqlw40a);
			$commandw41 = $connection->createCommand($sqlw41);
			$commandw41a = $connection->createCommand($sqlw41a);
			$commandw42 = $connection->createCommand($sqlw42);
			$commandw42a = $connection->createCommand($sqlw42a);
			$commandw43 = $connection->createCommand($sqlw43);
			$commandw43a = $connection->createCommand($sqlw43a);
			$commandw44 = $connection->createCommand($sqlw44);
			$commandw44a = $connection->createCommand($sqlw44a);
			$commandw45 = $connection->createCommand($sqlw45);
			$commandw45a = $connection->createCommand($sqlw45a);
			$commandw46 = $connection->createCommand($sqlw46);
			$commandw46a = $connection->createCommand($sqlw46a);
			$commandw47 = $connection->createCommand($sqlw47);
			$commandw47a = $connection->createCommand($sqlw47a);
			$commandw48 = $connection->createCommand($sqlw48);
			$commandw48a = $connection->createCommand($sqlw48a);
			$commandw49 = $connection->createCommand($sqlw49);
			$commandw49a = $connection->createCommand($sqlw49a);
			$commandw50 = $connection->createCommand($sqlw50);
			$commandw50a = $connection->createCommand($sqlw50a);
			$commandw51 = $connection->createCommand($sqlw51);
			$commandw51a = $connection->createCommand($sqlw51a);
			$commandw52 = $connection->createCommand($sqlw52);
			$commandw52a = $connection->createCommand($sqlw52a);
			$commandw53 = $connection->createCommand($sqlw53);
			$commandw53a = $connection->createCommand($sqlw53a);
			$commandw54 = $connection->createCommand($sqlw54);
			$commandw54a = $connection->createCommand($sqlw54a);
			$commandw55 = $connection->createCommand($sqlw55);
			$commandw55a = $connection->createCommand($sqlw55a);
			$commandw56 = $connection->createCommand($sqlw56);
			$commandw56a = $connection->createCommand($sqlw56a);
			$commandw57 = $connection->createCommand($sqlw57);
			$commandw57a = $connection->createCommand($sqlw57a);
			$commandw58 = $connection->createCommand($sqlw58);
			$commandw58a = $connection->createCommand($sqlw58a);
			$commandw59 = $connection->createCommand($sqlw59);
			$commandw59a = $connection->createCommand($sqlw59a);
			$commandw60 = $connection->createCommand($sqlw60);
			$commandw60a = $connection->createCommand($sqlw60a);
			$commandw61 = $connection->createCommand($sqlw61);
			$commandw61a = $connection->createCommand($sqlw61a);
			$commandw62 = $connection->createCommand($sqlw62);
			$commandw62a = $connection->createCommand($sqlw62a);
			$commandw63 = $connection->createCommand($sqlw63);
			$commandw63a = $connection->createCommand($sqlw63a);
			$commandw64 = $connection->createCommand($sqlw64);
			$commandw64a = $connection->createCommand($sqlw64a);
			$commandw65 = $connection->createCommand($sqlw65);
			$commandw65a = $connection->createCommand($sqlw65a);
			$commandw66 = $connection->createCommand($sqlw66);
			$commandw66a = $connection->createCommand($sqlw66a);
			$commandw67 = $connection->createCommand($sqlw67);
			$commandw67a = $connection->createCommand($sqlw67a);
			$commandw68 = $connection->createCommand($sqlw68);
			$commandw68a = $connection->createCommand($sqlw68a);
			$commandw69 = $connection->createCommand($sqlw69);
			$commandw69a = $connection->createCommand($sqlw69a);
			$commandw70 = $connection->createCommand($sqlw70);
			$commandw70a = $connection->createCommand($sqlw70a);
			$commandw71 = $connection->createCommand($sqlw71);
			$commandw71a = $connection->createCommand($sqlw71a);
			$commandw72 = $connection->createCommand($sqlw72);
			$commandw72a = $connection->createCommand($sqlw72a);
			$commandw73 = $connection->createCommand($sqlw73);
			$commandw73a = $connection->createCommand($sqlw73a);
			$commandw74 = $connection->createCommand($sqlw74);
			$commandw74a = $connection->createCommand($sqlw74a);
			$commandw75 = $connection->createCommand($sqlw75);
			$commandw75a = $connection->createCommand($sqlw75a);
			$commandw76 = $connection->createCommand($sqlw76);
			$commandw76a = $connection->createCommand($sqlw76a);
			$commandw77 = $connection->createCommand($sqlw77);
			$commandw77a = $connection->createCommand($sqlw77a);
			$commandw78 = $connection->createCommand($sqlw78);
			$commandw78a = $connection->createCommand($sqlw78a);
			$commandw79 = $connection->createCommand($sqlw79);
			$commandw79a = $connection->createCommand($sqlw79a);
			$commandw80 = $connection->createCommand($sqlw80);
			$commandw80a = $connection->createCommand($sqlw80a);
			$commandw81 = $connection->createCommand($sqlw81);
			$commandw81a = $connection->createCommand($sqlw81a);
			$commandw82 = $connection->createCommand($sqlw82);
			$commandw82a = $connection->createCommand($sqlw82a);
			$commandw83 = $connection->createCommand($sqlw83);
			$commandw83a = $connection->createCommand($sqlw83a);
			$commandw84 = $connection->createCommand($sqlw84);
			$commandw84a = $connection->createCommand($sqlw84a);
			$commandw85 = $connection->createCommand($sqlw85);
			$commandw85a = $connection->createCommand($sqlw85a);
			$commandw86 = $connection->createCommand($sqlw86);
			$commandw86a = $connection->createCommand($sqlw86a);
			$commandw87 = $connection->createCommand($sqlw87);
			$commandw87a = $connection->createCommand($sqlw87a);
			$commandw88 = $connection->createCommand($sqlw88);
			$commandw88a = $connection->createCommand($sqlw88a);
			$commandw89 = $connection->createCommand($sqlw89);
			$commandw89a = $connection->createCommand($sqlw89a);
			$commandw90 = $connection->createCommand($sqlw90);
			$commandw90a = $connection->createCommand($sqlw90a);
			$commandw91 = $connection->createCommand($sqlw91);
			$commandw91a = $connection->createCommand($sqlw91a);
			$commandw92 = $connection->createCommand($sqlw92);
			$commandw92a = $connection->createCommand($sqlw92a);
			$commandw93 = $connection->createCommand($sqlw93);
			$commandw93a = $connection->createCommand($sqlw93a);
			$commandw94 = $connection->createCommand($sqlw94);
			$commandw94a = $connection->createCommand($sqlw94a);
			$commandw95 = $connection->createCommand($sqlw95);
			$commandw95a = $connection->createCommand($sqlw95a);
			$commandw96 = $connection->createCommand($sqlw96);
			$commandw96a = $connection->createCommand($sqlw96a);
			$commandw97 = $connection->createCommand($sqlw97);
			$commandw97a = $connection->createCommand($sqlw97a);
			$commandw98 = $connection->createCommand($sqlw98);
			$commandw98a = $connection->createCommand($sqlw98a);
			$commandw99 = $connection->createCommand($sqlw99);
			$commandw99a = $connection->createCommand($sqlw99a);
			$commandw100 = $connection->createCommand($sqlw100);
			$commandw100a = $connection->createCommand($sqlw100a);
			$commandw101 = $connection->createCommand($sqlw101);
			$commandw101a = $connection->createCommand($sqlw101a);
			$commandw102 = $connection->createCommand($sqlw102);
			$commandw102a = $connection->createCommand($sqlw102a);
			$commandw103 = $connection->createCommand($sqlw103);
			$commandw103a = $connection->createCommand($sqlw103a);
			$commandw104 = $connection->createCommand($sqlw104);
			$commandw104a = $connection->createCommand($sqlw104a);
			$commandw105 = $connection->createCommand($sqlw105);
			$commandw105a = $connection->createCommand($sqlw105a);
			$commandw106 = $connection->createCommand($sqlw106);
			$commandw106a = $connection->createCommand($sqlw106a);
			$commandw107 = $connection->createCommand($sqlw107);
			$commandw107a = $connection->createCommand($sqlw107a);
			$commandw108 = $connection->createCommand($sqlw108);
			$commandw108a = $connection->createCommand($sqlw108a);
			$commandw109 = $connection->createCommand($sqlw109);
			$commandw109a = $connection->createCommand($sqlw109a);
			$commandw110 = $connection->createCommand($sqlw110);
			$commandw110a = $connection->createCommand($sqlw110a);
			$commandw111 = $connection->createCommand($sqlw111);
			$commandw111a = $connection->createCommand($sqlw111a);
			$commandw112 = $connection->createCommand($sqlw112);
			$commandw112a = $connection->createCommand($sqlw112a);
			$commandw113 = $connection->createCommand($sqlw113);
			$commandw113a = $connection->createCommand($sqlw113a);
			$commandw114 = $connection->createCommand($sqlw114);
			$commandw114a = $connection->createCommand($sqlw114a);
			$commandw115 = $connection->createCommand($sqlw115);
			$commandw115a = $connection->createCommand($sqlw115a);
			$commandw116 = $connection->createCommand($sqlw116);
			$commandw116a = $connection->createCommand($sqlw116a);
			$commandw117 = $connection->createCommand($sqlw117);
			$commandw117a = $connection->createCommand($sqlw117a);
			$commandw118 = $connection->createCommand($sqlw118);
			$commandw118a = $connection->createCommand($sqlw118a);
			$commandw119 = $connection->createCommand($sqlw119);
			$commandw119a = $connection->createCommand($sqlw119a);
			$commandw120 = $connection->createCommand($sqlw120);
			$commandw120a = $connection->createCommand($sqlw120a);
			$commandw121 = $connection->createCommand($sqlw121);
			$commandw121a = $connection->createCommand($sqlw121a);
			$command1 = $connection->createCommand($sql1);
			$command2 = $connection->createCommand($sql2);
			$command3 = $connection->createCommand($sql3);
			$command4 = $connection->createCommand($sql4);
			$command5 = $connection->createCommand($sql5);
			$command6 = $connection->createCommand($sql6);
			$command7 = $connection->createCommand($sql7);
			$command8 = $connection->createCommand($sql8);
			$command9 = $connection->createCommand($sql9);
			$command10 = $connection->createCommand($sql10);
			$command11 = $connection->createCommand($sql11);
			$command12 = $connection->createCommand($sql12);
			$command13 = $connection->createCommand($sql13);
			$command14 = $connection->createCommand($sql14);
			$command15 = $connection->createCommand($sql15);
			$command16 = $connection->createCommand($sql16);
			$command17 = $connection->createCommand($sql17);
			$command18 = $connection->createCommand($sql18);
			$command19 = $connection->createCommand($sql19);
			$command20 = $connection->createCommand($sql20);
			$command21 = $connection->createCommand($sql21);
			$command22 = $connection->createCommand($sql22);
			$command23 = $connection->createCommand($sql23);
			$command24 = $connection->createCommand($sql24);
			$command25 = $connection->createCommand($sql25);
			$command26 = $connection->createCommand($sql26);
			$command27 = $connection->createCommand($sql27);
			$command28 = $connection->createCommand($sql28);
			$command29 = $connection->createCommand($sql29);
			$command30 = $connection->createCommand($sql30);
			$command31 = $connection->createCommand($sql31);
			$command32 = $connection->createCommand($sql32);
			$command33 = $connection->createCommand($sql33);
			$command34 = $connection->createCommand($sql34);
			$command35 = $connection->createCommand($sql35);
			$command36 = $connection->createCommand($sql36);
			$command37 = $connection->createCommand($sql37);
			$command38 = $connection->createCommand($sql38);
			$command39 = $connection->createCommand($sql39);
			$command40 = $connection->createCommand($sql40);
			$command41 = $connection->createCommand($sql41);
			$command42 = $connection->createCommand($sql42);
			$command43 = $connection->createCommand($sql43);
			$command44 = $connection->createCommand($sql44);
			$command45 = $connection->createCommand($sql45);
			$command46 = $connection->createCommand($sql46);
			$command47 = $connection->createCommand($sql47);
			$command48 = $connection->createCommand($sql48);
			$command49 = $connection->createCommand($sql49);
			$command50 = $connection->createCommand($sql50);
			$command51 = $connection->createCommand($sql51);
			$command52 = $connection->createCommand($sql52);
			$command53 = $connection->createCommand($sql53);
			$command54 = $connection->createCommand($sql54);
			$command55 = $connection->createCommand($sql55);
			$command56 = $connection->createCommand($sql56);
			$command57 = $connection->createCommand($sql57);
			$command58 = $connection->createCommand($sql58);
			$command59 = $connection->createCommand($sql59);
			$command60 = $connection->createCommand($sql60);
			$command61 = $connection->createCommand($sql61);
			$command62 = $connection->createCommand($sql62);
			$command63 = $connection->createCommand($sql63);
			$command64 = $connection->createCommand($sql64);
			$command65 = $connection->createCommand($sql65);
			$command66 = $connection->createCommand($sql66);
			$command67 = $connection->createCommand($sql67);
			$command68 = $connection->createCommand($sql68);
			$command69 = $connection->createCommand($sql69);
			$command70 = $connection->createCommand($sql70);
			$command71 = $connection->createCommand($sql71);
			$command72 = $connection->createCommand($sql72);
			$command73 = $connection->createCommand($sql73);
			$command74 = $connection->createCommand($sql74);
			$command75 = $connection->createCommand($sql75);
			$command76 = $connection->createCommand($sql76);
			$command77 = $connection->createCommand($sql77);
			$command78 = $connection->createCommand($sql78);
			$command79 = $connection->createCommand($sql79);
			$command80 = $connection->createCommand($sql80);
			$command81 = $connection->createCommand($sql81);
			$command82 = $connection->createCommand($sql82);
			$command83 = $connection->createCommand($sql83);
			$command84 = $connection->createCommand($sql84);
			$command85 = $connection->createCommand($sql85);
			$command86 = $connection->createCommand($sql86);
			$command87 = $connection->createCommand($sql87);
			$command88 = $connection->createCommand($sql88);
			$command89 = $connection->createCommand($sql89);
			$command90 = $connection->createCommand($sql90);
			$command91 = $connection->createCommand($sql91);
			$command92 = $connection->createCommand($sql92);
			$command93 = $connection->createCommand($sql93);
			$command94 = $connection->createCommand($sql94);
			$command95 = $connection->createCommand($sql95);
			$command96 = $connection->createCommand($sql96);
			$command97 = $connection->createCommand($sql97);
			$command98 = $connection->createCommand($sql98);
			$command99 = $connection->createCommand($sql99);
			$command100 = $connection->createCommand($sql100);
			$command101 = $connection->createCommand($sql101);
			$command102 = $connection->createCommand($sql102);
			$command103 = $connection->createCommand($sql103);
			$command104 = $connection->createCommand($sql104);
			$command105 = $connection->createCommand($sql105);
			$command106 = $connection->createCommand($sql106);
			$command107 = $connection->createCommand($sql107);
			$command108 = $connection->createCommand($sql108);
			$command109 = $connection->createCommand($sql109);
			$command110 = $connection->createCommand($sql110);
			$command111 = $connection->createCommand($sql111);
			$command112 = $connection->createCommand($sql112);
			$command113 = $connection->createCommand($sql113);
			$command114 = $connection->createCommand($sql114);
			$command115 = $connection->createCommand($sql115);
			$command116 = $connection->createCommand($sql116);
			$command117 = $connection->createCommand($sql117);
			$command118 = $connection->createCommand($sql118);
			$command119 = $connection->createCommand($sql119);
			$command120 = $connection->createCommand($sql120);
			$command121 = $connection->createCommand($sql121);
			$command122 = $connection->createCommand($sql122);
			$command123 = $connection->createCommand($sql123);
			$command124 = $connection->createCommand($sql124);
			$command125 = $connection->createCommand($sql125);
			$command126 = $connection->createCommand($sql126);
			$command127 = $connection->createCommand($sql127);
			$command128 = $connection->createCommand($sql128);
			$command129 = $connection->createCommand($sql129);
			$command130 = $connection->createCommand($sql130);
			$command131 = $connection->createCommand($sql131);
			$command132 = $connection->createCommand($sql132);
			$command133 = $connection->createCommand($sql133);
			$command134 = $connection->createCommand($sql134);
			$command135 = $connection->createCommand($sql135);
			$command136 = $connection->createCommand($sql136);
			$command137 = $connection->createCommand($sql137);
			$command138 = $connection->createCommand($sql138);
			$rw1 = $commandw1->queryAll();
			$rw1a = $commandw1a->queryAll();
			$rw2 = $commandw2->queryAll();
			$rw2a = $commandw2a->queryAll();
			$rw3 = $commandw3->queryAll();
			$rw3a = $commandw3a->queryAll();
			$rw4 = $commandw4->queryAll();
			$rw4a = $commandw4a->queryAll();
			$rw5 = $commandw5->queryAll();
			$rw5a = $commandw5a->queryAll();
			$rw6 = $commandw6->queryAll();
			$rw6a = $commandw6a->queryAll();
			$rw7 = $commandw7->queryAll();
			$rw7a = $commandw7a->queryAll();
			$rw8 = $commandw8->queryAll();
			$rw8a = $commandw8a->queryAll();
			$rw9 = $commandw9->queryAll();
			$rw9a = $commandw9a->queryAll();
			$rw10 = $commandw10->queryAll();
			$rw10a = $commandw10a->queryAll();
			$rw11 = $commandw11->queryAll();
			$rw11a = $commandw11a->queryAll();
			$rw12 = $commandw12->queryAll();
			$rw12a = $commandw12a->queryAll();
			$rw13 = $commandw13->queryAll();
			$rw13a = $commandw13a->queryAll();
			$rw14 = $commandw14->queryAll();
			$rw14a = $commandw14a->queryAll();
			$rw15 = $commandw15->queryAll();
			$rw15a = $commandw15a->queryAll();
			$rw16 = $commandw16->queryAll();
			$rw16a = $commandw16a->queryAll();
			$rw17 = $commandw17->queryAll();
			$rw17a = $commandw17a->queryAll();
			$rw18 = $commandw18->queryAll();
			$rw18a = $commandw18a->queryAll();
			$rw19 = $commandw19->queryAll();
			$rw19a = $commandw19a->queryAll();
			$rw20 = $commandw20->queryAll();
			$rw20a = $commandw20a->queryAll();
			$rw21 = $commandw21->queryAll();
			$rw21a = $commandw21a->queryAll();
			$rw22 = $commandw22->queryAll();
			$rw22a = $commandw22a->queryAll();
			$rw23 = $commandw23->queryAll();
			$rw23a = $commandw23a->queryAll();
			$rw24 = $commandw24->queryAll();
			$rw24a = $commandw24a->queryAll();
			$rw25 = $commandw25->queryAll();
			$rw25a = $commandw25a->queryAll();
			$rw26 = $commandw26->queryAll();
			$rw26a = $commandw26a->queryAll();
			$rw27 = $commandw27->queryAll();
			$rw27a = $commandw27a->queryAll();
			$rw28 = $commandw28->queryAll();
			$rw28a = $commandw28a->queryAll();
			$rw29 = $commandw29->queryAll();
			$rw29a = $commandw29a->queryAll();
			$rw30 = $commandw30->queryAll();
			$rw30a = $commandw30a->queryAll();
			$rw31 = $commandw31->queryAll();
			$rw31a = $commandw31a->queryAll();
			$rw32 = $commandw32->queryAll();
			$rw32a = $commandw32a->queryAll();
			$rw33 = $commandw33->queryAll();
			$rw33a = $commandw33a->queryAll();
			$rw34 = $commandw34->queryAll();
			$rw34a = $commandw34a->queryAll();
			$rw35 = $commandw35->queryAll();
			$rw35a = $commandw35a->queryAll();
			$rw36 = $commandw36->queryAll();
			$rw36a = $commandw36a->queryAll();
			$rw37 = $commandw37->queryAll();
			$rw37a = $commandw37a->queryAll();
			$rw38 = $commandw38->queryAll();
			$rw38a = $commandw38a->queryAll();
			$rw39 = $commandw39->queryAll();
			$rw39a = $commandw39a->queryAll();
			$rw40 = $commandw40->queryAll();
			$rw40a = $commandw40a->queryAll();
			$rw41 = $commandw41->queryAll();
			$rw41a = $commandw41a->queryAll();
			$rw42 = $commandw42->queryAll();
			$rw42a = $commandw42a->queryAll();
			$rw43 = $commandw43->queryAll();
			$rw43a = $commandw43a->queryAll();
			$rw44 = $commandw44->queryAll();
			$rw44a = $commandw44a->queryAll();
			$rw45 = $commandw45->queryAll();
			$rw45a = $commandw45a->queryAll();
			$rw46 = $commandw46->queryAll();
			$rw46a = $commandw46a->queryAll();
			$rw47 = $commandw47->queryAll();
			$rw47a = $commandw47a->queryAll();
			$rw48 = $commandw48->queryAll();
			$rw48a = $commandw48a->queryAll();
			$rw49 = $commandw49->queryAll();
			$rw49a = $commandw49a->queryAll();
			$rw50 = $commandw50->queryAll();
			$rw50a = $commandw50a->queryAll();
			$rw51 = $commandw51->queryAll();
			$rw51a = $commandw51a->queryAll();
			$rw52 = $commandw52->queryAll();
			$rw52a = $commandw52a->queryAll();
			$rw53 = $commandw53->queryAll();
			$rw53a = $commandw53a->queryAll();
			$rw54 = $commandw54->queryAll();
			$rw54a = $commandw54a->queryAll();
			$rw55 = $commandw55->queryAll();
			$rw55a = $commandw55a->queryAll();
			$rw56 = $commandw56->queryAll();
			$rw56a = $commandw56a->queryAll();
			$rw57 = $commandw57->queryAll();
			$rw57a = $commandw57a->queryAll();
			$rw58 = $commandw58->queryAll();
			$rw58a = $commandw58a->queryAll();
			$rw59 = $commandw59->queryAll();
			$rw59a = $commandw59a->queryAll();
			$rw60 = $commandw60->queryAll();
			$rw60a = $commandw60a->queryAll();
			$rw61 = $commandw61->queryAll();
			$rw61a = $commandw61a->queryAll();
			$rw62 = $commandw62->queryAll();
			$rw62a = $commandw62a->queryAll();
			$rw63 = $commandw63->queryAll();
			$rw63a = $commandw63a->queryAll();
			$rw64 = $commandw64->queryAll();
			$rw64a = $commandw64a->queryAll();
			$rw65 = $commandw65->queryAll();
			$rw65a = $commandw65a->queryAll();
			$rw66 = $commandw66->queryAll();
			$rw66a = $commandw66a->queryAll();
			$rw67 = $commandw67->queryAll();
			$rw67a = $commandw67a->queryAll();
			$rw68 = $commandw68->queryAll();
			$rw68a = $commandw68a->queryAll();
			$rw69 = $commandw69->queryAll();
			$rw69a = $commandw69a->queryAll();
			$rw70 = $commandw70->queryAll();
			$rw70a = $commandw70a->queryAll();
			$rw71 = $commandw71->queryAll();
			$rw71a = $commandw71a->queryAll();
			$rw72 = $commandw72->queryAll();
			$rw72a = $commandw72a->queryAll();
			$rw73 = $commandw73->queryAll();
			$rw73a = $commandw73a->queryAll();
			$rw74 = $commandw74->queryAll();
			$rw74a = $commandw74a->queryAll();
			$rw75 = $commandw75->queryAll();
			$rw75a = $commandw75a->queryAll();
			$rw76 = $commandw76->queryAll();
			$rw76a = $commandw76a->queryAll();
			$rw77 = $commandw77->queryAll();
			$rw77a = $commandw77a->queryAll();
			$rw78 = $commandw78->queryAll();
			$rw78a = $commandw78a->queryAll();
			$rw79 = $commandw79->queryAll();
			$rw79a = $commandw79a->queryAll();
			$rw80 = $commandw80->queryAll();
			$rw80a = $commandw80a->queryAll();
			$rw81 = $commandw81->queryAll();
			$rw81a = $commandw81a->queryAll();
			$rw82 = $commandw82->queryAll();
			$rw82a = $commandw82a->queryAll();
			$rw83 = $commandw83->queryAll();
			$rw83a = $commandw83a->queryAll();
			$rw84 = $commandw84->queryAll();
			$rw84a = $commandw84a->queryAll();
			$rw85 = $commandw85->queryAll();
			$rw85a = $commandw85a->queryAll();
			$rw86 = $commandw86->queryAll();
			$rw86a = $commandw86a->queryAll();
			$rw87 = $commandw87->queryAll();
			$rw87a = $commandw87a->queryAll();
			$rw88 = $commandw88->queryAll();
			$rw88a = $commandw88a->queryAll();
			$rw89 = $commandw89->queryAll();
			$rw89a = $commandw89a->queryAll();
			$rw90 = $commandw90->queryAll();
			$rw90a = $commandw90a->queryAll();
			$rw91 = $commandw91->queryAll();
			$rw91a = $commandw91a->queryAll();
			$rw92 = $commandw92->queryAll();
			$rw92a = $commandw92a->queryAll();
			$rw93 = $commandw93->queryAll();
			$rw93a = $commandw93a->queryAll();
			$rw94 = $commandw94->queryAll();
			$rw94a = $commandw94a->queryAll();
			$rw95 = $commandw95->queryAll();
			$rw95a = $commandw95a->queryAll();
			$rw96 = $commandw96->queryAll();
			$rw96a = $commandw96a->queryAll();
			$rw97 = $commandw97->queryAll();
			$rw97a = $commandw97a->queryAll();
			$rw98 = $commandw98->queryAll();
			$rw98a = $commandw98a->queryAll();
			$rw99 = $commandw99->queryAll();
			$rw99a = $commandw99a->queryAll();
			$rw100 = $commandw100->queryAll();
			$rw100a = $commandw100a->queryAll();
			$rw101 = $commandw101->queryAll();
			$rw101a = $commandw101a->queryAll();
			$rw102 = $commandw102->queryAll();
			$rw102a = $commandw102a->queryAll();
			$rw103 = $commandw103->queryAll();
			$rw103a = $commandw103a->queryAll();
			$rw104 = $commandw104->queryAll();
			$rw104a = $commandw104a->queryAll();
			$rw105 = $commandw105->queryAll();
			$rw105a = $commandw105a->queryAll();
			$rw106 = $commandw106->queryAll();
			$rw106a = $commandw106a->queryAll();
			$rw107 = $commandw107->queryAll();
			$rw107a = $commandw107a->queryAll();
			$rw108 = $commandw108->queryAll();
			$rw108a = $commandw108a->queryAll();
			$rw109 = $commandw109->queryAll();
			$rw109a = $commandw109a->queryAll();
			$rw110 = $commandw110->queryAll();
			$rw110a = $commandw110a->queryAll();
			$rw111 = $commandw111->queryAll();
			$rw111a = $commandw111a->queryAll();
			$rw112 = $commandw112->queryAll();
			$rw112a = $commandw112a->queryAll();
			$rw113 = $commandw113->queryAll();
			$rw113a = $commandw113a->queryAll();
			$rw114 = $commandw114->queryAll();
			$rw114a = $commandw114a->queryAll();
			$rw115 = $commandw115->queryAll();
			$rw115a = $commandw115a->queryAll();
			$rw116 = $commandw116->queryAll();
			$rw116a = $commandw116a->queryAll();
			$rw117 = $commandw117->queryAll();
			$rw117a = $commandw117a->queryAll();
			$rw118 = $commandw118->queryAll();
			$rw118a = $commandw118a->queryAll();
			$rw119 = $commandw119->queryAll();
			$rw119a = $commandw119a->queryAll();
			$rw120 = $commandw120->queryAll();
			$rw120a = $commandw120a->queryAll();
			$rw121 = $commandw121->queryAll();
			$rw121a = $commandw121a->queryAll();
			$r1 = $command1->queryAll();
			$r2 = $command2->queryAll();
			$r3 = $command3->queryAll();
			$r4 = $command4->queryAll();
			$r5 = $command5->queryAll();
			$r6 = $command6->queryAll();
			$r7 = $command7->queryAll();
			$r8 = $command8->queryAll();
			$r9 = $command9->queryAll();
			$r10 = $command10->queryAll();
			$r11 = $command11->queryAll();
			$r12 = $command12->queryAll();
			$r13 = $command13->queryAll();
			$r14 = $command14->queryAll();
			$r15 = $command15->queryAll();
			$r16 = $command16->queryAll();
			$r17 = $command17->queryAll();
			$r18 = $command18->queryAll();
			$r19 = $command19->queryAll();
			$r20 = $command20->queryAll();
			$r21 = $command21->queryAll();
			$r22 = $command22->queryAll();
			$r23 = $command23->queryAll();
			$r24 = $command24->queryAll();
			$r25 = $command25->queryAll();
			$r26 = $command26->queryAll();
			$r27 = $command27->queryAll();
			$r28 = $command28->queryAll();
			$r29 = $command29->queryAll();
			$r30 = $command30->queryAll();
			$r31 = $command31->queryAll();
			$r32 = $command32->queryAll();
			$r33 = $command33->queryAll();
			$r34 = $command34->queryAll();
			$r35 = $command35->queryAll();
			$r36 = $command36->queryAll();
			$r37 = $command37->queryAll();
			$r38 = $command38->queryAll();
			$r39 = $command39->queryAll();
			$r40 = $command40->queryAll();
			$r41 = $command41->queryAll();
			$r42 = $command42->queryAll();
			$r43 = $command43->queryAll();
			$r44 = $command44->queryAll();
			$r45 = $command45->queryAll();
			$r46 = $command46->queryAll();
			$r47 = $command47->queryAll();
			$r48 = $command48->queryAll();
			$r49 = $command49->queryAll();
			$r50 = $command50->queryAll();
			$r51 = $command51->queryAll();
			$r52 = $command52->queryAll();
			$r53 = $command53->queryAll();
			$r54 = $command54->queryAll();
			$r55 = $command55->queryAll();
			$r56 = $command56->queryAll();
			$r57 = $command57->queryAll();
			$r58 = $command58->queryAll();
			$r59 = $command59->queryAll();
			$r60 = $command60->queryAll();
			$r61 = $command61->queryAll();
			$r62 = $command62->queryAll();
			$r63 = $command63->queryAll();
			$r64 = $command64->queryAll();
			$r65 = $command65->queryAll();
			$r66 = $command66->queryAll();
			$r67 = $command67->queryAll();
			$r68 = $command68->queryAll();
			$r69 = $command69->queryAll();
			$r70 = $command70->queryAll();
			$r71 = $command71->queryAll();
			$r72 = $command72->queryAll();
			$r73 = $command73->queryAll();
			$r74 = $command74->queryAll();
			$r75 = $command75->queryAll();
			$r76 = $command76->queryAll();
			$r77 = $command77->queryAll();
			$r78 = $command78->queryAll();
			$r79 = $command79->queryAll();
			$r80 = $command80->queryAll();
			$r81 = $command81->queryAll();
			$r82 = $command82->queryAll();
			$r83 = $command83->queryAll();
			$r84 = $command84->queryAll();
			$r85 = $command85->queryAll();
			$r86 = $command86->queryAll();
			$r87 = $command87->queryAll();
			$r88 = $command88->queryAll();
			$r89 = $command89->queryAll();
			$r90 = $command90->queryAll();
			$r91 = $command91->queryAll();
			$r92 = $command92->queryAll();
			$r93 = $command93->queryAll();
			$r94 = $command94->queryAll();
			$r95 = $command95->queryAll();
			$r96 = $command96->queryAll();
			$r97 = $command97->queryAll();
			$r98 = $command98->queryAll();
			$r99 = $command99->queryAll();
			$r100 = $command100->queryAll();
			$r101 = $command101->queryAll();
			$r102 = $command102->queryAll();
			$r103 = $command103->queryAll();
			$r104 = $command104->queryAll();
			$r105 = $command105->queryAll();
			$r106 = $command106->queryAll();
			$r107 = $command107->queryAll();
			$r108 = $command108->queryAll();
			$r109 = $command109->queryAll();
			$r110 = $command110->queryAll();
			$r111 = $command111->queryAll();
			$r112 = $command112->queryAll();
			$r113 = $command113->queryAll();
			$r114 = $command114->queryAll();
			$r115 = $command115->queryAll();
			$r116 = $command116->queryAll();
			$r117 = $command117->queryAll();
			$r118 = $command118->queryAll();
			$r119 = $command119->queryAll();
			$r120 = $command120->queryAll();
			$r121 = $command121->queryAll();
			$r122 = $command122->queryAll();
			$r123 = $command123->queryAll();
			$r124 = $command124->queryAll();
			$r125 = $command125->queryAll();
			$r126 = $command126->queryAll();
			$r127 = $command127->queryAll();
			$r128 = $command128->queryAll();
			$r129 = $command129->queryAll();
			$r130 = $command130->queryAll();
			$r131 = $command131->queryAll();
			$r132 = $command132->queryAll();
			$r133 = $command133->queryAll();
			$r134 = $command134->queryAll();
			$r135 = $command135->queryAll();
			$r136 = $command136->queryAll();
			$r137 = $command137->queryAll();
			$r138 = $command138->queryAll();
			$dataExcel=$this->renderPartial('report',array(
				"dataLuasWilayah"=>$rw1,
				"tblLuasWilayah"=>$rw1a,
				"dataTopografi"=>$rw2,
				"tblTopografi"=>$rw2a,
				"dataLuasLahan"=>$rw3,
				"tblLuasLahan"=>$rw3a,
				"dataIklimRata"=>$rw4,
				"tblIklimRata"=>$rw4a,
				"dataPulau"=>$rw5,
				"tblPulau"=>$rw5a,
				"dataGunung"=>$rw6,
				"tblGunung"=>$rw6a,
				"dataBatasDarat"=>$rw7,
				"tblBatasDarat"=>$rw7a,
				"dataFisiografi"=>$rw8,
				"tblFisiografi"=>$rw8a,
				"dataAdminPmr"=>$rw9,
				"tblAdminPmr"=>$rw9a,
				"dataOtonomi"=>$rw10,
				"tblOtonomi"=>$rw10a,
				"dataPerdaIjin"=>$rw11,
				"tblPerdaIjin"=>$rw11a,
				"dataSarpras"=>$rw12,
				"tblSarpras"=>$rw12a,
				"dataKonSarpras"=>$rw13,
				"tblKonSarpras"=>$rw13a,
				"dataCapil"=>$rw14,
				"tblCapil"=>$rw14a,
				"dataOrangLahan"=>$rw15,
				"tblOrangLahan"=>$rw15a,
				"dataFamJob"=>$rw16,
				"tblFamJob"=>$rw16a,
				"dataOrgUsia"=>$rw17,
				"tblOrgUsia"=>$rw17a,
				"dataDeprat"=>$rw18,
				"tblDeprat"=>$rw18a,
				"dataDatduk"=>$rw19,
				"tblDatduk"=>$rw19a,
				"dataInoutsave"=>$rw20,
				"tblInoutsave"=>$rw20a,
				"dataTenagakerja"=>$rw21,
				"tblTenagakerja"=>$rw21a,
				"dataPblmu"=>$rw22,
				"tblPblmu"=>$rw22a,
				"dataTumduk"=>$rw23,
				"tblTumduk"=>$rw23a,
				"dataAngkaHidup"=>$rw24,
				"tblAngkaHidup"=>$rw24a,
				"dataPendudukDidik"=>$rw25,
				"tblPendudukDidik"=>$rw25a,
				"dataKeluarga"=>$rw26,
				"tblKeluarga"=>$rw26a,
				"dataRumtang"=>$rw27,
				"tblRumtang"=>$rw27a,
				"dataUrumtang"=>$rw28,
				"tblUrumtang"=>$rw28a,
				"dataRumTing"=>$rw29,
				"tblRumTing"=>$rw29a,
				"dataTanilayan"=>$rw30,
				"tblTanilayan"=>$rw30a,
				"dataPAnak"=>$rw31,
				"tblPAnak"=>$rw31a,
				"dataTkunder"=>$rw32,
				"tblTkunder"=>$rw32a,
				"dataSarkes"=>$rw33,
				"tblSarkes"=>$rw33a,
				"dataSIIF"=>$rw34,
				"tblSIIF"=>$rw34a,
				"dataKesmas"=>$rw35,
				"tblKesmas"=>$rw35a,
				"dataDagkes"=>$rw36,
				"tblDagkes"=>$rw36a,
				"dataTenkes"=>$rw37,
				"tblTenkes"=>$rw37a,
				"dataKompbidan"=>$rw38,
				"tblKompbidan"=>$rw38a,
				"dataUci"=>$rw39,
				"tblUci"=>$rw39a,
				"dataPPPP"=>$rw40,
				"tblPPPP"=>$rw40a,
				"dataPKRPMM"=>$rw41,
				"tblPKRPMM"=>$rw41a,
				"dataPKDPMM"=>$rw42,
				"tblPKDPMM"=>$rw42a,
				"dataKunbay"=>$rw43,
				"tblKunbay"=>$rw43a,
				"dataKlb"=>$rw44,
				"tblKlb"=>$rw44a,
				"dataSiagaaktif"=>$rw45,
				"tblSiagaaktif"=>$rw45a,
				"dataDidikumum"=>$rw46,
				"tblDidikumum"=>$rw46a,
				"dataSenbud"=>$rw47,
				"tblSenbud"=>$rw47a,
				"dataCabudtari"=>$rw48,
				"tblCabudtari"=>$rw48a,
				"dataPora"=>$rw49,
				"tblPora"=>$rw49a,
				"dataExpo"=>$rw50,
				"tblExpo"=>$rw50a,
				"dataPerpus"=>$rw51,
				"tblPerpus"=>$rw51a,
				"dataKPBPS"=>$rw52,
				"tblKPBPS"=>$rw52a,
				"dataLulusanke"=>$rw53,
				"tblLulusanke"=>$rw53a,
				"dataKualifikasiguru"=>$rw54,
				"tblKualifikasiguru"=>$rw54a,
				"dataPenuhguru"=>$rw55,
				"tblPenuhguru"=>$rw55a,
				"dataMiliksekolah"=>$rw56,
				"tblMiliksekolah"=>$rw56a,
				"dataSMKPT"=>$rw57,
				"tblSMKPT"=>$rw57a,
				"dataLuluskerja"=>$rw58,
				"tblLuluskerja"=>$rw58a,
				"dataCabudda"=>$rw59,
				"tblCabudda"=>$rw59a,
				"dataIPM"=>$rw60,
				"tblIPM"=>$rw60a,
				"dataJPM"=>$rw61,
				"tblJPM"=>$rw61a,
				"dataP1"=>$rw62,
				"tblP1"=>$rw62a,
				"dataP2"=>$rw63,
				"tblP2"=>$rw63a,
				"dataJamkesmasda"=>$rw64,
				"tblJamkesmasda"=>$rw64a,
				"dataKemiskinan"=>$rw65,
				"tblKemiskinan"=>$rw65a,
				"dataKMTK"=>$rw66,
				"tblKMTK"=>$rw66a,
				"dataJPKLSM"=>$rw67,
				"tblJPKLSM"=>$rw67a,
				"dataPSKS"=>$rw68,
				"tblPSKS"=>$rw68a,
				"dataPMKS"=>$rw69,
				"tblPMKS"=>$rw69a,
				"dataMasos"=>$rw70,
				"tblMasos"=>$rw70a,
				"dataPKK"=>$rw71,
				"tblPKK"=>$rw71a,
				"dataPKTK"=>$rw72,
				"tblPKTK"=>$rw72a,
				"dataIndeksGini"=>$rw73,
				"tblIndeksGini"=>$rw73a,
				"dataPPVBD"=>$rw74,
				"tblPPVBD"=>$rw74a,
				"dataWilliamson"=>$rw75,
				"tblWilliamson"=>$rw75a,
				"dataAgamaPeluk"=>$rw76,
				"tblAgamaPeluk"=>$rw76a,
				"dataSarib"=>$rw77,
				"tblSarib"=>$rw77a,
				"dataHaji"=>$rw78,
				"tblHaji"=>$rw78a,
				"dataKUA"=>$rw79,
				"tblKUA"=>$rw79a,
				"dataPenyuluhagama"=>$rw80,
				"tblPenyuluhagama"=>$rw80a,
				"dataLembagaAgama"=>$rw81,
				"tblLembagaAgama"=>$rw81a,
				"dataDPRD"=>$rw82,
				"tblDPRD"=>$rw82a,
				"dataKomposisiDPRD"=>$rw83,
				"tblKomposisiDPRD"=>$rw83a,
				"dataJumlahfraksi"=>$rw84,
				"tblJumlahfraksi"=>$rw84a,
				"dataParpol"=>$rw85,
				"tblParpol"=>$rw85a,
				"dataKpm"=>$rw86,
				"tblKpm"=>$rw86a,
				"dataTpp"=>$rw87,
				"tblTpp"=>$rw87a,
				"dataOrmas"=>$rw88,
				"tblOrmas"=>$rw88a,
				"dataLPM"=>$rw89,
				"tblLPM"=>$rw89a,
				"dataPPM"=>$rw90,
				"tblPPM"=>$rw90a,
				"dataJSSM"=>$rw91,
				"tblJSSM"=>$rw91a,
				"dataJPPMD"=>$rw92,
				"tblJPPMD"=>$rw92a,
				"dataLSM"=>$rw93,
				"tblLSM"=>$rw93a,
				"dataJKPPD"=>$rw94,
				"tblJKPPD"=>$rw94a,
				"dataPH"=>$rw95,
				"tblPH"=>$rw95a,
				"dataJKTD"=>$rw96,
				"tblJKTD"=>$rw96a,
				"dataJKYT"=>$rw97,
				"tblJKYT"=>$rw97a,
				"dataKelembagaan"=>$rw98,
				"tblKelembagaan"=>$rw98a,
				"dataTindakkriminal"=>$rw99,
				"tblTindakkriminal"=>$rw99a,
				"dataKriminaltangan"=>$rw100,
				"tblKriminaltangan"=>$rw100a,
				"dataKKM"=>$rw101,
				"tblKKM"=>$rw101a,
				"dataPengungsi"=>$rw102,
				"tblPengungsi"=>$rw102a,
				"dataPengungsian"=>$rw103,
				"tblPengungsian"=>$rw103a,
				"dataPengungsiBalik"=>$rw104,
				"tblPengungsiBalik"=>$rw104a,
				"dataPengungsiRelokasi"=>$rw105,
				"tblPengungsiRelokasi"=>$rw105a,
				"dataKorbanBencana"=>$rw106,
				"tblKorbanBencana"=>$rw106a,
				"dataLokasiBencana"=>$rw107,
				"tblLokasiBencana"=>$rw107a,
				"dataKecamatanLokasiBencana"=>$rw108,
				"tblKecamatanLokasiBencana"=>$rw108a,
				"dataRugiBencana"=>$rw109,
				"tblRugiBencana"=>$rw109a,
				"dataKebutuhanBantuan"=>$rw110,
				"tblKebutuhanBantuan"=>$rw110a,
				"dataKasusWabah"=>$rw111,
				"tblKasusWabah"=>$rw111a,
				"dataEndemiHewan"=>$rw112,
				"tblEndemiHewan"=>$rw112a,
				"dataKasusCuriIkan"=>$rw113,
				"tblKasusCuriIkan"=>$rw113a,
				"dataKapalCuriIkan"=>$rw114,
				"tblKapalCuriIkan"=>$rw114a,
				"dataLokasiCuriIkan"=>$rw115,
				"tblLokasiCuriIkan"=>$rw115a,
				"dataHutanBakar"=>$rw116,
				"tblHutanBakar"=>$rw116a,
				"dataKorbanHutanBakar"=>$rw117,
				"tblKorbanHutanBakar"=>$rw117a,
				"dataLokasiHutanBakar"=>$rw118,
				"tblLokasiHutanBakar"=>$rw118a,
				"dataVolumeKayu"=>$rw119,
				"tblVolumeKayu"=>$rw119a,
				"dataKasusCuriKayu"=>$rw120,
				"tblKasusCuriKayu"=>$rw120a,
				"dataLokasiCuriKayu"=>$rw121,
				"tblLokasiCuriKayu"=>$rw121a,
				"dataEkoIndustri"=>$r1,
				"tblEkoIndustri"=>$r2,
				"dataEsper"=>$r3,
				"tblEsper"=>$r4,
				"dataEsunas"=>$r5,
				"tblEsunas"=>$r6,
				"dataEkomigas"=>$r7,
				"tblEkomigas"=>$r8,
				"dataIon"=>$r9,
				"tblIon"=>$r10,
				"dataEkoijin"=>$r11,
				"tblEkoijin"=>$r12,
				"dataSuse"=>$r13,
				"tblSuse"=>$r14,
				"dataEkopma"=>$r15,
				"tblEkopma"=>$r16,
				"dataEkopmdn"=>$r17,
				"tblEkopmdn"=>$r18,
				"dataEkobpr"=>$r19,
				"tblEkobpr"=>$r20,
				"dataBangku"=>$r21,
				"tblBangku"=>$r22,
				"dataAru"=>$r23,
				"tblAru"=>$r24,
				"dataAji"=>$r25,
				"tblAji"=>$r26,
				"dataNavas"=>$r27,
				"tblNavas"=>$r28,
				"dataJau"=>$r29,
				"tblJau"=>$r30,
				"dataNoob"=>$r31,
				"tblNoob"=>$r32,
				"dataPerban"=>$r33,
				"tblPerban"=>$r34,
				"dataPerum"=>$r35,
				"tblPerum"=>$r36,
				"dataJarah"=>$r37,
				"tblJarah"=>$r38,
				"dataLurah"=>$r39,
				"tblLurah"=>$r40,
				"dataAmuk"=>$r41,
				"tblAmuk"=>$r42,
				"dataJambang"=>$r43,
				"tblJambang"=>$r44,
				"dataKumuh"=>$r45,
				"tblKumuh"=>$r46,
				"dataIlegal"=>$r47,
				"tblIlegal"=>$r48,
				"dataBantar"=>$r49,
				"tblBantar"=>$r50,
				"dataSutet"=>$r51,
				"tblSutet"=>$r52,
				"dataRubik"=>$r53,
				"tblRubik"=>$r54,
				"dataRusa"=>$r55,
				"tblRusa"=>$r56,
				"dataPejalan"=>$r57,
				"tblPejalan"=>$r58,
				"dataKonjalan"=>$r59,
				"tblKonjalan"=>$r60,
				"dataJakon"=>$r61,
				"tblJakon"=>$r62,
				"dataJalung"=>$r63,
				"tblJalung"=>$r64,
				"dataBrug"=>$r65,
				"tblBrug"=>$r66,
				"dataPungsi"=>$r67,
				"tblPungsi"=>$r68,
				"dataPakam"=>$r69,
				"tblPakam"=>$r70,
				"dataPair"=>$r71,
				"tblPair"=>$r72,
				"dataPemilik"=>$r73,
				"tblPemilik"=>$r74,
				"dataSempadan"=>$r75,
				"tblSempadan"=>$r76,
				"dataDrain"=>$r77,
				"tblDrain"=>$r78,
				"dataTurap"=>$r79,
				"tblTurap"=>$r80,
				"dataSuram"=>$r81,
				"tblSuram"=>$r82,
				"dataMuai"=>$r83,
				"tblMuai"=>$r84,
				"dataDaykam"=>$r85,
				"tblDaykam"=>$r86,
				"dataParwis"=>$r87,
				"tblParwis"=>$r88,
				"dataTelkom"=>$r89,
				"tblTelkom"=>$r90,
				"dataKabar"=>$r91,
				"tblKabar"=>$r92,
				"dataSiar"=>$r93,
				"tblSiar"=>$r94,
				"dataSipeda"=>$r95,
				"tblSipeda"=>$r96,
				"dataPerhub"=>$r97,
				"tblPerhub"=>$r98,
				"dataAngkum"=>$r99,
				"tblAngkum"=>$r100,
				"dataTrans"=>$r101,
				"tblTrans"=>$r102,
				"dataImot"=>$r103,
				"tblImot"=>$r104,
				"dataTani"=>$r105,
				"tblTani"=>$r106,
				"dataHorti"=>$r107,
				"tblHorti"=>$r108,
				"dataPerek"=>$r109,
				"tblPerek"=>$r110,
				"dataPeter"=>$r111,
				"tblPeter"=>$r112,
				"dataLikan"=>$r113,
				"tblLikan"=>$r114,
				"dataKetan"=>$r115,
				"tblKetan"=>$r116,
				"dataKesos"=>$r117,
				"tblKesos"=>$r118,
				"dataTambang"=>$r119,
				"tblTambang"=>$r120,
				"dataEnergi"=>$r121,
				"tblEnergi"=>$r122,
				"dataLiup"=>$r123,
				"tblLiup"=>$r124,
				"dataRuli"=>$r125,
				"tblRuli"=>$r126,
				"dataTarlink"=>$r127,
				"tblTarlink"=>$r128,
				"dataTarung"=>$r129,
				"tblTarung"=>$r130,
				"dataPerah"=>$r131,
				"tblPerah"=>$r132,
				"dataAlink"=>$r133,
				"tblAlink"=>$r134,
				"dataSampah"=>$r135,
				"tblSampah"=>$r136,
				"dataAlim"=>$r137,
				"tblAlim"=>$r138,
				"orang"=>$orang,
				"initahun"=>$taini,
				"isilah"=>$isilah));

			echo $dataExcel;
		}
	}
?>