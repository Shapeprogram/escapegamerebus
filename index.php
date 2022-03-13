<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Escape Game Rebus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" type="text/css" title="Css" href="prem.css" />
    <link rel="shortcut icon" type="image/png" href="Churchlogo.png"/>
</head>
<body>
<header>
</header>
<div>
    <?php
    if(isset($_POST['submit']))
    {
        $one=$_POST['one'];
        $two=$_POST['two'];
        $three=$_POST['three'];
        $four=$_POST['four'];
        $five=$_POST['five'];
        $six=$_POST['six'];
        if
        (
            ($one=='comment' or $one=='Comment')==true &&
            ($two=='s\'appelle' or $two=='sappelle' or $two=='Sappelle' or $two=='S\'appelle')==true &&
            ($three=='la' or $three=='La')==true &&
            ($four=='recherche' or $four=='Recherche')==true &&
            ($five=='des' or $five=='Des')==true &&
            ($six=='ancêtres' or $six=='Ancetres'or $six=='Ancêtres'or $six=='ancetres')==true
        )
        {
            echo "<p>good</p>";
            header('Location: indexs.php');
            exit();
        }
        else
            echo'<p id="mauvaismot"> La phrase "'.$one.' '.$two.' '.$three.' '.$four.' '.$five.' '.$six.' ? n\'est pas la bonne phrase.</p>';
    }
    ?>

</div>
<section id="midlane">
    <form name="genealogie" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="one"></label><input maxlength="7" type="text" placeholder="7 lettres" name="one" id="one" required/>
        <label for="two"></label><input maxlength="9" type="text" placeholder="9 lettres" id="two" name="two" required/>
        <label for="three"></label><input maxlength="2" type="text" placeholder="2 lettres" name="three" id="three" required/>
        <label for="four"></label><input maxlength="9" type="text" placeholder="9 lettres" name="four" id="four" required/>
        <label for="five"></label><input maxlength="3" type="text" placeholder="3 lettres" name="five" id="five" required/>
        <label for="six"></label><input maxlength="8" type="text" placeholder="8 lettres" name="six" id="six" required/>
        <label for="seven"></label><input maxlength="1" type="text" value="?" name="seven" id="seven" required readonly/>
        <input type="submit" name="submit" id="submit" value="Envoyer"/>
    </form>
</section>
<p id="wrap2">© Primaire du Pieu de Bruxelles</p>
</body>
</html>
