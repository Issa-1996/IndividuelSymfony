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
                    .'|/admin/users/([^/]++)(*:70)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:105)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:136)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:172)'
                        .'|admin/(?'
                            .'|pro(?'
                                .'|fil(?'
                                    .'|_de_sorties(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:233)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:271)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:303)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:341)'
                                        .')'
                                    .')'
                                .')'
                                .'|mos(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:376)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:414)'
                                    .')'
                                .')'
                            .')'
                            .'|groupe(?'
                                .'|_de_(?'
                                    .'|competences(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:473)'
                                        .')'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:514)'
                                            .')'
                                            .'|([^/]++)/competences(?'
                                                .'|(?:\\.([^/]++))?(*:561)'
                                                .'|/([^/]++)/niveaux(?:\\.([^/]++))?(*:601)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|tags(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:637)'
                                        .')'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:678)'
                                            .')'
                                            .'|([^/]++)/tags(?:\\.([^/]++))?(*:715)'
                                        .')'
                                    .')'
                                .')'
                                .'|s(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:748)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:789)'
                                        .')'
                                        .'|([^/]++)/apprenants(?'
                                            .'|(*:820)'
                                            .'|(?:\\.([^/]++))?(*:843)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|referentiels(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:888)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:926)'
                                .')'
                            .')'
                            .'|c(?'
                                .'|ompetences(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:971)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:1012)'
                                        .')'
                                        .'|([^/]++)/niveaux(?:\\.([^/]++))?(*:1053)'
                                    .')'
                                .')'
                                .'|_ms(?'
                                    .'|(?:\\.([^/]++))?(*:1085)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1120)'
                                .')'
                            .')'
                            .'|formateurs(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1162)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1201)'
                                .')'
                            .')'
                            .'|users(?'
                                .'|(?:\\.([^/]++))?(*:1235)'
                                .'|(*:1244)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1279)'
                            .')'
                            .'|apprenants(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1320)'
                                .')'
                                .'|/(?'
                                    .'|([^/]++)(*:1342)'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(*:1376)'
                                .')'
                            .')'
                            .'|briefs(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1414)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1453)'
                                .')'
                            .')'
                            .'|tags(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1489)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1528)'
                                .')'
                            .')'
                        .')'
                        .'|niveaux(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1568)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1607)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'update', '_controller' => 'App\\Controller\\UserController::updateUser'], ['id'], ['POST' => 0], null, false, true, null]],
        105 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        136 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        172 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        233 => [
            [['_route' => 'api_profil_de_sorties_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilDeSortie', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_de_sorties_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilDeSortie', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        271 => [
            [['_route' => 'api_profil_de_sorties_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilDeSortie', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_de_sorties_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilDeSortie', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        303 => [
            [['_route' => 'api_profils_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        341 => [
            [['_route' => 'api_profils_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_DELETE_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'DELETE'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        376 => [
            [['_route' => 'api_promos_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        414 => [
            [['_route' => 'api_promos_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        473 => [
            [['_route' => 'api_groupe_de_competences_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeCompetences', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_de_competences_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeCompetences', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        514 => [
            [['_route' => 'api_groupe_de_competences_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeCompetences', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_de_competences_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeCompetences', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        561 => [[['_route' => 'api_groupe_de_competences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_subresource_operation_name' => 'api_groupe_de_competences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competences', 'identifiers' => [['id', 'App\\Entity\\GroupeDeCompetences', true]], 'collection' => true, 'operationId' => 'api_groupe_de_competences_competences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        601 => [[['_route' => 'api_groupe_de_competences_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_groupe_de_competences_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\GroupeDeCompetences', true], ['competences', 'App\\Entity\\Competences', true]], 'collection' => true, 'operationId' => 'api_groupe_de_competences_competences_niveaux_get_subresource']], ['id', 'competences', '_format'], ['GET' => 0], null, false, true, null]],
        637 => [
            [['_route' => 'api_groupe_de_tags_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeTag', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_groupe_de_tags_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeTag', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        678 => [
            [['_route' => 'api_groupe_de_tags_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeTag', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_de_tags_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeDeTag', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        715 => [[['_route' => 'api_groupe_de_tags_tags_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_subresource_operation_name' => 'api_groupe_de_tags_tags_get_subresource', '_api_subresource_context' => ['property' => 'tag', 'identifiers' => [['id', 'App\\Entity\\GroupeDeTag', true]], 'collection' => true, 'operationId' => 'api_groupe_de_tags_tags_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        748 => [
            [['_route' => 'api_groupes_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_groupes_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        789 => [
            [['_route' => 'api_groupes_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupes_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        820 => [[['_route' => 'api_groupes_DELETE_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'DELETE'], ['id'], ['DELETE' => 0], null, false, false, null]],
        843 => [[['_route' => 'api_groupes_apprenants_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_subresource_operation_name' => 'api_groupes_apprenants_get_subresource', '_api_subresource_context' => ['property' => 'apprenant', 'identifiers' => [['id', 'App\\Entity\\Groupe', true]], 'collection' => true, 'operationId' => 'api_groupes_apprenants_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        888 => [
            [['_route' => 'api_referentiels_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        926 => [
            [['_route' => 'api_referentiels_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        971 => [
            [['_route' => 'api_competences_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_competences_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        1012 => [
            [['_route' => 'api_competences_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_competences_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
        ],
        1053 => [[['_route' => 'api_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Competences', true]], 'collection' => true, 'operationId' => 'api_competences_niveaux_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1085 => [[['_route' => 'api_c_ms_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null]],
        1120 => [[['_route' => 'api_c_ms_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1162 => [
            [['_route' => 'api_formateurs_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1201 => [
            [['_route' => 'api_formateurs_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1235 => [[['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null]],
        1244 => [[['_route' => 'api_users_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'GET'], [], ['GET' => 0], null, false, false, null]],
        1279 => [[['_route' => 'api_users_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1320 => [
            [['_route' => 'api_apprenants_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1342 => [[['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null]],
        1376 => [[['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null]],
        1414 => [
            [['_route' => 'api_briefs_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_briefs_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        1453 => [
            [['_route' => 'api_briefs_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_briefs_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1489 => [
            [['_route' => 'api_tags_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'POST'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_tags_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'GET'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        1528 => [
            [['_route' => 'api_tags_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'GET'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'PUT'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1568 => [
            [['_route' => 'api_niveaux_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1607 => [
            [['_route' => 'api_niveaux_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
