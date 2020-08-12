<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fd20c0a699550d7d9dd8aa20977a457
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NotaFiscalServico\\EeL\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NotaFiscalServico\\EeL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fd20c0a699550d7d9dd8aa20977a457::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fd20c0a699550d7d9dd8aa20977a457::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
