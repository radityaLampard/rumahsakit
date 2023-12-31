<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit21d169eccfaa4cdc2840ab52431a7a8b
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ramsey\\Uuid\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit21d169eccfaa4cdc2840ab52431a7a8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit21d169eccfaa4cdc2840ab52431a7a8b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit21d169eccfaa4cdc2840ab52431a7a8b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
