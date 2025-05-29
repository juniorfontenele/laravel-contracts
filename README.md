# Laravel Contracts

[![Latest Version](https://img.shields.io/packagist/v/juniorfontenele/laravel-contracts?label=version)](https://packagist.org/packages/juniorfontenele/laravel-contracts)
[![Total Downloads](https://img.shields.io/packagist/dt/juniorfontenele/laravel-contracts?label=downloads)](https://packagist.org/packages/juniorfontenele/laravel-contracts)

A set of reusable contracts (interfaces) for Laravel projects, designed to standardize and simplify the implementation of common patterns such as validation, filtering, and data transformation.

## Features

- **Validation Contracts**: Define how data should be validated in a consistent way.
- **Filter Contracts**: Standardize query filtering logic.
- **Data Contracts**: Ensure data objects can be easily converted to and from arrays.

## Installation

```bash
composer require juniorfontenele/laravel-contracts
```

## Usage

Implement the provided interfaces in your classes to enforce consistent structure and behavior.

Example:

```php
use JuniorFontenele\LaravelContracts\Validation\Validatable;

class MyRequest implements Validatable
{
    // Implement required methods: validate(), rules(), messages(), attributes()
}
```

## License

MIT License. See [LICENSE](LICENSE) for details.
