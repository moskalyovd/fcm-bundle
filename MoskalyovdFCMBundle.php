<?php

namespace Moskalyovd\FCMBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

use Moskalyovd\FCMBundle\DependencyInjection\CompilerPass\InjectGuzzleClientPass;

class MoskalyovdFCMBundle extends Bundle
{
 public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new InjectGuzzleClientPass());
    }
}
