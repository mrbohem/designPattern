<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2af5cdff11a958845860dfec2163cf6c
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
        'App\\Book' => __DIR__ . '/../..' . '/src/book.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2af5cdff11a958845860dfec2163cf6c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2af5cdff11a958845860dfec2163cf6c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2af5cdff11a958845860dfec2163cf6c::$classMap;

        }, null, ClassLoader::class);
    }
}
