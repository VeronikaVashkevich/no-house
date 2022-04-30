<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $cart = !empty($request->cart) ? $request->cart : array() ;

        if (!$cart) {
            return redirect('/cart');
        }

        $order = new Order;

        $order->totalSum = $request->totalSum;
        $order->user_id = Auth::id();
        $order->number = mt_rand();
        $order->street = $request->street;
        $order->city = $request->city;
        $order->house = $request->house;
        $order->front_door = $request->frontDoor;
        $order->apartment = $request->apartment;

        $order->save();

        // по очереди добавляем товары в сводную таблицу order_good
        foreach ($cart as $good) {
            $good = json_decode($good);
            // получаем имя роута (класса) товара и id товара
            $routeName = explode('_', $good->id)[0];
            $good_id = explode('_', $good->id)[1];
            // количество товара
            $qty = $good->quantity;

            DB::table('order_good')->insert([
                'order_id' => $order->id,
                'route_name' => $routeName,
                'id_value' => $good_id,
                'good_qty' => $qty,
            ]);
        }

        // чистим корзину
        $this->clearCart();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Order $order)
    {
        $goodsRaw = DB::table('order_good')->where('order_id', '=', $order->id)->get();

//        echo "<pre/>"; var_dump($goods); exit;

        $goods = [];
        foreach ($goodsRaw as $goodRaw) {
            $goods[] = $this->getGoodByRouteName($goodRaw->route_name, $goodRaw->id_value);
        }

        return view('order', [
            'order' => $order,
            'goods' => $goods,
            'goodsRaw' => $goodsRaw,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
