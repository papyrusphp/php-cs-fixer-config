# 📜 Papyrus PHP CS Fixer config
Ruleset configuration for PHP-CS-Fixer.

## Installation
Install via composer:
```bash
composer require papyrus/php-cs-fixer-config:dev-main
```

## Configuration
Create a `.php-cs-fixer.php` with the following contents:
```php
<?php

declare(strict_types=1);

use Papyrus\PhpCsFixerConfig\Config;
use PhpCsFixer\Finder;

return Config::create()
    ->setRiskyAllowed(true)
    ->setFinder(
        (new Finder())
            ->in(__DIR__)
            ->exclude(['vendor'])
    );
```

The ruleset can be overridden (merged) by adding a custom ruleset to the create method:
```php
return Config::create([
    'some-parameter' => true,
    // ...
])
```
