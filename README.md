# GeniusPro360° – Outils privés pour freelances et gestion de comptes bancaires

## 🔍 Qu'est-ce que c'est ?

**GeniusPro360°** est une suite d'outils destinée aux freelances pour gérer efficacement leur activité : clients, projets, factures, et même les comptes bancaires personnels.

Il existe bien sûr de nombreux outils déjà disponibles, mais j’ai préféré concevoir ma propre solution sur mesure.

---

## ✨ Fonctionnalités

### Gestion de freelance

- Gestion des clients
- Gestion des projets
- Suivi des feuilles de temps
- Rapports détaillés
- Support des contrats de service
- Génération de rapports PDF

### Gestion de comptes bancaires

- Gestion de plusieurs comptes bancaires
- Import de fichiers CSV (Deutsche Bank, Targobank)
- Attribution automatique des écritures récurrentes
- Rapports financiers détaillés

---

## 🛠️ Installation

### Prérequis

- PHP 8.1 ou plus récent
- PostgreSQL 12.x ou plus récent (testé avec PgSQL 14.5)
- Navigateur moderne ([compatibilité Bootstrap](https://getbootstrap.com/docs/5.2/getting-started/browsers-devices/))

Vérifie la configuration système avec Symfony :

```bash
symfony check:requirements
Clonage depuis GitHub
bash
Copier
Modifier
git clone git@github.com:abondiaye/360.git
cd 360
composer install
🗄️ Configuration de la base de données
Connexion en tant que postgres :

bash
Copier
Modifier
su - postgres
psql
Création de l'utilisateur et de la base :

sql
Copier
Modifier
CREATE ROLE geniuspro LOGIN CREATEDB PASSWORD 'genius2025';
CREATE DATABASE geniuspro OWNER geniuspro;
⚙️ Configuration Symfony / GeniusPro360°
Créer un fichier .env.local à la racine du projet avec :

env
Copier
Modifier
APP_ENV=prod
DATABASE_URL=postgresql://geniuspro:genius2025@127.0.0.1:5432/geniuspro?serverVersion=14&charset=utf8
Puis exécute la migration :

bash
Copier
Modifier
bin/console doctrine:migrations:migrate
Ajouter un utilisateur :

bash
Copier
Modifier
bin/console app:user
Lance le projet dans ton navigateur en pointant vers le dossier public.

📦 Technologies et bibliothèques utilisées
Symfony 6.x

Bootstrap 5.x

FontAwesome 6.x

jQuery 3.6

Chart.js

TCPDF

Luxon

👤 Auteur
Abdoulaye N'diaye
Développeur full-stack & technicien IT
📧 a_ndiaye@outlook.com
🔗 https://github.com/abondiaye

📜 Licence
Ce projet est publié sous licence MIT – libre d’utilisation et de modification.

yaml
Copier
Modifier

---

### ✅ Pour l’enregistrer :

1. Ouvre le fichier :
   ```bash
   nano README.md
Colle tout le contenu ci-dessus

Enregistre avec Ctrl + O, puis Entrée, puis quitte avec Ctrl + X

Envoie-le sur GitHub :

bash
Copier
Modifier
git add README.md
git commit -m "Ajout du README en français"
git push origin main
