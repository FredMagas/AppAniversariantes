<?php
require __DIR__ . '/vendor/autoload.php';

// Configurações da API do Google Sheets
$spreadsheetId = '1D36qiRNzj1Bn3Jm8tMav_rdrd6W3GOivvp1sjeZX880'; // ID da planilha
$range = 'Página1'; // Nome da aba

// Autenticação
$client = new \Google_Client();
$client->setApplicationName('App Aniversariantes');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig('C:\Users\Frederico\Documents\Frederico\Programacao\Processos Seletivos\Carefy\Final\App Aniversariantes\credentials.json');
$service = new Google_Service_Sheets($client);

try {
    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();
    echo "Conexão bem-sucedida!";
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

?>