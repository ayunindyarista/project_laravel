<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use App\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        //
        //return "ini Halaman Index";

        //mengambil data dari table pegawai
        $categories = DB::table('categories')->get();

        //print_r($categories);
        //mengirim data categories ke view
       return view('admin/template2/Master/Categories/Index',['categories' => $categories]);
        //return view('admin/template2/Master/Categories/Index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        //return "ini Halaman Create";
        //$categories = DB::table('categories')->get();
        //return view('admin/template2/Master/Categories/Create',['categories' => $categories]);
        //return view('FormCategories');
        return view('admin/template2/Master/Categories/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        DB::table('categories')->insert([
            'CATEGORY_NAME' => $request->categoriesname
            ]);
        return redirect('Master/CategoriesIndex');
        */
        /*
        Categories::create(['CATEGORY_ID' => $request->categoriesid,
            'CATEGORY_NAME' => $request->categoriesname]);
        return redirect('CategoriesCreate');
        */
           DB::table('categories')->insert([
                    //'CATEGORY_ID' => $request->categoriesid,
                    'CATEGORY_NAME' => $request->categoriesname
                    ]);
        return redirect('/CategoriesIndex');
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
        //$categories = DB::table('categories')->get();
        $categories = DB::table('categories')->where('CATEGORY_ID',$id)->get();

        return view('admin/template2/Master/Categories/Edit', ['categories' => $categories]);
        //return view('admin/template2/Master/Categories/Edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::table('categories')->where('CATEGORY_ID', $request->categoriesid)->update([
            'CATEGORY_NAME' => $request->categoriesname]);

        return redirect('/CategoriesIndex')->with('statusupdate', 'Data Berhhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('categories')->where('CATEGORY_ID',$id)->delete();
        return redirect('/CategoriesIndex');
        //return "ini Halaman Destroy";
       // return view('Master/Categories/Destroy');
    }
}
