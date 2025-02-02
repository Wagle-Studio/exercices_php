# Exercice SQL campus - DAY ONE

### Partie 0 : 🚀 Démarre le projet

Vous trouverez ci-joint un fichier SQL contenant la base de données du campus ainsi que les données.

La base de données sera nommée `campus`. Créez un utilisateur MySQL dédié à l'exploitation de cette base de données.

Vérifiez que la base de données est fonctionnelle.

---

### Partie 1 : 🚀 Créer un fichier de configuration

🎯 Objectif : Créer un fichier pour stocker les informations relatives à la base de données.

Créez un fichier `config.php` dans lequel vous déclarerez quatre constantes PHP :

- DATABASE_HOST : pour l'hôte de la base de données (localhost).
- DATABASE_NAME : pour le nom de votre base de données.
- DATABASE_USERNAME : pour le nom de votre utilisateur MySQL.
- DATABASE_PASSWORD : pour le mot de passe de votre utilisateur.

Ces informations seront exploitées lors de la connexion à la base de données via PDO.

---

### Partie 2 : 🚀 Créer la classe exploitant la BDD.

🎯 Objectif : Créer une classe `Db` pour communiquer avec la base de données.

Créez la classe `Db`, celle-ci a une propriété : `db`. Le `constructor()` de la classe ne reçoit aucun paramètre.

C'est au sein du `constructor()` que nous allons initialiser la connexion avec la base de données grâce à PDO, cette connexion sera stockée dans la propriété `db`. Lorsque nous étendrons cette classe avec une classe enfant, nous pourrons bénéficier de la connexion établie grâce à l'héritage et ainsi profiter de la connexion à la base de données.

Pensez à utiliser le fichier de configuration pour les informations relatives à la base de données.

🔗 Lien de la documentation sur la connexion en PDO (un exemple est fourni) : https://www.php.net/manual/fr/pdo.connections.php

---

### Partie 3 : 🚀 Récupérer les données des étudiants.

🎯 Objectif : Lire dans la base de données.

Créez la classe `StudentRepository`, celle-ci doit étendre la classe `Db` pour hériter de la connexion PDO créée dans cette dernière. Cette classe n'a pas de propriétés et n'exploite pas le `constructor()`. Elle n'a pas de méthodes get et set.

Au sein de cette classe, créez une méthode `getAll`. Celle-ci aura pour rôle de récupérer l'ensemble des étudiants enregistrés en base de données. Cette méthode exploitera la connexion PDO établie dans la classe parente pour exécuter la requête SQL appropriée.

À l'issue de la requête, vous aurez donc récupéré l'ensemble des données. Vous devrez parcourir ces données pour créer un objet de la classe `Student` avec chacun des enregistrements récupérés. Cela nous permettra de construire un tableau d'objets `Student`.

À l'issue de ce traitement, la méthode retourne le tableau d'objets `Student`. Vous exploiterez cette méthode dans le fichier `index.php`, à l'exercice 0, pour afficher une liste des apprenants (nom et prénom).

---

### Partie 4 : 🚀 Créer de nouveaux étudiants.

🎯 Objectif : Écrire dans la base de données.

Un formulaire est à votre disposition pour recueillir les données du futur étudiant. Lorsque ce formulaire est soumis, la requête POST est envoyée au fichier `createStudent` que vous devrez créer.

Avant de vous occuper du traitement du formulaire, vous devrez créer une nouvelle méthode dans le repository de `Student`. Cette méthode, nommée `create`, recevra en paramètre un `$student`. Elle exploitera la connexion PDO établie dans la classe parente pour exécuter la requête SQL appropriée.

Vous pourrez alors travailler dans le fichier `createStudent`, qui se chargera des traitements habituels lorsqu'on reçoit une requête POST issue d'un formulaire :

- Vérifier la présence des données du formulaire avec les méthodes `empty` et `isset`.
- Nettoyer les données à l'aide de `htmlspecialchars` (nous nous contenterons de cela pour cet exercice).
- Créer un nouvel objet de la classe `Student` avec les données précédemment récupérées.

Ensuite, vous pourrez faire appel à la méthode create du repository de `Student`, en lui passant en paramètre l'objet `Student` fraîchement créé, puis procéder à une redirection vers la page du formulaire.

Si tout s'est bien passé, vous devriez voir le nouvel étudiant dans la liste des étudiants créée à l'exercice précédent.
