<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/base.css">
    <script src="https://unpkg.com/htmx.org@1.9.6"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script async type="module" src="../js/admin.js" defer></script>
    <title>ElectrAA</title>
</head>
<body class="flex">    

    <main class="indexMain">

        <h1 class="mainTitle">ELECTR<span class="accent">AA</span></h1>
        <h2 class="subTitle">ADMIN PAGINA</h2>

        <form method="post" onsubmit={loginAdmin(event)}>
            <input type="text" name="adminCode" id="adminCode" placeholder="Admin code">
            <button type="submit">Login</button>
        </form>

    </main>

</body>
</html>