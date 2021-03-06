<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a6a2254d1918ae133c85daf2f676b26
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a6a2254d1918ae133c85daf2f676b26::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a6a2254d1918ae133c85daf2f676b26::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a6a2254d1918ae133c85daf2f676b26::$classMap;

        }, null, ClassLoader::class);
    }
}
