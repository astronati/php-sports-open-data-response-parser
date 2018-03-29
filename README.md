[![Build Status](https://travis-ci.org/astronati/php-sports-open-data-response-parser.svg?branch=master)](https://travis-ci.org/astronati/php-sports-open-data-response-parser)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/3caf1d767596416b973fbabc96fef324)](https://www.codacy.com/app/astronati/php-sports-open-data-response-parser?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=astronati/php-sports-open-data-response-parser&amp;utm_campaign=Badge_Grade)
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/3caf1d767596416b973fbabc96fef324)](https://www.codacy.com/app/astronati/php-sports-open-data-response-parser?utm_source=github.com&utm_medium=referral&utm_content=astronati/php-sports-open-data-response-parser&utm_campaign=Badge_Coverage)
[![Latest Stable Version](https://poser.pugx.org/astronati/sports-open-data-response-parser/v/stable)](https://packagist.org/packages/astronati/sports-open-data-response-parser)
[![License](https://poser.pugx.org/astronati/sports-open-data-response-parser/license)](https://packagist.org/packages/astronati/sports-open-data-response-parser)

# Sports Open Data Response Parser
Allows to map responses provided by the Sports Open Data API.

## Supported Responses
Not all responses are currently supported but we are happy to work for you if you need some of them.

**NOTE:** To add another response into the supported list, please file a new issue.

To do that please file a new [issue](https://github.com/astronati/php-sports-open-data-response-parser/issues/new).

## Installation
You can install the library and its dependencies using `composer` running:
```sh
$ composer require astronati/sports-open-data-response-parser
```

### Usage
The library allows to return a model per each response and its content (season, round, match, etc...).

##### Example
The following snippet can be helpful:

```php
use SODRP\Response\ResponseParser;
...
// Obtain a Response
$apiResponse = ... // Save this the response from the Sports Open Data API
$response = ResponseParser::create($apiResponse, ResponseParser::GET_SEASONS_AVAILABLE);
...
// Get 2017-2018 season
$season = $response->findOneBySlug('17-18');
echo $season->getStartDate(); // 2017-07-01...
```

For more details please take a look at [Response](https://github.com/astronati/php-sports-open-data-response-parser/tree/master/src/Response).

## Development
The environment requires [phpunit](https://phpunit.de/), that has been already included in the `dev-dependencies` of the
`composer.json`.

### Dependencies
To install all modules you just need to run following command:

```sh
$ composer install
```

### Testing
Tests files are created in dedicates folders that replicate the
[src](https://github.com/astronati/php-sports-open-data-response-parser/tree/master/src) structure as follows:
```
.
+-- src
|   +-- [folder-name]
|   |   +-- [file-name].php
|   ...
+-- tests
|   +-- [folder-name]
|   |   +-- [file-name]Test.php
```

Execute following command to run the tests suite:
```sh
$ composer test
```

Run what follows to see the code coverage:
```sh
$ composer coverage
```

## License
This package is released under the [MIT license](LICENSE.md).

