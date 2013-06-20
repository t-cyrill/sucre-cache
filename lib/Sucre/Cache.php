<?php
namespace Sucre;

class Cache {
    private static $cache = null;

    const DEBUG = 0;
    const INFO = 1;
    const WARN = 2;
    const ERROR = 3;
    const FATAL = 4;

    private static function beforeCall()
    {
        if (self::$cache === null) {
            throw new \LogicException('cacheが設定されていません。');
        }
    }

    public static function getCacheStore()
    {
        self::beforeCall();
        return self::$cache;
    }

    public static function setCacheStore(Cache\CacheStoreInterface $cache)
    {
        self::$cache = $cache;
    }

    public static function get($key)
    {
        self::beforeCall();
        return self::$cache->get($key);
    }

    public static function add($key, $value)
    {
        self::beforeCall();
        return self::$cache->add($key, $value);
    }

    public static function set($key, $value)
    {
        self::beforeCall();
        return self::$cache->set($key, $value);
    }

    public static function clear($key = null)
    {
        self::beforeCall();
        return self::$cache->clear($key);
    }

    public static function isExist($key)
    {
        self::beforeCall();
        return self::$cache->isExist($key);
    }
}
