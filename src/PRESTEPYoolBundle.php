<?php
/*******************************************************************
 * (c) 2018 Stephan Preßl, www.prestep.at <development@prestep.at>
 * All rights reserved
 * Modification, distribution or any other action on or with
 * this file is permitted unless explicitly granted by PreStep
 * www.prestep.at <development@prestep.at>
 *******************************************************************/
 
namespace PRESTEP\YoolBundle;


use Symfony\Component\HttpKernel\Bundle\Bundle;
use PRESTEP\YoolBundle\DependencyInjection\PRESTEPYoolExtension;


/**
 * Configures the Contao PreStep Yool-Tool Bundle.
 *
 * @author Stephan Preßl <development@prestep.at>
 */
class PRESTEPYoolBundle extends Bundle
{
    /**
     * Register extension
     *
     * @return PRESTEPYoolExtension
     */
    public function getContainerExtension()
    {
        return new PRESTEPYoolExtension();
    }
}
