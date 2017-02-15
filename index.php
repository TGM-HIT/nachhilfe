<!doctype html>
<html lang="de">
<head>
    <title>Schüler Helfen!</title>
    <meta charset="utf-8">
        
    <link rel="icon" href="favicon.ico">
    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <!-- Scripts -->
    <script src="js/script.js"></script>
</head>

<body>
<!-- Add warning vor NS users <noscript></noscript> -->
<div id="sidebar">
    <div class="image-box">
        <a href="http://technologe.at"><img src="imgs/technologe.png" alt="logo"></a>
    </div>
    <!--
    sj -> Subject
    gd -> Grade
    wd -> Weekday
    pc -> Price
    -->
    <div id="menu">
        <?php include "includes/menu.php"; ?>
    </div>

    <div id="text-box">
        <p>Nebenan findest du eine Liste
freundlicher und engagierter Schüler, 
welche wie du gerade das TGM absolvieren!
<br><br>
Jeder einzelne hat seine Stärken und kann 
dir auf persönlicher Ebene weiterhelfen!
<br><br>
Durch klick auf einen Namen zeigen sich 
nähere Informationen sowie 
eine kurze Beschreibung.
Die Kontaktaufnahme ist über die 
kurze TGM-Email erwünscht.
<br><br>
Bsp.: Max Mustermann<br>
-> mmustermann@student.tgm.ac.at</p>
        <hr>
        <p>Um selbst Nachhilfe zu geben bitten wir folgende Informationen an mreichl@student.tgm.ac.at senden:
            <br>Vorname, Nachname, Klasse, Fächer, Preisvorschlag
        </p>
    </div>

    <div id="footer">
        <p>-= technologe.at 2016 :: <!-- <a href="pages/contact.html">Kontakt</a> - --> <a href="pages/imprint.html">Impressum</a> =-</p>
    </div>
</div>

<?php include "includes/main.php"; ?>
</body>
</html>