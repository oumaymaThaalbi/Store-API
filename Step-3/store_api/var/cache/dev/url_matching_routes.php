<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:147)'
                        .'|stores(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:190)'
                            .'|(?:\\.([^/]++))?(*:213)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:247)'
                            .'|(?:\\.([^/]++))?(*:270)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:307)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:347)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        147 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        190 => [[['_route' => 'api_stores_get_item', '_api_item_operation_name' => 'api_stores_get_item', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Store', '_api_operation_name' => 'api_stores_get_item'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'api_stores_get_collection', '_api_collection_operation_name' => 'api_stores_get_collection', '_api_identifiers' => [], '_api_has_composite_identifier' => false, '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Store', '_api_operation_name' => 'api_stores_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        247 => [[['_route' => 'api_stores_delete_item', '_api_item_operation_name' => 'api_stores_delete_item', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Store', '_api_operation_name' => 'api_stores_delete_item'], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        270 => [[['_route' => 'api_stores_post_collection', '_api_item_operation_name' => 'api_stores_post_collection', '_api_identifiers' => [], '_api_has_composite_identifier' => false, '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Store', '_api_operation_name' => 'api_stores_post_collection'], ['_format'], ['POST' => 0], null, false, true, null]],
        307 => [
            [['_route' => 'api_stores_put_item', '_api_item_operation_name' => 'api_stores_put_item', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Store', '_api_operation_name' => 'api_stores_put_item'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_stores_patch_item', '_api_item_operation_name' => 'api_stores_patch_item', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Store', '_api_operation_name' => 'api_stores_patch_item'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        347 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
