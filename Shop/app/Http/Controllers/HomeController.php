<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CRUD\_Product;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    var $product;
    public function __construct(_Product $product)
    {
        $this->product = $product;
    }
    public function index()
    {
        // $data = [
        //     'stt' => 3,
        //     'parent_id' => 3,
        //     'name' => 'shop',
        //     'description' => 'trang san pham',
        //     'show_hide' => 0,
        // ];
        // $this->menu->createMenu($data);
        $data = $this->product->getAllproducts();
        return view('home', ['title' => 'Home', 'data' => $data]);
    }
    public function shop()
    {
        $data = $this->product->getAllproducts();
        return view('shop', ['title' => 'Shop', 'data' => $data]);
    }
    public function about()
    {
        return view('about', ['title' => 'About']);
    }
    public function login()
    {
        return view("login", ['title' => 'Login']);
    }
    public function signup()
    {
        return view("signup", ['title' => 'Sign up']);
    }
    public function cart()
    {
        return view("cart", ['title' => 'Cart']);
    }
    public function show($slug)
    {
        $product = $this->product->getSingleProduct($slug);
        return view('productdetail', compact('product'), ['title' => $product->name]);
    }
    public function category($Categories)
    {
        $products = $this->product->getCategorieProduct($Categories);
        return view('category', compact('products'), ['title' => 'Categories']);
    }
}
