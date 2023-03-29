<?php

namespace App\CRUD;

use App\Models\Menu;
use Illuminate\Support\Str;

class _Menu
{
    public function createMenu($data)
    {
        try {
            $result =
                Menu::create([
                    'stt' => $data['stt'],
                    'parent_id' => $data['parent_id'],
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'slug' => Str::slug($data['name']),
                    'show_hide' => $data['show_hide']
                ]);
            if ($result->id > 0) {
                return "Thêm dữ liệu thành công";
            } else {
                return "Lỗi thêm dữ liệu";
            }
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getMenu()
    {
        try {
            return Menu::all();
            // return Menu::select('*')->orderBy('name', 'DESC')->get()->take(2);
        } catch (\Exception $e) {
            throw $e;
        }
    }
    public function getMenuFilter($fillter, $value)
    {
        try {
            return Menu::where($fillter, ' like ', '%' . $value . '%')->get();
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function getDataMenu($fillter)
    {
        try {
            return Menu::where([
                ['name', ' like ', '%' . $fillter . '%'],
                ['anhien', true]
            ])->get();
        } catch (\Exception $e) {
            throw $e;
        }
    }
    public function updateMenu($filed, $value, $data)
    {
        try {
            $result = Menu::where($filed, ' like ', '%' . $value . '%')->update([
                'image' => $data['image'],
                'anhien' => $data['anhien'],
                'stt' => $data['stt']
            ]);
            if ($result > 0) {
                return "cap nhat thanh cong";
            } else {
                return "cap nhat khong thanh cong";
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function detectMenu($filed, $value)
    {
        try {
            Menu::where($filed, $value)->delete();
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
