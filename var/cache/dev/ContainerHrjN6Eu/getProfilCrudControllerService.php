<?php

namespace ContainerHrjN6Eu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfilCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\ProfilCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\ProfilCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/ProfilCrudController.php';

        $container->services['App\\Controller\\Admin\\ProfilCrudController'] = $instance = new \App\Controller\Admin\ProfilCrudController();

        $instance->setContainer(($container->privates['.service_locator.7Gh9pQb'] ?? $container->load('get_ServiceLocator_7Gh9pQbService'))->withContext('App\\Controller\\Admin\\ProfilCrudController', $container));

        return $instance;
    }
}