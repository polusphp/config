<?php
declare(strict_types=1);

namespace Polus\Config;

use Aura\Di\ConfigCollection as AuraConfigCollection;
use Polus\Polus_Interface\ConfigInterface;

class ConfigCollection extends AuraConfigCollection
{
    protected function getConfig($config)
    {
        if (is_string($config)) {
            $config = new $config;
        }

        if ($config instanceof ConfigInterface) {
            $config = new AuraConfigWrapper($config);
        }

        if (! $config instanceof ContainerConfigInterface) {
            throw new \InvalidArgumentException(
                'Container configs must implement ContainerConfigInterface'
            );
        }

        return $config;
    }
}
