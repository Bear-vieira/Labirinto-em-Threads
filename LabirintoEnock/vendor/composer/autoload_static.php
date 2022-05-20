<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite09d0be796ca786fe13ee7497b8301f5
{
    public static $files = array (
        'd9866e0221042caf606054fb50927c01' => __DIR__ . '/..' . '/krakjoe/pthreads-polyfill/src/Collectable.php',
        '677529945d07a2de2637d5cdc8398d99' => __DIR__ . '/..' . '/krakjoe/pthreads-polyfill/src/Threaded.php',
        '0bbb839eba3d984b21b43e36a48834d0' => __DIR__ . '/..' . '/krakjoe/pthreads-polyfill/src/Volatile.php',
        'fd1fa402b2b6879be2be1d02be41db17' => __DIR__ . '/..' . '/krakjoe/pthreads-polyfill/src/Thread.php',
        'a02f3a2fa658f9664996931da18dbd6b' => __DIR__ . '/..' . '/krakjoe/pthreads-polyfill/src/Worker.php',
        'b7a27ae8f251b35a05fad3279d7a78bf' => __DIR__ . '/..' . '/krakjoe/pthreads-polyfill/src/Pool.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite09d0be796ca786fe13ee7497b8301f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite09d0be796ca786fe13ee7497b8301f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite09d0be796ca786fe13ee7497b8301f5::$classMap;

        }, null, ClassLoader::class);
    }
}
