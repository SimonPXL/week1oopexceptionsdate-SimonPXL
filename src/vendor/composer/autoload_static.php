<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7630d4c84caa84b5f7ecffedcd74348
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Util\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Util\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Util',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7630d4c84caa84b5f7ecffedcd74348::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7630d4c84caa84b5f7ecffedcd74348::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
