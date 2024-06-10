<?php

namespace ContainerCRTHBeN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WUT2xEEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WUT2xEE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WUT2xEE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Cart\\AddProductController::__invoke' => ['privates', '.service_locator.LFLza1u', 'get_ServiceLocator_LFLza1uService', true],
            'App\\Controller\\Cart\\RemoveProductController::__invoke' => ['privates', '.service_locator.3tJvfBC', 'get_ServiceLocator_3tJvfBCService', true],
            'App\\Controller\\Cart\\ShowCartController::__invoke' => ['privates', '.service_locator.AJypU1S', 'get_ServiceLocator_AJypU1SService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\Cart\\AddProductController:__invoke' => ['privates', '.service_locator.LFLza1u', 'get_ServiceLocator_LFLza1uService', true],
            'App\\Controller\\Cart\\AddProductController' => ['privates', '.service_locator.LFLza1u', 'get_ServiceLocator_LFLza1uService', true],
            'App\\Controller\\Cart\\RemoveProductController:__invoke' => ['privates', '.service_locator.3tJvfBC', 'get_ServiceLocator_3tJvfBCService', true],
            'App\\Controller\\Cart\\RemoveProductController' => ['privates', '.service_locator.3tJvfBC', 'get_ServiceLocator_3tJvfBCService', true],
            'App\\Controller\\Cart\\ShowCartController:__invoke' => ['privates', '.service_locator.AJypU1S', 'get_ServiceLocator_AJypU1SService', true],
            'App\\Controller\\Cart\\ShowCartController' => ['privates', '.service_locator.AJypU1S', 'get_ServiceLocator_AJypU1SService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\Cart\\AddProductController::__invoke' => '?',
            'App\\Controller\\Cart\\RemoveProductController::__invoke' => '?',
            'App\\Controller\\Cart\\ShowCartController::__invoke' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Cart\\AddProductController:__invoke' => '?',
            'App\\Controller\\Cart\\AddProductController' => '?',
            'App\\Controller\\Cart\\RemoveProductController:__invoke' => '?',
            'App\\Controller\\Cart\\RemoveProductController' => '?',
            'App\\Controller\\Cart\\ShowCartController:__invoke' => '?',
            'App\\Controller\\Cart\\ShowCartController' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
