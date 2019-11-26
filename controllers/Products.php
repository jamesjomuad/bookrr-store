<?php namespace Bookrr\Store\Controllers;

use BackendMenu;



class Products extends \Bookrr\Product\Controllers\Products
{

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Bookrr.Store', 'store', 'product');
    }

    public function update($recordId, $context = null)
    {
        // dd($this);
        return $this->asExtension('FormController')->update($recordId, $context);
    }

}
