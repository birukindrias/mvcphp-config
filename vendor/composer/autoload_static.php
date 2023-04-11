<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f1cd0b509240e3f043717a87b2c6888
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Mvc\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f1cd0b509240e3f043717a87b2c6888::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f1cd0b509240e3f043717a87b2c6888::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f1cd0b509240e3f043717a87b2c6888::$classMap;

        }, null, ClassLoader::class);
    }
}
