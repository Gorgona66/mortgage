# MortgageCount

This is a PHP class that calculates the cost of a mortgage based on the sum, years, and interest rate.

## Installation

The package can be installed via Composer by running the following command:

```
composer require espiktarenko/mortgage
```

## Usage

First, include the class in your PHP file:

```php
require_once 'path/to/MortgageCount.php';
```

Then, create an instance of the `MortgageCount` class:

```php
$mortgage = new Espiktarenko\Mortgage\MortgageCount();
```

To calculate the cost of a mortgage, call the `mortgage` method and pass in the sum, years, and interest rate as parameters:

```php
$cost = $mortgage->mortgage($sum, $years, $interestRate);
```

The method will return the calculated cost of the mortgage.

If any of the parameters are null, the method will return the string "Not enough data".

## Example

```php
$mortgage = new Espiktarenko\Mortgage\MortgageCount();

$sum = 100000; // The loan amount
$years = 10; // The loan term in years
$interestRate = 5; // The interest rate in percentage

$cost = $mortgage->mortgage($sum, $years, $interestRate);

```

This will output: "It'll cost you: 50000".

## Contribution

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.