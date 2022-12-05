<?php

namespace ContainerOML2uI5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb1818 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer370f1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb1b6d = [
        
    ];

    public function getConnection()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getConnection', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getMetadataFactory', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getExpressionBuilder', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'beginTransaction', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getCache', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getCache();
    }

    public function transactional($func)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'transactional', array('func' => $func), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'wrapInTransaction', array('func' => $func), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'commit', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->commit();
    }

    public function rollback()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'rollback', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getClassMetadata', array('className' => $className), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'createQuery', array('dql' => $dql), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'createNamedQuery', array('name' => $name), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'createQueryBuilder', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'flush', array('entity' => $entity), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'clear', array('entityName' => $entityName), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->clear($entityName);
    }

    public function close()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'close', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->close();
    }

    public function persist($entity)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'persist', array('entity' => $entity), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'remove', array('entity' => $entity), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'refresh', array('entity' => $entity), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'detach', array('entity' => $entity), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'merge', array('entity' => $entity), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getRepository', array('entityName' => $entityName), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'contains', array('entity' => $entity), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getEventManager', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getConfiguration', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'isOpen', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getUnitOfWork', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getProxyFactory', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'initializeObject', array('obj' => $obj), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'getFilters', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'isFiltersStateClean', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'hasFilters', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return $this->valueHolderb1818->hasFilters();
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

        $instance->initializer370f1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderb1818) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb1818 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb1818->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, '__get', ['name' => $name], $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        if (isset(self::$publicPropertiesb1b6d[$name])) {
            return $this->valueHolderb1818->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1818;

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

        $targetObject = $this->valueHolderb1818;
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
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1818;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb1818;
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
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, '__isset', array('name' => $name), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1818;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb1818;
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
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, '__unset', array('name' => $name), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1818;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb1818;
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
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, '__clone', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        $this->valueHolderb1818 = clone $this->valueHolderb1818;
    }

    public function __sleep()
    {
        $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, '__sleep', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;

        return array('valueHolderb1818');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer370f1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer370f1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer370f1 && ($this->initializer370f1->__invoke($valueHolderb1818, $this, 'initializeProxy', array(), $this->initializer370f1) || 1) && $this->valueHolderb1818 = $valueHolderb1818;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb1818;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb1818;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
