/*  DATA EKONOMI */
/* Lembaga Keuangan Perbankan */
INSERT INTO `sipd`.`eko_perbankan`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'XI. ', 'Lembaga Keuangan Perbankan *', 'uang_bank', 'true', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'Lembaga Non Perbankan', 'non_bank', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Jumlah Perbankan', 'jml_bank', 'false', '', '', '', '', '', 'Unit', 'Ada', '');

/* Jumlah UKM non  BPR */
INSERT INTO `sipd`.`eko_ukmnon`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'X. ', 'Jumlah UKM non BPR/LKM UKM *', 'ukm_nonbpr', 'true', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'Jumlah Seluruh UKM', 'jml_ukm', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Jumlah BPR/LKM', 'jml_bpr', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 3. ', 'Jumlah UKM non BPR/LKM', 'ukm_bpr', 'false', '', '', '', '', '', 'Unit', 'Ada', '');

/* Jasa Keuangan */
INSERT INTO `sipd`.`eko_jasauang`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'IX. ', 'Jasa Keuangan *', 'jasa_uang', 'true', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'Lembaga Keuangan Non Bank **', 'lmbg_nbank', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Modal Ventura', 'modal_ventura', 'false', '1', '1', '1', '2', '2', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Lembaga Keuangan Mikro', 'uang_mikro', 'false', '256', '65', '65', '156', '156', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Perusahaan Asuransi', 'usaha_asuransi', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Cabang Perusahaan Asuransi', 'cabang_asuransi', 'false', '', '', '', '2', '2', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Lembaga Keuangan Bank **', 'lmbg_bank', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Milik Pemerintah', 'bank_pemerintah', 'false', '3', '3', '3', '3', '3', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Swasta Nasional', 'bank_swasta', 'false', '7', '9', '9', '9', '9', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Swasta Asing', 'bank_asing', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Milik Pemerintah Daerah', 'bank_pemda', 'false', '4', '4', '4', '4', '4', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5). ', 'Milik Pemerintah Asing', 'bank_pemsing', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6). ', 'Milik Campuran', 'bank_campuran', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7). ', 'Jumlah Cabang Milik Pemerintah', 'jml_pemerintah', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8). ', 'Jumlah Cabang Milik Swasta Nasional', 'jml_swasta', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9). ', 'Jumlah Cabang Milik Swasta Asing', 'jml_asing', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10). ', 'Jumlah Cabang Milik Pemerintah Daerah', 'jml_pemda', 'false', '', '', '', '13', '13', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11). ', 'Jumlah Cabang Milik Pemerintah Asing', 'jml_pemsing', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12). ', 'Jumlah Cabang Milik Campuran', 'jml_campuran', 'false', '', '', '', '', '', 'Unit', 'Ada', '');

/* Jumlah Investor Nasional */
INSERT INTO `sipd`.`eko_invnas`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'VIII. ', 'Jumlah Investor Berskala nasional *', 'inv_nasional', 'true', '3', '2', '61', '351', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'PMA *', 'pma', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'BUMN Asing', 'bumn_asing', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Swasta Asing', 'swasta_asing', 'false', '18', '18', '18', '20', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'PMDN *', 'pmdn', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'BUMD', 'pmdn_bumd', 'false', '3', '2', '2', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'BUMN', 'pmdn_bumn', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Swasta', 'pmdn_swata', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Campuran', 'pmdn_campuran', 'false', '', '', '', '', '', 'Unit', 'Ada', '');

/* Asuransi jiwa */
INSERT INTO `sipd`.`eko_asjiwa`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'VI. ', 'Perusahaan Asuransi Jiwa **', 'asuransi_jiwa', 'true', '', '', '', '', '', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'Syariah', 'asjiwa_syariah', 'false', '', '', '', '', '', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Konvensional', 'asjiwa_konvensional', 'false', '', '', '', '', '', 'Buah', 'Ada', ''),
(NULL, '<strong>VII. ', 'Jumlah PDAM</strong>', 'jml_pdam', 'true', '1', '1', '1', '1', '1', 'Buah', 'Ada', '');

/* Asuransi Kerugian */
INSERT INTO `sipd`.`eko_asrugi`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'V. ', 'Perusahaan Asuransi Kerugian **', 'asuransi_rugi', 'true', '', '', '', '', '', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'Konvensional', 'asrugi_konvensional', 'false', '', '', '', '', '', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Syariah', 'asrugi_syariah', 'false', '', '', '', '', '', 'Buah', 'Ada', '');

/* Bank Umum */
INSERT INTO `sipd`.`eko_bankumum`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'IV. ', 'Jumlah Bank Umum **', 'bank_umum', 'true', '', '', '', '', '', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'Konvensional', 'bkumum_konvensional', 'false', '', '', '', '', '', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Syariah', 'bkumum_syariah', 'false', '', '', '', '', '', 'Buah', 'Ada', '');

/* BPR */
INSERT INTO `sipd`.`eko_bpr`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'III. ', 'Jumlah BPR **', 'bank_pr', 'true', '', '', '', '', '', 'Buah', 'Ada', 'Bag. Perekonomian'),
(NULL, '&nbsp;&nbsp; 1. ', 'Konvensional', 'bpr_konvensional', 'false', '', '', '', '', '', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Syariah', 'bpr_syariah', 'false', '', '', '', '', '', 'Buah', 'Ada', '');

/* Proyek PMDN */
INSERT INTO `sipd`.`eko_pmdn`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'II. ', 'Jumlah Proyek PMDN **', 'proyek_pmdn', 'true', '14', '36', '43', '331', '159', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'Realisasi Investasi PMDN per Sektor *', 'realisasi_pmdn', 'false', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Pertanian, Peternakan, Kehutanan dan Perikanan', 'p3k', 'false', '', '', '', '3.300,5', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Pertambangan dan Penggalian', 'tambang_gali', 'false', '', '', '', '480', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Industri Pengolahan(migas dan non migas)', 'ind_pengolahan', 'false', '21,5489', '22,345269', '29,026269', '39,535969', '5.797,034', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Listrik, Gas dan Air Bersih', 'ligas_aber', 'false', '', '', '', '', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5). ', 'Bangunan', 'realisasi_bangunan', 'false', '', '', '', '34.185', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6). ', 'Perdagangan, Hotel dan Restoran', 'dagang_restohotel', 'false', '', '22,397239', '22,499952', '79,1632', '82.208,3', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7). ', 'Pengangkutan dan Komunikasi', 'angkut_komunikasi', 'false', '', '3.163', '6.251', '6.661', '1.220', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8). ', 'Keuangan, Real Estate dan Jasa Perusahaan', 'real_estate', 'false', '', '', '', '35.251', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9). ', 'Jasa-jasa', 'jasa_jasa', 'false', '', '250', '4.250', '881.595', '13.178,451435', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Investasi *', 'investasi_pmdn', 'false', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Total Investasi Pemerintah Pusat', 'inv_pusat', 'false', '', '', '', '', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Total Investasi Pemerintah Daerah', 'inv_pemda', 'false', '', '', '', '', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Total Investasi Swasta', 'inv_swasta', 'false', '199.370,6526', '232.837,2506', '248.393,9631', '250.000', '102.403,785495', 'Rp Juta', 'Ada', '');

/* Proyek PMA */
INSERT INTO `sipd`.`eko_pma`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'I. ', 'Jumlah Proyek PMA', 'proyek_pma', 'true', '18', '18', '18', '20', '20', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'Realisasi Investasi PMA per Sektor *', 'realisasi_pma', 'false', '', '', '', '', '', '', 'Ada', 'KPMPT'),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Pertanian, Peternakan, Kehutanan dan Perikanan', 'p3k_pma', 'false', '', '', '', '', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Pertambangan dan Penggalian', 'tambang_gali', 'false', '', '', '', '', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Industri Pengolahan(migas dan non migas)', 'pengolahan_pma', 'false', '177.821,7426', '184.681,7426', '186.366,7426', '192.845,2826', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Listrik, Gas dan Air Bersih', 'ligasber_pma', 'false', '', '', '', '', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5). ', 'Bangunan', 'bangunan_pma', 'false', '', '', '', '34.185', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6). ', 'Perdagangan, Hotel dan Restoran', 'dagang_pma', 'false', '', '22,397239', '22,499952', '79,1632', '82.208,3', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7). ', 'Pengangkutan dan Komunikasi', 'angkom_pma', 'false', '', '3.163', '6.251', '6.661', '1.220', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8). ', 'Keuangan, Real Estate dan Jasa Perusahaan', 'estate_pma', 'false', '', '', '', '35.251', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9). ', 'Jasa-jasa', 'jasa_pma', 'false', '', '250', '4.250', '881.595', '13.178,451435', 'Rp Juta', 'Ada', '');

/* Industri Besar Menurut Subsektor */
INSERT INTO `sipd`.`eko_indsubsektor`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'XVI. ', 'Jumlah Perusahaan Industri Besar Menurut Subsektor **', 'ind_besar', 'true', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'Makanan dan Minuman', 'makan_minum', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Tembakau', 'tembakau', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 3. ', 'Tekstil', 'tekstil', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 4. ', 'Pakaian jadi', 'pakaian_jadi', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 5. ', 'Kulit dan Barang dari Kulit', 'kulit_barang', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 6. ', 'Kayu, Barang dari kayu dan Anyaman', 'kayu_anyaman', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 7. ', 'Kertas dan Barang dari Kertas', 'kertas_barang', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 8. ', 'Penerbitan, Percetakan dan Reproduksi', 'terbit_cetak', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 9. ', 'Batubara, Minyak dan Gas Bumi dan Bahan Bakar nuklir', 'batu_nuklir', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 10. ', 'Kimia dan barang-barang dari bahan kimia', 'kimia_barang', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 11. ', 'Karet dan Barang-barang dari bahan plastik', 'karet_plastik', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 12. ', 'Barang Galian bukan logam', 'bukan_logam', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 13. ', 'Logam Dasar', 'logam_dasar', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 14. ', 'Barang-barang dari Logam dan Peralatannya', 'logam-alat', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 15. ', 'Mesin dan Perlengkapannya', 'mesin_lengkap', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 16. ', 'Peralatan Kantor, Akuntansi dan pengolahan Data', 'kantor_akuntan', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 17. ', 'Mesin Listrik Lainnya dan Perlengkapannya', 'mesinlistrik_lenkap', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 18. ', 'Radio, Televisi dan Peralatan Komunikasi', 'radio_tv', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 19. ', 'Peralatan kedokteran, alat ukur, navigasi, optik, dan jam', 'dokter_optik', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 20. ', 'Kendaraan bermotor  ', 'kendaraan_bermotor', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 21. ', 'Alat angkutan lainnya  ', 'alat_angkut', 'false', '', '', '', '', '', 'Perusahaan', ' Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 22. ', 'Furniture dan industri pengolahan lainnya  ', 'furnitur', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 23. ', 'Daur ulang', 'daur_ulang', 'false', '', '', '', '', '', 'Perusahaan', 'Tidak Ada', '');

/* Lembaga Perijinan */
INSERT INTO `sipd`.`eko_perijinan`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'X. ', 'Lembaga Perijinan *', 'lembaga_ijin', 'true', '', '', '', '', '', '', 'Ada', 'KPMPT'),
(NULL, '&nbsp;&nbsp; 1. ', 'PTSP', 'ptsp', 'false', '1', '1', '1', '1', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'PTSP yang Menerapkan SPIPISE', 'ptsp_spipise', 'false', '', '1', '1', '1', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 3. ', 'Pengurusan Perijinan *', 'urus_ijin', 'false', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Lama Pengurusan Perijinan', 'lama_ijin', 'false', '', '', '', '', '', 'Hari', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'SIUP : Surat Izin Usaha Perdagangan', 'lama_siup', 'false', '3', '3', '3', '3', '3', 'Hari', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'TDP : Tanda Daftar Perusahaan', 'lama_siup', 'false', '3', '3', '3', '3', '3', 'Hari', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. ', 'IUI  : Izin Usaha Industri', 'lama_siup', 'false', '3', '3', '3', '3', '3', 'Hari', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. ', 'TDI  : Tanda Daftar Industri', 'lama_siup', 'false', '3', '3', '3', '3', '3', 'Hari', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. ', 'IMB : Izin Mendirikan Bangunan', 'lama_siup', 'false', '', '', '', '', '', 'Hari', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. ', 'HO  : Izin Gangguan', 'lama_siup', 'false', '', '', '', '', '', 'Hari', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Jumlah Persyaratan Dokument Perijinan *', 'dokumen_ijin', 'false', '', '', '', '', '', 'Hari', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'SIUP : Surat Izin Usaha Perdagangan', 'lama_siup', 'false', '', '', '', '', '', 'Dokumen', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'TDP : Tanda Daftar Perusahaan', 'lama_siup', 'false', '', '', '', '', '', 'Dokumen', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. ', 'IUI  : Izin Usaha Industri', 'lama_siup', 'false', '', '', '', '', '', 'Dokumen', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. ', 'TDI  : Tanda Daftar Industri', 'lama_siup', 'false', '', '', '', '', '', 'Dokumen', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. ', 'IMB : Izin Mendirikan Bangunan', 'lama_siup', 'false', '', '', '', '', '', 'Dokumen', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. ', 'HO  : Izin Gangguan', 'lama_siup', 'false', '', '', '', '', '', 'Dokumen', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Biaya Resmi Perijinan *', 'dokumen_ijin', 'false', '', '', '', '', '', 'Dokumen', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'SIUP : Surat Izin Usaha Perdagangan', 'lama_siup', 'false', '', '', '', '', '', 'Rp', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'TDP : Tanda Daftar Perusahaan', 'lama_siup', 'false', '', '', '', '', '', 'Rp', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. ', 'IUI  : Izin Usaha Industri', 'lama_siup', 'false', '', '', '', '', '', 'Rp', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. ', 'TDI  : Tanda Daftar Industri', 'lama_siup', 'false', '', '', '', '', '', 'Rp', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. ', 'IMB : Izin Mendirikan Bangunan', 'lama_siup', 'false', '', '', '', '', '', 'Rp', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. ', 'HO  : Izin Gangguan', 'lama_siup', 'false', '', '', '', '', '', 'Rp', 'Ada', ''),
(NULL, '<strong>XI. ', 'Jumlah Kelompok Pedagang/Usaha Informal yang Mendapatkan Bantuan Binaan dari Pemda</strong>', 'dagang_bina', 'true', '', '', '', '', '', 'Kelompok', 'Ada', 'Dinperindagkop'),
(NULL, '<strong>XII. ', 'Jumlah Kelompok Pengrajin</strong>', 'kel_rajin', 'true', '', '', '', '', '', 'Kelompok', 'Ada', ''),
(NULL, '<strong>XIII. ', 'Jumlah Kelompok Pengrajin yang Mendapatkan Bantuan dari Pemda</strong>', 'rajin_bantu', 'true', '', '', '', '', '', 'Kelompok', 'Ada', ''),
(NULL, '<strong>XIV. ', 'Indeks yang Diterima Petani</strong>', 'interima_petani', 'true', '', '', '', '', '', 'Kelompok', 'Ada', ''),
(NULL, '<strong>XV. ', 'Indeks yang Dibayar Petani</strong>', 'inbyr_petani', 'true', '', '', '', '', '', 'Kelompok', 'Ada', '');

/* I/O Industri */
INSERT INTO `sipd`.`eko_ioindustri`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'IX. ', 'Input Output Industri *', 'io_industri', 'true', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'Input Bahan **', 'in_bbm', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Total Input Impor', 'tot_inimpor', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Total Input Domestik Selain Lokal', 'tot_indomestik', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Total Input Lokal', 'tot_inlokal', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Total Output', 'tot_out', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 3. ', 'Nilai Tambah *', 'nilai_tambah', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Total Nilai Tambah', 'tot_tambah', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Total Tenaga Kerja', 'tot_tk', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Total Subsidi', 'tot_subsidi', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Total Pajak Tak Langsung', 'tot_pjklangsung', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 4. ', 'Nilai Tambah Produktivitas Sektor *', 'tambah_prodsektor', 'false', '', '', '', '', '', '', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Pertanian', 'prod_pertanian', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Pertambangan & Penggalian', 'prod_galitam', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Industri & Pengelolaan', 'prod_indkelola', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Listrik, Gas & Air Bersih', 'prod_ligasber', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5). ', 'Konstruksi', 'prod_konstruksi', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6). ', 'Perdagangan, Hotel & Restoran', 'prod_ganghore', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7). ', 'Pengangkutan & Transportasi', 'prod_petan', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8). ', 'Jasa-jasa', 'prod_jasa', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 5. ', 'Total Permintaan Akhir', 'tot_pa', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', '');

/* Nilai Ekspor Impor */
INSERT INTO `sipd`.`eko_einonmigas`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'VI. ', 'Nilai Ekspor dan Impor Non Migas *', 'eksin_nomigas', 'true', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'Ekpor', 'eks_nomigas', 'false', '851.016,4725', '1.577.167,4082', '1.351.921,8881', '1.671.732,4966', '835.866,248', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Impor', 'im_nomigas', 'false', '165.780,1353', '132.821,0927', '207.031,0895', '313.775,0718', '156.887.535,923', 'Rp Juta', 'Ada', ''),
(NULL, '<strong>VII. ', 'Jumlah Industri/Perusahaan yang Menerapkan K3</strong>', 'jml_k3', 'true', '', '', '', '', '', 'Unit', 'Tidak Ada', ''),
(NULL, '<strong>VIII. ', 'Jumlah Kelompok Pedagang/Usaha Informal</strong>', 'jml_informal', 'true', '', '', '', '', '', 'Kelompok', 'Tidak Ada', '');

/* Pengembangan Usaha Nasional */
INSERT INTO `sipd`.`eko_usahanas`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'III. ', 'Pengembangan Usaha Nasional *', 'kembang_unas', 'true', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'Koperasi *', 'koperasi', 'false', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Jumlah Koperasi Aktif', 'koperasi_aktif', 'false', '222', '211', '215', '216', '216', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Jumlah Koperasi Tidak Aktif', 'kop_pasif', 'false', '25', '22', '22', '22', '22', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Jumlah Induk Koperasi', 'induk_kop', 'false', '', '', '', '', '', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Jumlah Koperasi Primer', 'kop_primer', 'false', '247', '233', '237', '238', '238', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5). ', 'Jumlah KUD', 'jml_kud', 'false', '16', '16', '16', '16', '16', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6). ', 'Jumlah Non KUD', 'jml_nokud', 'false', '231', '217', '221', '222', '222', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Jumlah Pengusaha *', 'jml_pengusaha', 'false', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Pengusaha Kecil', 'pengusaha_kecil', 'false', '7.300', '2.996', '2.996', '3.764', '3.764', 'Orang', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Pengusaha Menengah', 'pengusaha_menengah', 'false', '51', '51', '51', '387', '387', 'Orang', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Pengusaha Besar', 'pengusaha_besar', 'false', '39', '39', '39', '45', '45', 'Orang', 'Ada', ''),
(NULL, '<strong>IV. ', 'Nilai Ekspor Total</strong>', 'nilai_ekspor', 'true', '', '', '', '', '', 'Rp Juta', 'Ada', ''),
(NULL, '<strong>V. ', 'Nilai Impor Total</strong>', 'nilai_impor', 'true', '', '', '', '', '', 'Rp Juta', 'Ada', '');

/* Perdagangan */
INSERT INTO `sipd`.`eko_perdagangan`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'II. ', 'Perdagangan *', 'perdagangan', 'true', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 1. ', 'Sarana Perdagangan *', 'sarana_dagang', 'true', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Pasar Tradisional', 'pasar_tadisional', 'false', '19', '19', '19', '19', '19', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Pasar Swalayan/Supermarket/Toserba', 'pasar_toserba', 'false', '3', '3', '3', '3', '2', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Hipermarket', 'hipermarket', 'false', '', '', '', '', '40', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Pasar Grosir', 'pasar_grosir', 'false', '', '', '', '', '', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5). ', 'Mal/Plaza', 'mal_plaza', 'false', '', '', '', '', '', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6). ', 'Pertokoan/Warung/Kios', 'towarki', 'false', '', '', '', '', '', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Restoran dan Rumah Makan *', 'resto_rm', 'true', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Restoran', 'restaurant', 'false', '16', '16', '16', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Jumlah Jenis Restoran *', 'jj_resto', 'false', '8', '8', '8', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Jenis Tertinggi', 'jj_tinggi', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Jenis Menengah', 'jj_tengah', 'false', '8', '8', '8', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Jenis Terendah', 'jj_rendah', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Kelas Restoran *', 'jk_resto', 'false', '8', '8', '8', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Kelas A', 'jk_a', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Kelas B', 'jk_b', 'false', '8', '8', '8', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Kelas C', 'jk_c', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Kelas D', 'jk_d', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Rumah Makan', 'rumah_makan', 'false', '28', '28', '28', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Jumlah Jenis Rumah Makan *', 'jj_rm', 'false', '14', '14', '14', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Jenis Tertinggi', 'jjrm_tinggi', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Jenis Menengah', 'jjrm_tengah', 'false', '14', '14', '14', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Jenis Terendah', 'jjrm_rendah', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Jumlah Kelas Rumah Makan *', 'jk_rm', 'false', '14', '14', '14', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Kelas A', 'jkrm_a', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Kelas B', 'jkrm_b', 'false', '14', '14', '14', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Kelas C', 'jkrm_c', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Kelas D', 'jkrm_d', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 3. ', 'Jenis Bangunan Pasar *', 'jns_bangpasar', 'true', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Pasar Bangunan Permanen/Semi Permanen', 'bangun_persemi', 'false', '19', '19', '19', '19', '19', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Pasar Tanpa Bangunan Permanen/Semi Permanen', 'no_persemi', 'false', '', '', '', '', '', 'Buah', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Pusat Perdagangan', 'pusat_dagang', 'false', '2', '2', '2', '2', '2', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 4. ', 'Rumah Potong Hewan dan Unggas', 'potong_hewan', 'true', '', '', '', '', '', 'Unit', 'Ada', '');

/* Industri */
INSERT INTO `sipd`.`eko_industri`
(`id`, `properti`, `nama`, `nm_field`, `readonly`, `2010`, `2011`, `2012`, `2013`, `2014`, `satuan`, `ketersediaan`, `sumber_data`) 
VALUES 
(NULL, 'I. ', 'Industri *', 'industri', 'true', '', '', '', '', '', '', 'Ada', 'Dinperindagkop'),
(NULL, '&nbsp;&nbsp; 1. ', 'Industri Kecil *', 'industri_kecil', 'false', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Unit Kerja', 'indcil_unker', 'false', '38.246', '40.266', '41.070', '41.891', '41.891', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Tenaga Kerja', 'indcil_tenker', 'false', '104.256', '115.830', '119.200', '121.584', '121.584', 'Orang', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Nilai Produksi', 'indcil_niprod', 'false', '788,0588', '835,7103', '845,4025', '862,3106', '862,3106', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Jumlah Industri Kecil per Jenis Kerajinan *', 'indcil_kerajinan', 'false', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. ', 'Kulit', 'kerajinan_kulit', 'false', '9', '9', '9', '9', '9', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ', 'Kayu', 'kerajinan_kayu', 'false', '1.660', '1.675', '1.704', '1.738', '1.738', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. ', 'Logam/Logam Mulia', 'kerajinan_logam', 'false', '1.694', '1.694', '1.720', '1.754', '1.754', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. ', 'Anyaman/Gerabah/Keramik', 'kerajinan_kramik', 'false', '4.725', '4.740', '4.820', '4.916', '4.916', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. ', 'Dari Kain Tenun', 'kerajinan_tenun', 'false', '96', '96', '95', '95', '95', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. ', 'Industri Makanan/Minuman', 'kerajinan_mamin', 'false', '26.620', '26.730', '27.210', '27.754', '27.754', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7. ', 'Rambut', 'kerajinan_rambut', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8. ', 'Tekstil', 'kerajinan_tekstil', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9. ', 'Pakaian jadi', 'kerajinan_pakaian', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10. ', 'Kertas', 'kerajinan_kertas', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11. ', 'Penerbitan, Percetakan, dan reproduksi media rekaman', 'kerajinan_tercetak', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12. ', 'Industri Batu Bara, Pengilangan Minyak Bumi, Pengolahan Minyak Gas Bumi, Barang dari Hasil Pengilang', 'kerajinan_bagimigas', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 13. ', 'Kimia', 'kerajinan_kimia', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14. ', 'Karet', 'kerajinan_karet', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 15. ', 'Daur ulang', 'kerajinan_daul', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 16. ', 'Rokok', 'kerajinan_rokok', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 2. ', 'Industri Mikro *', 'industri_mikro', 'false', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Unit Kerja', 'indmik_unker', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Tenaga Kerja', 'indmik_tenker', 'false', '', '', '', '', '', 'Orang', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Nilai Produksi', 'indmik_niprod', 'false', '', '', '', '', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Jumlah Industri Mikro', 'jml_indmik', 'false', '', '', '', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 3. ', 'Industri Menengah *', 'industri_menengah', 'false', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Unit Kerja', 'indmen_unker', 'false', '51', '51', '51', '', '', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Tenaga Kerja', 'indmen_tenker', 'false', '2.463', '2.898', '2.898', '', '', 'Orang', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Nilai Produksi', 'indmen_niprod', 'false', '', '', '', '', '', 'Rp Juta', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4). ', 'Jumlah Industri Menengah', 'jml_indmen', 'false', '', '', '', '', '', 'Unit', 'Tidak Ada', ''),
(NULL, '&nbsp;&nbsp; 4. ', 'Industri Besar *', 'industri_besar', 'false', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Unit Kerja', 'indbes_unker', 'false', '39', '39', '39', '39', '39', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Tenaga Kerja', 'indbes_tenker', 'false', '30.421', '32.905', '33.500', '34.170', '34.170', 'Orang', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3). ', 'Nilai Produksi', 'indbes_niprod', 'false', '', '', '', '', '', 'Rp Juta', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 5. ', 'Industri Rumah Tangga *', 'industri_rt', 'false', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1). ', 'Jumlah Unit Usaha', 'jml_unsah', 'false', '38.246', '40.266', '41.070', '41.891', '41.891', 'Unit', 'Ada', ''),
(NULL, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2). ', 'Jumlah Tenaga Kerja', 'jml_tenker', 'false', '104.256', '115.830', '119.200', '121.584', '121.584', 'Orang', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 6. ', 'Jumlah Seluruh Perusahaan Wajib Amdal', 'wajib_amdal', 'false', '', '', '', '', '', '', 'Ada', ''),
(NULL, '&nbsp;&nbsp; 7. ', 'Jumlah Perusahaan Wajib AMDAL yang Telah Diawasi', 'amdal_awas', 'false', '', '', '', '', '', '', 'Ada', '');
