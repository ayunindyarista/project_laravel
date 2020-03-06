<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return "ini Halaman Index";
        $customer = DB::table('customer')->get();

        //mengirim data categories ke view
        return view('admin/template2/Master/Customer/Index',['customer' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return "ini Halaman Create";
        //$customer = DB::table('customer')->get();
        //return view('admin/template2/Master/Customer/Create',['customer' => $customer]);
        return view('admin/template2/Master/Customer/Create');
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
        DB::table('customer')->insert([
        //'CATEGORY_ID' => $request->categoriesid,
        'FIRST_NAME' => $request->firstname,
        'LAST_NAME' => $request->lastname,
        'PHONE' => $request->phone,
        'EMAIL' => $request->email,
        'STREET' => $request->street,
        'CITY' => $request->city,
        'STATE' => $request->state,
        'ZIP_CODE' => $request->zipcode
        ]);
        return redirect('CustomerCreate');
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
    public function edit()
    {
        //
        return "ini Halaman Edit";
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
        return "ini Halaman Destroy";
    }
}
