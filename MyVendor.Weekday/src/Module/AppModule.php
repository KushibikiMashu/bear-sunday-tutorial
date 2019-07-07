<?php
namespace MyVendor\MyProject\Module;

use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;
use BEAR\Package\Provide\Router\AuraRouterModule;
use MyVendor\MyProject\MyLogger;
use MyVendor\MyProject\MyLoggerInterface;

class AppModule extends AbstractAppModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $appDir = $this->appMeta->appDir;
        require_once $appDir . '/env.php';
        $this->install(new AuraRouterModule($appDir . '/var/conf/aura.route.php'));
        $this->bind(MyLoggerInterface::class)->to(MyLogger::class);
        $this->install(new PackageModule);
    }
}
