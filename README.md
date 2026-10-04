# Mini-Insta

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3">
  <img src="https://img.shields.io/badge/Apache-D22128?style=for-the-badge&logo=apache&logoColor=white" alt="Apache">
  <img src="https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white" alt="Docker">
</p>

Mini-projet PHP permettant de publier des images dans une galerie locale.

## Fonctionnalités vérifiées

- formulaire avec auteur, description et fichier image ;
- upload via `multipart/form-data` ;
- nom de fichier généré avec date, auteur et description ;
- stockage des fichiers dans `uploads/` ;
- page de confirmation après un upload réussi ;
- galerie triée par nom de fichier en ordre décroissant ;
- échappement HTML lors de l'affichage du nom des fichiers.

Les métadonnées ne sont pas stockées dans une base de données. Elles sont intégrées au nom du fichier généré.

## Structure

```text
Mini-Insta/
├── index.php
├── traitement.php
├── upload.php
├── style.css
├── insta.png
├── uploads/
├── dockerfile
└── README.md
```

## Lancement local

Prérequis : PHP.

```bash
git clone https://github.com/loic31000/Mini-Insta.git
cd Mini-Insta
php -S localhost:8000
```

Ouvrez ensuite `http://localhost:8000`.

## Lancement avec Docker

Le `dockerfile` utilise `php:8.2-apache` et prépare les droits du dossier `uploads/`.

```bash
docker build -f dockerfile -t mini-insta .
docker run --rm -p 8080:80 --name mini-insta mini-insta
```

Ouvrez ensuite `http://localhost:8080`.

## Limites actuelles

Le traitement vérifie que l'upload PHP ne remonte pas d'erreur, mais il ne valide pas encore explicitement le type MIME, la taille maximale du fichier ou une liste d'extensions autorisées côté serveur.

Le dépôt ne contient actuellement ni tests automatisés ni fichier de licence.
