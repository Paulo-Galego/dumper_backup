<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1afa6a6809e1d2712bc205ee3b948f07
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
            'Spatie\\DbDumper\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Spatie\\DbDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/db-dumper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1afa6a6809e1d2712bc205ee3b948f07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1afa6a6809e1d2712bc205ee3b948f07::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1afa6a6809e1d2712bc205ee3b948f07::$classMap;

        }, null, ClassLoader::class);
    }
}
