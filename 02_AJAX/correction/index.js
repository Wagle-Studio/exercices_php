import Service from "./../classes/Service.js";
const service = new Service();

// ------------------------------------------------
// FETCH METHOD GET
// ------------------------------------------------

// Send HTTP GET request via fetch.
fetch("api.php", {
  method: "GET",
})
  .then((response) => {
    // If the fetch went well but the API response an error.
    if (!response.ok) {
      throw new Error("Erreur réseau");
    }
    return response.json(); // Convert response in JSON.
  })
  .then((result) => {
    // If the fetch went well and the API response with success.
    //   console.log(result);

    // Empty array to stack country paragraphes.
    const countryParagraphes = [];

    result.forEach((country) => {
      // Build a paragraphe for every country.
      const countryParagraphe = service.buildCountryParagraphe(
        country.name,
        country.flag
      );

      // Stack the paragraphe.
      countryParagraphes.push(countryParagraphe);
    });

    // Display country paragraphes.
    service.displayCountrieParagraphe(countryParagraphes);
  })
  .catch((error) => {
    console.error("Erreur avec fetch :", error);
  });

// ------------------------------------------------
// FETCH METHOD POST
// ------------------------------------------------

const form = document.getElementById("form_exo_2");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  const inputCountryValue = document.getElementById("country").value;

  // Send HTTP POST request via fetch.
  fetch("api.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ userCountry: inputCountryValue }),
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("Erreur réseau");
      }
      return response.json();
    })
    .then((result) => {
      //   console.log(result);

      service.displayFormResponse(result);
    });
});
