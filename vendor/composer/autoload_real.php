<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6aab09657d801f0ce3d5cb75c56eb5d3
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

        spl_autoload_register(array('ComposerAutoloaderInit6aab09657d801f0ce3d5cb75c56eb5d3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6aab09657d801f0ce3d5cb75c56eb5d3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6aab09657d801f0ce3d5cb75c56eb5d3::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
