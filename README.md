## Example PageCall SDK for php developers.

The samples in this repository are fully communication applications built using PageCall PHP SDK.


Plz, follow these steps.

*Step 1* Install all of dependencies


```
composer install
```

*Step 2* Please be sure to update the `accessKey` and `secretKey` (Checkout 7 - 9 lines in index.php)

```php
$pageCall = new \PageCall\PageCall([
        'accessKey' => '', // Press your access key
        'secretKey' => '' // Press your access key
    ]);
```

*Step 3* Running your built-in server. 


```
php -S localhost:8000

```
