<?php

declare(strict_types=1);

namespace App\Presenters;


use Nette\Application\BadRequestException;
use Nette\Application\Request;
use Nette\Application\UI\Template;

final class Error4xxPresenter extends BasePresenter
{
	public function startup(): void
	{
		parent::startup();
		$request = $this->getRequest();
		if ($request !== null && !$request->isMethod(Request::FORWARD)) {
			$this->error();
		}
	}


	public function renderDefault(BadRequestException $exception): void
	{
		// load template 403.latte or 404.latte or ... 4xx.latte
		$file = sprintf('%s/templates/Error/%s.latte', __DIR__, $exception->getCode());
		$file = is_file($file) ? $file : __DIR__ . '/templates/Error/4xx.latte';
		assert($this->template instanceof Template);
		$this->template->setFile($file);
	}
}
