<?php namespace Bookrr\Store\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Shop Back-end Controller
 */
class Shop extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $assetPath = '/plugins/bookrr/store/assets/';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Bookrr.Store', 'store', 'shop');
    }

    public function index()
    {
        $this->pageTitle = "Shop";
        $this->addCss($this->assetPath . 'fontawesome/css/all.css');
    }
}