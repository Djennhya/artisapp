<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# Artisapp

Artisapp est une application web conçue pour valoriser la vente des produits artisanaux locaux. Elle permet aux artisans de présenter et vendre leurs créations, tout en offrant aux utilisateurs la possibilité de découvrir et d’acheter des produits uniques et faits main. Le but d’Artisapp est de soutenir l'artisanat local et de faciliter la mise en relation entre artisans et acheteurs.

## Fonctionnalités principales

- **Catalogue de produits artisanaux** : Découvrez une grande variété de produits locaux, classés par catégories.
- **Gestion des comptes artisans** : Les artisans peuvent créer un profil, ajouter leurs produits, gérer leur stock et suivre leurs ventes.
- **Achat en ligne** : Les utilisateurs peuvent acheter des produits directement via la plateforme.
- **Recherche et filtres** : Trouvez facilement des produits grâce à des filtres par catégorie, prix, popularité, etc.
- **Gestion des commandes** : Suivi des commandes, notifications pour les artisans et les clients.
- **Interface d’administration** : Gestion des utilisateurs, produits, commandes, et statistiques de la plateforme.

## Architecture

L’architecture d’Artisapp s’appuie sur le framework Laravel côté backend, associé à un frontend en Blade ou un framework JavaScript moderne (Vue.js, React, etc.), selon les préférences du développeur.

```
artisapp/
├── app/                # Logique métier Laravel (Contrôleurs, Modèles, Services)
├── bootstrap/          # Chargement de l’application
├── config/             # Fichiers de configuration
├── database/           # Migrations, seeders, factories
├── public/             # Fichiers accessibles publiquement (index.php, assets)
├── resources/
│   ├── views/          # Vues Blade (ou composants JS si SPA)
│   └── js/             # Frontend JS (Vue, React, etc.)
├── routes/             # Fichiers de routes web et API
├── storage/            # Fichiers générés (logs, cache, uploads)
├── tests/              # Tests automatisés
├── .env.example        # Exemple de configuration d’environnement
├── composer.json       # Dépendances PHP
├── package.json        # Dépendances JS
└── artisan             # CLI Laravel
```

### Schéma simplifié

- **Frontend** : Blade, Vue.js ou React
- **Backend** : API REST Laravel (contrôleurs, modèles Eloquent)
- **Authentification** : Laravel Breeze, Jetstream ou Sanctum
- **Base de données** : MySQL

### Modules principaux

- `User` (utilisateur/artisan/admin)
- `Product` (produit artisanal)
- `Order` (commande)
- `Category` (catégorie de produit)
- `Dashboard` (statistiques, gestion)

## Technologies utilisées

- **Backend** : [Laravel](https://laravel.com/) (PHP)
- **Base de données** : MySQL
- **Frontend** : Blade (Laravel) ou tout framework JS moderne au choix (Vue.js, React, etc.)
- **Authentification** : Laravel Breeze, Jetstream ou Sanctum
- **Déploiement** : Compatible avec tout hébergement supportant PHP et MySQL

## Installation

1. **Cloner le dépôt**
   ```bash
   git clone https://github.com/Djennhya/Artisapp.git
   cd Artisapp
   ```

2. **Installer les dépendances**
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Configurer l'environnement**
   - Copier `.env.example` en `.env` puis configurer les accès à la base de données MySQL.
   - Générer la clé d’application :
     ```bash
     php artisan key:generate
     ```

4. **Créer la base de données et lancer les migrations**
   ```bash
   php artisan migrate --seed
   ```

5. **Lancer le serveur de développement**
   ```bash
   php artisan serve
   ```

## Contribution

Les contributions sont les bienvenues ! Merci de créer une issue ou une pull request pour toute proposition d’amélioration ou de correction.

## Licence

Ce projet est sous licence MIT.

---

**Artisapp – Valorisons l’artisanat local !**
```
>>>>>>> 6cec5d5c485ff93349bce4d981f6f465eba73081
