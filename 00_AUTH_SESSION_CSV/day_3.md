## Jour 3

### Exercice : Gérer la connexion d'un utilisateur

🎯 Objectif : Exploiter la requête POST issues de la soumission du formulaire pour connecter un utilisateur
et le rediriger vers la page d'accueil.

---

1. Importer les classes `User` et `Db`.
2. Vérifier la présence de `$_POST` et des champs `username` et `password`.
3. Utiliser `htmlspecialchars()` pour sanitiser les entrées et prévenir des attaques XSS.
4. Créer une instance de la classe `Db` pour interagir avec le fichier CSV.
5. Lire les utilisateurs enregistrés à partir du CSV en utilisant la méthode appropriée de `Db`.
6. Parcourir chaque utilisateur enregistré pour vérifier la correspondance du `username` et la validation du `password` avec `password_verify()`.
7. Si les identifiants sont corrects :
    - Créer une instance de `User` avec les informations de l'utilisateur authentifié.
    - Rediriger l'utilisateur vers `index.php` avec un paramètre `successSignIn=1` pour indiquer le succès de la connexion.
8. Si aucun utilisateur correspondant n'est trouvé, rediriger vers `index.php` avec `successSignIn=0` pour indiquer l'échec de la connexion.
9. Arrêter l'exécution du script après la redirection pour éviter toute exécution supplémentaire.

### Exercice 2 : Afficher un message de confirmation

🎯 Objectif : Interpréter les données de l'URL pour afficher un message de confirmation ou d'erreur suite à la soumission du formulaire de connexion.

---

Dans le fichier du formulaire, procédez comme suit :

1. Vérifiez la présence du paramètre `successSignIn` dans `$_GET`. Cette vérification détermine si le formulaire d'inscription a été soumis.

2. Déclarez deux variables :

   - `$signInFormSubmitted` : sera `true` si `successSignIn` est présent dans `$_GET`, indiquant que le formulaire a été soumis, sinon `false`.
   - `$signInSuccess` : sera `true` si `successSignIn` vaut `1`, signifiant une connexion réussie, sinon `false` si `successSignIn` vaut `0`, indiquant un échec.

3. Utilisez `$signInFormSubmitted` et `$signInSuccess` pour afficher un message approprié au-dessus du formulaire :
   - Si l'inscription est réussie, affichez un message de succès en utilisant le composant `signInCardSuccess`.
   - En cas d'échec, utilisez le composant `signInCardError` pour afficher un message d'erreur.
