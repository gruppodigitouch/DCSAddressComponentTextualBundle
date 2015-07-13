<?php

namespace DCS\AddressComponent\TextualBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class AddressTextualComponentCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('dcs_address.component.chain')) {
            throw new \Exception('You must load the DCSAddressBundle before load this bundle');
        }

        $componentChain = $container->getDefinition('dcs_address.component.chain');

        $componentChain->addMethodCall(
            'addComponent',
            array(
                $container->getParameter('dcs_address_component_textual.alias'),
                new Reference('dcs_address_component_textual.manager.address_textual'),
                'dcs_address_component_address_textual'
            )
        );
    }
}