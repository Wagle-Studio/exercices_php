import Service from "./classes/Service.js";
const service = new Service();

// ------------------------------------------------
// FETCH METHOD GET
// ------------------------------------------------

// 1. Récupérez les données.
//
// 🎯 Créez un fetch vers l'URL "api.php" en méthode GET.
// 🏅 `console.log()` des données reçus.

// 2. Traiter les données reçus.
//
// 📖 Consultez le fichier `/classes/Service.js` pour voir la documentation liée à chaque méthode.
//
// 🎯 Parcourez le tableau de données et créer un paragraphe pour chaque pays avec la méthode `service.buildCountryParagraphe()`.
// 🎯 Affichez les paragraphes précédement créés avec la méthode `service.displayCountrieParagraphe()`.
// 🏅 Une liste de pays est affichée sur la page d'exercice.

// ------------------------------------------------
// FETCH METHOD POST
// ------------------------------------------------

const form = document.getElementById("form_exo_2");

// 1. Exécuter un fetch suite à un événement.
//
// 🎯 Créez un écouteur d'événement pour le formulaire, lors de la soumission.
// 🏅 Vous affichez un `console.log(event)` qui "reste à l'écran" après la soumission du formulaire.
//
// 🎯 Récupérez les données saisies par l'utilisateur dans le formulaire.
// 🎯 Créez une requête fetch vers l'URL "api.php" en méthode POST.
// 🏅 `console.log()` de la réponse reçu.

// 2. Traiter les données reçus.
//
// 📖 Consultez le fichier `/classes/Service.js` pour voir la documentation liée à chaque méthode.
//
// 🎯 Affichez la réponse reçu avec la méthode `service.displayFormResponse()`.
// 🏅 Une réponse est affichée après chaque soumission du formulaire.
