<?php

namespace DCS\AddressComponent\TextualBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class DCSAddressComponentTextualExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('dcs_address_component_textual.alias', $config['alias']);
        $container->setParameter('dcs_address_component_textual.model_class', $config['model_class']);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load(sprintf('%s.xml', $config['db_driver']));

        $container->setAlias('dcs_address_component_textual.manager.address_textual', 'dcs_address_component_textual.manager.address_textual.default');

        $loader->load('form.xml');
        $loader->load('listener.xml');
    }
}
