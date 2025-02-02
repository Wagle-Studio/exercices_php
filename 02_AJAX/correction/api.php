<?php
// Data for exercices.
$countryData = [
    ["name" => "Pologne", "flag" => "🇵🇱"],
    ["name" => "Brésil", "flag" => "🇧🇷"],
    ["name" => "Algérie", "flag" => "🇩🇿"],
    ["name" => "Croatie", "flag" => "🇭🇷"],
    ["name" => "Inde", "flag" => "🇮🇳"],
    ["name" => "Estonie", "flag" => "🇪🇪"],
    ["name" => "Bulgarie", "flag" => "🇧🇬"],
];

// Verify the HTTP request method.
if ($_SERVER["REQUEST_METHOD"] === "GET") {

    // JSON encode the countries array and use it for the response.
    echo json_encode($countryData);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Necessary to get sent JSON data via AJAX.
    $json = file_get_contents('php://input');

    // Decodes the received JSON.
    $data = json_decode($json, true);

    // Verify that the received data contain a "userCountry".
    if (!isset($data["userCountry"])) {
        $response = [
            "message" => "Formulaire incomplet."
        ];

        // Define content type for the future JSON response.
        header("Content-Type: application/json");
        echo json_encode($response);
        exit;
    }

    $requestedContry = null;

    // Loop into countries to find a matching country.
    foreach ($countryData as $country) {
        if ($country["name"] === $data["userCountry"]) {
            $requestedContry = $country;
        }
    }

    // If the data doesn't contain the requested country.
    if (!$requestedContry) {
        $unknownCountryResponse = [
            "message" => "Désolé je ne connais pas ce pays"
        ];

        // Define content type for the future JSON response.
        header("Content-Type: application/json");
        echo json_encode($unknownCountryResponse);
        exit;
    }

    // If the data contain the requested country.
    $knownCountryResponse = [
        "message" => "Je connais ce pays ! Voici son drapeau {$requestedContry["flag"]}"
    ];

    // Define content type for the future JSON response.
    header("Content-Type: application/json");
    echo json_encode($knownCountryResponse);
    exit;
}
