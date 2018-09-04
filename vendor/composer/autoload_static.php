<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit308716d03cd878c4faf9eb888783a47a
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BarrenLandAnalysis\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BarrenLandAnalysis\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit308716d03cd878c4faf9eb888783a47a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit308716d03cd878c4faf9eb888783a47a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}