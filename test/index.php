<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$mail = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)", "from@email.com", "From the Name");


$email->sendEmail("SUbject", "Content", "reply@email.com", "Replay name", "address@email.com", "Address name");


var_dump($novoEmail);
