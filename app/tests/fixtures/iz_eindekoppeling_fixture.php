<?php

/* IzEindekoppeling Fixture generated on: 2014-08-13 14:08:36 : 1407933996 */
class IzEindekoppelingFixture extends CakeTestFixture
{
    public $name = 'IzEindekoppeling';

    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
    );

    public $records = array(
        array(
            'id' => 1,
            'naam' => 'Lorem ipsum dolor sit amet',
            'created' => '2014-08-13 14:46:36',
            'modified' => '2014-08-13 14:46:36',
        ),
    );
}
