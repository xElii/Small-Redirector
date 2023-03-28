<?php
// Looks like this: https://example.com/?s=ID
$id = $_GET['s'];
if ($id == null) {
    $id = "N/A";
    print ("Keine ID Angegeben!");
    header("Location: https://google.com/");
}
require_once("redirects.php")
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="//www.datalok.de/assets/logos/BoxLogo.webp">
    <title>Weiterleiten...</title>
</head>
<body>
    <div class="center">
        <div>
            <img src="//www.datalok.de/assets/logos/BoxLogo.webp" height="128">
            <br><br>
            <?php print("ID <b>$id</b> has no redirect. <br>Please use another url or try again.") ?>
        </div>
    </div>
</body>
<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 22px;
        color: white;
        background-color: #272727;
    }
    a {
        color: #65C9CB;
    }
    b {
        text-decoration: underline;
    }
    .center {
        display: grid;
        place-items: center;
        position:fixed;
        padding:0;
        margin:0;
        top:0;
        left:0;
        width: 100%;
        height: 100%;
        text-align:center;
    }
</style>
</html>