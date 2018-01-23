<?php

namespace Moskalyovd\FCMBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class InjectGuzzleClientPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->has('moskalyovd_fcm.client')) {
            return;
        }

        $fcmClientDef = $container->findDefinition('moskalyovd_fcm.client');

        $guzzleFactories = $container->findTaggedServiceIds('moskalyovd_fcm.guzzle_factory');

        foreach ($guzzleFactories as $id => $value) {
            $fcmClientDef->addMethodCall('injectHttpClient', [new Reference($id)]);
        }
    }
}