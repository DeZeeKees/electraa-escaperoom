<?php
require './db.php';
use DB\Database;

if($_SERVER["REQUEST_METHOD"] != "POST") {
    http_response_code(404);
    exit();
}

$db = new Database("localhost", "electraa");
$form = $_POST;

$result = $db->checkNumber($form['number']);

if(!$result['status']) { 
    print_r(json_encode(array(
        "status" => "err",
        "message" => "Code is niet correct"
    )));
    exit();
}

print_r(json_encode(array(
    "status" => "ok",
    "message" => "Code is correct",
    "id" => $result['id']
)));
exit();