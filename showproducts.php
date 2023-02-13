<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
</head>
<body>
<?php


// poimitaan muuttuja URL:sta
$numberOfProducts = isset($_POST['number']) ? $_POST['number'] : 1;
if ($numberOfProducts < 1) {
    $numberOfProducts = 1;
    }


// UUSI picture-muuttuja, kuvien tulostus
    $picture = isset($_POST['picture']) ? $_POST['picture'] : 'laptop.jpg';

for ($i = 1; $i <= $numberOfProducts; $i++) {
    ?>
Product <?php echo $i; ?>:
<img src="images/<?php echo htmlspecialchars($picture, ENT_QUOTES); ?>"
alt="Product <?php echo $i; ?>">
<?php
    }



?>

<!-- Formi html osio alkaa tästä -->
<form method="post">

    <div>
        <label for="number">
            Number of Products to show:
        </label>
<input name="number" id="number" value="<?php 
if (isset($_POST['number'])) {echo htmlspecialchars ($_POST['number'], ENT_QUOTES);}
?>">
    </div>


<!-- taulukko -->
<div>
        <label for="picture">
            Select a picture:
</label>
    <?php

$pictures = [
'desktop.jpg' => 'Desktop',
'laptop.jpg' => 'Laptop',
'tablet.jpg' => 'Tablet'
            ];
    ?>

<select name="picture" id="picture">
    <?php foreach ($pictures as $filename => $description) {
?>
<option value="<?php echo htmlspecialchars($filename, ENT_QUOTES);?>"
<?php
if (isset($_POST['picture']) && $_POST['picture'] === $filename) {
    ?> selected<?php
    }

?>>
    <?php echo htmlspecialchars($description, ENT_QUOTES); ?>
</option>
    <?php
    } ?>
</select>

<div>
    <button type="submit">Submit</button>
</div>
</form>

</body>

</html>