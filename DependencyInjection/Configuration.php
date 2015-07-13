<?php

namespace DCS\AddressComponent\TextualBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('dcs_address_component_textual');

        $rootNode
            ->children()
                ->scalarNode('alias')
                    ->cannotBeEmpty()
                    ->defaultValue('point')
                ->end()
                ->enumNode('db_driver')
                    ->values(array('orm',''))
                    ->isRequired()
                ->end()
                ->scalarNode('model_class')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
