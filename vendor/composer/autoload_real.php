<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit764d25ebd7b9e0e70244bf5b8ca4ce03
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

        spl_autoload_register(array('ComposerAutoloaderInit764d25ebd7b9e0e70244bf5b8ca4ce03', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit764d25ebd7b9e0e70244bf5b8ca4ce03', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit764d25ebd7b9e0e70244bf5b8ca4ce03::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
