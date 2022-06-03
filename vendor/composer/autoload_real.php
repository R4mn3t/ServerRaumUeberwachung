<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite316e8e07e6fe7bb3f128356a25adb2c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInite316e8e07e6fe7bb3f128356a25adb2c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite316e8e07e6fe7bb3f128356a25adb2c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite316e8e07e6fe7bb3f128356a25adb2c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}