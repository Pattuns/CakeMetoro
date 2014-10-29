<?php
App::uses('AppModel', 'Model');
/**
 * Connect Model
 *
 */
class Connect extends AppModel {

    public $belongsTo = array(
        'Time' => array(
            'className' => 'Time',
            'foreignKey' => 'time_id'
        ),
        'Station' => array(
            'className' => 'Station',
            'foreignKey' => 'station'
        )
    );
}
