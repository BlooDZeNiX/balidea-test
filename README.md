# technical test.

This is the project for the techinical test.

It uses [Ddev](https://ddev.readthedocs.io/) with PHP 8.1, MariaDB 10.6, Drupal 10.X.X.

There is one snapshot of the database with the Drupal installation in the root of the project.

## Installation

Use [Ddev](https://ddev.readthedocs.io/) to install the project.

```bash
ddev start
ddev composer install
ddev snapshot restore
ddev drush uli
```