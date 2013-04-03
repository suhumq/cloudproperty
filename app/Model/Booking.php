<?php
  class Booking extends AppModel {
    public $name = 'Booking';
    public $belongsTo = array(
       'Customer' => array(
          'className'    => 'Customer',
          'foreignKey'   => 'customer_id'
         ),
       'Sale' => array(
          'className'    => 'Sale',
          'foreignKey'   => 'sale_id'
         ),
       'Unit' => array(
          'className'    => 'Unit',
          'foreignKey'   => 'unit_id'
         )
   	);

    public $hasMany = array(
        'Jurnal' => array(
            'className' => 'Jurnal',
            'foreignKey' => 'booking_id'
        ),
        'DraftTransaction' => array(
            'className' => 'DraftTransaction',
            'foreignKey' => 'booking_id'
        ),
        'UnitSpecification' => array(
            'className' => 'UnitSpecification',
            'foreignKey' => 'booking_id'
        ),
        'BookingMaterial' => array(
            'className' => 'BookingMaterial',
            'foreignKey' => 'booking_id'
        ),
        'Bank' => array(
            'className' => 'Bank',
            'foreignKey' => 'booking_id'
        ),
        'LetterNumber' => array(
            'className' => 'LetterNumber',
            'foreignKey' => 'booking_id'
        ),
         'MinorAddition' => array(
            'className' => 'MinorAddition',
            'foreignKey' => 'booking_id'
        )

    );

    public $hasAndBelongsToMany = array(
    'Requirement' => array(
      'className' => 'Requirement',
      'joinTable' => 'requirement_bookings',
      'foreignKey' => 'booking_id',
      'associationForeignKey' => 'requirement_id',
      'unique' => 'keepExisting',
      'conditions' => '',
      'fields' => '',
      'order' => '',
      'limit' => '',
      'offset' => '',
      'finderQuery' => '',
      'deleteQuery' => '',
      'insertQuery' => ''
    )
  );

  public function afterSave($data=array()){
      
      $options = array(
                    'RequirementBooking.booking_id'=>$this->data['Booking']['id'],
		);
      $this->RequirementBooking->deleteAll($options,false);
      $booking_req =  array();
      foreach($this->data['booking']['requirement_ids'] as $key=>$val):
          if($val != 0){
            $booking_req[] = array('booking_id'=>$this->data['Booking']['id'],
                                'requirement_id'=>$val);
          }
      endforeach;

      $this->RequirementBooking->saveAll($booking_req);
      
    }
  
  }
?>