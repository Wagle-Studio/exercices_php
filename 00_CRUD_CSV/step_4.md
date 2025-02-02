# Étape 4

## Modifiez un utilisateur

👉 `/src/treatments/editUser.php`.

**1. Check POST parameters.**

Vérifiez que les paramètres nécessaires se trouvent dans la requête POST reçue suite à la soumission du formulaire.

**2. Sanitize data.**

Nettoyez les données reçues.

**3. Create new database connexion.**

Créez une instance de la classe `Db.php`.

**4. Update user record matching user id, then redirect the user.**

Exploitez la classe `Db.php` pour mettre à jour l'enregistrement de l'utilisateur dans le tableau de données du CSV grâce à l'id de l'utilisateur.

Redirigez l'utilisateur.

## Validation

🏁 Si vous êtes redirigez vers le tableau des utilisateurs suite à la soumission du formulaire d'édition d'un utilisateur, et que l'utilisateur apparait dans le tableau avec les modifications appliquées, consultez le fichier `step_5.md`.