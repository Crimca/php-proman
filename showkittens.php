<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kittens</title>
</head>
<body>
<?php

// $numberOfKittens = 7;
// poimitaan muuttuja URL:sta
$numberOfKittens = $_GET['number'];

for ($i = 1; $i <= $numberOfKittens; $i++) {
    ?>
Cat <?php echo $i; ?>:
<img src="cat.png" alt="Cat <?php echo $i; ?>">
<?php

}


?>

<form>
    <div>
        <label for="number">
            Number of kittens to show:
</label>
<input name="number" id="number" value="<?php 
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