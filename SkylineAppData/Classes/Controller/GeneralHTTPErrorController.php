<?php

namespace Application\Controller;


use Skyline\Application\Controller\AbstractActionController;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class GeneralHTTPErrorController extends AbstractActionController
{
	private static $problem;

    public static function canHandleException(Throwable $exception): bool {
        $code = $exception->getCode();
        $methodName = "error{$code}Action";
        if(method_exists(static::class, $methodName)) {
        	self::$problem = $exception;
            return true;
        }
        return false;
    }

	/**
	 * @return Throwable
	 */
	public static function getProblem()
	{
		return self::$problem;
	}

	public function errorAction(Response $response, int $code) {
		$response->setStatusCode($code);
		$this->renderModel([
			'PROBLEM' => static::getProblem()
		]);

		$this->renderTemplate("main", [
			"Content" => $code
		]);
	}

	public function error404Action(Response $response) {
		$this->errorAction($response, 404);
    }

	public function error403Action(Response $response) {
		$this->errorAction($response, 403);
	}
}