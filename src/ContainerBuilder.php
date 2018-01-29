<?php
declare(strict_types=1);

namespace Polus\Config;

use Aura\Di\ContainerBuilder as AuraContainerBuilder;

class ContainerBuilder extends AuraContainerBuilder
{
    protected function newConfigCollection(array $configClasses = [])
    {
        return new ConfigCollection($configClasses);
    }
}
