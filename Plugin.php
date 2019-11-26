<?php namespace Bookrr\Store;

use Backend;
use Event;
use System\Classes\PluginBase;

/**
 * store Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['bookrr.product'];

    public function pluginDetails()
    {
        return [
            'name'        => 'Store',
            'description' => 'No description provided yet...',
            'author'      => 'bookrr',
            'icon'        => 'icon-cart-plus',
            'homepage'    => 'http://jamesjomuad.github.io'
        ];
    }

    public function boot()
    {
        Event::listen('backend.menu.extendItems', function($manager) {
            $manager->removeMainMenuItem('Bookrr.Product', 'product');;
        });
    }

    public function registerPermissions()
    {
        return [
            'bookrr.store.shop' => [
                'tab' => 'Store',
                'label' => 'Shop management.'
            ],
            'bookrr.store.product' => [
                'tab' => 'Store',
                'label' => 'Product management.'
            ],
            'bookrr.store.category' => [
                'tab' => 'Store',
                'label' => 'Category management.'
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'store' => [
                'label'       => 'Store',
                'url'         => Backend::url('bookrr/store/shop'),
                'icon'        => 'icon-shopping-cart',
                'permissions' => ['bookrr.store.*'],
                'order'       => 550,
                'sideMenu' => [
                    'shop' => [
                        'label'       => 'Shop',
                        'url' => Backend::url('bookrr/store/shop'),
                        'icon'        => 'icon-cart-plus',
                        'permissions' => ['bookrr.store.*'],
                    ],
                    'product' => [
                        'label'       => 'Products',
                        'url' => Backend::url('bookrr/store/products'),
                        'icon'        => 'icon-cube',
                        'permissions' => ['bookrr.store.*'],
                    ],
                    'category' => [
                        'label'       => 'Category',
                        'url'         => Backend::url('bookrr/store/category'),
                        'icon'        => 'icon-tag',
                        'permissions' => ['bookrr.category.*'],
                    ]
                ]
            ],
        ];
    }
}
