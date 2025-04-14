https://www.youtube.com/overconsulting

## Qu'est-ce que le PHP?

PHP (PHP: Hypertext Preprocessor) est un langage de programmation spécialement conçu pour le développement web. Contrairement à HTML et CSS qui sont des langages statiques, PHP est un langage dynamique qui s'exécute côté serveur.

### Pourquoi apprendre le PHP?

- Il est spécifiquement conçu pour le web
- Facile à apprendre pour les débutants
- Utilisé par environ 77% des sites web (dont WordPress, Facebook)
- Grande communauté et documentation abondante
- Gratuit et open source

### Comment fonctionne le PHP?

1. Le navigateur envoie une requête au serveur web
2. Le serveur identifie les fichiers PHP et les traite
3. Le code PHP est exécuté et génère du HTML
4. Le serveur renvoie le HTML généré au navigateur
5. Le navigateur affiche la page web

## Installation de l'environnement

Pour développer en PHP, vous avez besoin d'un serveur web, de PHP et généralement d'une base de données. Le plus simple est d'installer une solution "tout-en-un" comme:

MAMP: https://www.mamp.info/
XAMPP: https://www.apachefriends.org/
WAMP: https://www.wampserver.com/

## Vérification

Dans le dossier racine de votre server web: 

htdocs pour MAMP et XAMPP, et dans www pour WAMP

*info.php*
```php
<?php phpinfo(); ?>
```

Rendez vous sur: http://localhost/info.php


## Votre premier script PHP

Toujours dans le dossier racine de votre serveur créez le fichier `bonjour.php` avec le contenu suivant

*bonjour.php*
```php
<!DOCTYPE html>
<html>
<head>
    <title>Mon premier script PHP</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Bonjour avec PHP</h1>
    
    <?php
        // Ceci est un commentaire sur une ligne
        echo "<p>Bonjour le monde!</p>";
        
        /* Ceci est un commentaire
           sur plusieurs lignes */
        
        // Variables
        $prenom = "Jean";
        $age = 25;
        
        // Affichage avec des variables
        echo "<p>Je m'appelle $prenom et j'ai $age ans.</p>";
    ?>
    
    <p>Cette partie est en HTML simple.</p>
    
    <?php 
        echo "<p>On peut avoir plusieurs blocs PHP dans une même page.</p>";
    ?>
</body>
</html>
```

**Points importants**:
- Le code PHP est encadré par `<?php` et `?>`
- Les instructions se terminent par un point-virgule `;`
- La fonction `echo` permet d'afficher du texte
- Les variables commencent par le symbole `$`
- On peut mélanger HTML et PHP dans un même fichier

## Variables et types de données

### Déclaration de variables

```php
$nom = "Dupont";           // Chaîne de caractères (string)
$age = 30;                 // Nombre entier (integer)
$prix = 19.99;             // Nombre décimal (float)
$est_inscrit = true;       // Booléen (boolean)
$produits = array("livre", "stylo", "cahier");  // Tableau (array)
$utilisateur = null;       // Valeur nulle
```

### Chaînes de caractères

```php
$prenom = "Marie";
$nom = 'Dupont';  // Les guillemets simples fonctionnent aussi

// Concaténation (joindre des chaînes)
$nom_complet = $prenom . " " . $nom;  // Marie Dupont

// Les variables sont interprétées dans les guillemets doubles
echo "Bonjour $prenom!";  // Affiche: Bonjour Marie!
echo 'Bonjour $prenom!';  // Affiche: Bonjour $prenom!

// Fonctions utiles pour les chaînes
$longueur = strlen($prenom);  // 5
$majuscules = strtoupper($prenom);  // MARIE
$minuscules = strtolower($nom);  // dupont
```

### Tableaux (arrays)

```php
// Tableaux indexés numériquement
$fruits = array("pomme", "banane", "orange");
$fruits = ["pomme", "banane", "orange"];  // Notation alternative

echo $fruits[0];  // Affiche: pomme

// Tableaux associatifs (clé => valeur)
$personne = array(
    "prenom" => "Thomas",
    "age" => 28,
    "ville" => "Paris"
);

echo $personne["ville"];  // Affiche: Paris

// Tableaux multidimensionnels
$eleves = array(
    array("Marie", "Dupont", 16),
    array("Jean", "Martin", 15),
    array("Sophie", "Lefebvre", 17)
);

echo $eleves[2][0];  // Affiche: Sophie
```

## Opérateurs

### Opérateurs arithmétiques

```php
$a = 10;
$b = 3;

$addition = $a + $b;       // 13
$soustraction = $a - $b;   // 7
$multiplication = $a * $b; // 30
$division = $a / $b;       // 3.33333...
$modulo = $a % $b;         // 1 (reste de la division)
$puissance = $a ** $b;     // 1000 (10^3)
```

### Opérateurs d'assignation

```php
$x = 10;
$x += 5;    // Équivalent à: $x = $x + 5;    (15)
$x -= 3;    // Équivalent à: $x = $x - 3;    (12)
$x *= 2;    // Équivalent à: $x = $x * 2;    (24)
$x /= 4;    // Équivalent à: $x = $x / 4;    (6)
$x %= 4;    // Équivalent à: $x = $x % 4;    (2)
```

### Opérateurs de comparaison

```php
$a = 5;
$b = "5";

$a == $b;    // true (égalité de valeur)
$a === $b;   // false (égalité stricte: valeur ET type)
$a != $b;    // false (différence de valeur)
$a !== $b;   // true (différence stricte: valeur OU type)
$a > 3;      // true (supérieur à)
$a < 10;     // true (inférieur à)
$a >= 5;     // true (supérieur ou égal à)
$a <= 5;     // true (inférieur ou égal à)
```

### Opérateurs logiques

```php
$a = true;
$b = false;

$a && $b;    // false (ET logique)
$a || $b;    // true (OU logique)
!$a;         // false (NON logique)
```

## Structures de contrôle

### Conditions if/else

```php
$age = 18;

if ($age < 13) {
    echo "Vous êtes un enfant.";
} elseif ($age < 18) {
    echo "Vous êtes un adolescent.";
} else {
    echo "Vous êtes un adulte.";
}
```

### Switch

```php
$jour = "mardi";

switch ($jour) {
    case "lundi":
        echo "C'est le début de semaine.";
        break;
    case "mardi":
    case "mercredi":
    case "jeudi":
        echo "C'est le milieu de semaine.";
        break;
    case "vendredi":
        echo "C'est bientôt le weekend!";
        break;
    case "samedi":
    case "dimanche":
        echo "C'est le weekend!";
        break;
    default:
        echo "Ce jour n'existe pas.";
}
```

## Boucle while

```php
$compteur = 1;

while ($compteur <= 5) {
    echo "Compteur: $compteur <br>";
    $compteur++;
}
```

### Boucle do-while

```php
$compteur = 1;

do {
    echo "Compteur: $compteur <br>";
    $compteur++;
} while ($compteur <= 5);
```

### Boucle for

```php
for ($i = 1; $i <= 5; $i++) {
    echo "Numéro: $i <br>";
}
```

### Boucle foreach (pour les tableaux)

```php
$fruits = ["pomme", "banane", "orange"];

foreach ($fruits as $fruit) {
    echo "J'aime les $fruit <br>";
}

// Avec tableaux associatifs
$personne = [
    "prenom" => "Thomas",
    "age" => 28,
    "ville" => "Paris"
];

foreach ($personne as $cle => $valeur) {
    echo "La clé '$cle' contient '$valeur' <br>";
}
```

## Fonctions

### Pourquoi utiliser des fonctions ?

1. **Réutilisation du code** : Vous écrivez le code une seule fois et pouvez l'utiliser plusieurs fois.
2. **Organisation** : Votre code devient plus structuré et facile à comprendre.
3. **Maintenance** : Si vous devez modifier une fonctionnalité, vous le faites à un seul endroit.

### Comment créer une fonction en PHP ?

Pour créer une fonction, vous utilisez le mot-clé `function` suivi du nom de la fonction et de parenthèses `()`. Le code de la fonction est placé entre accolades `{}`.

*function.php*
```php
function direBonjour() {
    echo "Bonjour !";
}
```

### Comment utiliser (appeler) une fonction ?

Pour utiliser une fonction, vous écrivez simplement son nom suivi de parenthèses :

```php
direBonjour();  // Affiche : Bonjour !
```

### Les paramètres de fonction

Les fonctions peuvent accepter des données en entrée, appelées "paramètres" ou "arguments". Ils sont placés entre les parenthèses lors de la définition de la fonction :

```php
function direBonjourA($prenom) {
    echo "Bonjour $prenom !";
}

direBonjourA("Marie");  // Affiche : Bonjour Marie !
```

Vous pouvez avoir plusieurs paramètres, séparés par des virgules :

```php
function direBonjourPersonnalise($prenom, $heure) {
    echo "Bonjour $prenom ! Il est $heure.";
}

direBonjourPersonnalise("Jean", "14h30");  // Affiche : Bonjour Jean ! Il est 14h30.
```

### Les valeurs de retour

Les fonctions peuvent aussi "renvoyer" une valeur avec le mot-clé `return`. Cela permet d'utiliser le résultat d'une fonction dans d'autres parties du code :

```php
function addition($a, $b) {
    $resultat = $a + $b;
    return $resultat;
}

$somme = addition(5, 3);  // $somme vaut 8
echo "Le résultat est : $somme";
```
La fonction s'arrête immédiatement lorsqu'elle rencontre `return`.

### Portée des variables

Les variables créées à l'intérieur d'une fonction sont "locales" à cette fonction. Elles n'existent pas en dehors de la fonction :

```php
function test() {
    $variable_locale = "Je suis locale";
    echo $variable_locale;  // Fonctionne
}

test();
echo $variable_locale;  // Erreur ! Cette variable n'existe pas ici
```

Pour utiliser une variable globale à l'intérieur d'une fonction, vous devez utiliser le mot-clé `global` :

```php
$variable_globale = "Je suis globale";

function test() {
    global $variable_globale;
    echo $variable_globale;  // Fonctionne
}

test();
```

En résumé, les fonctions sont des outils puissants qui vous permettent d'organiser votre code, de le réutiliser et de le rendre plus facile à maintenir. Elles sont essentielles pour tout développeur PHP.
## Formulaires HTML et PHP

Comme on l'a vu, le HTML sert à mettre en forme ce qu'on veut montrer à l'utilisateur, mais aussi à lui demander des informations. De l'autre côté, le PHP permet de traiter (faire des opérations) les données envoyées par l'utilisateur. Voyons comment lié les deux !

*contact.php*
```php
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de contact</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Formulaire de contact</h1>
    
    <form method="post" action="traitement.php">
        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
</body>
</html>
```

*traitement.php*
```php
<!DOCTYPE html>
<html>
<head>
    <title>Traitement du formulaire</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Traitement du formulaire</h1>
    
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        // Validation simple
        if (empty($nom) || empty($email) || empty($message)) {
            echo "<p>Tous les champs sont obligatoires!</p>";
        } else {
            // Afficher les données reçues
            echo "<p><strong>Nom:</strong> " . htmlspecialchars($nom) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
            echo "<p><strong>Message:</strong> " . htmlspecialchars($message) . "</p>";
            
            // Dans un cas réel, on pourrait envoyer un email, enregistrer en base de données, etc.
        }
    } else {
        echo "<p>Aucune donnée n'a été soumise.</p>";
    }
    ?>
    
    <p><a href="contact.php">Retour au formulaire</a></p>
</body>
</html>
```

**Points importants**:
- `$_POST` est un tableau qui contient les données envoyées par formulaire
- `$_GET` serait utilisé si la méthode du formulaire était "get"
- `htmlspecialchars()` est utilisée pour sécuriser l'affichage des données
- `$_SERVER["REQUEST_METHOD"]` permet de vérifier comment la page a été appelée

## Base de données

Maintenant, on est capable de récupérer des informations, mais nous avons souvent besoin de se souvenir de ces choix ou de ces informations, par exemple si quelqu'un créé un compte sur notre site, il faut pouvoir vérifier quand il revient si les informations sont bonnes lorsqu'il revient. 

Pour ce faire on va utiliser une base de donnée. Dans ce cours nous utiliserrons MySQL, mais il en existe d'autre comme Sqlite, PosgrSQL, SQLserver pour les bases de données relationnel. Mais il existe aussi des bases de données NoSQL comme: MongoDB, Neo4J, firebase.
### Création de la base de données

- Ouvrez phpMyAdmin ([http://localhost/phpmyadmin](http://localhost/phpmyadmin))
- Créez une nouvelle base de données nommée "test_php"
- Créez une table "utilisateurs" avec les colonnes:
    - id (INT, AUTO_INCREMENT, PRIMARY KEY)
    - first_name (VARCHAR(50))
    - last_name (VARCHAR(50))
    - email (VARCHAR(100))
    - created_at (DATETIME)
    - updated_at (DATETIME)

### Connexion à une base de données

*test_bdd.php*
```php
<?php
// Paramètres de connexion
$host = "localhost";
$dbname = "test_php";
$username = "root";  // Nom d'utilisateur par défaut de XAMPP
$password = "";      // Pas de mot de passe par défaut sur XAMPP

try {
    // Établir la connexion
    $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Configurer PDO pour afficher les erreurs
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connexion réussie!";
    
    // INSERTION
    $sql_insert = "INSERT INTO utilisateurs (first_name, last_name, email, created_at, updated_at) 
                   VALUES (:firstname, :lastname, :email, NOW(), NOW())";
    $stmt = $connexion->prepare($sql_insert);
    $stmt->execute([
        ':firstname' => 'Marie',
        ':lastname' => 'Dupont',
        ':email' => 'marie@exemple.com'
    ]);
    echo "<p>Utilisateur ajouté! ID: " . $connexion->lastInsertId() . "</p>";
    
    // SÉLECTION All
    $sql_select = "SELECT * FROM utilisateurs";
    $stmt = $connexion->query($sql_select);
    $utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<h2>Liste des utilisateurs:</h2>";
    echo "<ul>";
    foreach ($utilisateurs as $utilisateur) {
        echo "<li>" . htmlspecialchars($utilisateur['first_name']) . " " . htmlspecialchars($utilisateur['lasst_name']) .
             " (" . htmlspecialchars($utilisateur['email']) . ")</li>";
    }
    echo "</ul>";
    
    // MISE À JOUR
    $sql_update = "UPDATE utilisateurs SET nom = :nouveau_nom WHERE id = :id";
    $stmt = $connexion->prepare($sql_update);
    $stmt->execute([
        ':last_name' => 'Tao',
        ':id' => 1
    ]);
    echo "<p>Utilisateur mis à jour!</p>";
    
    // SUPPRESSION
    $sql_delete = "DELETE FROM utilisateurs WHERE id = :id";
    $stmt = $connexion->prepare($sql_delete);
    $stmt->execute([':id' => 1]);
    echo "<p>Utilisateur supprimé!</p>";
    
} catch(PDOException $e) {
    echo "<p>Erreur de connexion: " . $e->getMessage() . "</p>";
}

// Fermer la connexion
$connexion = null;
?>
```

**Points importants**:
- PDO est l'interface recommandée pour accéder aux bases de données
- Les requêtes préparées évitent les injections SQL
- `try/catch` permet de gérer proprement les erreurs
- `fetchAll()` récupère tous les résultats d'une requête SELECT

## Projet pratique

Créons une simple application de gestion de liste de tâches (todo list).

### Structure du projet

```
/todo_app
    /css
        style.css
    index.php     (liste des tâches)
    ajouter.php   (ajout d'une tâche)
    supprimer.php (suppression d'une tâche)
    db.php        (connexion à la base de données)
```

### Base de données

Dans phpMyAdmin, créez une base "todo_app" avec une table "taches":
- id (INT, AUTO_INCREMENT, PRIMARY KEY)
- label (VARCHAR(100))
- description (TEXT)
- created_at (DATETIME)
- updated_at (DATETIME)
- active (BOOLEAN)
