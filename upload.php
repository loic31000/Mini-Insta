<?php
// Vérifier que le fichier a été passé en paramètre
if (!isset($_GET['file'])) {
    header('Location: index.php');
    exit();
}

$nomFichier = htmlspecialchars($_GET['file']);
$cheminImage = 'uploads/' . $nomFichier;

// Vérifie que le fichier existe vraiment
if (!file_exists($cheminImage)) {
    echo "Image introuvable.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Upload Réussi</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Styles spécifiques à la page de confirmation */
        .confirmation {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #4ccff7;
            height: 100vh;
            text-align: center;
        }

        .confirmation h1 {
            font-family: "Rubik Dirt", sans-serif;
            font-size: 3rem;
            color: white;
        }

        .confirmation img {
            max-width: 80%;
            height: auto;
            border-radius: 2rem;
            margin: 1rem 0;
        }

        .confirmation p {
            color: white;
            font-size: 1.2rem;
            font-family: monospace;
        }

        .confirmation a {
            background: white;
            color: black;
            text-decoration: none;
            padding: 0.8rem 2rem;
            font-size: 1.2rem;
            border-radius: 0.4rem;
            margin-top: 1rem;
            box-shadow: 2px 2px 6px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>
    <section class="confirmation">
        <h1>Upload réussi !</h1>
        <img src="<?= $cheminImage ?>" alt="Image uploadée">
        <p><?= $nomFichier ?></p>
        <a href="index.php">Retour à l’accueil</a>
    </section>
</body>

</html>
