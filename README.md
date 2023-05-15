<h1 align="center"><a href="https://laravel.com" target="_blank">Star App</a></h1>

# Application Test

# Technologies utulisé


- php 8.1
- Laravel 10
- Javascript
- VueJs
- css (tailwind css)

# Instalation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `git clone git@github.com:arbims/codeart.git`
3. Run `composer install`.
4. Run `yarn && yarn dev`

# migration des données avec instalation des tables
1. Crée dans Mysql une base de donées "starapps" 
>> Changer le nom de la base et le nom d'utulisateur et le mot de passe dans le fichier .env

>> Si le Fichier .env n'existe renomer le fichier .env.local sous le nom .env 

2. Run `php artisan db:migrate --seed`
3. Run `php artisan storage:link`

# lancer l'applicarion
1. Run `php artisan serve`
2. Run `yarn dev` or `npm run dev`

# gestion backoffice
1. il faut se connecter l'url de connextion `http://localhost:8000/login`
2. url de gestion des stars `http://localhost:8000/admin/star`
3. url Client `http://localhost:8000/`