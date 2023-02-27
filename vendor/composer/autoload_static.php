<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c0d0e06e1fda3de389d2808d430a8cf
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Blacksmith\\Contacts\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Blacksmith\\Contacts\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c0d0e06e1fda3de389d2808d430a8cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c0d0e06e1fda3de389d2808d430a8cf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3c0d0e06e1fda3de389d2808d430a8cf::$classMap;

        }, null, ClassLoader::class);
    }
}
