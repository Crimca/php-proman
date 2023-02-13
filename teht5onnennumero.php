<!DOCTYPE html>
<?php
// arvotaan satunnaisluku
$randomInt = random_int(1, 10);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your lucky number</title>
</head>
<body>
<?php
/*
Tämä on monirivinen kommentti:
Jos luku on suurempi kuin 5, näytetään teksti "Nice!"
Huomaa, että php tagi sulkeutuu ja avautuu sen ympärillä
*/
?>

<h1>Your lucky number is: <?php echo $randomInt; ?></h1>

<?php 
if ($randomInt == 1) {
    
   echo "<h2>Number one!</h2>";   

}

elseif ($randomInt == 7){
    
    echo "<h2>Lucky number seven!</h2>";
}

elseif ($randomInt >5 && $randomInt <10) {
    echo "<h2> Nice</h2>";
}

?>
<p>
    <a href="showkittens.php?number=<?php echo $randomInt; ?>">
    Now show me <?php echo $randomInt ?> kittens!
</a>
</p>
</body>
</html>