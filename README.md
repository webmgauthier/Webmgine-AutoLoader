# Webmgine - AutoLoader

PHP class autoloader based on namespaces/directories association

## Getting Started

Use composer autload (or include **src/AutoLoader.php** in your project).
```
require __DIR__ . '/vendor/autoload.php';
```

Set your project base directory
```
Webmgine\AutoLoader::setBaseDir(__DIR__);
```

Register autoload into php spl functions
```
spl_autoload_register('Webmgine\AutoLoader::autoLoad');
```