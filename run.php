<?php

require_once("./vendor/autoload.php");
use src\Services\JsonReaderService;


// check received args from client
if (count($argv) <= 1) {
    echo "invalid arguments\n";
    exit();
}

// check command function
if (!function_exists($argv[1])) {
    echo "invalid command\n";
    exit();
}

// do read the data
$dataResponse = file_get_contents("./data.json");

// init reader service in this example json
$reader = new JsonReaderService();

//create an offer collection
$collection = $reader->read($dataResponse);

// execute command function
try {
    call_user_func($argv[1], ...[...array_slice($argv, 2), $collection]);
} catch (Error $e) {
    echo $e->getMessage() . "\n";
}
