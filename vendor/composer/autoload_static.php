<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit069e1c9a92ef68307d7ae5f085603641
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Raj\\Contract\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Raj\\Contract\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit069e1c9a92ef68307d7ae5f085603641::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit069e1c9a92ef68307d7ae5f085603641::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit069e1c9a92ef68307d7ae5f085603641::$classMap;

        }, null, ClassLoader::class);
    }
}
