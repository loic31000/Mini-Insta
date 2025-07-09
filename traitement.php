<?php
if (
    isset($_POST['auteur'], $_POST['description']) &&
    isset($_FILES['image']) &&
    $_FILES['image']['error'] === 0
) {
    $auteur = strtolower(trim($_POST['auteur']));
    $desc = strtolower(trim($_POST['description']));
    $time = date('YmdHis');
    
    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $nomFichier = "{$time}-{$auteur}-{$desc}.{$extension}";
    $cheminDestination = "uploads/" . $nomFichier;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $cheminDestination)) {
        // ✅ Rediriger vers upload.php avec le nom du fichier en GET
        header("Location: upload.php?file=" . urlencode($nomFichier));
        exit();
    } else {
        echo "Erreur lors de l’upload.";
    }
} else {
    echo "Formulaire incomplet.";
}
