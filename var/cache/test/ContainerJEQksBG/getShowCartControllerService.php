<?php

namespace ContainerJEQksBG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShowCartControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\Cart\ShowCartController' shared autowired service.
     *
     * @return \App\Controller\Cart\ShowCartController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Cart/ShowCartController.php';
        include_once \dirname(__DIR__, 4).'/src/ResponseBuilder/CartBuilder.php';

        $container->services['App\\Controller\\Cart\\ShowCartController'] = $instance = new \App\Controller\Cart\ShowCartController(($container->privates['App\\ResponseBuilder\\CartBuilder'] ?? ($container->privates['App\\ResponseBuilder\\CartBuilder'] = new \App\ResponseBuilder\CartBuilder())));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\Cart\\ShowCartController', $container));

        return $instance;
    }
}
