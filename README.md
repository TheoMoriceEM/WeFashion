# WeFashion
### Projet de développement web back-end pour L'École Multimédia

Adresse du projet GitHub : https://github.com/TheoMoriceEM/WeFashion

Le MCD est situé à la racine du projet sous format mwb (MySQL WorkBench). Pour pouvoir le consulter, téléchargez le logiciel ici : https://dev.mysql.com/downloads/workbench/


**Procédure à suivre pour installer le projet en local :**
1. Créez une base de données sur votre serveur.
2. Copiez le fichier .env.example et renommez-le en .env.
3. Remplissez-le comme suit :
    * APP_NAME=WeFashion
    * APP_URL='votre chemin vers le dossier public'
    * Dans la partie DB, saisissez les informations de connexion à votre base de données.
4. Saisissez la commande "composer install" pour installer les dépendances de Composer.
5. Saisissez la commande "php artisan key:generate" pour générer une clé d'application.
6. Saisissez la commande "php artisan migrate --seed" pour lancer les migrations et seeders pour peupler votre base de données.
7. Saisissez la commande "php artisan storage:link" pour créer un lien symbolique entre le dossier public et le dossier storage, de façon à ce que le site puisse avoir accès aux images contenues dans ce dernier.
8. Pour pouvoir accéder à l'interface d'administration, tapez "/admin" à la fin de l'URL de la racine du site. Cliquez sur "Register" et créez-vous un compte. Vous avez maintenant accès au back office via l'URL "/admin".

Vous pouvez désormais explorer l'application comme bon vous semble !
