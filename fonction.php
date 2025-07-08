<?php
function getUploadedImages(): array {
    $dir = 'uploads/';
    $images = [];

    if (is_dir($dir)) {
        $handle = opendir($dir);
        while (($file = readdir($handle)) !== false) {
            if ($file !== '.' && $file !== '..' && is_file($dir . $file)) {
                $images[] = $dir . $file;
            }
        }
        closedir($handle);
    }

    // Tri inverse pour afficher la plus récente d’abord
    rsort($images);
    return $images;
}
