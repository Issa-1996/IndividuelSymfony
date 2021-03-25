<?php

namespace ContainerHrjN6Eu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera2037 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer34ca1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties62ed2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getConnection', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getMetadataFactory', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getExpressionBuilder', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'beginTransaction', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getCache', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getCache();
    }

    public function transactional($func)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'transactional', array('func' => $func), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->transactional($func);
    }

    public function commit()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'commit', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->commit();
    }

    public function rollback()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'rollback', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getClassMetadata', array('className' => $className), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'createQuery', array('dql' => $dql), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'createNamedQuery', array('name' => $name), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'createQueryBuilder', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'flush', array('entity' => $entity), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'clear', array('entityName' => $entityName), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->clear($entityName);
    }

    public function close()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'close', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->close();
    }

    public function persist($entity)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'persist', array('entity' => $entity), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'remove', array('entity' => $entity), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'refresh', array('entity' => $entity), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'detach', array('entity' => $entity), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'merge', array('entity' => $entity), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getRepository', array('entityName' => $entityName), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'contains', array('entity' => $entity), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getEventManager', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getConfiguration', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'isOpen', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getUnitOfWork', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getProxyFactory', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'initializeObject', array('obj' => $obj), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'getFilters', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'isFiltersStateClean', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'hasFilters', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return $this->valueHoldera2037->hasFilters();
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

        $instance->initializer34ca1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera2037) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera2037 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera2037->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, '__get', ['name' => $name], $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        if (isset(self::$publicProperties62ed2[$name])) {
            return $this->valueHoldera2037->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2037;

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

        $targetObject = $this->valueHoldera2037;
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
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2037;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera2037;
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
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, '__isset', array('name' => $name), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2037;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera2037;
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
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, '__unset', array('name' => $name), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2037;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera2037;
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
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, '__clone', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        $this->valueHoldera2037 = clone $this->valueHoldera2037;
    }

    public function __sleep()
    {
        $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, '__sleep', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;

        return array('valueHoldera2037');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer34ca1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer34ca1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer34ca1 && ($this->initializer34ca1->__invoke($valueHoldera2037, $this, 'initializeProxy', array(), $this->initializer34ca1) || 1) && $this->valueHoldera2037 = $valueHoldera2037;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera2037;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera2037;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
