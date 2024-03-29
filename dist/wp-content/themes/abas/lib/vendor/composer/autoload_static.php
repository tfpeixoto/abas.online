<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74474807c169560a93c3a4fd50d47a69
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'C' => 
        array (
            'CarlosMendes\\Abas\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'CarlosMendes\\Abas\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit74474807c169560a93c3a4fd50d47a69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74474807c169560a93c3a4fd50d47a69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74474807c169560a93c3a4fd50d47a69::$classMap;

        }, null, ClassLoader::class);
    }
}
