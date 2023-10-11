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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../styles/admin.css">
    <script async type="module" src="../js/admin.js" defer></script>
    <title>ElectrAA</title>
</head>
<body>    
    <main>

        <div class="head">

            <a href="/">
                <div class="title">
                    <h1 class="mainTitle">ELECTR<span class="accent">AA</span></h1>
                    <h2 class="subTitle">Admin Pagina</h2>
                </div>
            </a>

            <button onclick="openCreatePopup()">Maak nieuw</button>

        </div>

        <div class="table">

            <div class="tableHead">
                <div class="tableRow">
                    <div class="col Name">Naam</div>
                    <div class="col Number">Nummer</div>
                    <div class="col Active">Video</div>
                    <div class="col Action">Actie</div>
                </div>
            </div>

            <div class="tableBody">
                <?php 
                    foreach($db->listNumbers() as $number) {
                        renderAdminItem($number);
                    }
                ?>
            </div>

        </div>

    </main>

    <div class="background hidden" id="editNumberPopup">
        <div>
            <form id="editNumberForm" hx-post="../php/edit_admin_item.php">
                <label for="name">code naam</label>
                <input id="editNumberName"type="text" name="name" placeholder="vull hier de naam van de code in">
                <label for="number">code</label>
                <input id="editNumberNumber" type="number" name="number" placeholder="vull hier de code in">
                <label for="video">video</label>
                <input id="editNumberVideo" type="text" name="video" placeholder="video link">
                <input id="editNumberId" type="hidden" name="id" value="">
                <input type="hidden" name="action" value="edit">
                <div class="buttons">
                    <button type="submit" onclick="closeEditPopup()">Opslaan</button>
                    <button type="button" onclick="closeEditPopup()">Sluiten</button>
                </div>
            </form>
        </div>
    </div>
 
    <div class="background hidden" id="createNumberPopup">
        <div>
            <form id="createNumberForm" hx-post="../php/edit_admin_item.php" hx-target=".tableBody" hx-swap="beforeend ">
                <label for="name">code naam</label>
                <input id="createNumberName"type="text" name="name" placeholder="vull de naam van de code in">
                <label for="number">code</label>
                <input id="createNumberNumber" type="number" name="number" placeholder="vull hier de code in">
                <label for="video">video</label>
                <input id="createNumberVideo" type="text" name="video" placeholder="video link">
                <input type="hidden" name="action" value="create">
                <div class="buttons">
                    <button type="submit" onclick="closeCreatePopup(true)">Opslaan</button>
                    <button type="reset" onclick="closeCreatePopup(false)">Sluiten</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>