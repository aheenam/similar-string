**package is not production ready**

Similar String
===

Find level of similarity between strings based on Dice's Coefficient.

Installation
---

Install the package by running

```bash
$ composer require aheenam/similar-string
```

Usage
---

This package contains two classes, one for calculating Dice's Coefficient of two strings and another working with this value.

Dice's Coefficient
---

```php
<?php

use Aheenam\SimilarString\Dice;

(new Dice)('night', 'nacht') // returns 0.25
(new Dice)('abcd', 'abcd') // returns 1
(new Dice)('qwerty', 'asdf') // returns 0
```

Similar Strings
---

This class provides 2 different methods:

### `orderBySimilarity($string, $similarStrings = [])`

This method orders the strings in `$similarStrings` by their Dice-Coefficient when compared to `$string`

```php
<?php

use Aheenam\SimilarString\SimilarString;

(new SimilarString)->orderBySimilarity('nacht', ['night', 'abcde', 'lacht']);
// returns ['lacht', 'night', 'abcde']
```

### `findMostSimilar($string, $similarStrings = [])`

This methods returns the best match for `$string` out of `$similarStrings`

```php
<?php

use Aheenam\SimilarString\SimilarString;

(new SimilarString)->findMostSimilar('nacht', ['night', 'abcde', 'lacht']);
// returns 'lacht'
```

Changelog
---
Check [CHANGELOG](CHANGELOG.md) for the changelog

Testing
---
To run tests use

```bash
$ composer test
```

If you are working on a windows machine use

```bash
vendor\bin\phpunit
```

Contributing
---
*Information will follow soon*


Security
---
If you discover any security related issues, please email rathes@aheenam.com or use the issue tracker of GitHub.

About
---
Aheenam is a small company from NRW, Germany creating custom digital solutions. Visit [our website](https://aheenam.com) to find out more about us.

License
---
The MIT License (MIT). Please see [License File](LICENSE) for more information.