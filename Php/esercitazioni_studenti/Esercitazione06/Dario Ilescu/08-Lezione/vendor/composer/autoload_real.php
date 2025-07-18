<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4556e7e6f0e6410f423bc8e3d9d5a089
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

        spl_autoload_register(array('ComposerAutoloaderInit4556e7e6f0e6410f423bc8e3d9d5a089', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4556e7e6f0e6410f423bc8e3d9d5a089', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4556e7e6f0e6410f423bc8e3d9d5a089::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
