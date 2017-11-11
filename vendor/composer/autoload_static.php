<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef725614e15080135bf558e2f400d315
{
    public static $files = array (
        '01eb3d3a86cf6a15ca9feafca2131a10' => __DIR__ . '/../..' . '/core/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'web\\' => 4,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
        'G' => 
        array (
            'Gregwar\\Captcha\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'web\\' => 
        array (
            0 => __DIR__ . '/../..' . '/web',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Gregwar\\Captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef725614e15080135bf558e2f400d315::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef725614e15080135bf558e2f400d315::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
