# GetCake PHP Client

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require apivore/getcake
```

## Usage

``` php
use Apivore\Core\Config;

$client = new Apivore\GetCake\Client();
$client->setConfig(new Config([
    'domain' => 'http://f5mlogin.com/',
    'affiliateId' => 'AFFILIATE_ID',
    'apiKey' => 'API_KEY',
]));

try {
    $response = $client->api('Offers')->offerFeed([
        'campaign_name' => '',
        'media_type_category_id' => 0,
        'vertical_category_id' => 0,
        'vertical_id' => 0,
        'offer_status_id' => 0,
        'tag_id' => 0,
        'start_at_row' => 1,
        'row_limit' => 25,
    ]);

    dd($response);
} catch (Exception $e) {
    dd($e);
}
```

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email hello@draperstudio.tech instead of using the issue tracker.

## Credits

- [DraperStudio][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/Apivore/getcake.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Apivore/GetCake/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/Apivore/getcake.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Apivore/getcake.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/Apivore/getcake.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/Apivore/getcake
[link-travis]: https://travis-ci.org/Apivore/GetCake
[link-scrutinizer]: https://scrutinizer-ci.com/g/Apivore/getcake/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/Apivore/getcake
[link-downloads]: https://packagist.org/packages/Apivore/getcake
[link-author]: https://github.com/DraperStudio
[link-contributors]: ../../contributors
