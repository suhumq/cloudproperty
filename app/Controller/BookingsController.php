<?php

App::uses('AppController', 'Controller');

class BookingsController extends AppController {
    // var $helpers = array('Javascript');
    public $uses = array('Customer', 'Booking', 'Unit','Project' , 'Sale', 'Jurnal', 'Requirement','DraftTransaction','UnitSpecification','BookingMaterial','Bank','LetterNumber','MinorAddition');

    public function index() {
        $this->set('bookings', $this->Booking->find('all'));
    }

      function call() {
       
        if ($this->RequestHandler->isAjax()) {
            $this->layout = 'ajax';
            $this->set('element', $_GET['element']);
        }
    }

    public function find_unit() {
        $this->set('bookings', $this->Booking->find('all'));

    $cp = $this->request->is('post');
      if ($cp == true)
      {
        $no_booked = $this->params['data']['Booking']['no_booked'];
        $w_booking = $this->Jurnal->query("SELECT * FROM bookings WHERE no_booking = '$no_booked';");
        $this->set('w_booking', $w_booking);

       
      }
      else
      {
        $w_booking = '';
        $this->set('w_booking', $w_booking);
      }

    }

    public function view($id = null) {
        $this->Booking->id = $id;
        $this->set('bookings', $this->Booking->read(null, $id));
    }

    public function add() {
        $this->set('customers', $this->Customer->find('list'));
        $this->set('sales', $this->Sale->find('list'));
        $this->set('units', $this->Unit->find('list'));
        $this->set('units_list', $this->Unit->find('all'));

        $nomor_opr = $this->Booking->query("SELECT MAX(id) FROM bookings;");
        $invoice = $nomor_opr;
        $this->set('invoice', $invoice);

        $requires = $this->Requirement->query("SELECT * FROM requirements ;");
        $this->set('requires', $requires);

       
        if ($this->request->is('post')) {
        $down_payment = $this->params['data']['Booking']['down_payment'];
        $kpr_plan = $this->params['data']['Booking']['kpr_plan'];
        
        $this->request->data['Booking']['down_payment']= str_replace(',', '', $down_payment);
        $this->request->data['Booking']['kpr_plan']= str_replace(',', '', $kpr_plan);


            $this->Booking->create();
            if ($this->Booking->saveAll($this->request->data)) {
                $this->Session->setFlash(__('Data Booking telah berhasil disimpan', null), 'default', array('class' => 'alert alert-success'));
                // $this->_flash(__('Success message.', true),'success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Data Booking gagal disimpan', null), 'default', array('class' => 'alert alert-error'));
            }
        }
    }
    
    public function print_booking($id = null) {
        $this->layout = 'letters';     
        
        $this->Booking->id = $id;
        $this->set('booking', $this->Booking->read(null, $id));

        $sum_payment = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE booking_id = $id;");
        $this->set('sum_payment', $sum_payment);
        
        $sum_ppjb = $this->Jurnal->query("SELECT SUM(price) FROM draft_transactions WHERE booking_id = $id;");
        $this->set('sum_ppjb', $sum_ppjb);

        $nomor_transaction = $this->Jurnal->query("SELECT MAX(id) FROM jurnals;");
        $invoice = $nomor_transaction;
        $this->set('invoice', $invoice);

        $_conditions = array('conditions' => array('Booking.id' => $id));
        $jurnal_data = $this->Jurnal->find('all', $_conditions);
        $this->set('jurnal_data', $jurnal_data);

        $draftTransaction_data = $this->DraftTransaction->find('all', $_conditions);
        $this->set('draftTransaction_data', $draftTransaction_data);

        $unitspecification_data = $this->UnitSpecification->find('all', $_conditions);
        $this->set('unitspecification_data', $unitspecification_data);

        $booking_material = $this->BookingMaterial->find('all', $_conditions);
        $this->set('booking_material', $booking_material);

        $bank = $this->Bank->find('all', $_conditions);
        $this->set('bank', $bank);

        $letter_number = $this->LetterNumber->find('all', $_conditions);
        $this->set('letter_number', $letter_number);

        $info_minor = $this->MinorAddition->find('all', $_conditions);
        $this->set('info_minor', $info_minor);
    }    

    public function transaction($id = null) {
        
        $this->Booking->id = $id;
        $this->set('booking', $this->Booking->read(null, $id));

        $sum_payment = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE booking_id = $id;");
        $this->set('sum_payment', $sum_payment);
        
        $sum_ppjb = $this->Jurnal->query("SELECT SUM(price) FROM draft_transactions WHERE booking_id = $id;");
        $this->set('sum_ppjb', $sum_ppjb);

        $nomor_transaction = $this->Jurnal->query("SELECT MAX(id) FROM jurnals;");
        $invoice = $nomor_transaction;
        $this->set('invoice', $invoice);

        $_conditions = array('conditions' => array('Booking.id' => $id));
        $jurnal_data = $this->Jurnal->find('all', $_conditions);
        $this->set('jurnal_data', $jurnal_data);

        $draftTransaction_data = $this->DraftTransaction->find('all', $_conditions);
        $this->set('draftTransaction_data', $draftTransaction_data);

        $unitspecification_data = $this->UnitSpecification->find('all', $_conditions);
        $this->set('unitspecification_data', $unitspecification_data);

        $booking_material = $this->BookingMaterial->find('all', $_conditions);
        $this->set('booking_material', $booking_material);

        $bank = $this->Bank->find('all', $_conditions);
        $this->set('bank', $bank);

        $letter_number = $this->LetterNumber->find('all', $_conditions);
        $this->set('letter_number', $letter_number);

        $info_minor = $this->MinorAddition->find('all', $_conditions);
        $this->set('info_minor', $info_minor);

        // debug($info_minor);

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Booking->save($this->request->data)) {
                $this->Session->setFlash(__('Data Transaksi Booking telah berhasil ditambahkan', null), 'default', array('class' => 'alert alert-success'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Data Transaksi Booking gagal ditambahkan', null), 'default', array('class' => 'alert alert-error'));
            }
        } else {
            $this->request->data = $this->Booking->read(null, $id);
        }
    }

    public function transaction_pdf($id = null) {
        //$this->layout = 'pdf'; 
        $this->Booking->id = $id;
        $this->set('booking', $this->Booking->read(null, $id));

        $sum_payment = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE booking_id = $id;");
        $this->set('sum_payment', $sum_payment);

        //$nomor_transaction = $this->Jurnal->query("SELECT MAX(id) FROM jurnals");
        //$invoice = $nomor_transaction;
        //$this->set('invoice', $invoice);


        $_conditions = array('conditions' => array('Booking.id' => $id));
        $jurnal_data = $this->Jurnal->find('all', $_conditions);
        $this->set('jurnal_data', $jurnal_data);

//        if ($this->request->is('post') || $this->request->is('put')) {
//            if ($this->Booking->save($this->request->data)) {
//                $this->Session->setFlash(__('Data Transaksi Booking telah berhasil ditambahkan', null), 'default', array('class' => 'alert alert-success'));
//                $this->redirect(array('action' => 'index'));
//            } else {
//                $this->Session->setFlash(__('Data Transaksi Booking gagal ditambahkan', null), 'default', array('class' => 'alert alert-error'));
//            }
//        } else {
         $this->data = $this->Booking->read(null, $id);
         $this->set('booking', $this->data);
       // }
        ini_set('memory_limit', '512M');
    }

 public function addJurnal() {
       $jurnal = $_GET;
        if(isset($jurnal['jurnal_id'])){
            $data['Booking']['jurnal_id']= $jurnal['jurnal_id'];
        }
        $data['Booking']['id']= $jurnal['id_trans'];
        $data['Booking']['description']= $jurnal['description'];
        $data['Booking']['amount'] = $jurnal['amount'];
        $data['Booking']['trans_date'] = $jurnal['trans_date'];
        $data['Booking']['account_credit'] = $jurnal['account_credit'];
        $data['Booking']['no_transaction'] = $jurnal['no_transaction'];
        $data['Booking']['unit_id'] = $jurnal['unit_id'];
        $data['Booking']['project_id'] = $jurnal['project_id'];
        $this->Jurnal->addData($data);
        $data = ClassRegistry::init('Jurnal')->find('all', array(
                    'conditions' => array('Jurnal.booking_id' => $data['Booking']['id']),
                    'recursive' => -1)
                );
           
        echo json_encode($data);
        die();
    }   

  public function deleteJurnal() {
        $jurnal = $_GET;
        $id = $jurnal['jurnal_id'];
        $data['Booking']['id']= $jurnal['id_trans'];
        $this->Jurnal->removeData($id);
        $this->Session->setFlash(__('Data Transaksi Booking telah berhasil dihapus', null), 'default', array('class' => 'alert alert-success'));
        $data = ClassRegistry::init('Jurnal')->find('all', array(
                    'conditions' => array('Jurnal.booking_id' => $data['Booking']['id']),
                    'recursive' => -1)
                );
           
        echo json_encode($data);
        die();
    }   

  public function addDraftTransaction() {
        $draft = $_GET;
        if(isset($draft['id_draft'])){
            $data['Booking']['draft_id']= $draft['id_draft'];
        }
        $data['Booking']['id']= $draft['id_trans'];
        $data['Booking']['description_transdraft']= $draft['draft'];
        $data['Booking']['price'] = $draft['price'];
        $data['Booking']['date_payment'] = $draft['datePayment'];
       
        $this->DraftTransaction->addDataDraftTransaction($data);
         $data = ClassRegistry::init('DraftTransaction')->find('all', array(
                    'conditions' => array('DraftTransaction.booking_id' => $data['Booking']['id']),
                    'recursive' => -1)
                );
           
           echo json_encode($data);
           die();
    }

    public function deleteDraftTransaction() {
        $draft = $_GET;
        $id = $draft['id_draft'];
        $data['Booking']['id']= $draft['id_trans'];
//        $this->DraftTransaction->removeDataDraftTransaction($id);
//        $this->Session->setFlash(__('Data Transaksi PPJB telah berhasil dihapus', null), 'default', array('class' => 'alert alert-success'));
         $this->DraftTransaction->removeDataDraftTransaction($id);
         $data = ClassRegistry::init('DraftTransaction')->find('all', array(
                    'conditions' => array('DraftTransaction.booking_id' => $data['Booking']['id']),
                    'recursive' => -1)
                );
           
           echo json_encode($data);
           die();
    }

    public function addUnitSpecification() {
        $this->UnitSpecification->addDataUnitSpecification($this->data);
        $this->Session->setFlash(__('Data Spesifikasi telah berhasil ditambahkan', null), 'default', array('class' => 'alert alert-success'));

        $this->redirect(array('action' => 'transaction', $this->data['Booking']['id']));
    }

    public function deleteUnitSpecification($id) {
        $this->UnitSpecification->removeDataUnitSpecification($id);
        $this->Session->setFlash(__('Data Spesifikasi telah berhasil dihapus', null), 'default', array('class' => 'alert alert-success'));
        $this->redirect(array('action' => 'index'));
    }


    public function addBookingMaterial() {
        $this->BookingMaterial->addDataBookingMaterial($this->data);
        $this->Session->setFlash(__('Data Penambahan Material telah berhasil ditambahkan', null), 'default', array('class' => 'alert alert-success'));

        $this->redirect(array('action' => 'transaction', $this->data['Booking']['id']));
    }

    public function deleteBookingMaterial($id) {
        $this->BookingMaterial->removeDataBookingMaterial($id);
        $this->Session->setFlash(__('Data Penambahan Material telah berhasil dihapus', null), 'default', array('class' => 'alert alert-success'));
        $this->redirect(array('action' => 'index'));
    }

     public function addBank($id = null) {
           $bank = $_GET;
           if(isset($bank['id_bank'])){
               $data['Booking']['bank_id']= $bank['id_bank'];
           }
           $data['Booking']['id']= $bank['id_trans'];
           $data['Booking']['bank_name']= $bank['bankName'];
           $data['Booking']['bank_address'] = $bank['bankAdd'];
           $data['Booking']['bank_town'] = $bank['bankTown'];
           $data['Booking']['status'] = $bank['status'];
           $this->Bank->addDataBank($data);
           $msg = array("username" => "Test User", "success" => true);
           $data = ClassRegistry::init('Bank')->find('all', array(
                    'conditions' => array('Bank.booking_id' => $data['Booking']['id']),
                    'recursive' => -1)
                );
           
           echo json_encode($data);
           die();

    }

    public function deleteBank() {
        $bank = $_GET;
        $id = $bank['id_bank'];
        $data['Booking']['id']= $bank['id_trans'];
        $this->Bank->removeDataBank($id);
        $this->Session->setFlash(__('Data Bank telah berhasil dihapus', null), 'default', array('class' => 'alert alert-success'));
        $data = ClassRegistry::init('Bank')->find('all', array(
                    'conditions' => array('Bank.booking_id' => $data['Booking']['id']),
                    'recursive' => -1)
                );
        echo json_encode($data);
        die();
    }

    public function addLeterNumber() {
        $this->LetterNumber->addDataLetterNumber($this->data);
        $this->Session->setFlash(__('Data Nomor Surat telah berhasil ditambahkan', null), 'default', array('class' => 'alert alert-success'));

        $this->redirect(array('action' => 'transaction', $this->data['Booking']['id']));
    }

    public function deleteLetterNumber($id) {
        $this->LetterNumber->removeDataLetterNumber($id);
        $this->Session->setFlash(__('Data Nomor Surat telah berhasil dihapus', null), 'default', array('class' => 'alert alert-success'));
        $this->redirect(array('action' => 'index'));
    }

    public function addMinorAdditon() {
        $this->MinorAddition->addDataMinorAddition($this->data);
        $this->Session->setFlash(__('Data Perbaikan Minor telah berhasil ditambahkan', null), 'default', array('class' => 'alert alert-success'));

        $this->redirect(array('action' => 'transaction', $this->data['Booking']['id']));
    }

    public function deleteMinorAddition($id) {
        $this->MinorAddition->removeDataMinorAddition($id);
        $this->Session->setFlash(__('Data Perbaikan Minor telah berhasil dihapus', null), 'default', array('class' => 'alert alert-success'));
        $this->redirect(array('action' => 'index'));
    }

    public function edit($id = null) {
         $this->set('units_list', $this->Unit->find('all'));

        $this->Booking->id = $id;
        $this->Booking->recursive = 1;
        if (!$this->Booking->exists()) {
            throw new NotFoundException(__('Invalid booking'));
        }
        $this->set('customers', $this->Customer->find('list'));
        $this->set('sales', $this->Sale->find('list'));
        $this->set('units', $this->Unit->find('list'));

        // $requires = $this->set('requires', $this->Requirement->find('list'));
        // $this->set('require', $requires);   
        $requires = $this->Requirement->query("SELECT * FROM requirements ;");
        $this->set('requires', $requires);
        // debug($requires);
        // debug($requires);
        // debug($requires);

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Booking->save($this->request->data)) {
                $this->Session->setFlash(__('Data Booking telah berhasil di-update', null), 'default', array('class' => 'alert alert-success'));

                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Data Booking gagal di-update', null), 'default', array('class' => 'alert alert-error'));
            }
        } else {
            $this->data = $this->Booking->read(null, $id);
            $this->set('data', $this->data);
        }
        //debug($this->request->data);
    }

    public function delete($id = null) {
        $this->Booking->id = $id;
        if ($this->Booking->delete()) {
            $this->Session->setFlash(__('Data Booking telah berhasil dihapus', null), 'default', array('class' => 'alert alert-success'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Data Booking gagal dihapus', null), 'default', array('class' => 'alert alert-error'));
        $this->redirect(array('action' => 'index'));
    }


    public function spr($id = null) {   
        $this->layout = 'letters';     
        $this->Booking->id = $id;
        $this->set('booking', $this->Booking->read(null, $id));


        $info_project = $this->Unit->find('all', $id);
        // debug($info_project[0]['Project']['name']);


        $this->set('info_project', $info_project);

        $_conditions = array('conditions' => array('Booking.id' => $id));
        $jurnal_data = $this->Jurnal->find('all', $_conditions);
        $this->set('jurnal_data', $jurnal_data);
    }

    public function spkpr($id = null) {   
        $this->layout = 'letters';     
        $this->Booking->id = $id;
        $this->set('booking', $this->Booking->read(null, $id));
        
        $info_project = $this->Unit->find('all', $id);
        $info_number = $this->LetterNumber->query("SELECT spkpr FROM letter_numbers WHERE booking_id = $id;");
        $info_bank = $this->Bank->query("SELECT bank_name FROM banks WHERE booking_id = $id;");

        
        // debug($info_project[0]['Project']['name']);

        $this->set('info_project', $info_project);
        $this->set('info_number', $info_number);
        $this->set('info_bank', $info_bank);
        

        $_conditions = array('conditions' => array('Booking.id' => $id));
        $jurnal_data = $this->Jurnal->find('all', $_conditions);
        $this->set('jurnal_data', $jurnal_data);
    }

    public function spajbn($id = null) {   
        $this->layout = 'letters';     
        $this->Booking->id = $id;
        $this->set('booking', $this->Booking->read(null, $id));
        $info_number = $this->LetterNumber->query("SELECT spajb FROM letter_numbers WHERE booking_id = $id;");
        $this->set('info_number', $info_number);
        

        $info_project = $this->Unit->find('all', $id);
        $this->set('info_project', $info_project);

        $_conditions = array('conditions' => array('Booking.id' => $id));
        $jurnal_data = $this->Jurnal->find('all', $_conditions);
        $this->set('jurnal_data', $jurnal_data);
    }
    
    public function bastr($id = null) {   
        $this->layout = 'letters';     
        $this->Booking->id = $id;
        $this->set('booking', $this->Booking->read(null, $id));

        $info_project = $this->Unit->find('all', $id);
        $this->set('info_project', $info_project);

        $info_minor = $this->MinorAddition->find('all', $id);
        $this->set('info_minor', $info_minor);

        $_conditions = array('conditions' => array('Booking.id' => $id));
        $jurnal_data = $this->Jurnal->find('all', $_conditions);
        $this->set('jurnal_data', $jurnal_data);
    }

    public function ppjb($id = null) {   
        $this->layout = 'letters';     
        $this->Booking->id = $id;
        $this->set('booking', $this->Booking->read(null, $id));
        $info_number = $this->LetterNumber->query("SELECT ppjb FROM letter_numbers WHERE booking_id = $id;");
        $this->set('info_number', $info_number);
        
        $info_spec = $this->UnitSpecification->find('all', $id); 
        $this->set('info_spec', $info_spec);
        
        $info_project = $this->Unit->find('all', $id);
        $this->set('info_project', $info_project);

        $info_project = $this->Unit->find('all', $id);
        $this->set('info_project', $info_project);

        $_conditions = array('conditions' => array('Booking.id' => $id));
        $jurnal_data = $this->Jurnal->find('all', $_conditions);
        $this->set('jurnal_data', $jurnal_data);
    }


}

?>
