<?php

declare(strict_types=1);

namespace App\Router;


use Nette\Application\Routers\RouteList;
use Nette\StaticClass;

final class RouterFactory
{
	use StaticClass;

	/**
	 * @return RouteList
	 */
	public static function createRouter(): RouteList
	{
		$router = new RouteList;
		$router[] = self::createFrontRouter();

		return $router;
	}


	/**
	 * @return RouteList
	 */
	public static function createFrontRouter(): RouteList
	{
		$router = new RouteList('Front');
		$router->addRoute('<presenter>/<action>', 'Homepage:default');

		return $router;
	}
}
