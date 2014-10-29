<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $api_keys = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'apikey' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	public $connects = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
		'time_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'station' => array('type' => 'integer', 'null' => true, 'default' => '0', 'key' => 'index'),
		'arrive' => array('type' => 'time', 'null' => true, 'default' => null),
		'depart' => array('type' => 'time', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'time_id' => array('column' => 'time_id', 'unique' => 0),
			'station' => array('column' => 'station', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	public $fares = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 21, 'key' => 'primary'),
		'station_0' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 21, 'key' => 'index'),
		'station_1' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 21, 'key' => 'index'),
		'fare' => array('type' => 'integer', 'null' => false, 'default' => null),
		'child_fare' => array('type' => 'integer', 'null' => false, 'default' => null),
		'card_fare' => array('type' => 'integer', 'null' => false, 'default' => null),
		'child_card_fare' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'station_0' => array('column' => 'station_0', 'unique' => 0),
			'station_1' => array('column' => 'station_1', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

	public $places = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 21, 'key' => 'primary'),
		'urn_id' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'station_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 21, 'key' => 'index'),
		'sameAs' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'lon' => array('type' => 'float', 'null' => false, 'default' => null),
		'lat' => array('type' => 'float', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'station_id' => array('column' => 'station_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

	public $stations = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	public $times = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
		'type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'now' => array('type' => 'time', 'null' => true, 'default' => null),
		'depart' => array('type' => 'time', 'null' => true, 'default' => null),
		'arrive' => array('type' => 'time', 'null' => true, 'default' => null),
		'spend' => array('type' => 'integer', 'null' => true, 'default' => null),
		'depart_station' => array('type' => 'integer', 'null' => true, 'default' => '0', 'key' => 'index'),
		'arrive_station' => array('type' => 'integer', 'null' => true, 'default' => '0', 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'depart_station' => array('column' => 'depart_station', 'unique' => 0),
			'arrive_station' => array('column' => 'arrive_station', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

}
