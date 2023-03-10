<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd99d7468505c3b7338f10e733a3d709f
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

        spl_autoload_register(array('ComposerAutoloaderInitd99d7468505c3b7338f10e733a3d709f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd99d7468505c3b7338f10e733a3d709f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd99d7468505c3b7338f10e733a3d709f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
