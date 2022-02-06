<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d79ce5173c879869cf1a4aa4653eafa
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d79ce5173c879869cf1a4aa4653eafa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d79ce5173c879869cf1a4aa4653eafa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8d79ce5173c879869cf1a4aa4653eafa::$classMap;

        }, null, ClassLoader::class);
    }
}