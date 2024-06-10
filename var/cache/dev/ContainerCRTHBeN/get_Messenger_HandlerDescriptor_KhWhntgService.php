<?php

namespace ContainerCRTHBeN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_KhWhntgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.KhWhntg' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Messenger/AddProductToCatalogHandler.php';

        return $container->privates['.messenger.handler_descriptor.KhWhntg'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \App\Messenger\AddProductToCatalogHandler(($container->privates['App\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService'))), []);
    }
}
