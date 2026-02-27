🚀 VELECTROS Backend API
<p align="center"> Backend officiel de la plateforme e-commerce <strong>VELECTROS (Victory Electronics Store)</strong> </p> <p align="center">






</p>
📌 Table des matières

À propos

Stack technique

Architecture

Authentification & Sécurité

Fonctionnalités principales

Installation

Tests


Licence

🏢 À propos

VELECTROS est une entreprise camerounaise spécialisée dans la vente d’accessoires électroniques modernes et accessibles.

Ce backend constitue le moteur central de la plateforme e-commerce.
Il alimente :

🛍 L’application client (Next.js – PWA)

🧑‍💼 Le panneau d’administration (React.js)

📊 Les outils internes de gestion

Objectifs principaux :

Digitaliser entièrement l’activité commerciale

Automatiser commandes et gestion de stock

Structurer l’entreprise pour une expansion nationale

Professionnaliser l’image de marque

🧱 Stack technique
Framework     : Laravel 10+
Langage       : PHP 8.2+
Base de donnée: MySQL 8+
Auth          : SANCTUM
Architecture  : RESTful API

🏗 Architecture

Le projet suit une organisation modulaire :

Controllers → Gestion des requêtes HTTP

Requests → Validation des données

Services → Logique métier

Repositories → Accès base de données

Policies & Middleware → Gestion des permissions

Events & Listeners → Automatisations (emails, stock, notifications)

L’API est versionnée pour assurer la stabilité des intégrations futures.

🔐 Authentification & Sécurité

Authentification basée sur JWT.

👥 Rôles disponibles

Super Admin

Gestionnaire

Livreur

Client

🔒 Sécurité

Hashage bcrypt

Middleware RBAC

Rate limiting

Validation stricte côté serveur

Protection contre accès non autorisés

Logs des actions critiques

⚙️ Fonctionnalités principales
🛍 Catalogue Produits

CRUD produits

Gestion catégories

Variantes

Upload images

Recherche et filtres

Gestion des statuts

📦 Gestion des Stocks

Stock par produit / variante

Déduction automatique

Réintégration en cas d’annulation

Seuil d’alerte

🧾 Commandes

Création commande

Cycle de vie structuré

Assignation livreur

Notifications email

Export des données

💳 Paiements

Paiement à la livraison

Intégration Mobile Money

Webhooks

Suivi transactions

🚚 Livraison

Configuration des zones

Gestion des livreurs

Mise à jour des statuts

📊 Reporting

KPIs principaux

Statistiques de ventes

Exports Excel

⚙️ Installation
1️⃣ Cloner le projet
git clone https://github.com/velectros/velectros-backend.git
cd velectros-backend
2️⃣ Installer les dépendances
composer install
3️⃣ Configuration environnement
cp .env.example .env
php artisan key:generate
php artisan jwt:secret

Configurer le fichier .env :

DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

MAIL_MAILER=
MAIL_HOST=
MAIL_USERNAME=
MAIL_PASSWORD=

PAYMENT_PROVIDER_KEYS=
4️⃣ Migration
php artisan migrate --seed
5️⃣ Lancer le serveur
php artisan serve
🧪 Tests
php artisan test

Les tests couvrent les modules critiques :

Authentification

Commandes

Paiements

Permissions

🚀 Déploiement

Optimisation production
php artisan config:cache
php artisan route:cache
php artisan queue:work


Projet propriétaire
VELECTROS © 2026