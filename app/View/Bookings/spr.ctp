<br/>
<br/>
<br/>
<br/>
<div id="page-wrap">
		<textarea id="header">SURAT PEMESANAN RUMAH</textarea>
		<div align="center">
		<i>(Lembar untuk <input type="text" style="border: 0px;
font-family: Times;
width: 60px;
font-size: 14px;
font-style: italic;">)</i>
		<div>
		<div id="identity">
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
			No KTP 
		</td>
		<td width="10px">
			: 
		</td>
		<td>
			<?php echo h($booking['Customer']['ktp']); ?>
		</td>	
	</tr>
	<tr>
		<td width="150px">
			No Telp 
		</td>
		<td width="10px">
			: 
		</td>
		<td>
			<?php echo h($booking['Customer']['phone']); ?>
		</td>	
	</tr>
</table>
<br/>
<div align="left">
<i><b>Kavling yang dipesan dan Harga pengikatan</b></i>
</div>
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
		<td width="100px">Nomor Kavling</td>
		<td width="5px">:</td>
		<td width="50px"><?php echo h($booking['Unit']['block_unit']); ?></td>
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
		<td>Luas Tanah</td>
		<td>:</td>
		<td><?php echo h($booking['Unit']['lt']); ?> m2</td>
	</tr>
	<tr>
		<td width="100px">
			Harga Brosur
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo $this->Number->currency($booking['Unit']['price_brochure'],'Rp.'); ?></td>
		<td>Harga Jual</td>
		<td>:</td>
		<td><?php echo $this->Number->currency($booking['Unit']['price_sell'], 'Rp.'); ?></td>
	</tr>
	<tr>
		<td width="100px">
			Catatan
		</td>
		<td width="5px">
			: 
		</td>
		<td><?php echo h($booking['Unit']['description']); ?></td>
	</tr>
</table>
<br/>
<div align="left">
<b><u>Jadwal Pembayaran</u></b>
</div>
<table id="items" style="border: 0px solid black;">
	<tr>
		<td width="120px">
			Cara Pembayaran 
		</td>
		<td width="5px">
			: 
		</td>
		<td>
			<?php
	            if ($booking['Booking']['trans_type'] == '1'):
	                echo "KPR";
	            elseif ($booking['Booking']['trans_type'] == '2'):
	                echo "Cash Bertahap";
	            else:
	                echo "Cash";
	            endif;
	             ?>
       </td>
	</tr>
	<tr>
		<td width="120px">
			
		</td>
		<td width="5px">
			: 
		</td>
		<td>
			<?php echo $this->Number->currency($booking['Booking']['kpr_plan'],'Rp.'); ?>
		</td>
	</tr>
</table>
<br/>
<textarea rows="2" cols="130">Melalui rekening Bank BCA KCU DAGO Bandung No Rek : 7770273034 a.n. Eri Erlangga (atau) Bank Mandiri KCP R.E. Martadinata No Rek : 131-00-0530801-2 a.n. Eri Erlangga </textarea>
<table id="items" border="1px">
	<tr>
		<th>
			No
		</th>
		<th>
			Cicilan Pembayaran
		</th>
		<th>
			Tanggal
		</th>
		<th>
			Jumlah
		</th>
	</tr>
	 <?php
		 $i=1; ?>
	<?php foreach ($jurnal_data as $row): ?>
	<tr>
		<td><?php echo h($i++);?></td>
		<td><?php echo h($row['Jurnal']['description']); ?></td>
		<td><?php echo $this->Time->format('d M Y', $row['Jurnal']['trans_date']); ?></td>
		<td><?php echo $this->Number->currency(($row['Jurnal']['amount']), 'RP'); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<br/>
<p align="left">Catatan : <i><?php echo h($booking['Booking']['description_booking']); ?> </i></p>
<br/>
<p align="left">Bandung, <?php echo $this->Time->format('d M Y',time()); ?>  </p>
<br/>
<span style="padding-right:500px">Konsumen</span><span align="right">Marketing</span>
<br/>
<br/>
<br/>
<br/>
<br/>
<span style="padding-right:400px">(___________________)</span><span align="right">(___________________)</span>
<br/>