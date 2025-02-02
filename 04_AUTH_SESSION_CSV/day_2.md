## Jour 2

### Exercice 1 : Gestion de Fichiers CSV avec une Classe PHP

🎯 Objectif : Utiliser la classe `Db` pour manipuler un fichier CSV.
Le fichier CSV servira de base de données simplifiée pour stocker des données.


Créez la classe `Db`, celle-ci a une propriété `pathToCsv`. Le `constructor()` de la classe reçoit un paramètre pour attribuer une valeur à cette propriété. L'idée est de recevoir un string représentant le chemin vers le fichier .CSV que l'on souhaite utiliser comme base de données. N'oubliez pas les méthodes `get` et `set`.

___

Créez la méthode `readCsv()` pour lire le contenu d'un fichier .CSV et le retourner.

`return fopen($this->pathToCsv, 'r');`

🔗 https://www.php.net/manual/fr/function.fopen.php 

___

Créez la méthode `openCsv()` pour ouvrir le fichier CSV en mode ajout et retourner le fichier. 

`return fopen($this->pathToCsv, 'ab');`

___

Créez la méthode `writeIntoCsv()` qui reçevra le fichier dans lequel écrire et le contenu à écrire en paramètre.

`fputcsv($file, $arrayToWrite);`

🔗 https://www.php.net/manual/fr/function.fputcsv.php

___

Créez la méthode `closeCsv()` qui reçevra en paramètre un fichier pour le fermer.

`fclose($file);`

🔗 https://www.php.net/manual/fr/function.fclose

___

Créez la méthode `readFromCsv()` pour parcourir un fichier CSV (le lire) et retourner les données sous forme de tableau.

```php
public function readFromCsv()
    {
        $data = [];
        $csv = $this->readCsv();

        if ($csv !== false) {
            while (($row = fgetcsv($csv)) !== false) {
                $data[] = $row;
            }

            $this->closeCsv($csv);
        }

        return $data;
    }
```

🔗 https://www.php.net/manual/fr/function.fclose


### Exercice 2 : Gérer l'inscription d'un utilisateur

🎯 Objectif : Exploiter la requête POST issues de la soumission du formulaire pour inscrire un utilisateur
en base de données.

---

Cette partie complète le système d'inscription en enregistrant les données de l'utilisateur.

1. Importez la classe `Db`.
2. Créez une instance de la classe `Db` pour gérer les opérations sur le fichier CSV.
3. Ouvrez le fichier CSV à l'aide de la méthode adéquate de `Db`, qui vous fournira un "stream" du fichier. Stockez ce "stream" dans une variable, car il représente le fichier cible pour l'écriture.
4. Utilisez la méthode correspondante de `Db` pour écrire les données de l'utilisateur dans le CSV. Les données doivent être formatées en tableau. La classe `User` contient une méthode facilitant cette opération.
5. Fermez le fichier CSV en utilisant la méthode de fermeture de `Db`, puis redirigez l'utilisateur en indiquant le succès ou l'échec de l'opération.
6. Effectuez la redirection de l'utilisateur comme précédemment indiqué.
