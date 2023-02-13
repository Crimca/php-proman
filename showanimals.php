<!DOCTYPE html>
<html lang="en">
<head>
    <title>Animals</title>
</head>
<body>
<?php

// poimitaan muuttuja URL:sta, kissoja on aina 1, jos määrää ei annettu 
$numberOfKittens = isset($_GET['number']) ? $_GET['number'] : 1;
if ($numberOfKittens < 1) {
    $numberOfKittens = 1;
}

for ($i = 1; $i <= $numberOfKittens; $i++)
    {
    ?> 
    Cat <?php echo $i; ?>:
    <img src="cat.png" alt="Cat <?php echo $i; ?>">
    <?php
    }

// koirat saadaan jakamalla kissojen määrä kahdella ja se pyöristetään ylöspäin ceil-funktiolla
$numberOfDogs = ceil($numberOfKittens / 2);

$i = 1;
while ($i <= $numberOfDogs)  {
    ?> 
    Dog <?php echo $i; ?>:
    <img src="dog.png" alt="Dog <?php echo $i; ?>">
    <?php
    $i++;
}

// hiiret saadaan kertomalla kissojen määrä 2.5:lla ja se pyöristetään alaspäin floor-funktiolla
$numberOfMice = floor($numberOfKittens * 2.5);

$i = 1;
do {
    ?> 
    Mice <?php echo $i; ?>:
    <img src="mouse.jpg" alt="Mouse <?php echo $i; ?>">
    <?php
    $i++;}
while ($i <= $numberOfMice)
?>

</body>

</html>