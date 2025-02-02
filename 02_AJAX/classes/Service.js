export default class Service {
  /**
   * Build paragraphe for a country.
   *
   * @param string countryName : Country name.
   * @param string countryFlag : Country flag.
   *
   * @return HTMLElement <p> : an HTML paragraphe.
   */
  buildCountryParagraphe(countryName, countryFlag) {
    const paragraphe = document.createElement("p");
    paragraphe.innerText = `${countryFlag} - ${countryName}`;

    return paragraphe;
  }

  /**
   * Display country paragraphes array.
   *
   * @param array countryParagraphes : Paragraphes array.
   */
  displayCountrieParagraphe(countryParagraphes) {
    const target = document.getElementById("target_exo_1");

    countryParagraphes.map((countryParagraphe) =>
      target.append(countryParagraphe)
    );
  }

  /**
   * Display form fetch response.
   *
   * @param json jsonReponse : the JSON received via fetch.
   */
  displayFormResponse(jsonReponse) {
    const paragrapheResponse = document.createElement("p");
    paragrapheResponse.innerText = jsonReponse.message;

    const target = document.getElementById("target_exo_2");
    target.innerHTML = "";

    target.append(paragrapheResponse);
  }
}
