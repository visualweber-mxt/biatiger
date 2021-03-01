<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97d6e989d07a633869ef243cc865b364
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Theme\\NewsTv\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Theme\\NewsTv\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97d6e989d07a633869ef243cc865b364::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97d6e989d07a633869ef243cc865b364::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
