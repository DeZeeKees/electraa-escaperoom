<?php
require '../constants.php';

if($_SERVER["REQUEST_METHOD"] != "POST") {
    http_response_code(404);
    exit();
}

$post = $_POST;

if(empty($post["adminCode"])) {
    http_response_code(400);
    print_r(json_encode(array(
        "status" => "err",
        "message" => "Admin code mag niet leeg zijn."
    )));
    exit();
}

if($post["adminCode"] == AdminCode) {
    $en_code = base64_encode(AdminCode);
    setcookie(name:"admin", value:$en_code, expires_or_options:time()+606024*4 ,httponly:false, path:"/");
    http_response_code(200);
    print_r(json_encode(array(
        "status" => "ok",
        "message" => "De code is correct",
        "redirect" => "/admin"
    )));
    exit();
}

http_response_code(200);
print_r(json_encode(array(
    "status" => "err",
    "message" => "Code is niet correct"
)));
exit();