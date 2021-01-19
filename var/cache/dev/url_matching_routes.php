<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/admin/users' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::addUser'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login_check'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:77)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:107)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:143)'
                        .'|admin/(?'
                            .'|pro(?'
                                .'|fil(?'
                                    .'|_de_sorties(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:204)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:242)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:274)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:312)'
                                        .')'
                                    .')'
                                .')'
                                .'|mos(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:347)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:385)'
                                    .')'
                                .')'
                            .')'
                            .'|groupe(?'
                                .'|_de_(?'
                                    .'|competences(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:444)'
                                        .')'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:485)'
                                            .')'
                                            .'|([^/]++)/competences(?'
                                                .'|(?:\\.([^/]++))?(*:532)'
                                                .'|/([^/]++)/niveaux(?:\\.([^/]++))?(*:572)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|tags(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:608)'
                                        .')'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:649)'
                                            .')'
                                            .'|([^/]++)/tags(?:\\.([^/]++))?(*:686)'
                                        .')'
                                    .')'
                                .')'
                                .'|s(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:719)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:760)'
                                        .')'
                                        .'|([^/]++)/apprenants(?'
                                            .'|(*:791)'
                                            .'|(?:\\.([^/]++))?(*:814)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|referentiels(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:859)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:897)'
                                .')'
                            .')'
                            .'|c(?'
                                .'|ompetences(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:942)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:983)'
                                        .')'
                                        .'|([^/]++)/niveaux(?:\\.([^/]++))?(*:1023)'
                                    .')'
                                .')'
                                .'|_ms(?'
                                    .'|(?:\\.([^/]++))?(*:1055)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1090)'
                                .')'
                            .')'
                            .'|formateurs(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1132)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1171)'
                                .')'
                            .')'
                            .'|users(?'
                                .'|(?:\\.([^/]++))?(*:1205)'
                                .'|(*:1214)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1252)'
                                .')'
                            .')'
                            .'|apprenants(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1294)'
                                .')'
                                .'|/(?'
                                    .'|([^/]++)(*:1316)'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(*:1350)'
                                .')'
                            .')'
                            .'|briefs(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1388)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1427)'
                                .')'
                            .')'
                            .'|tags(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1463)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1502)'
                                .')'
                            .')'
                        .')'
                        .'|niveaux(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1542)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1581)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        77 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        107 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        143 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        204 => [
            [['_route' => 'api_profil_de_sorties_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilDeSortie', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_de_sorties_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilDeSortie', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        242 => [
            [['_route' => 'api_profil_de_sorties_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilDeSortie', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_de_sorties_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilDeSortie', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        274 => [
            [['_route' => 'api_profils_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        312 => [
            [['_route' => 'api_profils_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_DELETE_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'DELETE'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        347 => [
            [['_route' => 'api_promos_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        385 => [
            [['_route' => 'api_promos_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        444 => [
            [['_route' => 'api_groupe_de_competences_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeCompetences', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_de_competences_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeCompetences', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        485 => [
            [['_route' => 'api_groupe_de_competences_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeCompetences', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_de_competences_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeCompetences', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        532 => [[['_route' => 'api_groupe_de_competences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_subresource_operation_name' => 'api_groupe_de_competences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competences', 'identifiers' => [['id', 'App\\Entity\\GroupeDeCompetences', true]], 'collection' => true, 'operationId' => 'api_groupe_de_competences_competences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        572 => [[['_route' => 'api_groupe_de_competences_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_groupe_de_competences_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\GroupeDeCompetences', true], ['competences', 'App\\Entity\\Competences', true]], 'collection' => true, 'operationId' => 'api_groupe_de_competences_competences_niveaux_get_subresource']], ['id', 'competences', '_format'], ['GET' => 0], null, false, true, null]],
        608 => [
            [['_route' => 'api_groupe_de_tags_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeTag', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_groupe_de_tags_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeTag', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        649 => [
            [['_route' => 'api_groupe_de_tags_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeTag', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_de_tags_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeTag', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        686 => [[['_route' => 'api_groupe_de_tags_tags_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_subresource_operation_name' => 'api_groupe_de_tags_tags_get_subresource', '_api_subresource_context' => ['property' => 'tag', 'identifiers' => [['id', 'App\\Entity\\GroupeDeTag', true]], 'collection' => true, 'operationId' => 'api_groupe_de_tags_tags_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        719 => [
            [['_route' => 'api_groupes_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_groupes_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        760 => [
            [['_route' => 'api_groupes_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupes_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        791 => [[['_route' => 'api_groupes_DELETE_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'DELETE'], ['id'], ['DELETE' => 0], null, false, false, null]],
        814 => [[['_route' => 'api_groupes_apprenants_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_subresource_operation_name' => 'api_groupes_apprenants_get_subresource', '_api_subresource_context' => ['property' => 'apprenant', 'identifiers' => [['id', 'App\\Entity\\Groupe', true]], 'collection' => true, 'operationId' => 'api_groupes_apprenants_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        859 => [
            [['_route' => 'api_referentiels_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        897 => [
            [['_route' => 'api_referentiels_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        942 => [
            [['_route' => 'api_competences_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_competences_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        983 => [
            [['_route' => 'api_competences_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_competences_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
        ],
        1023 => [[['_route' => 'api_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Competences', true]], 'collection' => true, 'operationId' => 'api_competences_niveaux_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1055 => [[['_route' => 'api_c_ms_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null]],
        1090 => [[['_route' => 'api_c_ms_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1132 => [
            [['_route' => 'api_formateurs_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1171 => [
            [['_route' => 'api_formateurs_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1205 => [[['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null]],
        1214 => [[['_route' => 'api_users_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'GET'], [], ['GET' => 0], null, false, false, null]],
        1252 => [
            [['_route' => 'api_users_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_users_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
        ],
        1294 => [
            [['_route' => 'api_apprenants_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1316 => [[['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null]],
        1350 => [[['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null]],
        1388 => [
            [['_route' => 'api_briefs_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_briefs_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        1427 => [
            [['_route' => 'api_briefs_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_briefs_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1463 => [
            [['_route' => 'api_tags_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_tags_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        1502 => [
            [['_route' => 'api_tags_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1542 => [
            [['_route' => 'api_niveaux_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1581 => [
            [['_route' => 'api_niveaux_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
