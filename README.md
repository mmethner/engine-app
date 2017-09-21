This as an example app to demonstrate how to use the [engine php framework](https://github.com/mmethner/engine).

## Installation

This demo app can be downloaded via git clone:

```git clone https://github.com/mmethner/engine-app```

## Setup

Go through these instructions step by step:

### php.ini

Go through your php.ini file (don't forget to change it in cgi and cli version )

``short_open_tag = On``

### hosts

Usually in ``/etc/hosts`` (linux) or ``C:\Windows\System32\drivers\etc\hosts`` (windows) add this line:

``127.0.0.1 engine-app.localhost``

### Example vhost configuration

```
<VirtualHost *:80>
    ServerName engine-app.localhost

    Options -Indexes

    DirectoryIndex index.php

    DocumentRoot /var/www/engine-app/public
    <Directory /var/www/engine-app/public>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all
        php_value auto_prepend_file "/var/www/engine-app/config/prepend.php"
    </Directory>

</VirtualHost>
```

### Open browser

Open ``http://engine-app.localhost/en`` in your browser.