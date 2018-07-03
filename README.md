#Contact us form 
===
[![Latest Stable Version](https://poser.pugx.org/alamin/contact/v/stable)](https://packagist.org/packages/alamin/contact)
[![Total Downloads](https://poser.pugx.org/alamin/contact/downloads)](https://packagist.org/packages/alamin/contact)
[![Latest Unstable Version](https://poser.pugx.org/alamin/contact/v/unstable)](https://packagist.org/packages/alamin/contact)
[![License](https://poser.pugx.org/alamin/contact/license)](https://packagist.org/packages/alamin/contact)

 
 Getting Started
--------------------------------------------------------------------------------
contact form is a simple package for send email and contact......
 

### 1. Install Laravel Breadcrumbs

Run this at the command line:

```bash
composer require alamin/contact
```

This will both update `composer.json` and install the package into the `vendor/` directory.


### 2. Add to `app/config/app.php`
```php
    'providers' => array(
        // ...
        'DaveJamesMiller\Breadcrumbs\BreadcrumbsServiceProvider',
    ),
``` 
### 3. Migrate : 

 php artisan migrate 
 
 
 ### 4. Publishing :
 
 First initialise the config file by running this command:

```bash
php artisan vendor:publish --provider="Alamin\Contact\ContactServiceProvider"
```
```bash
config directory you can see Config.php
```
see and array and your email address put this array.
 
 

 
