<?php 

require __DIR__ . '/../vendor/autoload.php';
require_once '/Users/edmart/php-pro/src/StringUtils.php';
use Webmozart\Assert\Assert;

Assert::eq(capitalize(''), '');

Assert::eq(capitalize('hello'), 'Hello');

Assert::eq(capitalize('111'), '111');

Assert::eq(capitalize(null), '');
echo 'Все тесты пройдены!';