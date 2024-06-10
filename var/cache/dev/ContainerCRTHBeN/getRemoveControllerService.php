<?php

namespace ContainerCRTHBeN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRemoveControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Catalog\RemoveController' shared autowired service.
     *
     * @return \App\Controller\Catalog\RemoveController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Messenger/MessageBusAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Messenger/MessageBusTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Catalog/RemoveController.php';

        $container->services['App\\Controller\\Catalog\\RemoveController'] = $instance = new \App\Controller\Catalog\RemoveController();

        $instance->setMessageBus(($container->services['messenger.default_bus'] ?? $container->load('getMessenger_DefaultBusService')));
        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\Catalog\\RemoveController', $container));

        return $instance;
    }
}
