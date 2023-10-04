<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/htmx.org@1.9.6"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script async module src="./index.js" defer></script>
    <link rel="stylesheet" href="styles/base.css">
    <title>ElectrAA</title>
</head>
<body>
    
    <main class="indexMain">

        <h1 class="mainTitle">ELECTR<span class="accent">AA</span></h1>
        <h2 class="subTitle">ESCAPEROOM</h2>
            
        <form id="numberForm" onsubmit={numberFormSubmit(event)}>
            <input type="number"
                pattern="/^-?\d+\.?\d*$/"
                onkeypress={formLimits(event)}
                maxlength = "8"
                placeholder="voer hier je code in"
            >

            <button type="submit">Antwoord opgeven</button>
        </form>
    </main>
</body>
</html>