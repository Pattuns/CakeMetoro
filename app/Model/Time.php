<?php
App::uses('AppModel', 'Model');
/**
 * Time Model
 *
 */
class Time extends AppModel {

    public $hasMany = array(
        'Connect' => array(
            'className' => 'Connect',
            'foreignKey' => 'time_id',
        )
    );

    public $belongsTo = array(
        'Depart' => array(
            'className' => 'Station',
            'foreignKey' => 'depart_station'
        ),
        'Arrive' => array(
            'className' => 'Station',
            'foreignKey' => 'arrive_station'
        )
    );

}
