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
    <!-- huomaa muutos myös seuraavalla rivillä! -->
    <h1>Your lucky number is: <?php echo $randomInt; ?></h1>

    <?php

/*
Tämä on monirivinen kommentti:
Jos luku on suurempi kuin 5, näytetään teksti "Nice!"
Huomaa, että php tagi sulkeutuu ja avautuu sen ympärillä
*/
if ($randomInt > 5) {
?>
    <h2>Nice!</h2>
<?php
}
?>

</body>
</html>