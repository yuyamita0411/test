<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ac2ad517ff0fc44f84d7cbaded794c8
{
    public static $files = array (
        '5ff2501974ebd86c0be698ddfca6451e' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/load-v5p0.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SANGO\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SANGO\\' => 
        array (
            0 => __DIR__ . '/../..' . '/library/classes',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JShrink' => 
            array (
                0 => __DIR__ . '/..' . '/tedivm/jshrink/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ac2ad517ff0fc44f84d7cbaded794c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ac2ad517ff0fc44f84d7cbaded794c8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2ac2ad517ff0fc44f84d7cbaded794c8::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2ac2ad517ff0fc44f84d7cbaded794c8::$classMap;

        }, null, ClassLoader::class);
    }
}