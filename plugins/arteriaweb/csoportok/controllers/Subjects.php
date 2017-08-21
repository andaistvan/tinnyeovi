<?php namespace Arteriaweb\Csoportok\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Subjects extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Arteriaweb.Csoportok', 'main-menu-item', 'side-menu-item');
    }
}