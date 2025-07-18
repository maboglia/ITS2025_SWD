<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e7bb74059d4797e57b74f2573879aff
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e7bb74059d4797e57b74f2573879aff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e7bb74059d4797e57b74f2573879aff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4e7bb74059d4797e57b74f2573879aff::$classMap;

        }, null, ClassLoader::class);
    }
}
