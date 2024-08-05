<?php
require '../../../vendor/autoload.php';
require 'config.php';

use GuzzleHttp\Client;

$client = new Client([
    'timeout'  => 5.0,
    'verify' => __DIR__ . '/cacert.pem'
]);

try {
    $response = $client->request('GET', 'https://accounts.google.com/.well-known/openid-configuration');
    $discoveryJSON = json_decode((string)$response->getBody());
    $tokenEndpoint = $discoveryJSON->token_endpoint;
    $userinfoEndpoint = $discoveryJSON->userinfo_endpoint;
    $response = $client->request('POST', $tokenEndpoint, [
        'form_params' => [
            'code' => $_GET['code'],
            'client_secret' => GOOGLE_SECRET,
            'client_id' => GOOGLE_ID,
            'redirect_uri' => 'http://localhost/PROJET%20PCT/View/Client/connexion/connect.php',
            'grant_type' => 'authorization_code'

        ],
    ]);
    $accessToken = json_decode((string)$response->getBody())->access_token;
    $response = $client->request('GET', $userinfoEndpoint, [
        'headers' => [
            "Authorization" => "Bearer" . $accessToken
        ]
    ]);
    $response = json_decode((string)$response->getBody());
    if ($response->email_verified === true) {
        session_start();
        $_SESSION['email'] = $response->email;
        header('Location: ../../../View/Artisan/tableau_de_bord.php');
        exit();
    }
} catch (\GuzzleHttp\Exception\ConnectException $e) {
    // Gestion des erreurs de connexion
    echo "Erreur de connexion : " . $e->getMessage();
} catch (\GuzzleHttp\Exception\RequestException $e) {
    // Gestion des autres erreurs de requête
    echo "Erreur de requête : " . $e->getMessage();
} catch (Exception $e) {
    // Gestion des autres exceptions
    echo "Erreur : " . $e->getMessage();
}
