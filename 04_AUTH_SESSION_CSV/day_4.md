## Jour 4

### Exercice 1 : Gestion de session en PHP

🎯 Objectif : Utiliser la session PHP pour partager des informations entre différentes pages sans recourir aux méthodes POST ou GET.

---

Après la connexion de l'utilisateur :

1. Démarrez une session avec `session_start()`. Cela donne accès à `$_SESSION`, un tableau associatif pour stocker des données.
2. Dans `$_SESSION`, ajoutez :
   - Une clé `isAuthenticated` avec la valeur `true`.
   - Une clé `role` avec la valeur `admin`.

Les redirections après le traitement des données restent inchangées. Une session ouverte permet l'accès aux données de `$_SESSION` côté frontend.

### Gestion de l'accès aux pages :

🎯 Objectif : Gérer l'accès à certaines pages selon le statut d'authentification et le rôle de l'utilisateur.

Important : les pages concernées se trouvent dans le dossier `pages`.

##### homepage.php :

---

Aucune action spécifique.

##### signIn.php & signUp.php :

---

Au début du fichier, ouvrez une balise PHP, démarrez la session (`session_start()`) et utilisez `$_SESSION` pour vérifier que l'utilisateur est authentifié (`isAuthenticated` à `true`). Si authentifié, redirigez-le vers la page du formulaire, sinon, il peut rester sur la page.

##### admin.php :

---

Vérifiez l'authentification et le rôle d'administrateur (`role` à `admin`). Si l'une des conditions n'est pas remplie, redirigez vers la page de formulaire, sinon l'accès est autorisé.

##### signOut.php :

---

Ce script, exécuté côté serveur, termine la session de l'utilisateur (`session_destroy()`) et le redirige vers la page de formulaire, permettant ainsi sa "déconnexion".
