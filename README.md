# Contacts Package

Add this package to providers in app.php
```
Contacts\ContactsServiceProvider::class,
```

Now in the composer.json add the following to the autoload psr-4 config:
```
"Contacts\\": "vendor/maeganw/contacts/contacts/src"
```

In the command line run:

```
composer dump-autoload
```

```
php artisan vendor:publish
```

```
php artisan make:model Contact
```

```
php artisan migrate
```