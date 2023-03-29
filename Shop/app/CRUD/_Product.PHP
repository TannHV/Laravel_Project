<?php

namespace App\CRUD;

use App\Models\Product;
use Illuminate\Support\Str;

class _Product
{
    public function create($data)
    {
        try {
            $result =
                Product::create([
                    'no' => $data['name'],
                    'name' => $data['name'],
                    'slug' => Str::slug($data['name']),
                    'Categories' => $data['Categories'],
                    'image' => $data['name'],
                    'price' => $data['name'],
                    'size' => $data['name'],
                    'color' => $data['name'],
                    'description' => $data['name'],
                    'status' => $data['name'],
                    'show_hide' => $data['name']
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

    public function getAllproducts()
    {
        try {
            // return Product::all();
            return Product::select('*')->orderBy('name', 'DESC')->get();
        } catch (\Exception $e) {
            throw $e;
        }
    }
    public function getSingleProduct($slug)
    {
        try {
            return Product::where('slug', $slug)->firstOrFail();
        } catch (\Exception $e) {
            throw $e;
        }
    }
    public function getCategorieProduct($Categories)
    {
        try {
            return Product::where('Categories', $Categories)->get();
        } catch (\Exception $e) {
            throw $e;
        }
    }
    public function getProduct($fillter, $value)
    {
        try {
            return Product::where($fillter, ' like ', '%' . $value . '%')->get();
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function updateProduct($filed, $value, $data)
    {
        try {
            $result = Product::where($filed, ' like ', '%' . $value . '%')->update([
                'no' => $data['name'],
                'name' => $data['name'],
                'slug' => Str::slug($data['name']),
                'Categories' => $data['Categories'],
                'image' => $data['name'],
                'price' => $data['name'],
                'size' => $data['name'],
                'color' => $data['name'],
                'description' => $data['name'],
                'status' => $data['name'],
                'show_hide' => $data['name']
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

    public function detectProduct($filed, $value)
    {
        try {
            Product::where($filed, $value)->delete();
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
