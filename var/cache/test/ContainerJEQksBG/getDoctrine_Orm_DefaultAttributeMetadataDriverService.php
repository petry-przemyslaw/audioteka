<?php

namespace ContainerJEQksBG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultAttributeMetadataDriverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.default_attribute_metadata_driver' shared service.
     *
     * @return \Doctrine\ORM\Mapping\Driver\AttributeDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AttributeDriver.php';

        return $container->privates['doctrine.orm.default_attribute_metadata_driver'] = new \Doctrine\ORM\Mapping\Driver\AttributeDriver([0 => (\dirname(__DIR__, 4).'/src/Entity')]);
    }
}
