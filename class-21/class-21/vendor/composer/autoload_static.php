<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d884a61a5a1eba3d59a5b2862829e0b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pondit\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pondit\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d884a61a5a1eba3d59a5b2862829e0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d884a61a5a1eba3d59a5b2862829e0b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3d884a61a5a1eba3d59a5b2862829e0b::$classMap;

        }, null, ClassLoader::class);
    }
}
