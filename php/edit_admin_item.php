<?php

use DB\Database;

if($_SERVER["REQUEST_METHOD"] != "POST") {
    http_response_code(400);
    exit;
}

require './db.php';
require './admin_item.php';

$db = new Database();

switch($_POST['action']) {
    case "toggle";
        $data = $db->toggleNumberActiveState($_POST['id']);
        print_r(renderAdminItem($data));
        exit;
    break;
    case "edit";

        $image = $_FILES['image'];
        $number = $db->getNumber($_POST['id']);
        if($image != null) {

            unlink("../static/img/uploads/" . $number['image']);

            $image_type = exif_imagetype($image['tmp_name']);
            $image_name = "image not uploaded";

            if ($image_type == IMAGETYPE_PNG || $image_type == IMAGETYPE_JPEG) {
                $image_name = substr(uniqid('', true), -5) . "-" .  $image['name'];
                move_uploaded_file($image['tmp_name'], "../static/img/uploads/" . $image_name);
            }

        }

        else {
            $image_name = $number['image'];
        }

        $data = $db->editNumber($_POST['id'], $_POST['name'], intval($_POST['number']), $image_name);
        print_r(renderAdminItem($data));
        exit;
    break;
    case "delete";
        $number = $db->getNumber($_POST['id']);
        unlink("../static/img/uploads/" . $number['image']);
        $data = $db->deleteNumber($_POST['id']);
        print_r("");
        exit;
    break;
    case "create";

        $image = $_FILES['image'];
        $image_type = exif_imagetype($image['tmp_name']);
        $image_name = "image not uploaded";

        if($image_type == IMAGETYPE_PNG || $image_type == IMAGETYPE_JPEG) {
           $image_name = substr(uniqid('', true), -5) . "-" .  $image['name'];
           move_uploaded_file($image['tmp_name'], "../static/img/uploads/" . $image_name);
        }

        $data = $db->createNumber($_POST['name'], intval($_POST['number']), $image_name);
        print_r(renderAdminItem($data));
        exit;
    break;
}
