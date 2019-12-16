# WeFashion
Projet de développement web back-end pour L'École Multimédia

Adresse du projet GitHub : https://github.com/TheoMoriceEM/WeFashion

Le MCD est situé à la racine du projet sous format mwb (MySQL WorkBench). Pour pouvoir le consulter, téléchargez le logiciel ici : https://dev.mysql.com/downloads/workbench/

*Procédure à suivre pour installer le projet en local :*
1. Créez une base de données intitulée "wefashion" sur votre serveur MySQL.
2. Tapez la commande "npm install" pour installer les dépendances de NPM.
3. Tapez la commande "composer install" pour installer les dépendances de Composer.
4. Changez la valeur de la propriété APP_URL dans le fichier .env pour qu'elle corresponde au chemin de votre projet local.
5. Lancez la commande "php artisan migrate --seed" pour lancer les migrations et les seeders pour peupler la base de données.
6. Lancez la commande "php artisan storage:link" pour créer un lien symbolique entre le dossier public et le dossier storage, de façon à ce que le site puisse avoir accès aux images contenues dans ce dernier.
7. Pour pouvoir accéder à l'interface d'administration, tapez "/admin" à la fin de l'URL de la racine du site. Cliquez sur "Register" et créez-vous un compte. Vous avez maintenant accès au back office via l'URL "/admin".
Le projet est maintenant fonctionnel.
