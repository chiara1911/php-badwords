
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
    <span> <?php echo $paragraph ?></span>
    <span><?php echo $censured ?></span>

    <span><?php echo strlen($paragraph)?></span>
    </main>
    <footer></footer>
</body>
</html>