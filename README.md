# 📸 Mini-Insta

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-Formulaires-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-Layout-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Uploads](https://img.shields.io/badge/Images-Upload-blue?style=for-the-badge)
![Status](https://img.shields.io/badge/Projet-Mini%20Instagram-FF69B4?style=for-the-badge)

```
Mini-Insta
├─ uploads/
├─ index.php
├─ style.css
├─ upload.php
├─ traitement.php
├─ insta.png
└─ README.md
```

# Maquette MiniInsta

Mini‑Insta est un mini‑projet en **PHP / HTML / CSS** qui permet d’uploader des images et de les afficher comme un petit flux Instagram.
Les fichiers `upload.php` / `traitement.php` gèrent la logique d’upload et de traitement, `uploads/` stocke les images, `index.php` affiche l’interface du “feed” stylisé par `style.css`.

---

## Méthode 1 : Lancement Classique (Sans Docker)

### 1. Prérequis
Assure-vous d'avoir installé sur votre machine :
* [Git](https://git-scm.com/) (pour cloner le projet)
* Un navigateur web (Chrome, Firefox, Edge, etc.)

### 2. Cloner et lancer le projet
Ouvrez votre terminal et exécutez les commandes suivantes :

```bash
# Cloner le dépôt
git clone [https://github.com/loic31000/Mini-Insta.git](https://github.com/loic31000/Mini-Insta.git)

# Accéder au dossier
cd Mini-Insta

# Lancer le serveur PHP
php -S localhost:8000
```

Il vous suffit ensuite d'ouvrir `http://localhost:8080/` directement dans votre navigateur, ou d'utiliser l'extension **Live Server** sur VS Code.

---

## Méthode 2 : Lancement avec Docker (Recommandé)

Cette méthode utilise **Apache** (via une image légère Alpine Linux) pour servir la maquette localement sans rien installer d'autre que Docker.

### 1. Prérequis

* [Docker Desktop](https://www.docker.com/products/docker-desktop/) installé et démarré sur votre machine.

### 2. Construire l'image Docker

Placez-vous à la racine du projet (là où se trouve le `Dockerfile`) et lancez la construction de l'image avec le tag `mini-insta` (*attention au point `.` à la fin*) :

```bash
docker build --tag mini-insta .
```

### 3. Lancer le conteneur

Démarrez le conteneur en arrière-plan en redirigeant le port `80` de Nginx vers le port `8080` de votre machine :

```bash
docker run -p 8080:80 --name projet-insta mini-insta
```

### 4. Accéder au projet

Ouvrez votre navigateur et rendez-vous sur :
👉 **[http://localhost:8080](https://www.google.com/search?q=http://localhost:8080)**

> 📱 **Astuce pour le Mini-Insta :** Une fois sur le site, appuyez sur `F12` dans votre navigateur et basculez en mode "Mobile/Tablette" pour tester le comportement responsive du menu burger !

---
