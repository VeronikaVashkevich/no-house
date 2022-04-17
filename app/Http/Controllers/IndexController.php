<?php


namespace App\Http\Controllers;


use App\Filters\ProductFilter;
use App\Models\Bath;
use App\Models\Door;
use App\Models\Laminate;
use App\Models\Linoleum;
use App\Models\Mixer;
use App\Models\Paint;
use App\Models\Parquet;
use App\Models\PvcPanel;
use App\Models\Sink;
use App\Models\Varnish;
use App\Models\Wallpaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        $recommendations = array();

        $recommendations[] = Door::query()->orderBy('id', 'desc')->first();
        $recommendations[] = Wallpaper::query()->orderBy('id', 'desc')->first();
        $recommendations[] = Laminate::query()->orderBy('id', 'desc')->first();
        $recommendations[] = Linoleum::query()->orderBy('id', 'desc')->first();
        $recommendations[] = PvcPanel::query()->orderBy('id', 'desc')->first();

        return view('index', [
            'recommendations' => $recommendations,
        ]);
    }

    public function catalog() {
        return view('catalog');
    }

    public function interiorDecoration()
    {
        return view('catalog.interior-decoration', [
            'wallpapers' => Wallpaper::all(),
            'pvcPanels' => PvcPanel::all(),
        ]);
    }

    public function plumbing()
    {
        return view('catalog.plumbing', [
            'mixers' => Mixer::all(),
            'baths' => Bath::all(),
            'sinks' => Sink::all(),
        ]);
    }

    public function floor()
    {
        return view('catalog.floor', [
            'laminate' => Laminate::all(),
            'linoleum' => Linoleum::all(),
            'parquet' => Parquet::all(),
        ]);
    }

    public function allPaints()
    {
        return view('catalog.all-paints', [
            'paints' => Paint::all(),
            'varnishes' => Varnish::all(),
        ]);
    }

    //temporary methods
//    public function product()
//    {
//        return view('product');
//    }

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

//    public function products() {
//        return view('products');
//    }

    public function search(ProductFilter $productFilter) {
        $products = array();

        foreach ($this::CLASSES as $class) {
            $products = array_merge($class::filter($productFilter)->get()->toArray(), $products);
        }

        return view('products', [
            'goods' => $products,
        ]);
    }
}
