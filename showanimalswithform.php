<!DOCTYPE html>
<html lang="en">
<head>
    <title>Animals</title>
</head>
<body>
<?php

$numberOfKittens = $_GET['catnumber'];
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


$numberOfDogs = $_GET['dognumber'];

$i = 1;
while ($i <= $numberOfDogs)  {
    ?> 
    Dog <?php echo $i; ?>:
    <img src="dog.png" alt="Dog <?php echo $i; ?>">
    <?php
    $i++;
}


$numberOfMice = $_GET['mousenumber'];

$i = 1;
do {
    ?> 
    Mice <?php echo $i; ?>:
    <img src="mouse.jpg" alt="Mouse <?php echo $i; ?>">
    <?php
    $i++;}
while ($i <= $numberOfMice)
?>

<form>
    <div>
        <label for="catnumber">
            Number of kittens to show:
</label>
<input name="catnumber" id="catnumber" value="<?php 
if (isset($_GET['number'])) {
    echo htmlspecialchars($_GET['number'], ENT_QUOTES);
}
?>">


<div>
        <label for="dognumber">
            Number of dogs to show:
</label>
<input name="dognumber" id="dognumber" value="<?php 
if (isset($_GET['number'])) {
    echo htmlspecialchars($_GET['number'], ENT_QUOTES);
}
?>">

<form>
    <div>
        <label for="mousenumber">
            Number of mice to show:
</label>
<input name="mousenumber" id="mousenumber" value="<?php 
if (isset($_GET['number'])) {
    echo htmlspecialchars($_GET['number'], ENT_QUOTES);
}
?>">

</div>
<div>
    <button type="submit">Submit</button>
</div>
</form>

</body>

</html>