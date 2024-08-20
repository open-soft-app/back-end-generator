# Livewire Crud Generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/open-soft-app/back-end-generator.svg?style=flat-square)](https://packagist.org/packages/open-soft-app/back-end-generator)

A livewire CRUD Generation package to help scaffold basic site files. Package is autoloaded as per PSR-4 autoloading in any laravel version `^11.0` so no extra config required. However is has been tested on version `^10.0`. It uses ***auth*** middleware thus installs `breeze` just incase you don't have any other auth mechanism.

## Documentation

More detailed documentation can ne found at [back-end-generator](https://open-soft-app.github.io/#/)

## Installation

You can install the package via [Composer](https://getcomposer.org/):

```bash
composer require open-soft-app/back-end-generator --dev
```

## Usage

After running `composer require open-soft-app/back-end-generator` command just run:

```bash
php artisan crud:install
```
**This command will perfom below actions:

    * Compile css/js based on `bootstrap and fontawesome/free`.
    * Run `npm install && run dev`
    * Flush *node_modules* files from you folder.

 

Then generate Crud by:

```bash
php artisan crud:generate {table-name}
```
**This command will generate:

    * Livewire Component.
    * Model.
    * Views. 
    * Menu (soon)   
    * Factory.
    
**Remember to customise your genertaed factories and migrations if you need to use them later
 
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
