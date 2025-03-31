<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo '<h1>hello world !</h1>';

        $a = "toto: ";
        $b = "56";
        $c = $a . $b;

        $age = 18;
        if ($age < 18) {
            echo "<p>Vous êtes mineur</p>";
        } 
        elseif ($age == 18) {
            echo "<p>Bravo vous venez d'avoir 18 ans</p>";
        }
        else {
            echo "<p>Vous êtes majeur</p>";
        }
        
    ?>
    <p>2: <?php echo $c; ?></p>    
</body>
</html>


*
**
***
****
*****
******
*******
********
