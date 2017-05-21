<?php
require 'vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$api_key           = $_ENV['API_KEY'];
$from              = $_ENV['FROM'];
$tos               = explode(',', $_ENV['TOS']);

$sendgrid = new SendGrid($api_key, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->setSmtpapiTos($tos)->
       setFrom($from)->
       setFromName("送信者名")->
       setSubject("[sendgrid-php-example] ねこのお名前は%fullname%さん")->
       setText("%familyname% さんは何をしていますか？\r\n 彼は%place%でハンズオンしています。")->
       setHtml("<strong> %familyname% さんは何をしていますか？</strong><br />彼は%place%でハンズオンしてます。")->
       addSubstitution("%fullname%", array("寺島裕#1", "寺島裕#2"))->
       addSubstitution("%familyname%", array("寺島1", "寺島2"))->
       addSubstitution("%place%", array("%office%", "%home%"))->
       addSection('%office%', '川崎市')->
       addSection('%home%', '横浜市')->
       addCategory('category1')->
       addHeader('X-Sent-Using', 'SendGrid-API')->
       addAttachment('./cat.gif', 'cat.gif');

$response = $sendgrid->send($email);
var_dump($response);
