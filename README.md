# sendgrid-php-hands0524
This is the hands on training material of using PHP &amp; sendgrid API sample program
# sendgridjp-php-example

 �{�R�[�h��[SendGrid����PHP���C�u����](https://github.com/sendgrid/sendgrid-php)�̗��p�T���v���ł��B

## �g����

```bash
git clone http://github.com/sendgridjp/sendgridjp-php-example.git
cd sendgridjp-php-example
cp .env.example .env
# .env�t�@�C����ҏW���Ă�������
composer install
php -f sendgrid-php-example.php
```
## .env�t�@�C���̕ҏW
.env�t�@�C���͈ȉ��̂悤�ȓ��e�ɂȂ��Ă��܂��B

```bash
API_KEY=api_key
TOS=you@youremail.com,friend1@friendemail.com,friend2@friendemail.com
FROM=you@youremail.com

```
API_KEY:SendGrid��[API Key](https://sendgrid.kke.co.jp/docs/User_Manual_JP/Settings/api_keys.html)���w�肵�Ă��������B  
TOS:������J���}��؂�Ŏw�肵�Ă��������B  
FROM:���M���A�h���X���w�肵�Ă��������B 
