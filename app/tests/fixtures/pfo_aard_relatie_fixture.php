<?php

/* PfoAardRelatie Fixture generated on: 2013-06-09 19:06:59 : 1370799659 */
class PfoAardRelatieFixture extends CakeTestFixture
{
    public $name = 'PfoAardRelatie';

    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'name' => array('type' => 'string', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
    );

    public $records = array(
        array(
            'id' => 1,
            'name' => 'Lorem ipsum dolor sit amet',
            'created' => '2013-06-09 19:40:59',
            'modified' => '2013-06-09 19:40:59',
        ),
    );
}
