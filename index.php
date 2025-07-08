<?php
function getUploadedImages($dossier = 'uploads')
{
    $images = [];

    if (is_dir($dossier)) {
        $dir = opendir($dossier);
        while (($fichier = readdir($dir)) !== false) {
            if ($fichier !== '.' && $fichier !== '..' && is_file($dossier . '/' . $fichier)) {
                $images[] = $fichier;
            }
        }
        closedir($dir);
    }

    // Manipulation de tableau PHP : tri décroissant (plus récentes en haut)
    rsort($images); // ou array_reverse(sort(...)) pour montrer la maîtrise

    return $images;
}

$images = getUploadedImages();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mini Insta</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Rubik+Dirt&family=Slackey&display=swap"
        rel="stylesheet">
</head>

<body>

    <header>
        <img src="insta.png" alt="">
    </header>

    <section class="formulaire-inscription">
        <div class="formulaire">
            <form action="traitement.php" method="POST" enctype="multipart/form-data">
                <label for="auteur">Auteur :</label>
                <input type="text" name="auteur" id="auteur" required>

                <label for="description">Nom de l’image :</label>
                <input type="text" name="description" id="description" required>

                <label for="image">Image :</label>
                <input type="file" name="image" id="image" accept="image/*" required>

                <button type="submit">Publier</button>
            </form>
        </div>
    </section>

    <section class="galerie">
        <?php foreach ($images as $img): ?>
            <div style="text-align: center;">
                <img class="image" src="uploads/<?= htmlspecialchars($img) ?>" alt="image publiée">
                <p><?= htmlspecialchars($img) ?></p>
            </div>
        <?php endforeach; ?>
    </section>


</body>

</html>