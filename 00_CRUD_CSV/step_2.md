# Étape 2

## Créez un utilisateur

✅ Le formulaire de création d'un utilisateur est disponible et ne nécessite aucune modification : `/templates/components/cardCreate.php`.

👉 `/src/treatments/createUser.php`.

**1. Check POST parameters.**

Vérifiez que les paramètres nécessaires se trouvent dans la requête POST reçue suite à la soumission du formulaire.

**2. Sanitize data.**

Nettoyez les données reçues.

**3. Create new database connexion and get CSV stream.**

Créez une instance de la classe `Db.php`.

Exploitez la classe `Db.php` pour créer un stream vers le fichier CSV.

**4. Create a new record for the user into the CSV, then close the stream and redirect the user.**

Exploitez la classe `Db.php` pour ajouter un enregistrement dans le tableau de données du CSV.

Fermez le stream du fichier et redirigez l'utilisateur.

## Validation

🏁 Si vous êtes redirigez vers le tableau des utilisateurs suite à la soumission d'un formulaire de création d'un utilisateur, et que le nouvel utilisateur apparait dans le tableau, consultez le fichier `step_3.md`.
