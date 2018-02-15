<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Test;

/**
 * Description of Grid
 *
 * @author kravcik
 */
class Grid extends \Nette\Application\UI\Control
{
    protected function createComponentGrid($name)
    {
        $grid = new \Ublaboo\DataGrid\DataGrid($this, $name);

        $grid->setDataSource([
            ['id' => 1, 'name' => 'Tomio'],
            ['id' => 2, 'name' => 'Miloš']
        ]);
        
        $grid->addColumnText('name', 'Name');
        
        $grid->addAction('detal', 'ggg');
        
        return $grid;
    }
    
    public function render()
    {
        $this->template->setFile(__DIR__ . DIRECTORY_SEPARATOR . 'grid.latte');
        $this->template->render();
    }
}
