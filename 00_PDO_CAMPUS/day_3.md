# Exercice SQL campus - DAY THREE

---

### Partie 1 : 🚀 Créer un menu déroulant des étudiants du campus

🎯 Objectif : Créer un menu déroulant pour sélectionner l'étudiant que l'on souhaite mettre à jour

Dans l'exercice 3 du fichier `index.php`, créez une balise `<select>` avec une option pour chaque étudiant en base de données. Affichez le nom et le prénom de l'étudiant comme libellé de l'option et l'id de l'étudiant comme valeur.

---

### Partie 2 : 🚀 Récupérer les informations de l'étudiant à modifier

🎯 Objectif : Écouter la sélection de l'utilisateur et récupérer les informations de l'étudiant concerné via une requête AJAX

Créez un fichier JS dans lequel vous déclencherez une requête AJAX lorsque l'utilisateur sélectionne un étudiant dans le menu déroulant créé précédemment.

Cette requête sera envoyée à un fichier PHP `findStudentById` que vous devrez créer. La requête doit envoyer l'ID de l'étudiant sélectionné pour que le backend puisse chercher les informations de l'étudiant en base de données grâce à son ID.

Pour récupérer les informations d'un étudiant grâce à son ID, vous devrez créer une nouvelle méthode dans le repository des `Student`. Cette méthode, `findById`, reçoit l'ID de l'étudiant recherché en paramètre. Elle exploite la connexion PDO pour exécuter la requête adéquate.

Exploitez la méthode `findById` dans le fichier PHP `findStudentById` pour récupérer les données de l'étudiant dont vous avez reçu l'ID via la requête AJAX. Le fichier PHP doit renvoyer l'étudiant récupéré dans la réponse de la requête AJAX.

Une fois l'étudiant sélectionné récupéré côté JS, exploitez les données de cet étudiant pour créer un formulaire HTML. Utilisez les informations de l'étudiant comme valeurs par défaut des champs du formulaire (faites attention au menu déroulant du département auquel appartient l'étudiant). Intégrez un champ avec l'attribut `type="hidden"`, dont la valeur sera l'ID de l'étudiant. Ainsi, lorsque le formulaire sera soumis et envoyé au backend, ce dernier pourra utiliser l'ID de l'étudiant pour l'identifier en base de données et procéder à sa mise à jour.

Assurez-vous que le formulaire soit mis à jour à chaque fois que l'utilisateur sélectionne un nouvel étudiant dans le menu déroulant.

---

### Partie 3 : 🚀 Mettre à jour les données de l'étudiant à modifier

🎯 Objectif : Mettre à jour les données de l'étudiant après que le formulaire de ses informations ait été soumis

Créez un fichier PHP `updateStudent` et assurez-vous que le formulaire que vous créez ait bien les attributs `method="POST"` et `action="<chemin_vers_le_fichier_updateStudent>"`.

Pour mettre à jour les informations d'un étudiant, vous devrez créer une nouvelle méthode dans le répertoire des `Student`. Cette méthode, `update`, reçoit l'étudiant à mettre à jour en paramètre. Elle exploite la connexion PDO pour exécuter la requête adéquate.

Le fichier `updateStudent` recevra donc une requête POST et se chargera des traitements habituels lorsqu'on reçoit une requête POST issue d'un formulaire :

- Vérifier la présence des données du formulaire avec les méthodes `empty` et `isset`.
- Nettoyer les données à l'aide de `htmlspecialchars` (nous nous contenterons de cela pour cet exercice).
- Créer un nouvel objet de la classe `Student` avec les données précédemment récupérées.

Ensuite, vous pourrez faire appel à la méthode `update` du répertoire de `Student`, en lui passant en paramètre l'objet `Student` créé précédemment, puis procéder à une redirection vers la page du formulaire.

Si tout s'est bien passé, vous devriez voir l'étudiant mis à jour dans la liste des étudiants.
