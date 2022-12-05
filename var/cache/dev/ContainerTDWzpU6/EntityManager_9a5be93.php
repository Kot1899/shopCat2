<?php

namespace ContainerTDWzpU6;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder68742 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6841b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5ec52 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getConnection', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getMetadataFactory', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getExpressionBuilder', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'beginTransaction', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getCache', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'transactional', array('func' => $func), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'commit', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->commit();
    }

    public function rollback()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'rollback', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getClassMetadata', array('className' => $className), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'createQuery', array('dql' => $dql), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'createNamedQuery', array('name' => $name), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'createQueryBuilder', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'flush', array('entity' => $entity), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'clear', array('entityName' => $entityName), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->clear($entityName);
    }

    public function close()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'close', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->close();
    }

    public function persist($entity)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'persist', array('entity' => $entity), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'remove', array('entity' => $entity), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'refresh', array('entity' => $entity), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'detach', array('entity' => $entity), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'merge', array('entity' => $entity), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'contains', array('entity' => $entity), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getEventManager', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getConfiguration', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'isOpen', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getUnitOfWork', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getProxyFactory', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'initializeObject', array('obj' => $obj), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'getFilters', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'isFiltersStateClean', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'hasFilters', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return $this->valueHolder68742->hasFilters();
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

        $instance->initializer6841b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder68742) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder68742 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder68742->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, '__get', ['name' => $name], $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        if (isset(self::$publicProperties5ec52[$name])) {
            return $this->valueHolder68742->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68742;

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

        $targetObject = $this->valueHolder68742;
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
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68742;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder68742;
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
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, '__isset', array('name' => $name), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68742;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder68742;
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
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, '__unset', array('name' => $name), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68742;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder68742;
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
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, '__clone', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        $this->valueHolder68742 = clone $this->valueHolder68742;
    }

    public function __sleep()
    {
        $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, '__sleep', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;

        return array('valueHolder68742');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6841b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6841b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6841b && ($this->initializer6841b->__invoke($valueHolder68742, $this, 'initializeProxy', array(), $this->initializer6841b) || 1) && $this->valueHolder68742 = $valueHolder68742;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder68742;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder68742;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
