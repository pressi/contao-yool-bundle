<?php

declare(strict_types=1);

/*******************************************************************
 * (c) 2018 Stephan Preßl, www.prestep.at <development@prestep.at>
 * All rights reserved
 * Modification, distribution or any other action on or with
 * this file is permitted unless explicitly granted by PreStep
 * www.prestep.at <development@prestep.at>
 *******************************************************************/
 
namespace PRESTEP\YoolBundle\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;


/**
 * Configures the Contao PreStep Yool Bundle.
 *
 * @author Stephan Preßl <https://github.com/pressi>
 */
class PRESTEPYoolExtension extends Extension
{
    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     */
    public function load(array $mergedConfig, ContainerBuilder $container)
    {
//        $loader = new YamlFileLoader(
//            $container,
//            new FileLocator(__DIR__.'/../Resources/config')
//        );
//        $loader->load('listener.yml');
//        $loader->load('services.yml');
    }
}
