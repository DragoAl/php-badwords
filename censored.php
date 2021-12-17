<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BADWORDS</title>
</head>
<body>
    <div><h1>Hello <?php echo $_GET["name"] ?> </h1> </div> 

    <form action="censored.php" method="get">
        <input type="text" name="name" placeholder='inserisci la parola da censurare'>
        <input type="submit">

    </form>

    <div><p>Parola Censurata :  <?php echo  substr_replace($_GET["name"], '***', 0) ?> </h1> </p>
    <div> <?php echo  "La lunghezza della parola censurata è: " . strlen($_GET["name"]) ?></div>
</body>
</html>