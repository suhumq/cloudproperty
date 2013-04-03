<div class="row-fluid">
<div class="span6">
	<h3 class="heading">Info Customer & Unit Booking</h3>
	<?php echo $this->Form->create('Booking', array('class' => 'form_validation_ttip'));?>
			<div class="row-fluid">
				<div class="span12">
					<label>Nomor Booking <span class="f_req">*</span></label>
					<?php echo $this->Form->text('no_booking', array('class' => 'span2 required', 'readonly' => 'true', 'minlength' => '3')); ?>
					<?php echo $this->Form->input('customer_id', array('label' => 'Nama Customer','type' => 'select', 'class' => 'span4 chzn_project')); ?>
					<?php echo $this->Form->input('sale_id', array('label' => 'Marketing','type' => 'select', 'class' => 'span4 chzn_sale')); ?>
					
					<?php echo $this->Form->input('unit_id', array('label' => 'Nama Unit','type' => 'select', 'class' => 'span4 chzn_unit')); ?>
					<?php
					$sizes = array('1' => 'KPR', '2' => 'Cash Bertahap', '3' => 'Cash');
					echo $this->Form->input('trans_type', array('label' => 'Tipe Transaksi', 'options' => $sizes, 'default' => '3'));
					 ?>
					 <?php
					$sizes = array('1' => 'PENDING', '2' => 'LUNAS');
					echo $this->Form->input('trans_status', array('label' => 'Status Transaksi', 'options' => $sizes, 'default' => '1'));
					echo $this->Form->text('id', array('type' => 'hidden','value'=>$data['Booking']['id'])); 
                                        ?>
				</div>
			</div>			
			<div class="row-fluid">
					<div class="span12">
						<label>Catatan <span class="f_req"></span></label>
						<?php echo $this->Form->textarea('description_booking', array( 'cols' => '40','rows' => '5', 'class' => '', 'minlength' => '0')); ?>
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
            	<?php 
               
               //debug($data['Requirement']);
                foreach ($requires as $row): 
                      $checked = "";?>
                <?php foreach($data['Requirement'] as $req):?>
                        <?php //debug($req);
                        if($req['name'] == $row['requirements']['name']){
                            $checked = "true";
                        }
?>
            		
                    <?php endforeach;?>
                <tr>
            		   <td><?php echo $this->Form->checkbox('id', array('name' => 'booking[requirement_ids][]','checked'=>$checked,'value' => $row['requirements']['id'])); ?></td>
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
                    <?php echo $this->Form->input('down_payment', array('label' => '', 'type' => 'text', 'class' => 'field-price', 'minlength' => '3')); ?>
                    <span class="add-on coma">.00</span>
                </div>
				<label>Rencana KPR <span class="f_req"></span></label>
                <div class="input-prepend input-append input-price">
                    <span class="add-on">Rp.</span>
                    <?php echo $this->Form->input('kpr_plan', array('label' => '', 'type' => 'text', 'class' => 'field-price', 'minlength' => '3')); ?>
                    <span class="add-on coma">.00</span>
                </div>
                <br/>
            	
				<div class="row-fluid">
					<div class="span3">
						<label>Jangka Waktu KPR <span class="f_req"></span></label>
						<?php
						echo $this->Form->text('kpr_time', array('class' => 'span5', 'minlength' => '1')); ?> Tahun
					</div>
				</div>	
	<div class="form-actions">
		<button class="btn btn-inverse" type="submit">Save changes</button>
		<button class="btn" type="reset">Cancel</button>
	</div>
</div>
  
