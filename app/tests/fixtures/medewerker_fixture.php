<?php

/* Medewerker Fixture generated on: 2013-10-16 15:10:07 : 1381930327 */
class MedewerkerFixture extends CakeTestFixture
{
    public $name = 'Medewerker';

    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'username' => array('type' => 'string', 'null' => false, 'default' => null),
        'voornaam' => array('type' => 'string', 'null' => true, 'default' => null),
        'tussenvoegsel' => array('type' => 'string', 'null' => true, 'default' => null),
        'achternaam' => array('type' => 'string', 'null' => true, 'default' => null),
        'email' => array('type' => 'string', 'null' => true, 'default' => null),
        'eerste_bezoek' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'laatste_bezoek' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'uidnumber' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
    );

    public $records = array(
        array(
            'id' => 1005,
            'username' => 'aradolov',
            'voornaam' => 'Arkadiy',
            'tussenvoegsel' => null,
            'achternaam' => 'Radolov',
            'email' => 'aradolov@deregenboog.org',
            'eerste_bezoek' => '2010-11-26 10:23:21',
            'laatste_bezoek' => '2012-01-10 10:45:12',
            'created' => '2010-11-26 10:23:21',
            'modified' => '2012-01-10 10:45:12',
            'uidnumber' => 20475,
        ),
        array(
            'id' => 1006,
            'username' => 'ewout',
            'voornaam' => 'Ewout',
            'tussenvoegsel' => null,
            'achternaam' => 'de Langen',
            'email' => null,
            'eerste_bezoek' => '2010-11-18 11:05:19',
            'laatste_bezoek' => '2010-11-24 10:06:04',
            'created' => '2010-11-18 11:05:19',
            'modified' => '2010-11-24 10:06:04',
            'uidnumber' => 1006,
        ),
        array(
            'id' => 1007,
            'username' => 'arniemantsverdriet',
            'voornaam' => 'Rose-Anne',
            'tussenvoegsel' => null,
            'achternaam' => 'Niemantsverdriet',
            'email' => 'arniemantsverdriet@deregenboog.org',
            'eerste_bezoek' => '2011-01-04 13:48:28',
            'laatste_bezoek' => '2011-01-05 12:19:56',
            'created' => '2011-01-04 13:48:28',
            'modified' => '2011-01-05 12:19:56',
            'uidnumber' => 1007,
        ),
        array(
            'id' => 1008,
            'username' => 'mvissie',
            'voornaam' => 'Melissa',
            'tussenvoegsel' => null,
            'achternaam' => 'Vissie',
            'email' => 'mvissie@deregenboog.org',
            'eerste_bezoek' => '2010-11-04 17:33:58',
            'laatste_bezoek' => '2011-08-19 11:39:29',
            'created' => '2010-11-04 17:33:58',
            'modified' => '2011-08-19 11:39:29',
            'uidnumber' => 20479,
        ),
        array(
            'id' => 1010,
            'username' => 'cstinger',
            'voornaam' => 'Charlotte',
            'tussenvoegsel' => null,
            'achternaam' => 'Stinger',
            'email' => 'cstinger@deregenboog.org',
            'eerste_bezoek' => '2010-11-09 14:58:41',
            'laatste_bezoek' => '2011-01-26 09:06:22',
            'created' => '2010-11-09 14:58:41',
            'modified' => '2011-01-26 09:06:22',
            'uidnumber' => 1010,
        ),
        array(
            'id' => 1013,
            'username' => 'vjbennenk',
            'voornaam' => 'Vanessa',
            'tussenvoegsel' => null,
            'achternaam' => 'Bennenk',
            'email' => 'vjbennenk@deregenboog.org',
            'eerste_bezoek' => '2011-01-12 07:50:54',
            'laatste_bezoek' => '2011-01-20 07:53:22',
            'created' => '2011-01-12 07:50:54',
            'modified' => '2011-01-20 07:53:22',
            'uidnumber' => 1013,
        ),
        array(
            'id' => 1015,
            'username' => 'jkalf',
            'voornaam' => 'Jeroen',
            'tussenvoegsel' => null,
            'achternaam' => 'Kalf',
            'email' => 'jkalf@deregenboog.org',
            'eerste_bezoek' => '2011-01-20 11:22:53',
            'laatste_bezoek' => '2011-01-27 12:01:42',
            'created' => '2011-01-20 11:22:53',
            'modified' => '2011-01-27 12:01:42',
            'uidnumber' => 1015,
        ),
        array(
            'id' => 1017,
            'username' => 'stage-deeik-a',
            'voornaam' => 'Stage',
            'tussenvoegsel' => null,
            'achternaam' => 'De Eik A',
            'email' => null,
            'eerste_bezoek' => '2010-12-28 11:28:34',
            'laatste_bezoek' => '2010-12-28 11:28:34',
            'created' => '2010-12-28 11:28:34',
            'modified' => '2010-12-28 11:28:34',
            'uidnumber' => 1017,
        ),
        array(
            'id' => 20002,
            'username' => 'adbruijn',
            'voornaam' => 'Ad',
            'tussenvoegsel' => null,
            'achternaam' => 'de Bruijn',
            'email' => 'adbruijn@deregenboog.org',
            'eerste_bezoek' => '2011-01-11 16:20:11',
            'laatste_bezoek' => '2011-07-05 14:02:47',
            'created' => '2011-01-11 16:20:11',
            'modified' => '2011-07-05 14:02:47',
            'uidnumber' => 20002,
        ),
        array(
            'id' => 20004,
            'username' => 'asuuroverste',
            'voornaam' => 'Anita',
            'tussenvoegsel' => null,
            'achternaam' => 'Suuroverste',
            'email' => 'asuuroverste@deregenboog.org',
            'eerste_bezoek' => '2010-11-04 00:08:06',
            'laatste_bezoek' => '2012-01-02 17:07:34',
            'created' => '2010-11-04 00:08:06',
            'modified' => '2012-01-02 17:07:34',
            'uidnumber' => 20004,
        ),
    );
}
