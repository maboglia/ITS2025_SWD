<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit39958330c93d53d8ef5eb441da6f5119
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

        spl_autoload_register(array('ComposerAutoloaderInit39958330c93d53d8ef5eb441da6f5119', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit39958330c93d53d8ef5eb441da6f5119', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit39958330c93d53d8ef5eb441da6f5119::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
