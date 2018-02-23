<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de teste", "<p>Esse é um e-mail de <b>teste</b>!</p>", "andre@asrsistemas.com.br",
    "André S. Rodrigues", "andrerodri13@hotmail.com", "André");

var_dump($novoEmail);
