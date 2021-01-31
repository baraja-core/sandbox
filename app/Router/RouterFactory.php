<?php

declare(strict_types=1);

namespace App\Router;


use Nette\Application\Routers\RouteList;
use Nette\StaticClass;

final class RouterFactory
{
	use StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;
		$router[] = self::createFrontRouter();

		return $router;
	}


	public static function createFrontRouter(): RouteList
	{
		$router = new RouteList('Front');
		$router->addRoute('<presenter>/<action>', 'Homepage:default');

		return $router;
	}
}
