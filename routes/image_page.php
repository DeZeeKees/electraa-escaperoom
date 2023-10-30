<?php
    use DB\Database;

    if(!isset($_GET['redirect'])) {
        http_response_code(403);
        header("Location: /");
        exit();
    }

    $db = new Database();
    $data = $db->getNumber($_GET['id']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/base.css">
    <script src="https://unpkg.com/htmx.org@1.9.6"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>ElectrAA</title>
</head>
<body class="flex video"> 
    <a href="/" class="back-button">
        <span class="material-symbols-outlined">
            arrow_back
        </span>
    </a>
<?php if(!empty($data['image'])): ?>
    <img src="/static/img/uploads/<?= $data['image'] ?>" alt="">
<?php else: ?>
    <h1 class="mainTitle">ELECTR<span class="accent">AA</span>
    <h2 class="subTitle">Goed gedaan, ga door naar de volgende code.</h2>
<?php endif; ?>
</body>
</html>