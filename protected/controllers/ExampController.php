<?php 
	/**
	* 
	*/
	class ExampController extends YiinigoController
	{
		public $layout="adminpage1";
		
		public function actionIndex(){
			$orang = Yii::app()->user->username;
			$taini = date("Y");
			$isilah = array();

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
				"initahun"=>$taini,
				"isilah"=>$isilah));
		}

		public function actionToexcel($fileName){
			$this -> createExcel($fileName);
			$orang = Yii::app()->user->username;
			$taini = date("Y");
			$isilah = array();

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

			$dataExcel=$this->renderPartial("report",array(
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
				"initahun"=>$taini,
				"isilah"=>$isilah));

			echo $dataExcel;
		}
	}
?>