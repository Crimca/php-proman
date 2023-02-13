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
    <h1>Your lucky number is: <?php echo $randomInt; ?></h1>

    <form method="post" action="showproducts.php">
    <input type="hidden" name="number" value="<?php
    echo $randomInt;
    ?>">
    <button type="submit">
        Now show me <?php echo $randomInt; ?> products!
</button>
</form>
</body>

</html>