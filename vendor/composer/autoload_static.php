<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit425c818ffb2c2a98b732c568e519e531
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Skycoder\\LravelPluginManager\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Skycoder\\LravelPluginManager\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit425c818ffb2c2a98b732c568e519e531::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit425c818ffb2c2a98b732c568e519e531::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit425c818ffb2c2a98b732c568e519e531::$classMap;

        }, null, ClassLoader::class);
    }
}
