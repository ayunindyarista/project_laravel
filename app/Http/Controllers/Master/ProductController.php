<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return "ini Halaman Index"

        $product=DB::table('product')
                     ->join('categories','product.CATEGORY_ID', '=', 'categories.CATEGORY_ID')
                     ->select('categories.CATEGORY_NAME','product.PRODUCT_ID','product.PRODUCT_NAME', 'product.PRODUCT_PRICE', 'product.PRODUCT_STOCK', 'product.EXPLANATION')
                     ->get();

        //$product = DB::table('product')->get();
        //print_r($categories);
        //mengirim data categories ke view
       return view('admin/template2/Master/Product/Index',['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return "ini Halaman Create"
        $categories = DB::table('categories')->get();
        return view('admin/template2/Master/Product/Create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DB::table('product')->insert([
                    'CATEGORY_ID'   => $request->categoriesid,
                    'PRODUCT_NAME'  => $request->productname,
                    'PRODUCT_PRICE' => $request->productprice,
                    'PRODUCT_STOCK' => $request->productstock,
                    'EXPLANATION'   => $request->explanation
                    ]);
        return redirect('ProductCreate');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //return "ini Halaman Edit";
        $product = DB::table('product')->where('PRODUCT_ID',$id)->get();
        return view('admin/template2/Master/Product/Edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        DB::table('product')->where('PRODUCT_ID', $request->productid)->update([
            'CATEGORY_ID'   => $request->categoriesid,
            'PRODUCT_NAME'  => $request->productname,
            'PRODUCT_PRICE' => $request->productprice,
            'PRODUCT_STOCK' => $request->productstock,
            'EXPLANATION'   => $request->explanation
            ]);

        return redirect('CategoriesIndex');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        DB::table('product')->where('PRODUCT_ID',$id)->delete();
        return redirect('ProductIndex');
        //return "ini Halaman Destroy";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function combo()
    {
        //
       $catproduk = DB::table('product')->get();
       return view('admin/template2/Master/Product/Index',['product' => $product]);
        
    }
}
