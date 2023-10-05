# APP Championnat


## Installation

### initier le projet

- Modifier les lignes suivantes du fichier .env :
```json 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

- Executer la migration
`artisan migrate:install`

### commandes a effectuer pour les seeder 
</br>
`artisan db:seed --class=EquipeSeeder`
</br>
`artisan db:seed --class=JoueurSeeder`
</br>
`artisan db:seed --class=MatcheSeeder`
