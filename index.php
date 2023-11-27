
<?php
$name= $_GET["paragraph"];
$badwords= $_GET["badwords"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>
<body>
<header></header>
    <main>
      
        <form action="index.php" method="GET">
    <input type="text" name="paragraph">
    <input type="text" name="badwords">
    <button type="submit">Invia</button>
    <h1> <?php echo "$name $badwords" ?></h1>
 </form>
    </main>
    <footer></footer>
    
</body>
</html>