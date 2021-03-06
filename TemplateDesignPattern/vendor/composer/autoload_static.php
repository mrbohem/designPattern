<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54ac8ab698348a817970a5de49499326
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
        'App\\Sub' => __DIR__ . '/../..' . '/src/sub.php',
        'App\\TurkeySub' => __DIR__ . '/../..' . '/src/turkeySub.php',
        'App\\Vaggie' => __DIR__ . '/../..' . '/src/vaggieSub.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54ac8ab698348a817970a5de49499326::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54ac8ab698348a817970a5de49499326::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54ac8ab698348a817970a5de49499326::$classMap;

        }, null, ClassLoader::class);
    }
}
