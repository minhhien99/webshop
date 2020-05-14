<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Blog;
use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use DB;

class GeneralController extends Controller
{
    protected $categories;

    public function __construct()
    {
        // 1. Lấy dữ liệu - Danh mục sản phẩm
        $categories = Category::where('is_active' ,1)->get();

        $this->categories = $categories;

        // 2. Lấy dữ liệu - Banner
        $banners = Banner::where('is_active' , 1)->get();

        //3 lấy dữ liệu blog
        $blogs = Blog::where('is_active' , 1)->get();

        view()->share(['categories'=>$categories,'banners' =>$banners,'blogs'=>$blogs]);
    }
    public function notfound()
    {
        return view('shop.notfound');
    }

    //
    public function search(Request $request)
    {
        $keyword = $request->input('tu-khoa');
        $slug = str_slug($keyword);
        $totalResult = 0;

        $products = [];

        //$sql = "SELECT * FROM products WHERE is_active = 1 AND (name like '%?%' OR slug like '%?%' OR summary like '%?%')";
        //$results = DB::select($sql, [
        //    $keyword, $slug , $keyword
        //]);

        $products = Product::where([
            ['name', 'like', '%' . $keyword . '%'],
            ['is_active', '=', 1]
        ])->orWhere([
            ['slug', 'like', '%' . str_slug($keyword) . '%'],
            ['is_active', '=', 1]
        ])->orWhere([
            ['summary', 'like', '%' . $keyword . '%'],
            ['is_active', '=', 1]
        ])->paginate(20);

        $totalResult = $products->total();

        // return view('shop.search', [
        //     'products' => $products,
        //     'totalResult' => $totalResult,
        //     'keyword' => $keyword]);
        return view('shop.search', compact('products','keyword','totalResult'));

    }
}

