# Laravel-Eindopdracht
Eindopdracht voor PHP Leerjaar 2

## Clone Repo
```git
git clone https://github.com/SamWolters/Laravel-Eindopdracht.git
```

## Composer install
```composer
composer install
```

## Npm install
Open de folder 'Blog' in Visual Studio Code, open de terminal en run de command.

```npm
  npm install
```
## Database instellen
Maak een database aan op je localhost met phpmyadmin met de naam blog.
En een gebruiker aan met de username 'laravel' en password leeg laten. 
Geef vervolgens de gebruiker alle rechten.

Ga vervolgens terug naar Visual Studio Code open een nieuwe terminal en run de command.
```php
php artisan migrate:fresh --seed
```

## Gebruikers account
Er wordt standaard een account aangemaakt. De gegevens hiervan zijn. </br>
E-mail: admin@laravel.com </br> 
Password: Welkom123 </br>
Username: Admin </br>
Role: Admin </br> 

## URL
Als je de repo in xampp htdocs hebt geimporteerd is dit je url: (http://localhost/Laravel-Eindopdracht/Blog/public)

