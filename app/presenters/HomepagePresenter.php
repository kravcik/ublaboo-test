<?php

namespace App\Presenters;

use Nette;


class HomepagePresenter extends Nette\Application\UI\Presenter
{
    /**
     * @inject
     * @var \Test\IGridFactory
     */
    public $IGridFactory;
    
    protected function createComponentGrid($name)
    {
        return $this->IGridFactory->create();
    }
}
