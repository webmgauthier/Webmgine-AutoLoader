# Webmgine - AutoLoader

PHP class autoloader based on namespaces/directories association

## Getting Started

Include **AutoLoader.php** in your project.

Set your project base directory
```
Webmgine\AutoLoader::setBaseDir(__DIR__);
```

Register autoload into php spl functions
```
spl_autoload_register('Webmgine\AutoLoader::autoLoad');
```