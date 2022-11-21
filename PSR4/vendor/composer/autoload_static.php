<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbff2f778f8e174c895154ead6332cd93
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbff2f778f8e174c895154ead6332cd93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbff2f778f8e174c895154ead6332cd93::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbff2f778f8e174c895154ead6332cd93::$classMap;

        }, null, ClassLoader::class);
    }
}
