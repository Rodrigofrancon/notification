<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("", "<p>Esse e um email de <b>teste</b>b></p>p>", "", "", "", "");

var_dump($novoEmail);