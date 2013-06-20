<?php
namespace Sucre\Cache;

class APCCacheStore implements CacheStoreInterface
{
    public function get($key)
    {
        return apc_fetch($key);
    }

    public function set($key, $value)
    {
        return apc_store($key, $value);
    }

    public function add($key, $value)
    {
        return apc_add($key, $value);
    }

    public function clear($key = null)
    {
        return $key === null ? apc_clear_cache('user') : apc_delete($key);
    }

    public function isExist($key)
    {
        if (!is_string($key)) {
            throw new \LogicException('$key must be string.');
        }
        return apc_exists($key);
    }
}
