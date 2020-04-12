<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // trang chủ
    public function index()
    {
        // 1. Lấy dữ liệu - Danh mục sản phẩm
        $categories = Category::where('is_active' ,1)->get();

        // 2. Lấy dữ liệu - Banner
        $banners = Banner::where('is_active' , 1)->get();

        // 3. Lấy danh sách phẩm theo thể loại
        $list = []; // chứa danh sách sản phẩm theo từng loại

        foreach ($categories as $key => $category) {
            if ($category->parent_id == 0) { // check có phải danh mục cha không
                $ids = [$category->id]; // tạo mảng

                foreach ($categories as $child) {
                    if ($child->parent_id == $category->id) {
                        $ids[] = $child->id; // thêm phần tử vào mảng
                    }
                }// $ids = [phần tử cha và con]
            }

            $list[$key]['category'] = $category;
            $list[$key]['products'] = $category->products()->where(['is_active' => 1, 'is_hot' => 1])//lấy ra sản phẩm is_active = 1 và là hot
                                                          ->whereIn('category_id' , $ids)
                                                          ->limit(8)->orderBy('id','asc') // lấy ra 10 phần tử đầu tiên và sắp xếp giảm dần
                                                          ->get();
        }
        // dd($list);
        return view('shop.home',[
            // truyền dữ liệu sang view
            'categories' => $categories,
            'banners' => $banners,
            'list' => $list
        ]);
    }
}
