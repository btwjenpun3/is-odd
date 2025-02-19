<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit764d25ebd7b9e0e70244bf5b8ca4ce03
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kaia\\IsOdd\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kaia\\IsOdd\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit764d25ebd7b9e0e70244bf5b8ca4ce03::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit764d25ebd7b9e0e70244bf5b8ca4ce03::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit764d25ebd7b9e0e70244bf5b8ca4ce03::$classMap;

        }, null, ClassLoader::class);
    }
}
