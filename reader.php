<?php

require "vendor/autoload.php";

$reader = new \snippet\excel\ExcelReader("test.xls");
$fieldMappers = [
    "A" => "userName",
    "B" => "password"
];
$rows = $reader->read("user", $fieldMappers, 2);
exit(print_r($rows));


