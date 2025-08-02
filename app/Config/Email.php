<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public $fromEmail  = 'from@example.com';
    public $fromName   = 'MyBlog';
    public $recipients = '';

    public $protocol     = 'smtp';
    public $SMTPHost     = 'sandbox.smtp.mailtrap.io';
    public $SMTPUser     = 'Aman.com';       // Ganti dengan username dari Mailtrap
    public $SMTPPass     = 'Password0909##';       // Ganti dengan password dari Mailtrap
    public $SMTPPort     = 2525;
    public $SMTPCrypto   = 'tls';

    public $mailType     = 'html';
    public $charset      = 'UTF-8';
    public $wordWrap     = true;
    public $newline      = "\r\n"; // Penting untuk baris baru di SMTP
}
