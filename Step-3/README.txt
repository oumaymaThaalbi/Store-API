Store API Project

Installation et configuration de Api Platform API:

les fichiers crées/modifiés :
Entity/Store.php
config/packages/api_platform.yml

Mon Url : http://localhost:8000/api
les filtres appilqués : address et ou activity

Pour la DB: importer stores.sql OU
doctrine:database:create  (stores)
php bin/console make:migration
php bin/console doctrine:migrations:migrate
