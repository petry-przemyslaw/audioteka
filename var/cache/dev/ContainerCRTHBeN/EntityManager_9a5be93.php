<?php

namespace ContainerCRTHBeN;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder077fe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9ae4c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd44e8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getConnection', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getMetadataFactory', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getExpressionBuilder', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'beginTransaction', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getCache', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'transactional', array('func' => $func), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'commit', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->commit();
    }

    public function rollback()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'rollback', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getClassMetadata', array('className' => $className), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'createQuery', array('dql' => $dql), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'createNamedQuery', array('name' => $name), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'createQueryBuilder', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'flush', array('entity' => $entity), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'clear', array('entityName' => $entityName), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->clear($entityName);
    }

    public function close()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'close', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->close();
    }

    public function persist($entity)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'persist', array('entity' => $entity), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'remove', array('entity' => $entity), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'refresh', array('entity' => $entity), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'detach', array('entity' => $entity), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'merge', array('entity' => $entity), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'contains', array('entity' => $entity), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getEventManager', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getConfiguration', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'isOpen', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getUnitOfWork', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getProxyFactory', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'initializeObject', array('obj' => $obj), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'getFilters', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'isFiltersStateClean', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'hasFilters', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return $this->valueHolder077fe->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer9ae4c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder077fe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder077fe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder077fe->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, '__get', ['name' => $name], $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        if (isset(self::$publicPropertiesd44e8[$name])) {
            return $this->valueHolder077fe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder077fe;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder077fe;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder077fe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder077fe;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, '__isset', array('name' => $name), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder077fe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder077fe;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, '__unset', array('name' => $name), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder077fe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder077fe;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, '__clone', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        $this->valueHolder077fe = clone $this->valueHolder077fe;
    }

    public function __sleep()
    {
        $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, '__sleep', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;

        return array('valueHolder077fe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9ae4c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9ae4c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9ae4c && ($this->initializer9ae4c->__invoke($valueHolder077fe, $this, 'initializeProxy', array(), $this->initializer9ae4c) || 1) && $this->valueHolder077fe = $valueHolder077fe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder077fe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder077fe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
