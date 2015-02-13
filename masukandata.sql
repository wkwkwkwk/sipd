/*  SUMBER DAYA ALAM */
/* Pertambangan */
INSERT INTO `sipd`.`sda_pertambangan`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'I. ', 'Pertambangan *', 'pertambangan', 'true', '', '', '', '', '', '', 'Tidak Ada', 'BLH'),
(NULL, '&nbsp;&nbsp; 1. ', 'Minyak Bumi dan Gas Alam *', 'migasal', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Minyak Mentah *', 'mitah', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Total Produksi', 'tot_mitah', 'false', '', '', '', '', '', 'Barel', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Realisasi Lifting', 'lift_mitah', 'false', '', '', '', '', '', 'Barel', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. ', 'BUMN *', 'bumn_mitah', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Jumlah Kilang', 'kilang_mitah', 'false', '', '', '', '', '', 'Unit', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Jumlah Produksi', 'prod_mitah', 'false', '', '', '', '', '', 'Barel', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. ', 'BUMD *', 'bumd_mitah', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Jumlah Kilang', 'kil_mitah', 'false', '', '', '', '', '', 'Unit', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Jumlah Produksi', 'jml_mitah', 'false', '', '', '', '', '', 'Barel', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. ', 'PMA *', 'pma_mitah', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Jumlah Kilang', 'juki_mitah', 'false', '', '', '', '', '', 'Unit', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Jumlah Produksi', 'jupro_mitah', 'false', '', '', '', '', '', 'Barel', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Gas Alam *', 'gasal', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Total Produksi', 'tot_gasal', 'false', '', '', '', '', '', 'Barel', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Realisasi Lifting', 'lift_gasal', 'false', '', '', '', '', '', 'Barel', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. ', 'BUMN *', 'bumn_gasal', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Jumlah Kilang', 'kilang_gasal', 'false', '', '', '', '', '', 'Unit', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Jumlah Produksi', 'prod_gasal', 'false', '', '', '', '', '', 'Barel', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. ', 'BUMD *', 'bumd_gasal', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Jumlah Kilang', 'kil_gasal', 'false', '', '', '', '', '', 'Unit', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Jumlah Produksi', 'jml_gasal', 'false', '', '', '', '', '', 'Barel', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. ', 'PMA *', 'pma_gasal', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Jumlah Kilang', 'juki_gasal', 'false', '', '', '', '', '', 'Unit', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Jumlah Produksi', 'jupro_gasal', 'false', '', '', '', '', '', 'Barel', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Mineral', 'mintam', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Batu Bara *', 'babar', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_babar', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_babar', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Timah *', 'timah', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_timah', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_timah', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Besi/Baja *', 'beja', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_beja', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_beja', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Tembaga *', 'baga', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_baga', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_baga', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5). ', 'Biji Nikel *', 'bini', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_bini', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_bini', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6). ', 'Emas *', 'mas', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_mas', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_mas', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7). ', 'Perak *', 'perak', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_perak', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_perak', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8). ', 'Gamping *', 'gem', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_gem', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_gem', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9). ', 'Andesit *', 'andes', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_andes', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_andes', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10). ', 'Marmer *', 'mame', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_mame', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_mame', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11). ', 'Granit *', 'grant', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_grant', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_grant', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12). ', 'Basalt *', 'basalt', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_basalt', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_basalt', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 13). ', 'Aspal *', 'aspal', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_aspal', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_aspal', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14). ', 'Pasir *', 'pasir', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_pasir', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_pasir', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 15). ', 'Batu Split *', 'basil', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Produksi', 'prod_basil', 'false', '', '', '', '', '', 'Ton', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Perusahaan', 'peru_basil', 'false', '', '', '', '', '', 'Buah', 'Tidak Ada', '');


/* Alter Tabel */
mysql_connect('localhost','root','');
	mysql_select_db("sipd");

	
	$ora = date("m");
	if($ora=="01" || $ora=="02" || $ora=="03" || $ora=="04" || $ora=="05" || $ora=="06" || $ora=="07"){
		$tahe = date("Y");
		$sqlin = "SELECT `$tahe` FROM `sipd`.`eko_asjiwa`";
		$kuein = mysql_query($sqlin);
		if($kuein){
			$hiasan = "disabled";
		}else{
			$hiasan = "";
		}
	}else{
		$hiasan = "";
	}

	if(isset($_POST['bukain'])){
		$aa = date("m");
		if($aa=="01" || $aa=="02" || $aa=="03" || $aa=="04" || $aa=="05" || $aa=="06" || $aa=="07"){
			$thn = date("Y");
			$mm = $thn - 1;
			$sql = "SELECT `$thn` FROM `sipd`.`eko_asjiwa`";
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
			}
		}else{
			echo "Hapus Data";
		}
	}

/*$sql1 = "ALTER TABLE `sipd`.`eko_asjiwa` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
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
				$sql53 = "ALTER TABLE `sipd`.`sda_air_limbah` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";*/
				$sql54 = "ALTER TABLE `sipd`.`sda_energi` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
				/*$sql55 = "ALTER TABLE `sipd`.`sda_hortikultura` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";
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
				$sql69 = "ALTER TABLE `sipd`.`sda_tataruang` ADD COLUMN `$thn` VARCHAR(25) NOT NULL AFTER `$mm`";*/

				/*$kue1 = mysql_query($sql1);
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
				$kue53 = mysql_query($sql53);*/
				$kue54 = mysql_query($sql54);
				/*$kue55 = mysql_query($sql55);
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
				$kue69 = mysql_query($sql69);*/