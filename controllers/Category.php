<?php namespace Bookrr\Store\Controllers;

use BackendMenu;



class Category extends \Bookrr\Product\Controllers\Category
{

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Bookrr.Store', 'store', 'category');
    }

}
