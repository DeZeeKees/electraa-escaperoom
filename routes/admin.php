<?php
    use DB\Database;

    if(!isset($_COOKIE["admin"]) || base64_decode($_COOKIE["admin"]) != AdminCode) {
        http_response_code(401);
        header("Location: /admin/login?reqireLogin=true");
        exit();
    }

    $db = new Database("localhost", "electraa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/htmx.org@1.9.6"></script>
    <link rel="stylesheet" href="../styles/base.css">
    <title>ElectrAA</title>
</head>
<body>    

    <h1>admin page</h1>
    

    <?php foreach($db->listNumbers() as $record): ?>

        <p><?= $record["number"] ?></p>
        <br>

    <?php endforeach; ?>

</body>
</html>