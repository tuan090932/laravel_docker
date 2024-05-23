<?php

namespace App\Http\Controllers;

use App\Models\Product; // Import model Product

use Illuminate\Http\Request;

class ProductController extends Controller
{


    private  $product;
    public function __construct()
    {
        $this->product = new Product();


        // $this->middleware('auth');


    }
    public function index()
    {
        // Gọi phương thức static trong model Product để lấy tất cả sản phẩm
        $product = Product::all();

        // Trả về view và truyền dữ liệu products sang view
        return view('home', ['product' => $product]);
    }


    public function getProductbyid($id)
    {
        // Gọi phương thức static trong model Product để lấy tất cả sản phẩm
        dd($id);
        // $product = $this->product->getProductbyid($request->input('id'));
        //return view('view', ['product' => $product]);
        // return view('home', ['product' => $product]);

    }
}
