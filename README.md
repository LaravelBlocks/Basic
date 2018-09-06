# Laravel Blocks Basic

Basic blocks for the [Laravel Blocks system](https://github.com/LaravelBlocks/Core) that can be used on almost any site.

## Installation

To get started using these blocks, require the package by running this in your command line:

```bash
composer require laravelblocks/basic
```

After installed you'll need to run the migration to create the necessary tables in your database:

```bash
php artisan migrate
```

## Usage

Please refer to the usage on the Core package README to learn how the block system works.

This package specifically adds three blocks you can use out of the box:

 - Paragraph - A single `text` attribute.

 - Header - A single `text` attribute.

 - Image - Has `src` and `alt` attributes.
