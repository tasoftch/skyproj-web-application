<?php

use Application\Controller\IndexController;
use Skyline\Application\Plugin\Router\ApplicationRouterPlugin;

return [
    ApplicationRouterPlugin::REGEX_URI_ROUTE => [
        "%^(/|index|main|overview)$%i" => [
            ApplicationRouterPlugin::ROUTED_CONTROLLER_KEY => IndexController::class,
            ApplicationRouterPlugin::ROUTED_METHOD_KEY => "indexAction"
        ]
    ]
];