<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail  = 'amanbadi0404@gmail.com'; // GANTI
    public string $fromName   = 'Website Kontak Kami';
    public string $recipients = '';

    public string $userAgent = 'CodeIgniter';
    public string $protocol  = 'smtp';

    public string $mailPath = '/usr/sbin/sendmail';

    public string $SMTPHost = 'smtp.gmail.com';
    public string $SMTPUser = 'amanbadi0404@gmail.com';    // GANTI
    public string $SMTPPass = 'kamuadalah09';       // GANTI
    public int    $SMTPPort = 465;
    public int    $SMTPTimeout = 10;

    public bool   $SMTPKeepAlive = false;
    public string $SMTPCrypto = 'ssl';

    public bool   $wordWrap = true;
    public int    $wrapChars = 76;
    public string $mailType = 'text';
    public string $charset  = 'UTF-8';

    public bool   $validate = true;
    public int    $priority = 3;

    public string $CRLF    = "\r\n";
    public string $newline = "\r\n";

    public bool   $BCCBatchMode = false;
    public int    $BCCBatchSize = 200;

    public bool   $DSN = false;
}
