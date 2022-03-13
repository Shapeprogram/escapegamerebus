<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Escape Game Rebus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" type="text/css" title="Css" href="style.css" />
    <link rel="shortcut icon" type="image/png" href="Churchlogo.png"/>
</head>
<body>
<header>
</header>
<?php
if(isset($_POST['submit']))
{
    extract($_POST,EXTR_OVERWRITE);
    ?> <p><?php print "form sent";?></p><?php
}
?>
<section id="midlane">
    <form action="index.php" method="post">
        <input maxlength="1" type="text" placeholder="1" id="one" required/>
        <input maxlength="1" type="text" placeholder="2" id="two" required/>
        <input maxlength="1" type="text" placeholder="3" id="three" required/>
        <input maxlength="1" type="text" placeholder="2" id="twotwo" required/>
        <input maxlength="1" type="text" placeholder="4" id="four" required/>
        <input maxlength="1" type="text" placeholder="5" id="five" required/>
        <input maxlength="1" type="text" placeholder="6" id="six" required/>
        <input maxlength="1" type="text" placeholder="1" id="oneone" required/>
        <input maxlength="1" type="text" placeholder="7" id="seven" required/>
        <input maxlength="1" type="text" placeholder="2" id="twotwotwo" required/>
        <input type="submit" value="Envoyer"/>
    </form>
</section>
<p id="wrap2">© Primaire du Pieu de Bruxelles</p>
</body>
</html>