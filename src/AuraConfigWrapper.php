<?php
declare(strict_types=1);

namespace Polus\Config;

use Aura\Di\Container;
use Aura\Di\ContainerConfigInterface;
use Polus\Polus_Interface\ConfigInterface;

class AuraConfigWrapper implements ContainerConfigInterface
{
    protected $config;

    public function __construct(ConfigInterface $config)
    {
        $this->config = $config;
    }

    public function define(Container $di)
    {
        $this->config->config($di);
    }

    public function modify(Container $di)
    {
    }
}
