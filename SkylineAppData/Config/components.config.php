<?php

use Skyline\Component\Config\CSSComponent;
use Skyline\Component\Config\IconComponent;
use Skyline\Component\Config\JavaScriptComponent;

return [
    'Application' => [
        'js' => new JavaScriptComponent('/Public/js/main.js'),
        'css' => new CSSComponent("/Public/css/main.css"),
        'icon' => new IconComponent("/Public/img/logo.png")
    ]
];