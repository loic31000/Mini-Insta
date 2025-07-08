<?php
if (
    isset($_FILES['image'], $_POST['auteur'], $_POST['description']) &&
    $_FILES['image']['error'] === 0
) {
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Données du formulaire
    $auteur = strtolower(trim($_POST['auteur']));
    $description = strtolower(trim($_POST['description']));
    $fichier = $_FILES['image'];

    // Nettoyage du nom de fichier
    $auteur = preg_replace('/[^a-z0-9\-]/i', '-', $auteur);
    $description = preg_replace('/[^a-z0-9\-]/i', '-', $description);

    // Détails du fichier
    $extension = pathinfo($fichier['name'], PATHINFO_EXTENSION);
    $timestamp = date('YmdHis'); // format: 20250707134522

    // Format de nom demandé : date-auteur-filename.extension
    $nomFichier = "$timestamp-$auteur-$description.$extension";
    $chemin = $uploadDir . $nomFichier;

    // Déplacement du fichier
    move_uploaded_file($fichier['tmp_name'], $chemin);
    header('Location: index.php');
    exit;
} else {
    echo "Erreur lors de l'envoi du fichier.";
}
