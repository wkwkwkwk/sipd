<form role="form" method="post" action="simpan">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
		    Data Umum <small>(Geografi, Pemerintahan, Demografi)</small>
        </h1>
    </div>
</div>

<div class="row">
	<div class="col-lg-12 col-xs-12">
		<!-- Geografi -->
		<div class="box panel panel-primary">
			<div class="panel-heading">
                <h3 class="panel-title"> Geografi</h3>
                <div class="box-icon">
                	<a href="#" class="btn btn-minimize btn-round btn-default">
                	<i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
            	<div class="col-lg-12 col-xs-12">
            		
            			<table width="100%">
            				<tr>
            					<td><strong>Luas Wilayah</strong></td>
            					<td width="45%"><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="a">Daratan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Laut 12 Mil Dari Darat</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Zona Laut</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Laut Teritorial</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Zona Ekonomi Eksklusif</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Laut Landasan Kontinen</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Panjang Garis Pantai</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>

            				<tr>
            					<td><strong>Topografi</strong></td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="a">Luas Lahan Berdasarkan Kelas Lereng</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="b">Datar (0-2 Derajat)</td>
            					<td><input type="text" class="form-control" name="datar" /></td>
            				</tr>
            				<tr>
            					<td class="b">Bergelombang (2-15 Derajat)</td>
            					<td><input type="text" class="form-control" name="bergelombang" /></td>
            				</tr>
            				<tr>
            					<td class="b">Curam (15-40 Derajat)</td>
            					<td><input type="text" class="form-control" name="curam" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sangat Curam (>40 Derajat)</td>
            					<td><input type="text" class="form-control" name="sgtcuram" /></td>
            				</tr>
            				<tr>
            					<td class="a">Ketinggian Di Atas Permukaan Laut</td>
            					<td><input type="text" class="form-control" name="tinggidpl" /></td>
            				</tr>

							<tr>
								<td><strong>Luas Lahan</strong></td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
            					<td class="a">Luas Lahan Hutan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Hutan Produksi Tetap</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Hutan Produksi Terbatas</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Hutan Yang Dapat Dikonversi</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Hutan Bakau</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Jumlah Lahan Persawahan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sawah Irigasi</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sawah Tadah Hujan/Non-Irigasi</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sawah Pasang Surut</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sawah Lainnya</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Jumlah Lahan Kering</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Rawa-Rawa</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Ladang (Tegalan)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Perkebunan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Usaha Lain</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Belum/Tidak Diusahakan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Lahan Pertambangan</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Danau / Telaga Alam</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Waduk (Buatan)</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kolam Air Tawar</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Tambak Ikan</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Padang Rumput Alam</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Tanah Tandus/Rusak (Tidak Diusahakan)</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Tanah Terlantar</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Luas Penggunaan Lahan Bukan Sawah</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Kolam / Empang / Tambak</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Danau / Telaga Alam</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Ladang / Tegalan / Kebun / Padang Rumput</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Kebun Campuran</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Perkebunan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Hutan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Perumahan dan Permukiman</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Industri</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Bangunan Lainnya / Perkantoran</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Non-Sawah Sementara yang Tidak Diusahakan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Waduk (Buatan)</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Lainnya</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Luas Perubahan Penggunaan Lahan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="c">Perubahan Penggunaan Lahan Sawah</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Menjadi Lahan Pertanian Bukan Sawah</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Menjadi Perumahan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Menjadi Industri</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Menjadi Perusahaan / Perkantoran</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b"><u>Menjadi Lahan Pertanian Bukan Sawah</u></td>
            					<td><input type="text" class="form-control" placeholder="ini kok kembar dengan yg di atas ?" /></td>
            				</tr>
            				<tr>
            					<td class="b">Menjadi Lahan Lainnya</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Luas Alih Fungsi Hutan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Hutan Menjadi Lahan Sawah</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Hutan Menjadi Perumahan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Hutan Menjadi Lahan Industri</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Hutan Menjadi Perusahaan / Perkantoran</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Hutan Menjadi Lahan Bukan Sawah</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Hutan Menjadi Lahan Lainnya</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Penggunaan Lahan (Land Use) Per Sektor</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Pertanian</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Pertambangan dan Penggalian</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Industri Pengolahan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Listrik, Air dan Air Bersih</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Bangunan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Perdagangan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Pengangkutan dan Komunikasi</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Keuangan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jasa-Jasa</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>

            				<tr>
            					<td><strong>Keadaan Iklim Rata-Rata</strong></td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="a">Suhu</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="b">Suhu Terendah</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Suhu Tertinggi</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kelembaban Udara</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="b">Kelembaban Udara Terendah</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Kelembaban Udara Tertinggi</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Curah Hujan</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="b">Curah Hujan Terendah</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Curah Hujan Tertinggi</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kecepatan Angin</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="b">Kecepatan Angin Terendah</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Kecepatan Angin Tertinggi</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>

            				<tr>
            					<td><strong>Jumlah Pulau</strong></td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Pulau Berpenghuni</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Penduduk</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah KK</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Daratan Pulau Berpenghuni</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Lahan Produktif Pulau Berpenghuni</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Lahan Budidaya Pulau Berpenghuni</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Mercusuar</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Pulau Berpenghuni Tidak Tetap</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Penduduk Singgah</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Daratan Pulau Berpenghuni Tidak Tetap</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Lahan Produktif Pulau Berpenghuni Tidak Tetap</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Lahan Budidaya Pulau Berpenghuni Tidak Tetap</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Mercusuar</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Pulau Tidak Berpenghuni</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Pulau Bernama</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Penduduk</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah KK</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Daratan Pulau Bernama</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Lahan Produktif Pulau Bernama</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Lahan Budidaya Pulau Bernama</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Mercusuar</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Pulau Tidak Bernama</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Penduduk</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah KK</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Daratan Pulau Tidak Bernama</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Lahan Produktif Pulau Tidak Bernama</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Lahan Budidaya Pulau Tidak Bernama</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Mercusuar</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Pulau-Pulau Kecil (Luas di bawah 100 km <sup>2</sup> )</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Penduduk</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah KK</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Daratan Pulau-Pulau Kecil</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Lahan Produktif Pulau-Pulau Kecil</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Lahan Budidaya Pulau-Pulau Kecil</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Mercusuar</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Pulau Terluar / Perbatasan Dengan Negara Lain</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Penduduk</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah KK</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Daratan Pulau Berpenghuni</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Lahan Produktif Pulau Terluar</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Luas Lahan Budidaya Pulau Terluar</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Mercusuar</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>

            				<tr>
            					<td><strong>Jumlah Gunung</strong></td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Aktif</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Non-Aktif</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Vulkanik</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>

            				<tr>
            					<td><strong>Panjang Perbatasan Darat Dengan Negara Lain</strong></td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Papua - Papua Nugini</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kalimantan - Malaysia</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">NTT - Timor Leste</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>

            				<tr>
            					<td><strong>Fisiologi Lahan</strong></td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="a">Luas Area Pegunungan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Luas Area Berbukit-Bukit</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Luas Area Daratan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Luas Area Pesisir</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
							
            			</table>
            		
            	</div>
            </div>

		</div>
		<!-- End Geografi -->

		<!-- Pemerintahan -->
		<div class="box panel panel-primary">
			<div class="panel-heading">
                <h3 class="panel-title"> Pemerintahan ( Administrasi Pemerintahan, Aparatur Negara, Administrasi Kepegawaian )</h3>
                <div class="box-icon">
                	<a href="#" class="btn btn-minimize btn-round btn-default">
                	<i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
            	<div class="col-lg-12 col-xs-12">
            			<table width="100%">
							<tr>
            					<td><strong>Administrasi Pemerintahan</strong></td>
            					<td width="45%"></td>
            				</tr>
            				<tr>
            					<td class="a">Jumlah Kecamatan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Jumlah Kelurahan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Jumlah Desa</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Klasifikasi Desa</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="b">Desa Swadaya</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Desa Swakarya</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Desa Swasembada</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Desa Pesisir</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="b">Desa Perhutanan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Perindustrian / Jasa</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Desa Perkebunan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Desa Perladangan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Desa Persawahan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Desa Pertambangan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Desa Peternakan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Desa Wisata</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Jumlah RW</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Jumlah RT</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Jumlah Dusun</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>

            				<tr>
            					<td><strong>Status Otonomi Kabupaten / Kota</strong></td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="a">Daerah Otonomi Baru</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Daerah Induk</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Daerah Dampak Pemekaran</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>
            				<tr>
            					<td class="a">Daerah Non-Pemekaran</td>
            					<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
            				</tr>

            				<tr>
            					<td><strong>Perda dan Perizinan</strong></td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="a">Jumlah Perda Yang Diterbitkan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Jumlah Revisi Yang Diterbitkan Sejak Terbitnya Perda RTRW</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Perda Yang Dikeluarkan</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Peraturan Daerah Untuk RTRW</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah IMB Yang Dikeluarkan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah izin Prinsip Yang Dikeluarkan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Izin Usaha Yang Dikeluarkan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Izin Untuk Hak Pengusahaan Perkebunan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Izin Untuk Hak Pengusahaan Kehutanan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Izin Untuk Hak Pengusahaan Pertambangan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Perizinan Investasi PMA Yang Dikeluarkan / Disetujui</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Perizinan Investasi PMDN Yang Dikeluarkan / Disetujui</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Dokumen Perancangan RPJPD Yang Telah Ditetapkan Dengan Perda</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Dokumen Perancangan RPJMD Yang Telah Ditetapkan Dengan Perda</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Dokumen Perancangan RKPD Yang Telah Ditetapkan Dengan Perda</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Program RKPD Tahun Berkenaan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Program RPJMD Yang Harus Dilaksanakan Tahun Berkenaan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Izin Lokasi</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Pemohon Izin Lokasi</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Perda Yang Mendukung Iklim Usaha</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Pelanggaran Perda</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Jumlah Penyelesaian Penegakan Perda</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Jumlah Perda Terkait Perizinan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Jumlah Perda Terkait Lalu-Lintas Barang dan Jasa</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Jumlah Perda Terkait Ketenagakerjaan</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>

            				<tr>
            					<td><strong>Jumlah Sarana Prasarana Pemerintahan</strong></td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="a">Kantor Bupati / Walikota</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kantor Setda</td>
            					<td><input type="text" class="form-control" placeholder="ini maksudnya jumlah kantor atau jumlah staff?" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Staff Berdasarkan Tingkat Pendidikan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tidak Sekolah / Belum Tamat SD</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tamat SD atau Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMP dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMA dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Akademi (D1, D2, dan D3)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sarjana (S1)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah PNS Berdasarkan Golongan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pejabat Struktural</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pejabat Fungsional</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pensiunan PNS</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kantor DPRD dan Sekretariat DPRD</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kantor Inspektorat</td>
            					<td><input type="text" class="form-control" placeholder="ini maksudnya jumlah kantor atau jumlah staf ?" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Staff Berdasarkan Tingkat Pendidikan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tidak Sekolah / Belum Tamat SD</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tamat SD atau Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMP dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMA dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Akademi (D1, D2, dan D3)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sarjana (S1)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah PNS Berdasarkan Golongan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pejabat Struktural</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pejabat Fungsional</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pensiunan PNS</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kantor Bappeda</td>
            					<td><input type="text" class="form-control" placeholder="ini maksudnya jumlah kantor atau jumlah staf ?" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Staff Berdasarkan Tingkat Pendidikan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tidak Sekolah / Belum Tamat SD</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tamat SD atau Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMP dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMA dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Akademi (D1, D2, dan D3)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sarjana (S1)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah PNS Berdasarkan Golongan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pejabat Struktural</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pejabat Fungsional</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pensiunan PNS</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
							<tr>
            					<td class="a">Kantor Dinas Daerah</td>
            					<td><input type="text" class="form-control" placeholder="ini maksudnya jumlah kantor atau jumlah staf ?" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Staff Berdasarkan Tingkat Pendidikan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tidak Sekolah / Belum Tamat SD</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tamat SD atau Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMP dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMA dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Akademi (D1, D2, dan D3)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sarjana (S1)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah PNS Berdasarkan Golongan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pejabat Struktural</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pejabat Fungsional</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pensiunan PNS</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kantor Lembaga Teknis Daerah</td>
            					<td><input type="text" class="form-control" placeholder="ini maksudnya jumlah kantor atau jumlah staf ?" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Staff Berdasarkan Tingkat Pendidikan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tidak Sekolah / Belum Tamat SD</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tamat SD atau Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMP dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMA dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Akademi (D1, D2, dan D3)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sarjana (S1)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah PNS Berdasarkan Golongan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Golongan IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pejabat Struktural</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pejabat Fungsional</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Pensiunan PNS</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon I</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon II</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon III</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Eselon IV</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kantor Pemerintah Desa</td>
            					<td><input type="text" class="form-control" placeholder="ini maksudnya jumlah kantor atau jumlah staf ?" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Aparat Pemerintah Desa Berdasarkan Tingkat Pendidikan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tidak Sekolah / Belum Tamat SD</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tamat SD atau Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMP dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMA dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Akademi (D1, D2, dan D3)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sarjana (S1)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kantor Camat</td>
            					<td><input type="text" class="form-control" placeholder="ini maksudnya jumlah kantor atau jumlah staf ?" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Aparat Kecamatan Berdasarkan Tingkat Pendidikan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tidak Sekolah / Belum Tamat SD</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tamat SD atau Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMP dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMA dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Akademi (D1, D2, dan D3)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sarjana (S1)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
							<tr>
            					<td class="a">Kantor Lurah</td>
            					<td><input type="text" class="form-control" placeholder="ini maksudnya jumlah kantor atau jumlah staf ?" /></td>
            				</tr>
            				<tr>
            					<td class="c">Jumlah Aparat Kelurahan Berdasarkan Tingkat Pendidikan</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tidak Sekolah / Belum Tamat SD</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Tamat SD atau Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMP dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">SMA dan Sederajat</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Akademi (D1, D2, dan D3)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sarjana (S1)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>

            				<tr>
            					<td><strong>Kondisi Sarana Prasarana Pemerintahan</strong></td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="a">Kantor Dinas Daerah</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="b">Rusak Ringan (Kerusakan &lt;30%)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Rusak Sedang (Kerusakan 30-50%)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Rusak Berat (Kerusakan &gt;50%)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kantor Lembaga Teknis Daerah</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="b">Rusak Ringan (Kerusakan &lt;30%)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Rusak Sedang (Kerusakan 30-50%)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Rusak Berat (Kerusakan &gt;50%)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kantor Pemerintah Desa</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td class="b">Rusak Ringan (Kerusakan &lt;30%)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Rusak Sedang (Kerusakan 30-50%)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Rusak Berat (Kerusakan &gt;50%)</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kantor Dinas</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Milik Sendiri</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sewa</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Pinjam</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Gabung</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="a">Kantor Lembaga Teknis Daerah</td>
            					<td><input type="text" class="form-control" readonly="readonly" /></td>
            				</tr>
            				<tr>
            					<td class="b">Milik Sendiri</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Sewa</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Pinjam</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            				<tr>
            					<td class="b">Gabung</td>
            					<td><input type="text" class="form-control" /></td>
            				</tr>
            			</table>
            	</div>
            </div>
        </div>
		<!-- End Pemerintahan -->

		<!-- Demografi -->
		<div class="box panel panel-primary">
			<div class="panel-heading">
                <h3 class="panel-title"> Demografi</h3>
                <div class="box-icon">
                	<a href="#" class="btn btn-minimize btn-round btn-default">
                	<i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
            	<div class="col-lg-12 col-xs-12">
            			<table width="100%">
							<tr>
								<td><strong>Kependudukan dan Catatan Sipil</strong></td>
								<td width="45%"><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Penduduk Wajib KTP</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Penduduk Yang Memiliki KTP Berdasarkan Jenis Kelamin</td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="b">Laki-Laki</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Perempuan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Penduduk &gt;17 Yang Ber-KTP Berdasarkan Jenis Kelamin</td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="b">Laki-Laki</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Perempuan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Penduduk &gt;17 Yang Telah Menikah</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Penduduk Menurut Jenis Kelamin</td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="b">Laki-Laki</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Perempuan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Pasangan Nikah Berakta Nikah</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Keseluruhan Pasangan Nikah</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Penduduk Yang Telah Memiliki KK</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Penduduk Yang Telah Memiliki Akta Kelahiran</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Penduduk Memiliki Lahan</strong></td>
								<td><input type="text" class="form-control" placeholder="belum paham" /></td>
							</tr>
							<tr>
								<td class="a">Pertanian</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Non-Pertanian</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Jumlah Keluarga Berdasarkan Mata Pencaharian</strong></td>
								<td><input type="text" class="form-control" placeholder="belum paham" /></td>
							</tr>
							<tr>
								<td class="a">Pertanian</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Non-Pertanian</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Jumlah Penduduk Menurut Usia</strong></td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="a">0 - 4 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">4 - 6 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">7 - 12 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">13 - 15 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">16 - 18 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">19 - 24 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">25 - 29 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">30 - 34 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">35 - 39 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">40 - 44 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">45 - 49 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">50 - 54 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">55 - 59 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">60 - 64 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">&gt; 65 Tahun</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Rasio Beban Kebergantungan (<i>Dependency Ratio</i>)</strong></td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Kepadatan Penduduk</strong></td>
								<td></td>
							</tr>
							<tr>
								<td class="a">Kawasan Perkotaan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Kawasan Pedesaan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Tingkat Pendapatan, Pengeluaran dan Tabungan</strong></td>
								<td></td>
							</tr>
							<tr>
								<td class="a">Pendapatan per Kapita</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Indeks Harga Konsumen</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Pengeluaran Riil Per Kapita Yang Disesuaikan (Indeks Daya Beli)</td>
								<td></td>
							</tr>
							<tr>
								<td class="b">Tingkat Rataan Daya Beli (Rp Ribu/Kapita/Tahun)</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Total Pengeluaran</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Total Pengeluaran Rumah Tangga Non-Pangan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Ketenagakerjaan</strong></td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="a">Penduduk 15 Tahun Ke Atas</td>
								<td><input type="text" class="form-control" placeholder="belum paham" /></td>
							</tr>
							<tr>
								<td class="b">Menurut Jenis Kegiatan</td>
								<td><input type="text" class="form-control" placeholder="belum paham" /></td>
							</tr>
							<tr>
								<td class="b">Menurut Lapangan Pekerjaan Utama</td>
								<td><input type="text" class="form-control" placeholder="belum paham" /></td>
							</tr>
							<tr>
								<td class="b">Menurut Status Pekerjaan Utama</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Angkatan Kerja</td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="c">Bekerja</td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="b">Perempuan Bekerja</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Laki-Laki Bekerja</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="c">Mencari Pekerjaan</td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="b">Perempuan Bekerja</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Laki-Laki Bekerja</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Kesempatan Kerja</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Pencari Kerja Yang Medaftarkan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Pencari Kerja Yang Ditempatkan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Pengangguran</td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="b">Pengangguran Terselubung</td>
								<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
							</tr>
							<tr>
								<td class="b">Setengah Menganggur</td>
								<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
							</tr>
							<tr>
								<td class="b">Pengangguran Terbuka</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Tenaga Kerja Dalam Negeri</td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="b">Tenaga Kerja Wanita</td>
								<td><input type="text" class="form-control" /></td>
							</tr><tr>
								<td class="b">Tenaga Kerja Pria</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Jumlah Tenaga Kerja Yang Bekerja Pada PMA</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Jumlah Tenaga Kerja Yang Bekerja Pada PMDN</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">TKI Di Luar Negeri</td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="b">Tenaga Kerja Wania</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Tenaga Kerja Pria</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">PHK</td>
								<td></td>
							</tr>
							<tr>
								<td class="b">Kasus PHK</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Orang Terkena PHK</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Rata-Rata Upah Minimum Regional/Bulan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Pencari Kerja</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Angka Pekerja Dengan Upah Sesuai UMR</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Rasio Rata-Rata Penghasilan Pekerja Terhadap UMR</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Angka Rata-Rata Jam Kerja</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Angka Partisipasi Pekerja Peserta ASTEK Dan Sejenisnya</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Angka Partisipasi Perusahaan Peserta ASTEK Dan Sejenisnya</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Angka Partisipasi Jamsostek</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Angka Partisipasi Perusahaan Peserta Jamsostek</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Jumlah Penduduk Bekerja Menurut Lapangan Usaha</strong></td>
								<td></td>
							</tr>
							<tr>
								<td class="a">Pertanian, Kehutanan, Perkebunan dan Perikanan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Pertambangan dan Penggalian</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Industri Pengolahan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Listrik, Gas dan Air</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Bangunan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Perdagangan Besar, Eceran, Rumah Makan dan Hotel</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Angkutan, Penggudangan dan Komunikasi</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Keuangan, Asuransi, Usaha Sewa Bangunan,Tanah dan Jasa Perusahaan </td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jasa Kemasyarakatan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Pertumbuhan Penduduk</strong></td>
								<td></td>
							</tr>
							<tr>
								<td class="a">Laju Pertumbuhan Alamiah Penduduk (%/Tahun)</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Kematian Bayi (Berumur Kurang 1 Tahun)</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Angka Kematian Bayi (IMR)</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Angka Kematian Ibu (MMR)</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Tingkat Migrasi (Masuk/Keluar)</td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="b">Jumlah Migrasi Masuk</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Jumlah Migrasi Keluar</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Kelahiran Hidup</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Rata-Rata Anak Yang Dilahirkan Hidup</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Rata-Rata Anak Yang Masih Hidup</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Rata-Rata Angka Harapan Hidup</strong></td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="a">Laki-Laki</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Perempuan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Jumlah Penduduk Berdasarkan Tingkat Pendidikan</strong></td>
								<td></td>
							</tr>
							<tr>
								<td class="a">Tidak Tamat SD</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Tamat SD</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Tamat SMP</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Tamat SMA</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Diploma</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Sarjana S1</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Sarjana S2</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Sarjana S3</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Keluarga</strong></td>
								<td></td>
							</tr>
							<tr>
								<td class="a">Jumlah Keluarga (KK)</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Anak</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							
							<tr>
								<td><strong>Jumlah Rumah Tangga</strong></td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							
							<tr>
								<td><strong>Ukuran Rumah Tangga (Orang/RT)</strong></td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							
							<tr>
								<td><strong>Jumlah Rumah Tinggal</strong></td>
								<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
							</tr>
							
							<tr>
								<td><strong>Petani dan Nelayan</strong></td>
								<td><input type="text" class="form-control" readonly="readonly" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Rumah Tangga Petani</td>
								<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
							</tr>
							<tr>
								<td class="b">Petani</td>
								<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
							</tr>
							<tr>
								<td class="b">Buruh Tani</td>
								<td><input type="text" class="form-control" readonly="readonly" placeholder="Tidak Ada" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Rumah Tangga Nelayan</td>
								<td><input type="text" class="form-control" placeholder="belum paham" /></td>
							</tr>
							<tr>
								<td class="b">Nelayan Penuh</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Nelayan Sambilan Utama</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Nelayan Sambilan Tambahan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Transmigrasi</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Transmigrasi Baru</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Transmigrasi Swakarsa</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Pemberdayaan Perempuan dan Perlindungan Anak</strong></td>
								<td></td>
							</tr>
							<tr>
								<td class="a">Jumlah Pekerja Perempuan</td>
								<td><input type="text" class="form-control" placeholder="belum paham" /></td>
							</tr>
							<tr>
								<td class="c">Lembaga Pemerintahan</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Jumlah Perempuan Yang Menempati Jabatan Eselon II</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Jumlah Perempuan Yang Menempati Jabatan Eselon III</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="b">Jumlah Perempuan Yang Menempati Jabatan Eselon IV</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="c">Lembaga Swasta</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

							<tr>
								<td><strong>Jumlah Tenaga Kerja Di Bawah Umur</strong></td>
								<td></td>
							</tr>
							<tr>
								<td class="a">Jumlah Tenaga Kerja Di Bawah Umur (5-14 Tahun)</td>
								<td><input type="text" class="form-control" /></td>
							</tr>
							<tr>
								<td class="a">Jumlah Tenaga Kerja 15 Tahun Ke Atas</td>
								<td><input type="text" class="form-control" /></td>
							</tr>

            			</table>
            	</div>
            </div>
        </div>
		<!-- End Demografi -->
	</div>
</div>
<br /><hr />
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
		    Sumber Daya Alam <small>(Pertanian, Kehutanan, Kelautan, Perikanan, Peternakan, Perkebunan, Pertambangan dan Energi)</small>
        </h1>
    </div>
</div>

<div class="box-content row">
                  <div class="col-lg-12 col-xs-12">                        
                              <table width="100%">
                                    
                                    <?php
                                          mysql_connect('localhost','root','');
                                          mysql_select_db("rencanakp");

                                          $sql = mysql_query("SELECT*FROM geo_luas_wil");
                                          while($hasil = mysql_fetch_array($sql)){
                                                echo "<tr>
                                          <td><strong>";
                                          echo $hasil[1];
                                          echo "</strong></td>
                                          <td width='45%'><input type='text' name='";
                                          echo $hasil[2];
                                          echo "'class='form-control' readonly='readonly' /></td>
                                    </tr>";
                              }
                                    ?>
                              </table>
                              <?php include "tampilgeolswil.php"; ?>
                   </div>
</div>

		<br /><span class="pull-right">
			<input type="reset" class="btn btn-danger" value="RESET" />
			<input type="submit" class="btn btn-success" value="SIMPAN" />
		</span>

<div class="row">
      <div class="col-lg-12 col-xs-12">
            <!-- Geografi -->
            <div class="box panel panel-primary">
                  <div class="panel-heading">
                <h3 class="panel-title"> Geografi</h3>
                <div class="box-icon">
                  <a href="#" class="btn btn-minimize btn-round btn-default">
                  <i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>

            <div class="box-content row">
                  <div class="col-lg-12 col-xs-12">            
<table width="100%">
    <?php foreach ($dataProvider as $x): ?>
    <tr>
        <td>
            <?php
                  if($x['id']==1){
                        echo "<strong>";
                        echo $x['properti'];
                        echo $x['nama'];
                        echo "</strong>";
                  }else{
                        echo $x['properti'];
                        echo $x['nama'];
                  }
            ?>
        </td>
        <td width="45%"><input type="text" class="form-control" 
            <?php
                  if($x['readonly']=='true' && $x['ketersediaan']=='Ada'){
                        echo "readonly='readonly' ";
                        echo "name='";
                        echo $x['nm_field'];
                        echo "'";
                  }else if($x['readonly']=='true' && $x['ketersediaan']=='Tidak Ada'){
                        echo "readonly='readonly' ";
                        echo "name='";
                        echo $x['nm_field'];
                        echo "'";
                        echo " placeholder='Tidak Ada'";
                  }else{
                        echo "name='";
                        echo $x['nm_field'];
                        echo "'";
                  }
            ?> /></td>
    </tr>
      <?php endforeach; ?>
</table>
                  </div>
            </div>
      </div>
</div>

</form>