<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02327a270c4b4d9aa1169fc1b8efda66
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acozette\\Projet\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acozette\\Projet\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit02327a270c4b4d9aa1169fc1b8efda66::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02327a270c4b4d9aa1169fc1b8efda66::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit02327a270c4b4d9aa1169fc1b8efda66::$classMap;

        }, null, ClassLoader::class);
    }
}
