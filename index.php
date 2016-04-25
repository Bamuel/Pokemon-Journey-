<?php
$ip = "$_SERVER[REMOTE_ADDR]";
/* 
Need to find a way to detect Curent Step, and save it to the saveip/127.0.0.1.txt file
*/
if (file_exists("saveip/" . $ip . ".txt")) {
    $fileip = file_get_contents("saveip/" . $ip . ".txt");
}
else {
    $myfile = fopen("saveip/" . $ip . ".txt", "w") or die("Unable to open file!");
    fwrite($myfile, "0");
    fclose($myfile);
    header("Refresh:0");
}
$step = $fileip;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Phone  https://goo.gl/CvCEpm -->
    <meta name="theme-color" content="red"><!-- Chrome, Firefox OS and Opera -->
    <meta name="msapplication-navbutton-color" content="red"><!-- Windows Phone -->
    <meta name="apple-mobile-web-app-capable" content="yes"><!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="red"> <!-- iOS Safari -->
    <!-- Phone END -->
    <meta name='keywords' content='Pokemon Journey, Clicker, Fun, Pokemon, Journey, game, Hackathon, Javascript Game, HTML'>
    <meta name='description' content='This is a fun Pokémon Clicker game'>
    <meta name='subject' content='Pokemon Journey'>
    <meta name='author' content='Samuel Levin, Samuel_ipad2@hotmail.com'>
    <meta name='author' content='Sam Zhu, shengbozhu@yahoo.com'>
    <meta name="application-name" content="Pokemon Journey" />
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="red">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="red">
    <title>Pokémon Journey</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Anonymous+Pro" />
    <link href="css/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/dayandnightcycle.js"></script>
    <script src="js/character.js"></script>
</head>
<body>
<audio autoplay id="thethemesong">
    <source src="AquaDeepBasin%20-%20Pokemon%20Black%20and%20White%20Bike%20Remix.mp3" type="audio/mpeg">
</audio>
<script src="js/music.js"></script>
<div id="intro" style="display: none;"></div>
<div>
    <div>
        <h1 style="text-align: center">Pokémon Journey</h1>
        <img id="ad" src="bg%20day.png">
        <img id="ad2" src="bg%20day.png" />
        <button class="btn-2" style="float: right;" disabled>
            <script>var steps = <?php echo $step; ?>;</script>
            <p>Steps: <a id="steps"><?php echo $step; ?></a></p>
        </button>
        <div>
            <img id="rr" src="potagonist/1.gif">
            <div id="step">
                <button class="btn" id="ag" name="A magic BUTTON" onclick="chng(); onClick(); playAudio();" type="button"><p>Click to Move</p></button>
                <a href="battle.php" onclick="javascript:void window.open('battle.php','1456998408033','width=700,height=500,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=0,left=30,top=0');return false;">
                    <button class="btn" id="ag2" style="display: none;" onclick="pauseAudio();" type="button">
                        A Wild Pokemon has appeared. <br />
                        Click to battle
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="about">
    <h1>This is a fun Pokémon Clicker game</h1>
    <h3>Created by Samuel Levin and Sam Zhu</h3>
</div>
<div id="howto">
    <h1>How to play</h1>
    <h3>To play the game you spam "Click to Move" Button to gain steps,</h3>
    <h3>With the gradually going up, You will notice Pokémon will spawn in</h3>
    <h3>Your job is too catch them all.</h3>
    <p>**This game is also compatible on Mobile Phones**</p>
    <br>
    <h1>Hint</h1>
    <p>Press "M" to mute music</p>
</div>
<div id="team" style="float: right">
    <h1 id="teama">The Team</h1>
    <div id="Bamuel">
        <h3>Samuel Levin</h3>
        <a href="https://twitter.com/Bamuel_" target="_blank"><h3>Twitter: Bamuel_</h3></a>
        <a href="https://github.com/Bamuel" target="_blank"><h3>Github: Bamuel</h3></a>
        <a href="http://www.bamuel.com/" target="_blank"><h3>Website: www.bamuel.com</h3></a>
    </div>
    <div id="Sam">
        <h3>Sam Zhu</h3>
        <a href="https://github.com/shengbozhu" target="_blank"><h3>Github: shengbozhu</h3></a>
    </div>
</div>
<div id="footer">
    <a href="https://github.com/Bamuel/Pokemon-Journey">
        <img id="image" src="githubtransparent.png">
        <br>
        <p>Star this project on Github, it will mean alot</p>
    </a>
</div>
</body>
</html>
