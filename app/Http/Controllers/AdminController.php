<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
  /*
     public function Admin(){
        return view('admin/template1/Admin');
    }

    public function header(){
    	return view('admin/template1/header');
    }

      public function body(){
    	return view('admin/template1/Body');
    }

      public function footer(){
    	return view('admin/template1/Footer');
    }

     public function form(){
    	return view('admin/template1/pages/Form');
    }
    */

    /*
    public function Admin2(){
      return view('admin/template2/Admin2');
    }
    */

    public function boddy(){
      return view('admin/template2/Body');
    }

    public function headerslide(){
      return view('admin/template2/HeaderSlide');
    }

    public function headertop(){
      return view('admin/template2/HeaderTop');
    }

    public function footer2(){
      return view('admin/template2/Footer2');
    }

    public function dashboard(){
      return view('admin/template2/Admin2');
    }

    public function form(){
      return view('admin/template2/pages/Form');
    }

    public function formcategories(){
      return view('admin/template2.pages/FormCategories');
    }

}
