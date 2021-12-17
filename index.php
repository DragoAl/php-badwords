<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP-BADWORDS</title>
    
    <?php
        $name1 = 'World';
    ?>   
        
</head>
<body>
    <div><h1>Hello <?php echo $name1 ?> </h1> </div> 
    <div> <?php echo "La lunghezza della parola inserita è: " . strlen($name1) ?></div>

    <form action="censored.php" method="get">
        <input type="text" name="name" placeholder='inserisci la parola da censurare'>
        <input type="submit">

    </form>


</body>
</html>