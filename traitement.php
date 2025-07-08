<?php
if (
    isset($_POST['auteur'], $_POST['description'], $_FILES['image']) &&
    $_FILES['image']['error'] === UPLOAD_ERR_OK
) {
    $auteur = strtolower(trim($_POST['auteur']));
    $description = strtolower(trim($_POST['description']));
    $image = $_FILES['image'];

    $uploadDir = __DIR__ . '/uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $timestamp = date('YmdHis');
    $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
    $safeAuteur = preg_replace('/[^a-z0-9]/i', '-', $auteur);
    $safeDesc = preg_replace('/[^a-z0-9]/i', '-', $description);

    $newName = "$timestamp-$safeAuteur-$safeDesc.$extension";
    $destination = $uploadDir . $newName;

    move_uploaded_file($image['tmp_name'], $destination);
}

header('Location: index.php');
exit;
