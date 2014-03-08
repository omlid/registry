# Registry Storage for Laravel v4.*

This package allows you to store values by user-given keys and get the values in any later MVC

### Installation
---
1.	Add `"punn/registry": "dev-master"` to `app/config/app.php` in the `require`
2.	Add `'Punn\Registry\RegistryServiceProvider',` to the `providers` array in `app/config/app.php`
3.	Add `'Registry' => 'Punn\Registry\Facades\Registry'` to the `aliases` array in `app/config/app.php`
4.	You may have to run `composer dump-autoload` or `php composer.phar dump-autoload` inside your laravel project's root

### Usage
---
#### Add/store a value
```php
Registry::set($key, $values);
```
#### Get a value previously stored
```php
Registry::get($key);
```

### Examples
---
#### Simple homepage URL:
*	In `links.php`, add the following:
```php
$values = array(
	'title'	=> 'Awesome Registry Class',
	'description'	=> 'This is an awesome meta tag description',
	'noindex'	=> '0'
);
Registry::set('meta', $values);

```
*	In your model/view/controller, retrieve the values you set:
```php
$values = Registry::get('meta');
```

### Notes
---
* The view::share method is a good way to store things for views to use. However, it's not accessible in additional controllers and models