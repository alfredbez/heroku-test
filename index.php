<?php
require 'vendor/autoload.php';

use League\Csv\Reader;

$csv = Reader::createFromPath('dummy.csv');
$headers = $csv->fetchOne();
$res = $csv->setLimit(25)->fetchAll();

echo "<pre>\n";
print_r([
        'headers' => $headers,
        'res' => $res,
]);
echo "\n</pre>";
