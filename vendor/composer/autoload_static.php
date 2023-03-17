<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitacfb161fc1352ab8c3c5c482d695b5bf
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitacfb161fc1352ab8c3c5c482d695b5bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitacfb161fc1352ab8c3c5c482d695b5bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitacfb161fc1352ab8c3c5c482d695b5bf::$classMap;

        }, null, ClassLoader::class);
    }
}
