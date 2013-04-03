<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Data Konsumen</h3>
         <div align="right">
      <?php echo $this->Html->link(__('Tambah Konsumen Baru', true), array('controller' => 'Customers', 'action' => 'add'),array('class' => 'btn btn-info'));?>
    </div>
    <br/>
        <table class="table table-bordered table-striped table_vam" id="dt_customers">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>No KTP</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Pekerjaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            	<?php
					foreach ($customers as $customer): ?>
					<tr>
						<td><?php echo h($customer['Customer']['name']);  ?>&nbsp;</td>
                        <td><?php echo h($customer['Customer']['ktp']);  ?>&nbsp;</td>
                        <td><?php echo h($customer['Customer']['place_birth']);  ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['birthday']);  ?>&nbsp;</td>
                        <td><?php echo h($customer['Customer']['address']);  ?>&nbsp;</td>
                        <td><?php echo h($customer['Customer']['phone']);  ?>&nbsp;</td>
                        <td><?php echo h($customer['Customer']['job']);  ?>&nbsp;</td>
                       
                        <td>
                             <?php if ($customer['Customer']['status']  != '3'): ?>
                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['id'])); ?>&nbsp;&nbsp;&nbsp;
                                <?php echo $this->Form->postLink(__('Hapus'), array('action' => 'delete', $customer['Customer']['id']), null, __('Anda yakin akan menghapus data : %s ?', $customer['Customer']['name'])); ?>
                              <?php else: ?>
                               <?php if ($this->Session->read('Auth.User.role')  == '1'): ?>
                                <?php echo $this->Html->link(__('Deal'), array('action' => 'edit', $customer['Customer']['id'])); ?>&nbsp;&nbsp;&nbsp;
                               <?php else: ?>
                                <?php echo 'Deal' ?>
                                <?php endif; ?>
                              <?php endif; ?>
						</td>
                      
					</tr>
				<?php endforeach; ?>
            </tbody>
        </table>  
    </div>
</div>  
