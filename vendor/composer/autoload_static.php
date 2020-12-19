<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit482d0fee10e0e920a5268810c923cf3c
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cydh\\DP2RA\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cydh\\DP2RA\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit482d0fee10e0e920a5268810c923cf3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit482d0fee10e0e920a5268810c923cf3c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}