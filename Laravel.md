# Install Laravel



## Download Composer

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '8a6138e2a05a8c28539c9f0fb361159823655d7ad2deecb371b04a83966c61223adc522b0189079e3e9e277cd72b8897') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

## Install Composer
```bash
php composer.phar
```

## Verificar se está corretamente instalado
```bash
composer -V
```

## Install mcrypt
### Linux
```bash
sudo apt-get -y install libmcrypt-dev
sudo pecl7.2-sp install --nodeps mcrypt-snapshot
```

## Install Laravel
```bash
composer global require "laravel/installer=~1.1"
```

## Criar projeto usando laravel

```bash
composer create-project laravel/laravel {nome-da-pasta-a-ser-criada} 4.2 --prefer-dist
```

## Conferir se deu certo

Laravel precisa que que uma chave aleatória tenha sido criada em `app/config/app.php` caso não tenha sido criada é só colocar uma string qualquer de 32 caracteres lá.



/usr/local/Cellar/mcrypt/2.6.8
