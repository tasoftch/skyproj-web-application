<?php

namespace Application\Controller;


use Skyline\Application\Controller\AbstractActionController;
use Symfony\Component\HttpFoundation\Response;

class GeneralHTTPErrorController extends AbstractActionController
{
    public static function canHandleException(\Throwable $exception): bool {
        $code = $exception->getCode();
        $methodName = "error{$code}Action";
        if(method_exists(static::class, $methodName)) {
            return true;
        }
        return false;
    }


    public function error404Action(Response $response) {
        $response->setStatusCode(404);

        $this->renderTemplate("main", [
            "Content" => '404'
        ]);
    }
}