Bienvenue sur le projet de classe réalisé avec le framework Symfony.

Une fois le repo cloné, ouvrir une console et exécuter les manipulations suivantes pour rendre le projet opérationnel:

	_ composer update
	_ php bin/console doctrine:database:create
	_ php bin/console doctrine:schema:update
	_ php bin/console doctrine:fixture:load

Un compte admin est créé d'office sur le site. Ses identifiants sont: Admin(username) Admin(password).

Une fois identifié en tant qu'admin, vous pourrez depuis la barre latérale accéder aux options d'administration du site. 

Il faut être identifié (pas forcément en tant qu'admin) pour pouvoir poster un commentaire sur un article.
