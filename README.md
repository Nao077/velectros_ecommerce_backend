# 🚀 VELECTROS Backend API

<p align="center">
Backend officiel de la plateforme e-commerce <strong>VELECTROS (Victory Electronics Store)</strong>
</p>

---

## 📌 Table des matières

- [À propos](#-à-propos)
- [Stack technique](#-stack-technique)
- [Architecture](#-architecture)
- [Authentification & Sécurité](#-authentification--sécurité)
- [Fonctionnalités](#-fonctionnalités)
- [Installation](#-installation)
- [Tests](#-tests)
- [Déploiement](#-déploiement)
- [Licence](#-licence)

---

## 🏢 À propos

**VELECTROS** est une entreprise camerounaise spécialisée dans la vente d’accessoires électroniques modernes et accessibles.

Ce backend constitue le **moteur central** de la plateforme e-commerce.

Il alimente :

- 🛍 Application client (Next.js – PWA)
- 🧑‍💼 Panneau d’administration (React.js)
- 📊 Outils internes de gestion

### 🎯 Objectifs

- Digitaliser l’activité commerciale  
- Automatiser la gestion des commandes et stocks  
- Structurer l’entreprise pour une expansion nationale  
- Professionnaliser l’image de marque  

---

## 🧱 Stack technique

| Technologie | Version |
|-------------|----------|
| Laravel     | 10+ |
| PHP         | 8.2+ |
| MySQL       | 8+ |
| Auth        | Sanctum |
| Architecture| RESTful API |

---

## 🏗 Architecture

Le projet suit une organisation modulaire claire :

- **Controllers** → Gestion des requêtes HTTP  
- **Requests** → Validation des données  
- **Services** → Logique métier  
- **Repositories** → Accès base de données  
- **Policies & Middleware** → Gestion des permissions  
- **Events & Listeners** → Automatisations (emails, stock, notifications)  

L’API est versionnée pour garantir la stabilité des intégrations futures.

---

## 🔐 Authentification & Sécurité

Authentification basée sur **Laravel Sanctum**.

### 👥 Rôles disponibles

- Super Admin  
- Gestionnaire  
- Livreur  
- Client  

### 🔒 Sécurité

- Hashage des mots de passe (bcrypt)  
- Middleware RBAC  
- Rate limiting  
- Validation stricte côté serveur  
- Protection contre accès non autorisés  
- Logs des actions critiques  

---

## ⚙️ Fonctionnalités

### 🛍 Catalogue Produits

- CRUD produits  
- Gestion des catégories  
- Variantes  
- Upload images  
- Recherche & filtres  
- Gestion des statuts  

### 📦 Gestion des Stocks

- Stock par produit / variante  
- Déduction automatique  
- Réintégration en cas d’annulation  
- Seuil d’alerte  

### 🧾 Commandes

- Création de commande  
- Cycle de vie structuré  
- Assignation livreur  
- Notifications email  
- Export des données  

### 💳 Paiements

- Paiement à la livraison  
- Intégration Mobile Money  
- Webhooks  
- Suivi des transactions  

### 🚚 Livraison

- Configuration des zones  
- Gestion des livreurs  
- Mise à jour des statuts  

### 📊 Reporting

- KPIs principaux  
- Statistiques de ventes  
- Exports Excel  

---

## ⚙️ Installation

### 1️⃣ Cloner le projet

```bash
git clone https://github.com/velectros/velectros-backend.git
cd velectros-backend

2️⃣ Installer les dépendances
composer install
3️⃣ Configuration environnement
cp .env.example .env
php artisan key:generate

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
📄 Licence

Projet propriétaire
VELECTROS © 2026
