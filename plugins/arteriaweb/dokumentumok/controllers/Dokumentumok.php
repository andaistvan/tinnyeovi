<?php namespace Arteriaweb\Dokumentumok\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Dokumentumok extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Arteriaweb.Dokumentumok', 'main-menu-item');
    }
}