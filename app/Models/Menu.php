<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public static function getMenus()
    {
        $allMenus = Menu::get();
        
        $parent = $allMenus->whereNull('parent_id');
        self::formatMenu($parent, $allMenus);

        return $parent;
    }

    private static function formatMenu($menus, $allMenus)
    {
        foreach($menus as $menu)
        {
            $menu->children = $allMenus->where('parent_id', $menu->id)->values();

            if($menu->children->isNotEmpty())
            {
                self::formatMenu($menu->children, $allMenus);
            }
        }
    }
}
