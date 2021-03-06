<?php
/*******************************************************************
 * (c) 2018 Stephan Preßl, www.prestep.at <development@prestep.at>
 * All rights reserved
 * Modification, distribution or any other action on or with
 * this file is permitted unless explicitly granted by IIDO
 * www.iido.at <development@iido.at>
 *******************************************************************/

namespace PRESTEP\YoolBundle\ContaoManager;


use PRESTEP\YoolBundle\PRESTEPYoolBundle;
use Contao\CoreBundle\ContaoCoreBundle;
//use Contao\NewsBundle\ContaoNewsBundle;
//use Contao\CalendarBundle\ContaoCalendarBundle;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

//use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
//use Contao\ManagerPlugin\Dependency\DependentPluginInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;

use Contao\ManagerPlugin\Config\ConfigPluginInterface;
use Symfony\Component\Config\Loader\LoaderInterface;


/**
 * Plugin for the Contao Manager.
 *
 * @author Stephan Preßl <development@prestep.at>
 */
//class Plugin implements BundlePluginInterface, RoutingPluginInterface, ConfigPluginInterface, DependentPluginInterface
class Plugin implements BundlePluginInterface, ConfigPluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        $arrLoadAfter   = [ContaoCoreBundle::class, ContaoNewsBundle::class, ContaoCalendarBundle::class];

        return [
            BundleConfig::create(PRESTEPYoolBundle::class)
                ->setLoadAfter($arrLoadAfter)
        ];
    }



    /**
     * {@inheritdoc}
     */
//    public function getPackageDependencies()
//    {
//        return [
//            'contao/news-bundle',
//            'contao/calendar-bundle'
//        ];
//    }


    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     */
//    public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
//    {
//        $file = __DIR__ . '/../Resources/config/routing.yml';
//
//        return $resolver->resolve($file)->load($file);
//    }



    public function registerContainerConfiguration(LoaderInterface $loader, array $config)
    {
//        $loader->load(__DIR__ . '/config/custom.yml');
    }
}
