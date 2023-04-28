<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9df85648767d02b3f20f937946a6477e
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9df85648767d02b3f20f937946a6477e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9df85648767d02b3f20f937946a6477e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9df85648767d02b3f20f937946a6477e::$classMap;

        }, null, ClassLoader::class);
    }
}
