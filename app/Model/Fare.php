<?php
App::uses('AppModel', 'Model');
/**
 * Fare Model
 *
 */
class Fare extends AppModel {

    public $belongsTo = array(
        'station_0' => array(
            'className' => 'Station',
            'foreignKey' => 'station_0'
        ),
        'station_1' => array(
            'className' => 'Station',
            'foreignKey' => 'station_1'
        )
    );

}
