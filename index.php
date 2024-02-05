<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
 
$date = Carbon::now();

echo $date->toDayDateTimeString();

echo "<br />";

echo "$_SERVER['SERVER_NAME']";