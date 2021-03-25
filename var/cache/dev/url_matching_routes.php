<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin_dashboard_index', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'app_admin_usercrud_liste', '_controller' => 'App\\Controller\\Admin\\UserCrudController::liste'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'compte', '_controller' => 'App\\Controller\\CompteController::index'], null, null, null, false, false, null]],
        '/api/admin/compte' => [[['_route' => 'addCompte', '_controller' => 'App\\Controller\\CompteController::addCompte'], null, null, null, false, false, null]],
        '/transaction' => [[['_route' => 'transaction', '_controller' => 'App\\Controller\\TransactionController::index'], null, null, null, false, false, null]],
        '/api/admin/transaction/depot' => [[['_route' => 'depot_trans', '_controller' => 'App\\Controller\\TransactionController::depot_trans'], null, null, null, false, false, null]],
        '/api/admin/transaction/retrait' => [[['_route' => 'retrait_trans', '_controller' => 'App\\Controller\\TransactionController::retrait_trans'], null, null, null, false, false, null]],
        '/api/admin/currentUser' => [[['_route' => 'currentUser', '_controller' => 'App\\Controller\\TransactionController::currentUser'], null, null, null, false, false, null]],
        '/api/admin/api/admin/compte' => [[['_route' => 'api_comptes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login_check'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/admin/(?'
                        .'|transaction/([^/]++)(*:79)'
                        .'|users/([^/]++)/transaction(*:112)'
                        .'|c(?'
                            .'|ompte/([^/]++)/transaction(*:150)'
                            .'|lients/([^/]++)(*:173)'
                        .')'
                        .'|frais/([^/]++)(*:196)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:233)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:264)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:300)'
                        .'|admin/(?'
                            .'|c(?'
                                .'|ompte(?'
                                    .'|s(?'
                                        .'|(?:\\.([^/]++))?(*:348)'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:385)'
                                        .')'
                                    .')'
                                    .'|/([^/]++)/transaction(*:416)'
                                .')'
                                .'|lients(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:452)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:490)'
                                    .')'
                                .')'
                            .')'
                            .'|transaction(?'
                                .'|/(?'
                                    .'|depot(*:524)'
                                    .'|retrait(*:539)'
                                    .'|code(*:551)'
                                .')'
                                .'|s(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:582)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:620)'
                                    .')'
                                .')'
                            .')'
                            .'|users(?'
                                .'|/([^/]++)/transaction(*:660)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:686)'
                                .')'
                                .'|/(?'
                                    .'|([^/]++)/transaction(*:719)'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:755)'
                                    .')'
                                .')'
                            .')'
                            .'|profils(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:794)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:832)'
                                .')'
                            .')'
                            .'|agences(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:870)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:908)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        79 => [[['_route' => 'get_trans', '_controller' => 'App\\Controller\\TransactionController::get_trans'], ['code'], null, null, false, true, null]],
        112 => [[['_route' => 'get_user_trans', '_controller' => 'App\\Controller\\TransactionController::get_user_trans'], ['id'], null, null, false, false, null]],
        150 => [[['_route' => 'get_compte_trans', '_controller' => 'App\\Controller\\TransactionController::get_compte_trans'], ['id'], null, null, false, false, null]],
        173 => [[['_route' => 'get_client_trans', '_controller' => 'App\\Controller\\TransactionController::get_client_trans'], ['cni'], null, null, false, true, null]],
        196 => [[['_route' => 'fraisMontant', '_controller' => 'App\\Controller\\TransactionController::fraisMontant'], ['montant'], null, null, false, true, null]],
        233 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        264 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        300 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        348 => [[['_route' => 'api_comptes_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null]],
        385 => [
            [['_route' => 'api_comptes_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comptes_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        416 => [[['_route' => 'api_comptes_get_id_trans_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get_id_trans'], ['id'], ['GET' => 0], null, false, false, null]],
        452 => [
            [['_route' => 'api_clients_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_clients_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        490 => [
            [['_route' => 'api_clients_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_clients_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        524 => [[['_route' => 'api_transactions_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], [], ['POST' => 0], null, false, false, null]],
        539 => [[['_route' => 'api_transactions_post_depot_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'post_depot'], [], ['PUT' => 0], null, false, false, null]],
        551 => [[['_route' => 'api_transactions_get_trans_code_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get_trans_code'], [], ['GET' => 0], null, false, false, null]],
        582 => [
            [['_route' => 'api_transactions_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_transactions_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        620 => [
            [['_route' => 'api_transactions_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_transactions_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        660 => [[['_route' => 'api_transactions_get_trans_user_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get_trans_user'], ['id'], ['GET' => 0], null, false, false, null]],
        686 => [
            [['_route' => 'api_users_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_users_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        719 => [[['_route' => 'api_users_get_user_trans_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get_user_trans'], ['id'], ['GET' => 0], null, false, false, null]],
        755 => [
            [['_route' => 'api_users_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        794 => [
            [['_route' => 'api_profils_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_profils_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        832 => [
            [['_route' => 'api_profils_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        870 => [
            [['_route' => 'api_agences_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_agences_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        908 => [
            [['_route' => 'api_agences_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_agences_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
