# laravel-webp

## Install

```bash
$ composer require slexx/laravel-webp
```

In Laravel 5.5 the service provider will automatically get registered. In older
versions of the framework just add the service provider in config/app.php file:

```php
'providers' => [
    // ...
    Slexx\LaravelWebp\LaravelWebpServiceProvider::class,
];
```

Add `@webpJS` directive to the `<head>` tag

```blade
<head>
    @webpJS
    <!-- ... -->
</head>
```

## Usage

Usage in blade

```blade
@webp
    <img src="/image.webp"/>
@else
    <img src="/image.png"/>
@endwebp
```

or in js, php

```js
if (supportsWebp()) {
    // Does support!
} else {
    // Does not support!
}
```

or in css

```css
html.webp {
    /* Does support! */
}

html.no-webp {
    /* Does not support! */
}
```