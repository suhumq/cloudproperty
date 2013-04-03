<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Informasi Unit Konsumen</h3>
        <?php echo $this->Form->create('Booking', array('class' => 'form_validation_ttip'));?>
        <div class="row-fluid">
            <div class="span12">
                <div style="display: inline-block">
                    <?php echo $this->Form->input('no_booked', array('label' => 'Nomor Pemesanan','type' => 'text', 'style' =>'width: 200px;')); ?>
                </div>
                <div style="display: inline-block;">
                <input type="submit" value="Cari" style="margin-top: -12px;" class="btn">   </input>
                </div>
             </div>
        </div>
        <?php 
        if ($w_booking != NULL): ?>
        
        <table class="table table-bordered table-striped table_vam" id="">
            <thead>
                <tr>
                    <th>No. Pemesanan</th>
                    <th>Tanggal</th>
                    <th>Nama Konsumen</th>
                    <th>Lihat Status</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td><?php echo h($w_booking[0]['bookings']['no_booking']);  ?> </td>
                        <td><?php echo $this->Time->format( 'd M Y',$w_booking[0]['bookings']['created']);?></td>
                        <td><?php echo h($w_booking[0]['bookings']['customer_id']);  ?> </td>
                <td><?php echo $this->Html->link(__('Print'), array('action' => 'print_booking', $w_booking[0]['bookings']['id']),array('class' => '')); ?></td>
                        
                        
               
                    </tr>
            </tbody>
        </table>  
    <?php else: ?>
    <label><i>No. Pemesanan Anda belum kami kenali, silahkan masukan nomor pemesanan Anda</i></label>
    <?php endif; ?>
    </div>
</div>  
