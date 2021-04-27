<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit894ebb65db63dbcee86c7091a0a8911f
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit894ebb65db63dbcee86c7091a0a8911f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit894ebb65db63dbcee86c7091a0a8911f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit894ebb65db63dbcee86c7091a0a8911f::$classMap;

        }, null, ClassLoader::class);
    }
}