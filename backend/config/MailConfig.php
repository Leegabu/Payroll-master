<?php
namespace Backend\Config;

class MailConfig
{
    public const SMTP_HOST = 'smtp.gmail.com';
    public const SMTP_USER = 'yourgmail@gmail.com'; // your Gmail address
    public const SMTP_PASS = 'abcd efgh ijkl mnop'; // your Gmail App Password (NOT your login password)
    public const SMTP_PORT = 465;
    public const SMTP_SECURE = 'ssl';

    public const FROM_ADDRESS = 'yourgmail@gmail.com';
    public const FROM_NAME = 'Lixnet Mailer';
    public const REPLY_TO = 'yourgmail@gmail.com';
}
?>
