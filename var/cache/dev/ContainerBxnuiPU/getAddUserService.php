<?php

namespace ContainerBxnuiPU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\AddUser' shared autowired service.
     *
     * @return \App\Service\AddUser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/AddUser.php';

        return $container->privates['App\\Service\\AddUser'] = new \App\Service\AddUser(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), ($container->services['serializer'] ?? $container->getSerializerService()), ($container->privates['App\\Repository\\ProfilRepository'] ?? $container->load('getProfilRepositoryService')), ($container->services['validator'] ?? $container->getValidatorService()));
    }
}