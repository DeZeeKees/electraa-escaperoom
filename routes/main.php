<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/base.css">
    <script src="https://unpkg.com/htmx.org@1.9.6"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script async type="module" src="../js/index.js" defer></script>
    <title>ElectrAA</title>
</head>
<body class="flex">
    
    <main class="indexMain">

        <h1 class="mainTitle">ELECTR<span class="accent">AA</span>

        <img src="../static/img/bliksem.png" alt="" id="lighning1">
        <img src="../static/img/bliksem.png" alt="" id="lighning2">
        <img src="../static/img/bliksem.png" alt="" id="lighning3">
        <img src="../static/img/bliksem.png" alt="" id="lighning4">
        <img src="../static/img/bliksem.png" alt="" id="lighning5">
        <img src="../static/img/bliksem.png" alt="" id="lighning6">
        <img src="../static/img/bliksem.png" alt="" id="lighning7">
        <img src="../static/img/bliksem.png" alt="" id="lighning8">
        
        </h1>
        <h2 class="subTitle">ESCAPEROOM</h2>
            
        <form id="numberForm" onsubmit={numberFormSubmit(event)}>
            <input type="number"
                pattern="/^-?\d+\.?\d*$/"
                onkeypress={formLimits(event)}
                maxlength = "8"
                placeholder="voer hier je code in"
                name="number"
                id="number"
            >

            <button type="submit">Antwoord opgeven</button>
        </form>
    </main>
</body>
</html>