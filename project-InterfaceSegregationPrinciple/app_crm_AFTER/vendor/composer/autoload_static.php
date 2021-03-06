<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4fe132ba101b5e5597d2f4be8c8c412
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4fe132ba101b5e5597d2f4be8c8c412::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4fe132ba101b5e5597d2f4be8c8c412::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc4fe132ba101b5e5597d2f4be8c8c412::$classMap;

        }, null, ClassLoader::class);
    }
}
