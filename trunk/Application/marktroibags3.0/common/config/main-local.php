<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=marktroibags-db',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
			 'useFileTransport' => false,
               'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',
            'username' => 'mtbagssoftdev@gmail.com',
            'password' => 'marktroibags',
            'port' => '587',
            'encryption' => 'tls',
           
        ],
    ],
    ],
];

