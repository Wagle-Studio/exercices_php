# Exercice SQL campus - DAY TWO

---

### Partie 1 : 🚀 Terminer le tableau des étudiants

🎯 Objectif : Compléter le tableau en affichant une ligne pour chaque étudiant de la base de données.

Dans l'exercice 4 du fichier `index.php`, créez une ligne de tableau pour chaque étudiant enregistré dans la base de données. Affichez toutes les informations de l'étudiant. La structure de la ligne de tableau vous est fournie : veillez à remplacer toutes les valeurs nécessaires, y compris l'attribut `data-id` du bouton, qui doit contenir l'id de l'étudiant représenté par la ligne.

---

### Partie 2 : 🚀 Supprimer un étudiant

Créez un fichier JS où vous utiliserez le code suivant :

```js
const htmlTrashIcons = document.querySelectorAll(".trash-icon");

if (htmlTrashIcons) {
  htmlTrashIcons.forEach((trashIcon) => {
    trashIcon.addEventListener("click", deleteStudent);
  });
}

function deleteStudent(event) {
  const studentId = event.target.dataset.id;
  console.log("delete student");

  // VOTRE CODE ICI
}
```

Là où il est indiqué de développer, créez une requête AJAX. Cette requête sera envoyée à un fichier PHP `deleteStudent` que vous devrez lui aussi créer. La requête doit envoyer l'ID de l'étudiant sélectionné afin que le backend puisse supprimer l'étudiant de la base de données grâce à cet ID.

Pour supprimer un étudiant grâce à son ID, créez une nouvelle méthode dans le répertoire des `Student`. Cette méthode, `delete`, reçoit l'ID de l'étudiant à supprimer en paramètre et utilise la connexion PDO pour exécuter la requête adéquate.

Utilisez la méthode `delete` dans le fichier PHP `deleteStudent` pour supprimer l'étudiant dont vous avez reçu l'ID via la requête AJAX. Le fichier PHP n'a pas besoin de retourner de réponse.

Ensuite, côté JS, si la réponse à la requête AJAX est positive, rafraîchissez la page avec la fonction `location.reload()`.
