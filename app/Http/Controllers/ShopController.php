<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        // lấy dữ liệu category
        $categories = Category::where('is_active',1)->get();

        //lấy dữ liệu banner
        $banners = Banner::where('is_active',1)->get();
        return view('shop.home',[
            //truyền dữ liệu sang view
            'categories' => $categories,
            'banners' => $banners
        ]);
    }
}
