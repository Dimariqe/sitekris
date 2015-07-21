<?php
class Model_Conference extends ORM {
    protected $_table_name = 'conferences';
    protected $_has_many = array(
        'activities' => array(
            'model' => 'Activities',
            'foreign_key' => 'id_conference',
        ),
    );
}