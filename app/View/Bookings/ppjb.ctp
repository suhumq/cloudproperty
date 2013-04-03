<br/>
<br/>
<br/>
<br/>
	
<div id="page-wrap">
		<textarea id="header">PERJANJIAN PENGIKATAN JUAL BELI</textarea>
		<div align="center">
		<b> <?php
				echo $this->Form->input('', array('label' => ' ', 'options' => $info_number, 'style' => 'border:0px; -webkit-appearance: none; font-family: Times;
font-size: 15px; font-weight: bold;'));
			?></b>
		<div>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			Pada hari ini <input type="text" placeholder="Minggu" style="border: 0px;
font-family: Times;
width: 50px;
font-size: 15px; font-weight:bold;">, tanggal <input type="text" placeholder="Sembilan Belas Januari tahun Dua Ribu Tiga Belas (19-01-2013)" style="border: 0px;
font-family: Times;
width: 420px;
font-size: 15px; font-weight:bold;"> di Bandung dibuat Perjanjian Pengikatan Jual Beli Rumah yang terletak di Perumahan <?php echo $info_project[0]['Project']['name'] ?> Bandung antara :
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			Nama 
		</td>
		<td width="10px">
			: 
		</td>
		<td>
			<?php echo $info_project[0]['Project']['owner'] ?>
		</td>	
	</tr>
	<tr>
		<td width="150px">
			Pekerjaan 
		</td>
		<td width="10px">
			: 
		</td>
		<td>
			<?php echo $info_project[0]['Project']['job_owner'] ?>
		</td>	
	</tr>
	<tr>
		<td width="150px">
			Alamat 
		</td>
		<td width="10px">
			: 
		</td>
		<td>
			<?php echo $info_project[0]['Project']['address_owner'] ?>
		</td>	
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			Bertindak  untuk dan atas nama Perumahan <?php echo $info_project[0]['Project']['name'] ?>  selanjutnya disebut sebagai :<br/><br/>
		</td>
	</tr>
	<tr>
		<td width="150px">
			------------------------------------------------------------------PIHAK KESATU--------------------------------------------------------------------
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			Nama 
		</td>
		<td width="10px">
			: 
		</td>
		<td>
			<?php echo h($booking['Customer']['name']); ?>
		</td>	
	</tr>
	<tr>
		<td width="150px">
			Pekerjaan 
		</td>
		<td width="10px">
			: 
		</td>
		<td>
			<?php echo h($booking['Customer']['job']); ?> 
		</td>	
	</tr>
	<tr>
		<td width="150px">
			Alamat 
		</td>
		<td width="10px">
			: 
		</td>
		<td>
			<?php echo h($booking['Customer']['address']); ?>
		</td>	
	</tr>
	<tr>
		<td width="150px">
			Telepon 
		</td>
		<td width="10px">
			: 
		</td>
		<td>
			<?php echo h($booking['Customer']['phone']); ?>
		</td>	
	</tr>

</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			Yang selanjutnya sebagai :<br/><br/>
		</td>
	</tr>
	<tr>
		<td width="150px">
			-------------------------------------------------------------------PIHAK KEDUA--------------------------------------------------------------------
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			Menerangkan bahwa dengan ini Pihak Pertama dan Pihak Kedua telah sepakat membuat perjanjian Pengikatan jual beli atas tanah dan bangunan standard kavling  yang terletak di <?php echo $info_project[0]['Project']['name'] ?>, Bandung dengan ketentuan sebagai berikut :
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td align="center" width="150px">
			<b>Pasal 1</b>
		</td>
	</tr>
	<tr>
		<td align="center" width="150px">
			<b>Tanah dan Bangunan</b>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			<textarea rows="3" cols="130">Pihak Pertama berjanji dan dengan ini mengikat diri dan untuk nantinya menjual dan menyerahkan kepada Pihak Kedua atas sebidang tanah ( Hak Milik) berikut bangunan yang akan/sedang/telah dibangun diatasnya dengan data-data sebagai berikut :
			</textarea>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid">
	<tr>
		<td width="100px">
			Kompleks 
		</td>
		<td width="5px">
			: 
		</td>
		<td width="240px">
			<?php echo $info_project[0]['Project']['name'] ?>
		</td>
	</tr>
	<tr>
		<td width="100px">
			No. Kavling
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo h($booking['Unit']['block_unit']); ?></td>
	</tr>
	<tr>
		<td width="100px">
			Sertifikat Induk
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo h($booking['Unit']['certificate']); ?></td>
	</tr>
	<tr>
		<td width="100px">
			Luas Bangunan 
		</td>
		<td width="5px">
			: 
		</td>
		<td width="240px">
			<?php echo h($booking['Unit']['lb']); ?> m2
		</td>
	</tr>
	<tr>
		<td width="100px">
			Luas Tanah 
		</td>
		<td width="5px">
			: 
		</td>
		<td width="240px">
			<?php echo h($booking['Unit']['lt']); ?> m2
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			<textarea rows="3" cols="130">Terletak dalam kompleks <?php echo $info_project[0]['Project']['name'] ?>, Kelurahan <?php echo $info_project[0]['Project']['kelurahan'] ?>  Kecamatan <?php echo $info_project[0]['Project']['kecamatan'] ?>, <?php echo $info_project[0]['Project']['town'] ?>, selanjutnya dalam pengikatan ini disebut sebagai perumahan (data spesifikasi bangunan yang terlampir dalam pengikatan ini merupakan bagian yang tak terpisahkan dalam perjanjian ini)
		</textarea>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td align="center" width="150px">
			<b>Pasal 2</b>
		</td>
	</tr>
	<tr>
		<td align="center" width="150px">
			<b>Harga dan Cara Pembayaran</b>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td style="vertical-align: top;">1.</td>
		<td>
			<span><textarea rows="1" cols="130"> Pihak Pertama  menjual  tanah  dan  bangunan   standar kepada Pihak Kedua  dengan harga jual   <?php echo $this->Number->currency(($booking['Unit']['price_sell']), 'RP'); ?>,- </textarea> (<span style="display:inline;" id="hasil"> </span> rupiah).<br/><br/> <textarea rows="1" cols="130">Harga tersebut belum termasuk Akta Jual Beli serta BPHTB, dengan perincian :</textarea></span>
			
		</td>
	</tr>
</table>
<table id="items" border="1px" style="width:95%">
	<tr>
		<th>
			No
		</th>
		<th>
			Pembayaran
		</th>
		<th>
			Jumlah
		</th>
		<th>
			Tanggal Jatuh Tempo
		</th>
	</tr>
	 <?php
		 $i=1; ?>
	<?php foreach ($jurnal_data as $row): ?>
	<tr>
		<td><?php echo h($i++);?>.</td>
		<td><?php echo h($row['Jurnal']['description']); ?></td>
		<td><?php echo $this->Number->currency(($row['Jurnal']['amount']), 'RP'); ?></td>
		<td><?php echo $this->Time->format('d M Y', $row['Jurnal']['trans_date']); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<table id="items" style="border:0px solid !important; text-align: justify;">
	<tr>
		<td style="vertical-align: top;">2.</td>
		<td>
			<textarea rows="3" cols="125">Setiap pembayaran Pihak Kedua kepada Pihak Pertama dibuktikan dengan kwitansi bermaterai sebagai bukti pembayaran yang sah. Untuk pembayaran dengan transfer/cek/bilyet giro, dianggap sah apabila dana efektif telah diterima Pihak <?php echo $info_project[0]['Project']['name'] ?> melalui :  </textarea><br/><br/> <b>
			<textarea rows="3" cols="110" style="font-weight:bold;">Bank BCA KCU DAGO Bandung  No Rek : 7770273034 a.n. Eri Erlangga (atau) Bank Mandiri KCP R.E. Martadinata No Rek : 131-00-0530801-2 a.n. Eri Erlangga</textarea>
			</b>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td align="center" width="150px">
			<b>Pasal 3</b>
		</td>
	</tr>
	<tr>
		<td align="center" width="150px">
			<b>Pembangunan Rumah</b>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important; text-align: justify;">
	<tr>
		<td style="vertical-align: top;">1.</td>
		<td>
			<textarea rows="3" cols="130" style="text-align:justify;">Pihak Pertama menyanggupi pembangunan rumah yang akan dilaksanakan selama kurang lebih 6 (enam) bulan sesuai dengan kesepakatan kedua belah pihak, terhitung sejak ditandatanganinya perjanjian ini dan disetujuinya gambar rumah
			</textarea>
		</td>
	</tr>
	<tr>
		<td style="vertical-align: top;">2.</td>
		<td>
			<textarea rows="3" cols="130" style="text-align:justify;">Jangka waktu Penyelesaian rumah   ini tidak berlaku bila dalam masa kontruksi, Pihak Kedua menambah/merubah spesifikasi  bangunan, design serta luasan rumah dari gambar yang telah disetujui yang menyebabkan bertambahnya waktu pengerjaan rumah
			</textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2">3. Kondisi Force Majeur</td>
	</tr>
	<tr>
		<td width="10%"></td>
		<td width="70%">
			<textarea rows="2" cols="130" style="text-align:justify;">a. Di dalam hal terjadinya Force Majeur, maka antara kedua belah pihak akan diadakan kesepakatan bersama untuk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;menentukan penyesuaian baru dalam sisa pekerjaan</textarea>
		</td>
	</tr>
	<tr>
		<td width="10px"></td>
		<td>
			<textarea rows="2" cols="130" style="text-align:justify;">b. Yang dapat dianggap dalam klasifikasi Force Majeur adalah Bencana Alam Gempa Bumi, Topan, banjir, longsor yang melanda &nbsp;&nbsp;&nbsp;&nbsp; proyek dan menyebabkan kerusakan sebagian atau seluruh bangunan tersebut</textarea>
		</td>
	</tr>
	<tr>
		<td width="10px"></td>
		<td>
			<textarea rows="3" cols="130" style="text-align:justify;">c. Di dalam hal terjadinya Force Majeur Pihak <?php echo $info_project[0]['Project']['name'] ?> akan membuat laporan secara tertulis kepada pihak pembeli. &nbsp;&nbsp;&nbsp;&nbsp;Laporan tersebut harus menyebutkan secara terperinci serta akibat-akibatnya selambat-lambatnya 2 x 24 jam terhitung &nbsp;&nbsp;&nbsp;&nbsp;peristiwa tersebut terjadi. Apabila lewat dari waktu tersebut maka dianggap tidak terjadi Force Majeur.
				</textarea>
		</td>
	</tr>
	<tr>
		<td style="vertical-align: top;">4.</td>
		<td>
			<textarea rows="3" cols="130" style="text-align:justify;">Jangka waktu Penyelesaian rumah ini tidak berlaku bila dalam masa kontruksi, Pihak Kedua menambah/merubah spesifikasi  bangunan, design serta luasan rumah dari gambar yang telah disetujui yang menyebabkan bertambahnya waktu pengerjaan rumah
		</textarea>
		</td>
	</tr>
	<tr>
		<td style="vertical-align: top;">5.</td>
		<td>
			<textarea rows="3" cols="130" style="text-align:justify;">Bilamana pada tanggal yang telah ditetapkan untuk Serah terima/Ijin Menghuni, Pihak Kedua tidak menandatangani Berita Acara serah Terima/ Ijin Menghuni, maka masa pemeliharaan/garansi yang diberikan oleh Pihak Pertama ditiadakan/dihilangkan
		</textarea>
		</td>
	</tr>
	<tr>
		<td style="vertical-align: top;">6.</td>
		<td>
			<textarea rows="3" cols="130" style="text-align:justify;">Terhitung Ditandatanganinya Berita Acara Serah terima rumah, maka Pihak Kedua akan membayar seluruh kewajiban pembayaran utilitas rumah  yang meliputi  Listrik, PDAM, PBB, Biaya Iuran Lingkungan <?php echo $info_project[0]['Project']['name'] ?> (biaya kebersihan, biaya Listrik lingkungan, biaya keamanan , dll) yang besarnya akan diberitahukan kemudian kepada Pihak Kedua.
		</textarea>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td align="center" width="150px">
			<b>Pasal 4</b>
		</td>
	</tr>
	<tr>
		<td align="center" width="150px">
			<b>Spesifikasi Teknis Pembangunan</b>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td align="left" width="150px">
		Untuk Pembangunan rumah tersebut Pihak Pertama akan menggunakan Spesifikasi sebagai berikut
		</td>
	</tr>
</table>
<table id="items" border="1px" style="width:95%">
	<tr>
		<th>
			No
		</th>
		<th>
			Nama Spesifikasi
		</th>
		<th>
			Keterangan
		</th>
	</tr>
	 <?php
		 $i=1; ?>
	<?php foreach ($info_spec as $row): ?>
	<tr>
		<td><?php echo h($i++);?></td>
		<td><?php echo h($row['UnitSpecification']['name']); ?></td>
		<td><?php echo h($row['UnitSpecification']['description_specification']); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<table id="items" style="border:0px solid !important; text-align: justify;">
	<tr>
		<td align="center" width="150px">
			<b>Pasal 5</b>
		</td>
	</tr>
	<tr>
		<td align="center" width="150px">
			<b>Perubahan Bangunan Serta Upgrade Spesifikasi Material</b>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important; text-align: justify;">
	<tr>
		<td style="vertical-align: top;">1.</td>
		<td><textarea rows="2" cols="130" style="text-align:justify;">Perubahan terhadap bangunan standar setelah perjanjian ini ditandatangi akan dibuat addendum terpisah tanpa mengganggu jadwal pembayaran yang telah disepakati dalam perjanjian ini
		</textarea>
		</td>
	</tr>
	<tr>
		<td style="vertical-align: top;">2.</td>
		<td><textarea rows="3" cols="130" style="text-align:justify;">Upgrade terhadap spesifikasi Material sebelum material terpasang dihitung dari selisih harga jual material yang akan dibuat dalam adendum terpisah tanpa mengganggu jadwal pembayaran yang telah disepakati dalam perjanjian ini
		</textarea>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td align="center" width="150px">
			<b>Pasal 6</b>
		</td>
	</tr>
	<tr>
		<td align="center" width="150px">
			<b>Keterlambatan Pembayaran dan Pembatalan</b>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td style="vertical-align: top;">1.</td>
		<td><textarea rows="1" cols="130" style="text-align:justify;">Keterlambatan Pembayaran dan Pembatalan
		</textarea>
		</td>
	</tr>
	<tr>
		<td style="vertical-align: top;">2.</td>
		<td>
			<textarea rows="1" cols="130" style="text-align:justify;">Pembatalan setelah pembayaran cicilan, dipotong 40% dari harga rumah
		</textarea>
		</td>
	</tr>
	<tr>
		<td style="vertical-align: top;">3.</td>
		<td><textarea rows="2" cols="130" style="text-align:justify;">Apabila terjadi keterlambatan pembayaran yang telah disepakati dalam Pasal 2 di atas mencapai 30 (tiga puluh) hari berturut turut dari tanggal jatuh tempo yang telah ditetapkan, maka dengan sendirinya Pihak Kedua dianggap membatalkan transaksi ini
		</textarea>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td align="center" width="150px">
			<b>Pasal 7</b>
		</td>
	</tr>
	<tr>
		<td align="center" width="150px">
			<b>Perselisihan</b>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td style="vertical-align: top;">1.</td>
		<td>
			<textarea rows="1" cols="130" style="text-align:justify;">Bilamana terjadi perselisihan antara kedua belah pihak pada dasarnya akan diselesaikan secara kekeluargaan.
		</textarea>
		</td>
	</tr>
	<tr>
		<td style="vertical-align: top;">2.</td>
		<td>
			<textarea rows="1" cols="130" style="text-align:justify;">Apabila dengan jalan musyawarah tidak dapat dicapai penyelesaiannya maka akan diselesaikan melalui Pengadilan Negeri Bandung.
		</textarea>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td align="center" width="150px">
			<b>Pasal 8</b>
		</td>
	</tr>
	<tr>
		<td align="center" width="150px">
			<b>Penutup</b>
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important; text-align: justify;">
	<tr>
		<td style="vertical-align: top;">1.</td>
		<td>
			<textarea rows="3" cols="130" style="text-align:justify;">Segala sesuatu yang belum diatur dalam Surat Perjanjian ini atau perubahan-perubahan yang dianggap perlu oleh kedua belah pihak, akan diatur lebih lanjut dalam Surat Perjanjian Tambahan (adendum ) dan merupakan perjanjian yang tidak terpisahkan dari Surat Perjanjian ini.
		</textarea>
		</td>
	</tr>
	<tr>
		<td style="vertical-align: top;">2.</td>
		<td>
			<textarea rows="3" cols="130" style="text-align:justify;">Surat Perjanjian ini berlaku sah sejak ditandatangani oleh kedua belah pihak, dibuat rangkap dua, bermaterai cukup dan mempunyai kekuatan hukum yang sama, dibuat dalam keadaan sehat jasmani dan rohani seta dengan itikad yang baik, pada hari dan tanggal tersebut diatas
		</textarea>
		</td>
	</tr>
</table>
<br/>
<br/>
<p align="center">Bandung, <input type="text" placeholder="19 November 2013" style="border: 0px;
font-family: Times;
width: 150px;
font-size: 15px;"></p>
<br/>
<br/>
<span style="padding-right:470px">Pihak Pertama</span><span align="right">Pihak Kedua</span>
<br/>
<br/>
<br/>
<br/>
<br/>
<span style="padding-right:400px">(___________________)</span><span align="right">(___________________)</span>
<br/>
<br/>
<br/>
<br/>
	<textarea id="header">PERJANJIAN PENGIKATAN JUAL BELI (lembar developer)</textarea>
	<div align="center">
		Kav No. <input type="text" placeholder="Input Nomor Kavling" style="border: 0px;
font-family: Times;
width: 180px;
font-size: 15px;">
	<div>
<br/>
<br/>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td style="vertical-align: top;">1.</td>
		<td>
			Sehubungan dengan penambahan dan perubahan spesifikasi bangunan maka pihak kedua perlu menambahkan kekurangan pembayaran yang meliputi
		</td>
	</tr>
</table>
<table id="items" border="1px" style="width:95%">
	<tr>
		<th>
			No
		</th>
		<th>
			Nama Spesifikasi
		</th>
		<th>
			Keterangan
		</th>
	</tr>
	 <?php
		 $i=1; ?>
	<?php foreach ($info_spec as $row): ?>
	<tr>
		<td><?php echo h($i++);?></td>
		<td><?php echo h($row['UnitSpecification']['name']); ?></td>
		<td><?php echo h($row['UnitSpecification']['description_specification']); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td style="vertical-align: top;">2.</td>
		<td>
			Pembayaran penambahan luas bangunan akan dilakukan sekaligus belum dibayarkan selambat lambatnya pada <input type="text" placeholder="19 November 2013" style="border: 0px;
font-family: Times;
width: 150px;
font-size: 15px;">
		</td>
	</tr>
</table>
<br/>
<br/>
<p align="center">Bandung, <input type="text" placeholder="19 November 2013" style="border: 0px;
font-family: Times;
width: 150px;
font-size: 15px;"></p>
<br/>
<br/>
<span style="padding-right:470px">Pihak Pertama</span><span align="right">Pihak Kedua</span>
<br/>
<br/>
<br/>
<br/>
<br/>
<span style="padding-right:400px">(___________________)</span><span align="right">(___________________)</span>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</div>
