<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Escape Game Rebus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" type="text/css" title="Css" href="style.css" />
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
    $twotwo=$_POST['twotwo'];
    $four=$_POST['four'];
    $five=$_POST['five'];
    $six=$_POST['six'];
    $seven=$_POST['seven'];
    $twotwotwo=$_POST['twotwotwo'];
    $oneone=$_POST['oneone'];
    if
    (
            ($one=='g' or $one=='G')==true &&
            ($oneone=='g' or $oneone=='G')==true &&
            ($two=='e' or $two=='E')==true &&
            ($twotwo=='e' or $twotwo=='E')==true &&
            ($twotwotwo=='e' or $twotwo=='E')==true &&
            ($three=='n' or $three=='N')==true &&
            ($four=='a' or $four=='A')==true &&
            ($five=='l' or $five=='L')==true &&
            ($six=='o' or $six=='O')==true &&
            ($seven=='i' or $seven=='I')==true
    )
    {
        echo "<p>good</p>";
        header('Location: good.php');
        exit();
    }
    else
        echo'<p id="mauvaismot"> Le mot '.$one.$two.$three.$twotwo.$four.$five.$six.$oneone.$seven.$twotwotwo.' n\'est pas le bon mot</p>';
}
?>

</div>
<section id="midlane">
    <form name="genealogie" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="one"></label><input maxlength="1" type="text" placeholder="1" name="one" id="one" required/>
        <label for="two"></label><input maxlength="1" type="text" placeholder="2" id="two" name="two" required/>
        <label for="three"></label><input maxlength="1" type="text" placeholder="3" name="three" id="three" required/>
        <label for="twotwo"></label><input maxlength="1" type="text" placeholder="2" name="twotwo" id="twotwo" required/>
        <label for="four"></label><input maxlength="1" type="text" placeholder="4" name="four" id="four" required/>
        <label for="five"></label><input maxlength="1" type="text" placeholder="5" name="five" id="five" required/>
        <label for="six"></label><input maxlength="1" type="text" placeholder="6" name="six" id="six" required/>
        <label for="oneone"></label><input maxlength="1" type="text" placeholder="1" name="oneone" id="oneone" required/>
        <label for="seven"></label><input maxlength="1" type="text" placeholder="7" name="seven" id="seven" required/>
        <label for="twotwotwo"></label><input maxlength="1" type="text" placeholder="2" name="twotwotwo" id="twotwotwo" required/>
        <input type="submit" name="submit" id="submit" value="Envoyer"/>
    </form>
</section>
<p id="wrap2">© Primaire du Pieu de Bruxelles</p>
</body>
</html>
