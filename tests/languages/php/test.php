<?php

include __DIR__ . '/../../sdks/php/src/Appwrite/Client.php';
include __DIR__ . '/../../sdks/php/src/Appwrite/Service.php';
include __DIR__ . '/../../sdks/php/src/Appwrite/AppwriteException.php';
include __DIR__ . '/../../sdks/php/src/Appwrite/Services/Foo.php';
include __DIR__ . '/../../sdks/php/src/Appwrite/Services/Bar.php';
include __DIR__ . '/../../sdks/php/src/Appwrite/Services/General.php';

use Appwrite\Client;
use Appwrite\Services\Foo;
use Appwrite\Services\Bar;
use Appwrite\Services\General;
use Appwrite\AppwriteException;

$client     = new Client();
$foo        = new Foo($client);
$bar        = new Bar($client);
$general    = new General($client);

$client->addHeader('Origin', 'http://localhost');

// Foo Service

$response = $foo->get('string', 123, ['string in array']);
echo "{$response['result']}\n";

$response = $foo->post('string', 123, ['string in array']);
echo "{$response['result']}\n";

$response = $foo->put('string', 123, ['string in array']);
echo "{$response['result']}\n";

$response = $foo->patch('string', 123, ['string in array']);
echo "{$response['result']}\n";

$response = $foo->delete('string', 123, ['string in array']);
echo "{$response['result']}\n";

// Bar Service

$response = $bar->get('string', 123, ['string in array']);
echo "{$response['result']}\n";

$response = $bar->post('string', 123, ['string in array']);
echo "{$response['result']}\n";

$response = $bar->put('string', 123, ['string in array']);
echo "{$response['result']}\n";

$response = $bar->patch('string', 123, ['string in array']);
echo "{$response['result']}\n";

$response = $bar->delete('string', 123, ['string in array']);
echo "{$response['result']}\n";

$response = $general->redirect();
echo "{$response['result']}\n";

$response = $general->upload('string', 123, ['string in array'], new \CURLFile(__DIR__.'/../../resources/file.png', 'image/png', 'file.png'));
echo "{$response['result']}\n";

try {
    $response = $general->error400();
} catch(AppwriteException $e) {
    echo "{$e->getMessage()}\n";
}

try {
    $response = $general->error500();
} catch(AppwriteException $e) {
    echo "{$e->getMessage()}\n";
}