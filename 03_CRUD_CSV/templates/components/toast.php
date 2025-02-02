<?php

# NO WORK TO DO IN THIS FILE, DO NOT MODIFY THIS FILE #

if (empty($_GET["editUser"]) && empty($_GET["createUser"]) && empty($_GET["deleteUser"])) {
    return;
}

if (!empty($_GET["createUser"])) {
    $toastMsg = getToastMsgBySeverity("Creation", $_GET["createUser"]);
    echoToastMsg($_GET["createUser"], $toastMsg);
}

if (!empty($_GET["editUser"])) {
    $toastMsg = getToastMsgBySeverity("Édition", $_GET["editUser"]);
    echoToastMsg($_GET["editUser"], $toastMsg);
}

if (!empty($_GET["deleteUser"])) {
    $toastMsg = getToastMsgBySeverity("Suppression", $_GET["deleteUser"]);
    echoToastMsg($_GET["deleteUser"], $toastMsg);
}

function getToastMsgBySeverity(string $action, string $severity): string
{
    switch ($severity) {
        case "success":
            return "{$action} de l'utilisateur avec success";
        case "error":
            return "Une erreur est survenue.";
        case "unprocessable":
            return "L'utilisateur n'existe pas.";
        default:
            return "Une erreur est survenue.";
    }
}

function echoToastMsg(string $severity, string $message): void
{
    echo ("<p class='toast toast--{$severity}'>{$message}</p>");
}
