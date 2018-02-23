<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "smtp.mailtrap.io", "3c4a7bb4a3e180", "8c6e388ad8cfa2", "tls", "2525", "andre@asrsistemas.com.br", "Equipe ASR Sistemas");

$novoEmail->sendMail("Assunto de teste", "<p>Esse é um e-mail de <b>teste</b>!</p>", "andre@asrsistemas.com.br",
    "André S. Rodrigues", "andrerodri13@hotmail.com", "André");

var_dump($novoEmail);
