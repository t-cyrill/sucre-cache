<?php
namespace Sucre\Cache;

interface CacheStoreInterface
{
    public function get($key);
    public function set($key, $value);
    public function add($key, $value);
    public function clear($key = null);
    public function isExist($key);
}
