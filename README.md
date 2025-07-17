# Alertify for Laravel

A beautiful, responsive, customizable, accessible (WAI-ARIA) replacement for JavaScript's popup boxes, available for Laravel projects.

[![Latest Stable Version](https://poser.pugx.org/amjadiqbal/alertify/v/stable)](https://packagist.org/packages/amjadiqbal/alertify)
[![Total Downloads](https://poser.pugx.org/amjadiqbal/alertify/downloads)](https://packagist.org/packages/amjadiqbal/alertify)
[![License](https://poser.pugx.org/amjadiqbal/alertify/license)](https://packagist.org/packages/amjadiqbal/alertify)

## Introduction

Alertify is a Laravel package that integrates the AlertifyJS library to provide beautiful, customizable alert and notification boxes for your Laravel applications. It offers a simple and elegant way to replace JavaScript's default popup boxes with more stylish and functional alternatives.

## Features

- Beautiful, responsive alert dialogs
- Toast notifications
- Customizable themes and styles
- WAI-ARIA accessibility support
- Simple integration with Laravel
- Middleware support for automatic alerts
- Session-based alert management

## Installation

### Step 1: Install the package via Composer

```bash
composer require amjadiqbal/alertify
```

### Step 2: Register the Service Provider (Laravel 5.4 or below)

For Laravel 5.5 and above, the package will be auto-discovered. For older versions, add the service provider to your `config/app.php` file:

```php
'providers' => [
    // ...
    AmjadIqbal\Alertify\Providers\AlertifyServiceProvider::class,
],
```

### Step 3: Publish the assets

```bash
php artisan vendor:publish --provider="AmjadIqbal\Alertify\Providers\AlertifyServiceProvider"
```

This will publish:
- Configuration file to `config/alertify.php`
- JavaScript assets to `public/alertify/`
- Views to `resources/views/vendor/alertify/`

## Configuration

After publishing the configuration file, you can customize the default settings in `config/alertify.php`:

```php
return [
    'default' => [
        'title'             => [],
        'text'              => [],
        'timer'             => env('ALERTIFY_TIMER'),
        'width'             => env('ALERTIFY_WIDTH'),
        'heightAuto'        => env('ALERTIFY_HEIGHT_AUTO'),
        'padding'           => env('ALERTIFY_PADDING'),
        'animation'         => env('ALERTIFY_ANIMATION'),
        'showConfirmButton' => env('ALERTIFY_SHOW_CONFIRM_BUTTON'),
        'showCloseButton'   => env('ALERTIFY_CLOSE_BUTTON'),
    ],

    'middleware' => [
        'title'               => '',
        'text'                => '',
        'type'                => '',
        'html'                => '',
        'toast'               => '',
        'position'            => '',
        'width'               => '',
        'showConfirmButton'   => '',
        'showCloseButton'     => '',
    ]
];
```

## Usage

### Basic Usage

```php
// Display a simple alert
alert(['title' => 'Hello!', 'text' => 'Welcome to Alertify', 'type' => 'success']);

// Display an alert with more options
alert([
    'title' => 'Oops...', 
    'text' => 'Something went wrong!', 
    'type' => 'error',
    'timer' => 3000,
    'showCloseButton' => true
]);
```

### Using with Controllers

```php
public function store(Request $request)
{
    // Process the request...
    
    // Display a success message
    alert([
        'title' => 'Success!',
        'text' => 'Your data has been saved.',
        'type' => 'success'
    ]);
    
    return redirect()->back();
}
```

### Using the Middleware

You can use the included middleware to automatically display alerts based on session data. Add the middleware to your `app/Http/Kernel.php` file:

```php
protected $middlewareGroups = [
    'web' => [
        // ...
        \AmjadIqbal\Alertify\Core\Alertify::class,
    ],
];
```

Then, you can flash alert data to the session:

```php
$request->session()->flash('title', 'Success!');
$request->session()->flash('text', 'Operation completed successfully.');
$request->session()->flash('type', 'success');
```

### Including in Blade Templates

Make sure to include the Alertify scripts in your Blade templates:

```blade
@include('alertify::alert')
```

## Available Alert Types

- `success`
- `error`
- `warning`
- `info`
- `question`

## Customization

You can customize the appearance and behavior of alerts by modifying the configuration or passing custom options when calling the `alert()` function.

## Support

If you encounter any issues or have questions, please feel free to create an issue on the [GitHub repository](https://github.com/AmjadIqbal/alertify-js/issues).

## License

The Alertify package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Credits

- [Amjad Iqbal](https://github.com/AmjadIqbal)
- [AlertifyJS](http://alertifyjs.com/)
        
