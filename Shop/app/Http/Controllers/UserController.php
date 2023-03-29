<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
//use Illuminate\Auth;
use App\Models\User;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function register(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate(
                [
                    'username' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'pass' => 'required|confirmed|Min:6',
                    'pass_confirmation' => 'required',
                ],
                [
                    'username.required' => 'Vui lòng không bỏ trống UserName',
                    'email.required' => 'Vui lòng không bỏ trống Email address',
                    'email.email' => 'Email phải là một địa chỉ email hợp lệ.',
                    'pass.required' => 'Vui lòng không bỏ trống Password',
                    'pass.confirmed' => 'Mật khẩu nhập lại không đúng',
                    'pass.Min' => 'Pass phải có ít nhất 6 ký tự.',
                    'pass_confirmation.required' => 'Vui lòng không bỏ trống Confirmation Password',
                ]
            );
        }
        try {
            $result = User::create([
                'name' => $request->input('username'),
                'password' => Hash::make($request->input('pass')),
                'email' => $request->input('email')
            ]);
            if ($result->id > 0) {
                return redirect()->route('login');
            } else {
                $request->session()->put('error', 'Task was Fail');
                return back();
            }
        } catch (\Throwable $th) {
            $request->session()->put('error', $th->getMessage());
            return back();
        }
        return view('signup');
    }
    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->validate(
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ],
                [
                    'email.required' => 'Vui lòng không bỏ trống Email address',
                    'email.email' => 'Email phải là một địa chỉ email hợp lệ.',
                    'password.required' => 'Vui lòng không bỏ trống Password',
                ]
            );
            try {
                if (Auth::attempt($data)) {
                    $request->session()->regenerate();
                    return redirect()->route('home');
                }
                return back()->withError([
                    'email' => 'Email chưa đăng ký',
                ]);
            } catch (\Throwable $th) {
                $request->session()->put('error', $th->getMessage());
                return back();
            }
        }
        return view('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $quantity = $request->input('quantity', 1);

        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [
                $id => [
                    'id' => $id,
                    'name' => $product->name,
                    'quantity' => $quantity,
                    'price' => $product->price,
                    'image' => $product->image
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                'id' => $id,
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => $product->price,
                'image' => $product->image
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function updateCartItemQuantity(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $action = $request->input('action');

        $cart = session()->get('cart');

        if ($cart) {
            if (isset($cart[$productId])) {
                if ($action === 'increase') {
                    $cart[$productId]['quantity'] += $quantity;
                } elseif ($action === 'decrease') {
                    $cart[$productId]['quantity'] -= $quantity;
                    if ($cart[$productId]['quantity'] <= 0) {
                        unset($cart[$productId]);
                    }
                }
                session()->put('cart', $cart);
            }
        }
        return redirect()->back();
    }

    public function decrease($id)
    {
        $cart = session()->get('cart');
        if ($cart) {
            if (isset($cart[$id])) {
                $cart[$id]['quantity']--;
                if ($cart[$id]['quantity'] <= 0) {
                    unset($cart[$id]);
                }
                session()->put('cart', $cart);
            }
        }
        return redirect()->back();
    }

    public function increase($id)
    {
        $cart = session()->get('cart');
        if ($cart) {
            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
                session()->put('cart', $cart);
            }
        }
        return redirect()->back();
    }

    public function removeProduct($id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->route('cart')->with('success', 'Product removed successfully');
    }
    public static function countItems()
    {
        $cart = session()->get('cart');
        $count = 0;
        if (!empty($cart)) {
            foreach ($cart as $item) {
                $count += $item['quantity'];
            }
        }
        return $count;
    }
    public static function subTotal()
    {
        $total = 0;
        foreach (session('cart') as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }
        return $total;
    }
}
