<?php

namespace ContainerJEQksBG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_SendersLocatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.senders_locator' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\Sender\SendersLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocator.php';

        return $container->privates['messenger.senders_locator'] = new \Symfony\Component\Messenger\Transport\Sender\SendersLocator(['App\\Messenger\\AddProductToCart' => [0 => 'async'], 'App\\Messenger\\RemoveProductFromCart' => [0 => 'async'], 'App\\Messenger\\AddProductToCatalog' => [0 => 'async'], 'App\\Messenger\\RemoveProductFromCatalog' => [0 => 'async']], ($container->privates['.service_locator.NZdAz3P'] ?? $container->load('get_ServiceLocator_NZdAz3PService')));
    }
}