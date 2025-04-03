<?php
$animaux = ['chien', 'chat', 'hamster'];

$search = $_GET['search'];

echo $search;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes animaux</title>
</head>
<body>
    <form method="" action="">
        <input 
            value="<?php echo $search; ?>"
            type="text" 
            name="search"
            placeholder="Entrez ce que vous cherchez" 
        />
        <button type="submit">Chercher</button>
    </form>

    <table border="1">
        <tr>
            <th>Nom</th>
        </tr>
        <?php foreach($animaux as $animal) { ?>
            <?php if ( $search == "" || strtolower($search) == strtolower($animal) ) { ?>
                <tr>
                    <td><?php echo $animal; ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table>
</body>
</html>