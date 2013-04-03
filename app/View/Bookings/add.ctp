<div class="row-fluid">
    <div class="span6">
		<h3 class="heading">Tambah Booking Baru</h3>
		<?php echo $this->Form->create('Booking', array('class' => 'form_validation_ttip'));?>
			<div class="formSep">
				<div class="row-fluid">
					<div class="span7">
						<label>Nomor Booking <span class="f_req">*</span></label>
						<?php
						echo $this->Form->text('no_booking', array('class' => 'span8 required', 'readonly' =>'true', 'minlength' => '3', 'value' => 'BO2013' . (string)$invoice[0][0]['MAX(id)']  )); ?>
					</div>
				</div>
				<div class="row-fluid">
						<div class="span12">
						<!-- <p><span class="label label-inverse">Enhanced Select</span></p> -->
						<?php echo $this->Form->input('customer_id', array('label' => 'Nama Customer','type' => 'select', 'class' => 'chzn_project')); ?>
					</div>
				</div>
				<div class="row-fluid">
						<div class="span12">
						<?php echo $this->Form->input('unit_id', array('label' => 'Nama Unit','type' => 'select', 'class' => 'chzn_unit')); ?>
					</div>
				</div>
				<div class="row-fluid">
						<div class="span12">
						<?php echo $this->Form->input('sale_id', array('label' => 'Marketing','type' => 'select', 'class' => 'chzn_sale')); ?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<?php
						$sizes = array('1' => 'KPR', '2' => 'Cash Bertahap', '3' => 'Cash');
						echo $this->Form->input('trans_type', array('label' => 'Tipe Transaksi', 'options' => $sizes, 'default' => 'm'));
						 ?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<?php
						$sizes = array('1' => 'PENDING', '2' => 'LUNAS');
						echo $this->Form->input('trans_status', array('label' => 'Status Transaksi', 'options' => $sizes, 'default' => 'm'));
						 ?>
					</div>
				</div><br/>
				
				<div class="row-fluid">
					<div class="span12">
						<label>Catatan <span class="f_req">*</span></label>
						<?php echo $this->Form->textarea('description_booking', array( 'cols' => '40','rows' => '5', 'class' => 'required', 'minlength' => '0')); ?>
					</div>
				</div>
			</div>
			
    </div>
    <div class="span6">
		<h3 class="heading">Persyaratan Jika KPR</h3>
		<table class="table table-bordered table-striped table_vam">
            <thead>
                <tr>
                	<th>Remark</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
            	<?php foreach ($requires as $row): ?>
            		<tr>
            		   <td><?php echo $this->Form->checkbox('requirement', array('name' => 'booking[requirement_ids][]','value' => $row['requirements']['id'])); ?></td>
					   <td><?php echo h($row['requirements']['name']); ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table> 
        <table class="table table-bordered table-striped table_vam" id="dt_units_list">
            <thead>
                <tr>
                    <th>Nama Project</th>
                    <th>Nama Unit</th>
                    <th>Tipe Rumah</th>
                    <th>Nomor Kavling</th>
                    <th>Harga Brosur</th>
                    <th>Harga Jual</th>
                </tr>
            </thead>
            <tbody>
            	<?php
					foreach ($units_list as $unit): ?>
					<tr>
                        <td><?php echo h($unit['Project']['name']);  ?>&nbsp;</td>
						<td><?php echo h($unit['Unit']['name']);  ?>&nbsp;</td>
                        <td><?php echo h($unit['Unit']['lb']);  ?> / <?php echo h($unit['Unit']['lt']);  ?> &nbsp;</td>
						<td><?php echo h($unit['Unit']['block_unit']);  ?>&nbsp;</td>
                        <td><?php echo $this->Number->currency(($unit['Unit']['price_brochure']), 'RP');   ?>&nbsp;</td>
                        <td><?php echo $this->Number->currency(($unit['Unit']['price_sell']), 'RP');   ?>&nbsp;</td>
                   </tr>
				<?php endforeach; ?>
            </tbody>
        </table>  
        		<label>Uang Muka <span class="f_req"></span></label>
                <div class="input-prepend input-append input-price">
                    <span class="add-on">Rp.</span>
                    <?php echo $this->Form->input('down_payment', array('label' => '', 'type' => 'text', 'class' => 'field-price currency', 'minlength' => '3')); ?>
                    <span class="add-on coma">.00</span>
                </div>
				<label>Rencana KPR <span class="f_req"></span></label>
                <div class="input-prepend input-append input-price">
                    <span class="add-on">Rp.</span>
                    <?php echo $this->Form->input('kpr_plan', array('label' => '', 'type' => 'text', 'class' => 'field-price currency', 'minlength' => '3')); ?>
                    <span class="add-on coma">.00</span>
                </div>
                <br/>
            	
				<div class="row-fluid">
					<div class="span3">
						<label>Jangka Waktu KPR <span class="f_req"></span></label>
						<?php
						echo $this->Form->text('kpr_time', array('class' => 'span5 number', 'minlength' => '1')); ?> Tahun
					</div>
				</div>	
        <div class="form-actions">
				<button class="btn btn-inverse" type="submit">Save changes</button>
				<button class="btn" type="reset">Cancel</button>
			</div>
        </div>
</div>