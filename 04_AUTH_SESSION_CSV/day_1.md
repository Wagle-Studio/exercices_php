## Jour 1

### Exercice 1 : Créer une classe PHP

🎯 Objectif : Utiliser la classe `User` pour manipuler des objets représentant un utilisateur.

🚨 Prérequis : Créer un fichier pour accueillir la classe `User`.

---

Créez la classe `User`, celle-ci a trois propriétés : `username`, `email` et `password`. Le `constructor()` de la classe reçoit trois paramètres pour attribuer une valeur chaque propriétés. N'oubliez pas les méthodes `get` et `set`.

---

Créez la méthode `convertToArray()` qui retournera un tableau (simple), avec comme première valeur celle du `username` de la classe, en seconde valeur celle du `email` de la classe et en troisième et dernière valeur celle du `password` de la classe.

### Exercice 2 : Gérer l'inscription d'un utilisateur

🎯 Objectif : Exploiter la requête POST issues de la soumission du formulaire pour inscrire un utilisateur
en base de données.

---

1. Importer la classe `User`.
2. Vérifie `$_POST` et les champs requis du formulaire.
3. Sanitiser les entrées pour prévenir XSS à l'aide de `htmlspecialchars()`.
4. Vérifier la correspondance des mots de passe.
5. Hacher le mot de passe avec `password_hash()`.
6. Créer un objet `User` avec les données précédemments traitées.
7. Si tout s'est bien passé, rediriger l'utilisateur vers la page du formulaire avec un paramètre `successSignUp=1` dans l'URL.
8. Simuler une erreur en redirigant l'utilisateur vers la page du formulaire avec un paramètre `successSignUp=0` dans l'URL.

### Exercice 3 : Afficher un message de confirmation

🎯 Objectif : Interpréter les données de l'URL pour afficher un message de confirmation ou d'erreur suite à la soumission du formulaire d'inscription.

---

Dans le fichier du formulaire, procédez comme suit :

1. Vérifiez la présence du paramètre `successSignUp` dans `$_GET`. Cette vérification détermine si le formulaire d'inscription a été soumis.

2. Déclarez deux variables :

   - `$signUpFormSubmitted` : sera `true` si `successSignUp` est présent dans `$_GET`, indiquant que le formulaire a été soumis, sinon `false`.
   - `$signUpSuccess` : sera `true` si `successSignUp` vaut `1`, signifiant une inscription réussie, sinon `false` si `successSignUp` vaut `0`, indiquant un échec.

3. Utilisez `$signUpFormSubmitted` et `$signUpSuccess` pour afficher un message approprié au-dessus du formulaire :
   - Si l'inscription est réussie, affichez un message de succès en utilisant le composant `signUpCardSuccess`.
   - En cas d'échec, utilisez le composant `signUpCardError` pour afficher un message d'erreur.
