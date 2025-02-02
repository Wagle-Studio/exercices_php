# Étape 3

## Formulaire d'édition d'un utilisateur

👉 `/templates/components/cardCollection.php`.

**0. Create link to the edit page.**

Adaptez la variable `$editUrl` pour rediriger l'utilisateur vers la page d'édition d'un utilisateur.

🚨 L'URL doit contenir un paramètre `id` avec l'id de l'utilisateur comme valeur, exemple : `?id=user_678c3afc0eeca`.

___

👉 `/templates/components/cardEdit.php`.

**1. Check GET parameters.**

Vérifiez que l'URL contient bien un paramètre `id` avec l'id de l'utilisateur.

**2. Create new database connexion.**

Créez une instance de la classe `Db.php`.

**3. Read CSV to get a users array.**

Exploitez la classe `Db.php` pour extraire le tableau de données du CSV.

**4. Look for the user to edit base on the user id.**

Parcourez ce tableau pour identifier l'utilisateur avec l'id correspondant à celui indiqué dans l'URL. Stockez cet utilisateur dans une variable.

**5. Use the user id in the hidden input.**

Pour identifier l'utilisateur à modifier dans le futur traitement, il est nécessaire de joindre l'id de l'utilisateur dans la requête POST envoyée à la soumission du formulaire.

Exploiter les données de l'utilisateur précédement identifié pour renseignez son `id` comme valeur du champ `userId`.

**6. Use the user email as email field default value.**

Puisqu'il s'agit d'un formulaire d'édition il est nécessaire de peupler les champs du formulaire avec les informations de l'utilisateur.

Exploiter les données de l'utilisateur précédement identifié pour renseignez son `email` comme valeur du champ `email`.

## Validation

🏁 Si vous pouvez accéder au formulaire d'édition de l'utilisateur et que le champ d'email a pour valeur l'email de l'utilisateur, consultez le fichier `step_4.md`.