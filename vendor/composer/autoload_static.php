<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf62b648c8c59b7ee86b5de98824dca99
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Espiktarenko\\Mortgage\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Espiktarenko\\Mortgage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf62b648c8c59b7ee86b5de98824dca99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf62b648c8c59b7ee86b5de98824dca99::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf62b648c8c59b7ee86b5de98824dca99::$classMap;

        }, null, ClassLoader::class);
    }
}
