<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function catalog() {
        return view('catalog');
    }

    //temporary methods

    public function reviews()
    {
        return view('reviews');
    }

    public function product()
    {
        return view('product');
    }

    public function cart()
    {
        $sessionId = Session::getId();
        \Cart::session($sessionId);

        $cart = \Cart::getContent();
        $total = \Cart::getTotal();

        return view('cart', [
            'cart' => $cart,
            'total' => $total
        ]);
    }

    public function addCart(Request $request)
    {
        $good = $this->getGoodByClass($request->className, $request->id);

        $sessionId = Session::getId();

        \Cart::session($sessionId)->add([
            'id' => $good->name,
            'name' => $good->name,
            'price' => $good->price,
            'quantity' => 1,
            'attributes' => [
                'image' => $good->image,
            ],
        ]);

        return redirect()->back();
    }

    public function deleteFormCart(Request $request)
    {
        $sessionId = Session::getId();

        \Cart::session($sessionId)->remove($request->id);

        return redirect()->back();
    }

    public function products() {
        return view('products');
    }
}
