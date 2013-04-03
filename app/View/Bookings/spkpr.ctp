<br/>
<br/>
<br/>
<br/>
<div id="page-wrap">

<table id="items" style="border:0px solid !important;">
	<tr>
		<td colspan="3" width="150px">
			Bandung, <?php echo $this->Time->format('d F Y',time()); ?>  
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
				echo $this->Form->input('', array('label' => '', 'options' => $info_number, 'style' => 'border:0px; -webkit-appearance: none; font-family: Times;
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
			Surat Permohonan Proses KPR
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
			 <?php
				echo $this->Form->input('', array('label' => 'Bank ', 'options' => $info_bank, 'style' => 'border:0px; -webkit-appearance: none; font-family: Times;
font-size: 15px;'));
			?>
			<input type="text" placeholder="Masukan Alamat Bank" style="border: 0px;
font-family: Times;
width: 290px;
font-size: 15px;"><br/>
						<input type="text" placeholder="Masukan Kota Bank" style="border: 0px;
font-family: Times;
width: 200px;
font-size: 15px;"><br/>
		</td>
	</tr>
</table>

<table id="items" style="border:0px solid !important;">
	<tr>
		<td colspan="2" width="150px">
			Dengan Hormat, 
		</td>
	</tr>
	<tr>
		<td width="150px" style="
    text-align: justify;
">
			Sehubungan dengan telah adanya rencana pembelian rumah dengan fasilitas Kredit Pemilikan Rumah (KPR),  maka dengan ini kami mohon kepada Bapak / Ibu untuk dapat memproses nama tersebut dibawah ini :
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
		<td width="600px">
			Bermaksud untuk mengajukan Kredit Pemilikan Rumah (KPR) kepada : 
		</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px">
			Nama Bank 
		</td>
		<td width="10px">
			: 
		</td>
		<td>
			<?php echo $this->Form->input('', array('options' => $info_bank, 'style' => 'width:100px; border:0px; -webkit-appearance: none; font-family: Times; font-size: 15px;')); ?>
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
			<input type="text" placeholder="Masukan Alamat Bank" style="border: 0px;
font-family: Times;
width: 290px;
font-size: 15px;"><br/>
		</td>	
	</tr>
	<tr>
		<td width="150px">
			Kota
		</td>
		<td width="10px">
			: 
		</td>
		<td>
			<input type="text" placeholder="Masukan Kota Bank" style="border: 0px;
font-family: Times;
width: 200px;
font-size: 15px;"><br/>
		</td>	
	</tr>	
</table>

<table id="items" style="border:0px solid">
	<tr>
		<td width="150px">
			Maka informasi yang dapat kami berikan adalah sebagai berikut : 
		</td>
	</tr>
</table>
		
<table id="items" style="border:0px solid">
	<tr>
		<td width="150px">
			Kompleks 
		</td>
		<td width="5px">
			: 
		</td>
		<td>
			<?php echo $info_project[0]['Project']['name'] ?>
		</td>
	</tr>
	<tr>
		<td width="150px">
			No. Kavling
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo h($booking['Unit']['block_unit']); ?></td>
	</tr>
	<tr>
		<td width="150px">
			Sertifikat Induk
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo h($booking['Unit']['certificate']); ?></td>
	</tr>
	<tr>
		<td width="150px">
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
		<td width="150px">
			Luas Tanah 
		</td>
		<td width="5px">
			: 
		</td>
		<td>
			<?php echo h($booking['Unit']['lt']); ?> m2
		</td>
	</tr>
	<tr>
		<td width="150px">
			Harga Jual
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo $this->Number->currency($booking['Unit']['price_sell'], 'Rp.'); ?></td>
	</tr>
	<tr>
		<td width="150px">
			Uang Muka
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo $this->Number->currency($booking['Booking']['down_payment'], 'Rp.'); ?></td>
	</tr>
	<tr>
		<td width="150px">
			Rencana KPR
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo $this->Number->currency($booking['Booking']['kpr_plan'], 'Rp.'); ?></td>
	</tr>
	<tr>
		<td width="150px">
			Jangka Waktu
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo h($booking['Booking']['kpr_time']); ?> Tahun</td>
	</tr>
</table>
<table id="items" style="border:0px solid !important;">
	<tr>
		<td width="150px" style="
    text-align: justify;
">
			Bersama dengan ini kami lampirkan syarat-syarat permohonan KPR untuk konsumen yang bersangkutan, atas kerjasamanya kami ucapkan terimakasih 
		</td>
	</tr>
</table>

<br/>
<p align="left">&nbsp;&nbsp;Hormat Kami,</p>
<br/>
<span style="padding-right:650px">&nbsp;&nbsp;<?php echo $info_project[0]['Project']['name'] ?></span>
<br/>
<br/>
<br/>
<br/>
<br/>
<span style="padding-right:700px">&nbsp;&nbsp;(___________________)</span>
<br/>
<br/>
<br/>

