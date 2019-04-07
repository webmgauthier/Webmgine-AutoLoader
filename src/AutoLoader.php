<?php
namespace Webmgine;

class AutoLoader{

    protected static $baseDir = null;

    public static function autoLoad(string $namespace){
        // Get class file
        $filePath = self::filePathFromNamespace($namespace);
		if($filePath === ''){
			return;
        }
        include_once $filePath;
    }
    
    public static function filePathFromNamespace(string $namespace, string $fileExt = '.php'):string{
        if(self::$baseDir === null){
            return '';
        }
        $filePath = realpath(self::$baseDir.str_replace('\\', '/', $namespace).$fileExt);
        if($filePath === false){
            return '';
        }
        return $filePath;
    }

    public static function setBaseDir(string $path){
        if(substr($path, -1) !== '/'){
            $path .= '/';
        }
        self::$baseDir = $path;
    }
}