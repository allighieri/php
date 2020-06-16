<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41d05b97136892e0f0e0a49f3d3774c7
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41d05b97136892e0f0e0a49f3d3774c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41d05b97136892e0f0e0a49f3d3774c7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit41d05b97136892e0f0e0a49f3d3774c7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}