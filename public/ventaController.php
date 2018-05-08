<?php

require '../vendor/autoload.php';
require '../config/database.php';

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Http\Response as Response;

$chart= DB::table('salidas')->get();
$data = array();
foreach ($chart as $row){
    $data[] = $row;
}



echo json_encode ($chart);
