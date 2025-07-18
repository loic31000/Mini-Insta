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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Rubik+Dirt&family=Slackey&display=swap"
        rel="stylesheet">
    <style>
        .confirmation {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to right, #f3eded, #4ccff7);
            height: 100vh;
            text-align: center;
        }

        .confirmation h1 {
            font-family: "Rubik Dirt", system-ui;
            font-weight: 400;
            font-style: normal;
            font-size: 2.9em;

        }

        .confirmation img {
            border-radius: 2rem;
            margin: 1rem 0;
            width: 590.4px;
            height: 897.8px;
        }

        .confirmation p {
            color: black;
            font-size: 1.2rem;
            font-family: monospace;
            font-family: "Rubik Dirt", system-ui;
            font-weight: 400;
            font-style: normal;
        }

        .confirmation a {
            background-color: #4ccff7;
            text-decoration: none;
            padding: 0.8rem 2rem;
            margin-top: 1rem;
            box-shadow: 3px 3px 6px rgb(14, 15, 15);
            text-shadow: 2px 2px 4px rgba(13, 240, 240, 0.8);
            font-family: "Rubik Dirt", sans-serif;
            font-size: 3rem;
            color: black;
            border-radius: 2em;
            border: solid rgb(249, 251, 252);
            margin-bottom: 2em;
        }

        @media only screen and (min-width : 1224px) {
            .confirmation img {
                width: 572.1px;
                height: 696.9px;
            }
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