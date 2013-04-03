<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Data Pemesanan Unit</h3>
         <div align="right">
      <?php echo $this->Html->link(__('Tambah Pemesanan Baru', true), array('controller' => 'Bookings', 'action' => 'add'),array('class' => 'btn btn-info'));?>
    </div>
    <br/>
        <table class="table table-bordered table-striped table_vam" id="dt_bookings">
            <thead>
                <tr>
                    <th>No. Pemesanan</th>
                    <th>Tanggal</th>
                    <th>Konsumen</th>
                    <th>Telepon</th>
                    <th>Info Unit</th>
                    <th>Cash/KPR</th>
                    <th>Status Transaksi</th>
                    <?php if ($this->Session->read('Auth.User.role')  == '1'): ?>
                    <th>Manajemen Surat</th>
                    <th>Marketing</th>
                <?php endif;?>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($bookings as $booking): ?>
                    <tr>
                        <td> <?php echo $this->Html->link(__($booking['Booking']['no_booking']), array('action' => 'edit', $booking['Booking']['id']),array('class' => '')); ?>&nbsp;&nbsp;&nbsp;</td>
                        <td><?php echo $this->Time->format( 'd/m/y',$booking['Booking']['created']);?>&nbsp;</td>
                        <td><?php echo h($booking['Customer']['name']);  ?>&nbsp;</td>
                        <td><?php echo h($booking['Customer']['phone']);  ?>&nbsp;</td>
                        <td><?php echo h($booking['Unit']['name']); ?> - <?php echo h($booking['Unit']['lb']);  ?> / <?php echo h($booking['Unit']['lt']);  ?>&nbsp;</td>
                        <td><?php
                        if ($booking['Booking']['trans_type'] == '1'):
                            echo "KPR";
                        elseif ($booking['Booking']['trans_type'] == '2'):
                            echo "Cash Bertahap";
                        else:
                            echo "Cash";
                        endif;
                         ?>&nbsp;</td>
                         <td><?php
                        if ($booking['Booking']['trans_status'] == '1'):
                            echo $this->Html->link(__('Pending'), array('action' => 'transaction', $booking['Booking']['id']),array('class' => ''));
                        else:
                            echo $this->Html->link(__('Lunas'), array('action' => 'transaction', $booking['Booking']['id']),array('class' => ''));
                        endif;
                         ?>&nbsp; | <?php echo $this->Html->link(__('Print'), array('action' => 'print_booking', $booking['Booking']['id']),array('class' => '')); ?></td>
                         <?php if ($this->Session->read('Auth.User.role')  == '1'): ?>
                    
                         <td>
                            <?php echo $this->Html->link(__('SPR'), array('action' => 'spr', $booking['Booking']['id']),array('class' => '')); ?>&nbsp;&nbsp;&nbsp;
                            <?php echo $this->Html->link(__('SPKPR'), array('action' => 'spkpr', $booking['Booking']['id']),array('class' => '')); ?>&nbsp;&nbsp;&nbsp;
                            <?php echo $this->Html->link(__('PPJB'), array('action' => 'ppjb', $booking['Booking']['id']),array('class' => '')); ?>&nbsp;&nbsp;&nbsp;
                            <?php echo $this->Html->link(__('SPAJBN'), array('action' => 'spajbn', $booking['Booking']['id']),array('class' => '')); ?>&nbsp;&nbsp;&nbsp;
                            <?php echo $this->Html->link(__('BASTR'), array('action' => 'bastr', $booking['Booking']['id']),array('class' => '')); ?>&nbsp;&nbsp;&nbsp;
                           
                       </td>
                       <td><?php echo h($booking['Sale']['name']);  ?>&nbsp;</td>
                        
                   <?php endif; ?> 
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>  
    </div>
</div>  
