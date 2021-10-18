<?php

foreach (glob((dirname(__FILE__))."/db/*.php") as $filename) {
    require_once $filename;
}


// Это файл для понимания сути работы. Вы можете запускать его много раз из консоли.
// Не забудьте создать базу с именеем `test`.

use Krugozor\Database\Mysql;

use Krugozor\Database\Statement;
use Krugozor\Database\MySqlException;

$db = Mysql::create($DB_HOST, $DB_USER, $DB_PASS)
        ->setDatabaseName($DB_NAME)
        ->setCharset("utf8")
        ->setTypeMode(Mysql::MODE_TRANSFORM);;
