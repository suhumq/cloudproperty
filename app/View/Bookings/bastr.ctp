<br/>
<br/>
<br/>
<br/>

<div id="page-wrap">
	  	<textarea id="header">BERITA ACARA SERAH TERIMA RUMAH</textarea>
		

<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			Pada hari ini <input type="text" placeholder="Minggu" style="border: 0px;
font-family: Times;
width: 50px;
font-size: 15px; font-weight:bold;">, tanggal <input type="text" placeholder="18 November 2013" style="border: 0px;
font-family: Times;
width: 130px;
font-size: 15px; font-weight:bold;">  yang bertandatangan dibawah ini :
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
			Jabatan 
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
			Bertindak untuk dan atas nama Perumahan  <?php echo $info_project[0]['Project']['name'] ?>, yang selanjutnya disebut Pihak Pertama.
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
			<?php echo h($booking['Customer']['address']); ?> <i>(Alamat surat menyurat)</i>
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
			Sebagai pihak pembeli yang selanjutnya disebut sebagai Pihak Kedua.
		</td>
	</tr>
</table>

<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			Dengan ini kedua belah pihak bersepakat dengan hal-hal sebagai berikut :
		</td>
	</tr>
</table>

<textarea id="header">Pasal 1</textarea>
<table id="items" style="border:0px solid !important;text-align: justify;">
	<tr>
		<td width="150px">
			Dengan ini Pihak Kedua menyatakan telah  melaksanakan pemeriksaan secara seksama atas unit rumah pesanan Pihak Kedua yang dibangun oleh Pihak <?php echo $info_project[0]['Project']['name'] ?> dengan  rincian sebagai berikut :
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid">
	<tr>
		<td width="150px">
			Type/Kavling
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo h($booking['Unit']['block_unit']); ?></td>
	</tr>
	<tr>
		<td>
			Sertifikat Induk
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo h($booking['Unit']['certificate']); ?></td>
	</tr>
	<tr>
		<td>
			Luas Bangunan 
		</td>
		<td width="5px">
			: 
		</td>
		<td>
			<?php echo h($booking['Unit']['lb']); ?> m2
		</td>
	</tr>
	<tr>
		<td>
			Luas Tanah 
		</td>
		<td width="5px">
			: 
		</td>
		<td>
			<?php echo h($booking['Unit']['lt']); ?> m2
		</td>
	</tr>
</table>

<textarea id="header">Pasal 2</textarea>
<table id="items" style="border:0px solid !important; text-align: justify;">
	<tr>
		<td width="150px">
			Pihak Kedua menyatakan bahwa bobot prestasi pengerjaan rumah per tanggal <input type="text" placeholder="18 November 2013" style="border: 0px;
font-family: Times;
width: 130px;
font-size: 15px; font-weight:bold;"> telah mencapai 100 % secara kualitatif, dan dengan ini menyatakan menerima penyerahan rumah dari Pihak Pertama
		</td>
	</tr>
</table>

<textarea id="header">Pasal 3</textarea>
<table id="items" style="border:0px solid !important; text-align: justify;">
	<tr>
		<td width="150px">
			Pihak Kedua akan membayar seluruh kewajiban pembayaran utilitas rumah  yang meliputi  Listrik, PDAM, PBB, Biaya Iuran Lingkungan Amaya Residence terhitung Ditandatanganinya Berita Acara Serah terima rumah
		</td>
	</tr>
</table>

<textarea id="header">Pasal 4</textarea>
<table id="items" style="border:0px solid !important; text-align: justify;">
	<tr>
		<td width="150px">
			Biaya Iuran Lingkungan <?php echo $info_project[0]['Project']['name'] ?> meliputi biaya kebersihan, biaya Listrik lingkungan, biaya keamanan, dll yang besarnya akan diberitahukan kemudian kepada Pihak Kedua
		</td>
	</tr>
</table>

<textarea id="header">Pasal 5</textarea>
<table id="items" style="border:0px solid !important; text-align: justify;">
	<tr>
		<td width="150px">
			Pihak Pertama memberikan masa garansi/pemeliharaan rumah selama Satu (1) bulan serta jaminan  perbaikan  minor  yang  tertuang  dalam check list perbaikan  yang dibuat saat ditandatanganinya Berita Acara ini
		</td>
	</tr>
</table>

<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			Demikian berita acara ini dibuat untuk dipergunakan sebagaimana mestinya
		</td>
	</tr>
</table>

<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			Bandung, <input type="text" placeholder="18 November 2013" style="border: 0px;
font-family: Times;
width: 130px;
font-size: 15px; font-weight:bold;">
		</td>
	</tr>
</table>
<br/>
<span style="padding-right: 481px;
padding-left: 29;">Pihak Pertama</span><span align="right">Pihak Kedua</span>
<br/>
<br/>
<br/>
<br/>
<br/>
<span style="padding-right:400px">(___________________)</span><span align="right">(___________________)</span>
<br/>
<br/>
<br/>
<span style="padding-right:550px;padding-left: 15;">Kepala Team Teknik</span>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<span style="padding-right:550px">(___________________)</span>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<textarea id="header">DAFTAR PERBAIKAN MINOR</textarea>
<p align="center">( Diisi saat Berita Acara Serah Terima Rumah dilakukan )</p>
<br/>
<table id="items" border="1px">
	<tr>
		<th>
			No.
		</th>
		<th>
			Jenis Perbaikan Minor 
		</th>
		<th>Jenis Perbaikan</th>
	</tr>
	 <?php
		 $i=1; ?>
	<?php foreach ($info_minor as $row): ?>
	<tr>
		<td><?php echo h($i++);?>.</td>
		<td><?php echo h($row['MinorAddition']['minor_name']); ?></td>
		<td><?php echo h($row['MinorAddition']['minor_description']); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<br/>
<br/>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			Bandung, <input type="text" placeholder="18 November 2013" style="border: 0px;
font-family: Times;
width: 130px;
font-size: 15px; font-weight:bold;">
		</td>
	</tr>
	<tr>
		<td>
			Diketahui oleh :
		</td>
	</tr>
</table>
<br/>
<span style="padding-right:200px;padding-left:60px">Marketing</span><span style="padding-left:10px">Konsumen</span><span style="padding-left:220px;">Kontraktor</span>
<br/>
<br/>
<br/>
<br/>
<br/>
<span style="padding-left:10px">(___________________)</span><span style="padding-left:120px">(___________________)</span><span style="padding-left:120px">(___________________)</span>
<br/>
<br/>
<br/>
</div>
