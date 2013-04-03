<br/>
<br/>
<br/>
<br/>
<div id="page-wrap">
<table id="items" style="border:0px solid !important;">
	<tr>
		<td colspan="3" width="150px">
			Bandung,  <?php echo $this->Time->format('d M Y',time()); ?> 
		</td>
	</tr>
	<tr>
		<td width="150px">
			Nomor 
		</td>
		<td width="10px">
			: 
		</td>
		<td>
			<?php
				echo $this->Form->input('', array('label' => ' ', 'options' => $info_number, 'style' => 'border:0px; -webkit-appearance: none; font-family: Times;
font-size: 15px;'));
			?>
		</td>	
	</tr>
	<tr>
		<td width="150px">
			Perihal 
		</td>
		<td width="10px">
			: 
		</td>
		<td>
			Surat Permohonan Proses AJB
		</td>	
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td colspan="2" width="150px">
			Kepada : 
		</td>
	</tr>
	<tr>
		<td width="150px">
			<input type="text" placeholder="Input Nama Notaris" style="border: 0px;
font-family: Times;
width: 150px;
font-size: 15px;">
		</td>
	</tr>
	<tr>
		<td width="150px">
			<input type="text" placeholder="Alamat Notaris" style="border: 0px;
font-family: Times;
width: 150px;
font-size: 15px;">
		</td>
	</tr>
</table>

<table id="items" style="border:0px solid !important; text-align: justify;">
	<tr>
		<td colspan="2" width="150px">
			Dengan Hormat, 
		</td>
	</tr>
	<tr>
		<td width="150px">
			Sehubungan dengan telah adanya pembelian rumah/kavling, maka dengan ini kami mohon kepada Ibu untuk dapat memproses nama tersebut dibawah ini :
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

<table id="items" style="border:0px solid !important; text-align: justify;">
	<tr>
		<td width="150px">
			Untuk Pengurusan Akte jual Beli, BBN dengan Pihak <?php echo $info_project[0]['Project']['name'] ?>, adapun data yang dapat kami berikan adalah sebagai berikut
		</td>
	</tr>
</table>

<table id="items" style="border:0px solid">
	<tr>
		<td width="20px">
			No. Kavling
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo h($booking['Unit']['block_unit']); ?></td>
	</tr>
	<tr>
		<td width="20px">
			Sertifikat Induk
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo h($booking['Unit']['certificate']); ?></td>
	</tr>
	<tr>
		<td width="20px">
			Luas Bangunan 
		</td>
		<td width="5px">
			: 
		</td>
		<td width="20px">
			<?php echo h($booking['Unit']['lb']); ?> m2
		</td>
	</tr>
	<tr>
		<td width="20px">
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
			Bersama dengan ini kami lampirkan dokumen-dokumen yang dibutuhkan, atas kerjasamanya kami ucapkan terimakasih  
		</td>
	</tr>
</table>

<br/>
<p align="left">&nbsp;Hormat Kami,</p>
<br/>
<span style="padding-right:650px">&nbsp;<?php echo $info_project[0]['Project']['name'] ?></span>
<br/>
<br/>
<br/>
<br/>
<br/>
<span style="padding-right:700px">&nbsp;(___________________)</span>
<br/>
<br/>
</div>
