<?php
namespace Sucre;

require __DIR__ . '/../vendor/autoload.php';

// initialize Sucre\Cache
Cache::setCacheStore(new Cache\APCCacheStore);

Cache::clear();

echo "Cache::add('foo', 'bar');".PHP_EOL;
Cache::add('foo', 'bar');

echo "Cache::get('foo');".PHP_EOL;
echo 'returns: '.Cache::get('foo').PHP_EOL;

// --------------------------
echo PHP_EOL;

echo "Cache::set('foo', 'baz');".PHP_EOL;
Cache::set('foo', 'baz');

echo "Cache::get('foo');".PHP_EOL;
echo 'returns: '.Cache::get('foo').PHP_EOL;

// --------------------------
echo PHP_EOL;

echo "Cache::set('foo', array('foo' => 'bar'));".PHP_EOL;
Cache::set('foo', array('foo' => 'bar'));

echo "Cache::get('foo');".PHP_EOL;
echo 'returns: ';
var_export(Cache::get('foo'));
echo PHP_EOL;

// --------------------------
echo PHP_EOL;

echo "Cache::isExist('foo');".PHP_EOL;
echo 'returns: ';
var_export(Cache::isExist('foo'));
echo PHP_EOL;

