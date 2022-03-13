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
<div>
<p>olo</p>
<?php
if(isset($_POST['submit']))
{
    $one=$_POST['one'];
    $two=$_POST['two'];
    $three=$_POST['three'];
    $twotwo=$_POST['twotwo'];
    $five=$_POST['five'];
    $four=$_POST['four'];
    $six=$_POST['six'];
    ?> <p><?php echo "c'est bien envoyé"?></p><?php
}
?>

</div>
<section id="midlane">
    <form name="genealogie" action="index.php" method="post">
        <label for="one"></label><input maxlength="1" type="text" placeholder="1" id="one" required/>
        <label for="two"></label><input maxlength="1" type="text" placeholder="2" id="two" required/>
        <label for="three"></label><input maxlength="1" type="text" placeholder="3" id="three" required/>
        <label for="twotwo"></label><input maxlength="1" type="text" placeholder="2" id="twotwo" required/>
        <label for="four"></label><input maxlength="1" type="text" placeholder="4" id="four" required/>
        <label for="five"></label><input maxlength="1" type="text" placeholder="5" id="five" required/>
        <label for="six"></label><input maxlength="1" type="text" placeholder="6" id="six" required/>
        <label for="oneone"></label><input maxlength="1" type="text" placeholder="1" id="oneone" required/>
        <label for="seven"></label><input maxlength="1" type="text" placeholder="7" id="seven" required/>
        <label for="twotwotwo"></label><input maxlength="1" type="text" placeholder="2" id="twotwotwo" required/>
        <input type="submit" value="Envoyer"/>
    </form>
</section>
<p id="wrap2">© Primaire du Pieu de Bruxelles</p>
</body>
</html>