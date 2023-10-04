<?php

    if(!isset($_GET['redirect']) && $_GET['redirect'] != true) {
        http_response_code(403);
        header("Location: index.php");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/htmx.org@1.9.6"></script>
    <link rel="stylesheet" href="styles/base.css">
    <title>ElectrAA</title>
</head>
<body>    

    <video src="static/video//video.mp4" controls autoplay ></video>

</body>
</html>