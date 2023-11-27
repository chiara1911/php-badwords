
<?php
$paragraph= $_GET["paragraph"];
$badword= $_GET["badword"];
$censured = str_replace($badword,'***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>censurato</title>
</head>
<body>
    <header></header>
    <main>
    <h1> <?php echo $paragraph ?></h1>
    <h1><?php echo $censured ?></h1>

    <span></span>
    </main>
    <footer></footer>
</body>
</html>