<?php
  class Cashflow extends AppModel {
    public $name = 'Cashflow';
    public $hasMany = array(
        'Jurnal' => array(
            'className' => 'Jurnal',
            'foreignKey' => 'cashflow_id'
        ),
        'DraftOprProject' => array(
            'className' => 'DraftOprProject',
            'foreignKey' => 'cashflow_id'
        )
    );
  }
?>