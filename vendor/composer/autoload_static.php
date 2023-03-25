<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba46d203b4356be3fc3905265f8b1530
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Noorisys\\PaypalSubscription\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Noorisys\\PaypalSubscription\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitba46d203b4356be3fc3905265f8b1530::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba46d203b4356be3fc3905265f8b1530::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitba46d203b4356be3fc3905265f8b1530::$classMap;

        }, null, ClassLoader::class);
    }
}
