<?php
    use DB\Database;

    if(!isset($_GET['redirect'])) {
        http_response_code(403);
        header("Location: /");
        exit();
    }

    $db = new Database("localhost", "electraa");
    $data = $db->getNumber($_GET['id']);

    if(!empty($data['video'])) {
        $url_components = parse_url($data['video']);
        parse_str($url_components['query'], $params);
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
<body class="flex video">  

<?php if(!empty($data['video'])): ?>
    <iframe src="https://www.youtube.com/embed/<?= $params['v'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<?php else: ?>
    <h1 class="mainTitle">ELECTR<span class="accent">AA</span>
    <h2 class="subTitle">Goed gedaan, ga door naar de volgende code.</h2>
<?php endif; ?>

<!-- https://www.youtube.com/embed/ -->
</body>
</html>