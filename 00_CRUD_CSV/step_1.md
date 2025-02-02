# Étape 1

## Implémentez la classe utilisateur

👉 `src/classes/User.php`.

| Propriété | type   | description                         |
| --------- | ------ | ----------------------------------- |
| id        | string | Identifiant unique de l'utilisateur |
| email     | string | Email de l'utilisateur              |
| password  | string | Mot de passe hashé de l'utilisateur |

| Méthode   | description                                                 |
| --------- | ----------------------------------------------------------- |
| construct | 3 paramètres : `id`**\***, `email`, `password`.             |
| toArray   | Retourne un tableau avec les informations de l'utilisateur. |

`id`**\*** : Le paramètre `id` est `null` par défault, attention à l'ordre des paramètres. Si le paramètre `id` est `null`, initiliser l'`id` avec la fonction suivante : `uniqid('user_')`.

## Affichez la liste des utilisateurs

👉 `templates/components/cardCollection.php`.

**1. Create new database connexion.**

Créez une instance de la classe `Db.php`.

**2. Read CSV and loop into data to create User instance for every record. Stock theses users into an array for later.**

Exploitez la classe `Db.php` pour extraire le tableau de données du CSV.

Parcourez ce tableau pour créer des instances de la classe `User.php`. Stockez ces utilisateurs dans un tableau.

**3. Loop into users array to create table body rows.**

Parcourez le tableau d'utilisateur créé à l'étape précédente pour générer les lignes du tableau.

## Validation

🏁 Si les utilisateurs apparaissent dans le tableau, consultez le fichier `step_2.md`.
