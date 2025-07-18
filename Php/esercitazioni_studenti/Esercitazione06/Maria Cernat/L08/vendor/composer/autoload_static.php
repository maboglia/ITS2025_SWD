<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5195594050fffaff9498b8fbbe670b52
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MariaCernat\\L08\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MariaCernat\\L08\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5195594050fffaff9498b8fbbe670b52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5195594050fffaff9498b8fbbe670b52::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5195594050fffaff9498b8fbbe670b52::$classMap;

        }, null, ClassLoader::class);
    }
}
