<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb6483bd07bcf6b0f41cc06c8a460398f
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

        spl_autoload_register(array('ComposerAutoloaderInitb6483bd07bcf6b0f41cc06c8a460398f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb6483bd07bcf6b0f41cc06c8a460398f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb6483bd07bcf6b0f41cc06c8a460398f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
