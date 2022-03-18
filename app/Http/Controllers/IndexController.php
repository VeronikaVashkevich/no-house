<?php


namespace App\Http\Controllers;


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
}
