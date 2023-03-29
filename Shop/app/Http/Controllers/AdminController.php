<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\User;


class AdminController extends Controller
{


    public function index()
    {
        if (auth()->check()) {
            $products = Product::all();
            return view('admin.index', compact('products'));
        } else {
            return redirect()->route('login')->with('error', 'Chưa đăng nhập');
        }
    }
    public function users()
    {
        if (auth()->check()) {
            $Users = User::all();
            return view('admin.user', compact('Users'));
        } else {
            return redirect()->route('login')->with('error', 'Chưa đăng nhập');
        }
    }
    public function addProduct()
    {
        if (auth()->check()) {
            return view('admin.addProduct');
        } else {
            return redirect()->route('login')->with('error', 'Chưa đăng nhập');
        }
    }
    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'no' => 'required',
                'name' => 'required',
                'Categories' => 'required',
                'image' => 'required',
                'price' => 'required|numeric',
                'size' => 'required',
                'color' => 'required',
                'description' => 'required',
                'status' => 'required',
                'show_hide' => 'required'
            ]);
        }

        try {
            $result = Product::create([
                'no' => $request->input('no'),
                'name' => $request->input('name'),
                'slug' => Str::slug($request->input('name')),
                'Categories' => $request->input('Categories'),
                'image' => $request->input('image'),
                'price' => $request->input('price'),
                'size' => $request->input('size'),
                'color' => $request->input('color'),
                'description' => $request->input('description'),
                'status' => $request->input('status'),
                'show_hide' => $request->input('show_hide')
            ]);

            if ($result->id > 0) {
                return redirect()->route('admin.addProduct')->with('success', 'Thêm dữ liệu thành công');
            } else {
                return redirect()->route('admin.addProduct')->with('error', 'Lỗi thêm dữ liệu');
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.addProduct')->with('error', $e->getMessage());
        }
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.updateProduct', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);

            $data = $request->all();

            $product->name = $data['name'];
            $product->slug = Str::slug($data['name']);
            $product->Categories = $data['Categories'];
            $product->image = $data['image'];
            $product->price = $data['price'];
            $product->size = $data['size'];
            $product->color = $data['color'];
            $product->description = $data['description'];
            $product->status = $data['status'];
            $product->show_hide = $data['show_hide'];

            $product->save();

            return redirect()->route('admin.index')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function deleteProduct($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();

            return redirect()->route('admin.index')->with('success', 'Product deleted successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
