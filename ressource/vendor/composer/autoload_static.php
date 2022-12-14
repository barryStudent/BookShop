<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90bcba14f0a958b7ef8d0edce716ce25
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Imagine\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Imagine\\' => 
        array (
            0 => __DIR__ . '/..' . '/imagine/imagine/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90bcba14f0a958b7ef8d0edce716ce25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90bcba14f0a958b7ef8d0edce716ce25::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit90bcba14f0a958b7ef8d0edce716ce25::$classMap;

        }, null, ClassLoader::class);
    }
}
