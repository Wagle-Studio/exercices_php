# Étape 5

## Supprimez un utilisateur

👉 `/templates/components/cardCollection.php`.

**0. Create action for the delete form.**

Adaptez la variable `$deleteAction` pour envoyer la requête POST du formulaire vers le fichier de traitement `src/treatments/deleteUser.php`.

___

👉 `/src/treatments/deleteUser.php`.

**1. Check POST parameters.**

Vérifiez que les paramètres nécessaires se trouvent dans la requête POST reçue suite à la soumission du formulaire.

**2. Sanitize data.**

Nettoyez les données reçues.

**3. Create new database connexion.**

Créez une instance de la classe `Db.php`.

**4. Delete record matching user id, then redirect the user.**

Exploitez la classe `Db.php` pour supprimer l'enregistrement de l'utilisateur dans le tableau de données du CSV grâce à l'id de l'utilisateur.

Redirigez l'utilisateur.

## Validation

🏁 Si vous êtes redirigez vers le tableau des utilisateurs suite à la suppresion d'un utilisateur, et que l'utilisateur n'apparait plus dans le tableau, consultez le fichier `step_bonus.md`.