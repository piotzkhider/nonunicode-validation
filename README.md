# Non Unicode Validation Rule For Laravel
Validation package that does not pass Unicode.

This package override `alpha`, `alpha_num`, `alpha_dash` validation rules of Laravel.

## Installation

Install the package through [Composer](http://getcomposer.org).
On the command line:

```
composer require piotzkhider/nonunicode-validation
```

## Configuration

Add the following to your `providers` array in `config/app.php`:

```php
'providers' => [
    // ...

    Piotzkhider\NonUnicodeValidation\ValidationServiceProvider::class,
],
```

## Usage

See the [Validation documentation](http://laravel.com/docs/validation) of Laravel.

# License

MIT
