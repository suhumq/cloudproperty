<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">List Jurnal</h3>
        <table class="table table-bordered table-striped table_vam" id="dt_jurnals">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nama Account</th>
                    <th>Keterangan</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                </tr>
            </thead>
            <tbody>
            	<?php
                // debug($jurnals);
					foreach ($jurnals as $jurnal): ?>

					<tr>
                        <td><?php echo $this->Time->format('d M Y',$jurnal['Jurnal']['trans_date']);?>&nbsp;</td>
						<td><?php echo h($jurnal['Cashflow']['name']);  ?>&nbsp;<br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo h($jurnal['Jurnal']['account_credit']);  ?>&nbsp;
                        </td>
                        <td><?php echo h($jurnal['Jurnal']['description']);  ?>&nbsp;</td>
                        <td> <?php echo $this->Number->currency(($jurnal['Jurnal']['amount']),'RP');  ?> 
                            <br/>-<br/>
                        </td>
                         <td> 
                            -<br/>
                            <?php echo $this->Number->currency(($jurnal['Jurnal']['amount']),'RP');  ?>
                        </td>
                    </tr>
				<?php endforeach; ?>
            </tbody>
        </table>  
    </div>
</div>  
