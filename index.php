


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Php Badwords</title>
</head>
<body>
<header></header>
    <main>
       
    
        <form action="censura.php" method="GET">
    <input type="textarea" name="paragraph" size="150" class="text-area">
    <input type="text" name="badword">
    <button type="submit">Invia</button>    
 </form>
<h1><?php echo "$paragraph $badword"; ?></h1> 
    </main>
    <footer></footer>
    
</body>
</html>