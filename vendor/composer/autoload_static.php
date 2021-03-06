<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e0d175e1962f1db3f8e054e16b87556
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Impack\\WebSocket\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Impack\\WebSocket\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Impack\\WebSocket\\Base' => __DIR__ . '/../..' . '/src/Base.php',
        'Impack\\WebSocket\\Client' => __DIR__ . '/../..' . '/src/Client.php',
        'Impack\\WebSocket\\Events' => __DIR__ . '/../..' . '/src/Events.php',
        'Impack\\WebSocket\\Handshake' => __DIR__ . '/../..' . '/src/Handshake.php',
        'Impack\\WebSocket\\Server' => __DIR__ . '/../..' . '/src/Server.php',
        'Impack\\WebSocket\\Socket' => __DIR__ . '/../..' . '/src/Socket.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e0d175e1962f1db3f8e054e16b87556::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e0d175e1962f1db3f8e054e16b87556::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e0d175e1962f1db3f8e054e16b87556::$classMap;

        }, null, ClassLoader::class);
    }
}
