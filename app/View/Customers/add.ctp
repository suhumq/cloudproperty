<div class="row-fluid">
    <div class="span6">
		<h3 class="heading">Tambah Konsumen Baru</h3>
		<?php echo $this->Form->create('Customer', array('class' => 'form_validation_ttip'));?>
			<div class="formSep">
				<div class="row-fluid">
					<div class="span12">
						<label>Nama <span class="f_req">*</span></label>
						<?php
						echo $this->Form->text('name', array('class' => 'span8 required','minlength' => '2')); ?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label>KTP <span class="f_req">*</span></label>
						<?php
						echo $this->Form->text('ktp', array('class' => 'span8 required','minlength' => '9')); ?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label>Tempat Lahir <span class="f_req"></span></label>
						<?php
						echo $this->Form->text('place_birth', array('class' => 'span8', 'minlength' => '3')); ?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span3">
						<label>Tanggal Lahir <span class="f_req"></span></label>
						<?php
						echo $this->Form->text('birthday', array('class' => 'span8', 'minlength' => '3', 'id'=> 'birthday')); ?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label>Alamat <span class="f_req">*</span></label>
						<?php
						echo $this->Form->text('address', array('class' => 'span8 required', 'minlength' => '3')); ?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label>Telepon <span class="f_req">*</span></label>
						<?php
						echo $this->Form->text('phone', array('class' => 'span8 required', 'minlength' => '3')); ?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label>Pekerjaan <span class="f_req">*</span></label>
						<?php
						echo $this->Form->text('job', array('class' => 'span8 required', 'minlength' => '3')); ?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<?php
						$sizes = array('1' => 'Pending', '2' => 'Prospek', '3' => 'Deal');
						echo $this->Form->input('status', array('label' => 'Status', 'options' => $sizes, 'default' => 'm'));
						 ?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label>Keterangan</label>
						<?php echo $this->Form->textarea('description', array( 'cols' => '40','rows' => '5')); ?>
					</div>
				</div>
			
			</div>
			<div class="form-actions">
				<button class="btn btn-inverse" type="submit">Save changes</button>
				<button class="btn" type="reset">Cancel</button>
			</div>
    </div>
</div>