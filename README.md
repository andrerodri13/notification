# Email Notification Library, use phpMailer

This library has the function of sending email using a phpmailer library. Doing this in an uncomplicated way is essential for any system.

To do a library installation, run the following command:

```sh
Composer requires gustavoweb / composer_teste
```

To make use of the library, simply require the autoload of the composer, invoke a class and make a method call:

```sh
<? php

require __DIR__. '/vendor/autoload.php';

USE Notification \ Email;

$mail = new Email (2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)", 'from@email.com", "From the Name");

$ email-> sendEmail ("SUbject", "Content", "reply@email.com", "Replay name", "address@email.com", "Address name");
```

Note that a whole setup of sending the email is using the magic builder method! Once the Builder method is invoked within your application, your system will be able to fire the shots.

### Developers
* [André S. Rodrigues] - Developer of this library!
* [Gustavo Web] - Developer of this library and tutor of the course Composer in Practice!
* [Robson V. Leite] - CEO and founder UpInside Trainings
* [UpInside Training] - Official website for your digital marketing and programming school
* [ASR Sistemas] - Official website
* [phpMailer] - Lib to send email


License
----

MIT

** One more course from UpInside Trainings, make good use! **

[//]: #
[Gustavo Web]: <mailto: gustavo@upinside.com.br>
[Robson V. Milk]: <mailto: robson@upinside.com.br>
[UpInside Training]: <https://www.upinside.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>