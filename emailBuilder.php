<?php
require_once(__DIR__ . '/vendor/autoload.php');

$credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(new GuzzleHttp\Client(),$credentials);

$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
     'subject' => 'from the PHP SDK!',
     'sender' => ['name' => 'Sendinblue', 'email' => 'ramosmarvin50@gmail.com'],
     'replyTo' => ['name' => 'Sendinblue', 'email' => 'ramosmarvin50@gmail.com'],
     'to' => [[ 'name' => 'Max Mustermann', 'email' => 'marvinramos.nutnull@gmail.com']],
     'htmlContent' => '<html><body><h1>This is a transactional email {{params.bodyMessage}}</h1></body></html>',
     'params' => ['bodyMessage' => 'made just for you!']
]);

try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(),PHP_EOL;
}
?>