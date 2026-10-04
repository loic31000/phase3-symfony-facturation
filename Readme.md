# Phase 3 Symfony Facturation

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.4-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.4">
  <img src="https://img.shields.io/badge/Symfony-8.0-000000?style=for-the-badge&logo=symfony&logoColor=white" alt="Symfony 8">
  <img src="https://img.shields.io/badge/Doctrine-ORM-FC6A31?style=for-the-badge&logo=doctrine&logoColor=white" alt="Doctrine ORM">
  <img src="https://img.shields.io/badge/PostgreSQL-16-336791?style=for-the-badge&logo=postgresql&logoColor=white" alt="PostgreSQL 16">
  <img src="https://img.shields.io/badge/Twig-3-000000?style=for-the-badge&logo=twig&logoColor=white" alt="Twig">
  <img src="https://img.shields.io/badge/TailwindCSS-38BDF8?style=for-the-badge&logo=tailwindcss&logoColor=white" alt="Tailwind CSS">
</p>

Projet pédagogique Symfony autour d'une application de facturation.

Ce dépôt est un fork de [CHAOUCHI/phase3-symfony-facturation](https://github.com/CHAOUCHI/phase3-symfony-facturation).

## Fonctionnalités vérifiées

Le code présent sur la branche `master` comprend :

- inscription et connexion utilisateur ;
- mots de passe gérés avec le hasher Symfony ;
- profil utilisateur modifiable ;
- dashboard protégé par `ROLE_USER` ;
- CRUD des clients ;
- CRUD des produits ;
- filtrage des clients et produits par utilisateur connecté ;
- entités `Invoice` et `InvoiceItem` liées aux utilisateurs, clients et produits ;
- statuts de facture et unités modélisés avec des enums.

Le dashboard utilise actuellement des statistiques définies directement dans le contrôleur. Le dépôt ne contient pas de contrôleur de facture dans l'état actuel, même si les entités de facturation sont déjà présentes.

## Stack

- PHP 8.4 minimum ;
- Symfony 8.0 ;
- Doctrine ORM 3 ;
- PostgreSQL 16 dans la configuration active ;
- Twig ;
- Symfony Security ;
- Tailwind via `symfonycasts/tailwind-bundle` ;
- Docker Compose pour la base ;
- PHPUnit configuré pour le développement.

## Installation

```bash
git clone https://github.com/loic31000/phase3-symfony-facturation.git
cd phase3-symfony-facturation
composer install
docker compose up -d database
php bin/console doctrine:migrations:migrate
```

Si Symfony CLI est installé :

```bash
symfony serve
```

## Configuration

La connexion Doctrine passe par `DATABASE_URL`.

Pour les valeurs locales ou les secrets, utilisez `.env.local` plutôt que de modifier ou publier des informations sensibles dans les fichiers versionnés.

Le `compose.override.yaml` expose PostgreSQL sur un port local attribué par Docker et ajoute aussi Mailpit pour le développement.

## Architecture

```text
src/
├── Controller/
├── DataFixtures/
├── Entity/
├── Enum/
├── Form/
├── Repository/
├── Security/
└── Twig/

templates/
├── client/
├── dashboard/
├── product/
├── profile/
├── registration/
└── security/
```

## Modèle métier présent

Les entités principales présentes dans le code sont :

- `User` ;
- `Client` ;
- `Product` ;
- `Invoice` ;
- `InvoiceItem`.

## Tests

PHPUnit est déclaré dans les dépendances de développement. Le dossier `tests/` contient actuellement le bootstrap, sans suite de tests métier complète.

## Licence

Le `composer.json` déclare le projet comme `proprietary`.
