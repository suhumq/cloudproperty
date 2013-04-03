<?php
class Jurnal extends AppModel {
  public $name = 'Jurnal';
  public $belongsTo = array(
           'Booking' => array(
              'className'    => 'Booking',
              'foreignKey'   => 'booking_id' /* singular name */
             ),
            'OperationalUnit' => array(
              'className'    => 'OperationalUnit',
              'foreignKey'   => 'operationalunit_id' /* singular name */
             ),
            'OperationalProject' => array(
              'className'    => 'OperationalProject',
              'foreignKey'   => 'operationalproject_id' /* singular name */
             ),
            'Cashflow' => array(
              'className'    => 'Cashflow',
              'foreignKey'   => 'cashflow_id' /* singular name */
             )
        );

  public function addData($data) {
  $com = array(
        'Jurnal' => array(
        'booking_id' => $data['Booking']['id'],
        'project_id' => $data['Booking']['project_id'],
        'unit_id' => $data['Booking']['unit_id'],
        'cashflow_id' => $data['Booking']['cashflow_id'],
        'no_transaction' => $data['Booking']['no_transaction'],
        'trans_date' => $data['Booking']['trans_date'],
        'description' => $data['Booking']['description'],
        'account_credit' => $data['Booking']['account_credit'],
        'amount' =>  str_replace(',', '', $data['Booking']['amount'])
      )
    );
  if(isset($data['Booking']['jurnal_id'])){
       $com['Jurnal']['id'] = $data['Booking']['jurnal_id'];
   }    $this->create();
    $this->save($com);
  }

  function removeData($id=null) {
    return $this->delete($id);
  }

  public function addData_oprunit($data) {
  $com = array(
        'Jurnal' => array(
        'operationalunit_id' => $data['OperationalUnit']['id'],
        'unit_id' => $data['OperationalUnit']['unit_id'],
        'cashflow_id' => $data['OperationalUnit']['cashflow_id'],
        'no_transaction' => $data['OperationalUnit']['no_transaction'],
        'trans_date' => $data['OperationalUnit']['trans_date'],
        'description' => $data['OperationalUnit']['description'],
        'account_debet' => $data['OperationalUnit']['account_debet'],
        'account_credit' => $data['OperationalUnit']['account_credit'],
        'amount' => $data['OperationalUnit']['amount']
      )
    );
    $this->create();
    $this->save($com);
  }

  function removeData_oprunit($id=null) {
    return $this->delete($id);
  }
  public function addData_oprproject($data) {
  $com = array(
        'Jurnal' => array(
        'operationalproject_id' => $data['OperationalProject']['id'],
        'project_id' => $data['OperationalProject']['project_id'],
        'cashflow_id' => $data['OperationalProject']['cashflow_id'],
        'no_transaction' => $data['OperationalProject']['no_transaction'],
        'trans_date' => $data['OperationalProject']['trans_date'],
        'description' => $data['OperationalProject']['description'],
        'account_debet' => $data['OperationalProject']['account_debet'],
        'account_credit' => $data['OperationalProject']['account_credit'],
        'amount' =>  str_replace(',', '', $data['OperationalProject']['amount'])
      )
    );
    $this->create();
    $this->save($com);
  }

  function removeData_oprproject($id=null) {
    return $this->delete($id);
  }
  
}
