<?php

use DB\Database;

if($_SERVER["REQUEST_METHOD"] != "POST") {
    http_response_code(400);
    exit;
}

require './db.php';
require './admin_item.php';

$db = new Database("localhost", "electraa");

switch($_POST['action']) {
    case "toggle";
        $data = $db->toggleNumberActiveState($_POST['id']);
        print_r(renderAdminItem($data));
        exit;
    break;
    case "edit";
        $data = $db->editNumber($_POST['id'], $_POST['name'], intval($_POST['number']), $_POST['video']);
        print_r(renderAdminItem($data));
        exit;
    break;
    case "delete";
        $data = $db->deleteNumber($_POST['id']);
        print_r("");
        exit;
    break;
    case "create";
        $data = $db->createNumber($_POST['name'], intval($_POST['number']), $_POST['video']);
        print_r(renderAdminItem($data));
        exit;
    break;
}
