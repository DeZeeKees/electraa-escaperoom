<?php

    if(!isset($_GET['redirect']) && $_GET['redirect'] != true) {
        http_response_code(403);
        header("Location: /");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/base.css">
    <script src="https://unpkg.com/htmx.org@1.9.6"></script>
    <title>ElectrAA</title>
</head>
<body class="flex">    

    <video src="static/video//video.mp4" controls autoplay ></video>

</body>
</html>