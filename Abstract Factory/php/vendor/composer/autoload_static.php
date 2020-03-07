<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit169b5815c9a6eab91295735da7e27e46
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AbstractFactory\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AbstractFactory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit169b5815c9a6eab91295735da7e27e46::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit169b5815c9a6eab91295735da7e27e46::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
