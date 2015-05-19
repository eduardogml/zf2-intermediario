<?php
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'zf2int_base',
                    'password' => 'zf2int_base',
                    'dbname' => 'zf2int_base',
                    'driverOptions' => array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
                    ),
                ),
            ),
        ),
    ),
);