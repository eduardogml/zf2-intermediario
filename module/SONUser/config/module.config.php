<?php
namespace SONUser;

return array(
    #configuração de rotas
    'router' => array(
        'routes' => array(
            'sonuser-register' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/register',
                    'defaults' => array(
                        '__NAMESPACE__' => 'SONUser\Controller',
                        'controller' => 'Index',
                        'action' => 'register',
                    ),
                ),
            ),
        ),
    ),
    #configuração de controllers
    'controllers' => array(
        'invokables' => array(
            'SONUser\Controller\Index' => 'SONUser\Controller\IndexController',
        ),
    ),
    #configuração do gerenciamento de views
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    #configuração do doctrine
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__.'_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__.'/../src/'.__NAMESPACE__.'/Entity'),
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__.'\Entity' => __NAMESPACE__.'_driver',
                ),
            ),
        ),
        #configuração das data-fixture
        'fixture' => array(
            'SONUser_fixture' => __DIR__.'/../src/SONUser/Fixture'
        ),
    ),
);