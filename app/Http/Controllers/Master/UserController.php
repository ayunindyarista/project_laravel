<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
       $user = DB::table('user')->get();
       return view('admin/template2/Master/User/Index',['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin/template2/Master/User/Create");
        //return "ini Halaman Create";
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
        DB::table('user')->insert([
                    //'USER_ID'       => $request->categoriesname,
                    'FIRST_NAME'    => $request->firstname,
                    'LAST_NAME'     => $request->lastname,
                    'EMAIL'         => $request->email,
                    'PHONE'         => $request->phone,
                    'PASSWORD'      => $request->password,
                    'JOB_STATUS'    => $request->jobstatus
                    ]);
        return redirect('/UserIndex');
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
        $user = DB::table('user')->where('USER_ID',$id)->get();

        return view('admin/template2/Master/User/Edit', ['user' => $user]);
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
         DB::table('user')->where('USER_ID',$request->userid)->update([
            'FIRST_NAME' => $request->firstname,
            'LAST_NAME'  => $request->lastname,
            'EMAIL'      => $request->email,
            'PHONE'      => $request->phone,
            'PASSWORD'   => $request->password,
            'JOB_STATUS' => $request->jobstatus
            ]);

        return redirect('/UserIndex');
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
        //return "ini Halaman Destroy";
        $user = DB::table('user')->where('User_ID',$id)->delete();
        return redirect('/UserIndex');
    }
}
