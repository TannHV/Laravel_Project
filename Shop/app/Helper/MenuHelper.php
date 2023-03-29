<?php

namespace App\Helper;

use App\Models\Menu;
use App\Models\Product;


class MenuHelper
{

    public static function getMenu()
    {
        $menu = Menu::all();
        $htmlMenu = '';
        if (isset($menu)) {
            foreach ($menu as $key => $value) {
                $htmlMenu .= '<a href="/' . $value->slug . '" class="nav-item nav-link ">' . $value->name . '</a>';
            }
        }
        echo $htmlMenu;
    }
    public static function getCategory()
    {
        $Categories = Product::select('Categories')->groupBy('Categories')->get();
        foreach ($Categories as $key => $value) {
            echo '<a href="/category/'.$value->Categories .'" class="nav-item nav-link">' . $value->Categories . '</a>';
        }
    }
}
