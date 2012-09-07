<?php

use Nette\Application\UI\Presenter;


class HomepagePresenter extends Presenter
{

	public function renderDefault()
	{
		$this->template->title = 'Congratulations, it works!';
		$this->template->message = 'You have successfully created your Nette Framework project.';
	}

}
