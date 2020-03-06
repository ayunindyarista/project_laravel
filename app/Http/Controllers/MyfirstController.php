<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyfirstController extends Controller
{
    //
    /*
    public function index(){
    	return "Hi, anda membuka view ini daricontroller.";
    }
    */
    public function index(){
    	return view('webtest');
    }

    public function nama(){
    	$nama = "Ayu Nindya Ariesta Pratama";
    	return view('showname', ['nama' => $nama]);
    }

    public function matkul(){
    	$nama = "Ayu Nindya";
    	$mk   = ["alpro","matdas","pemrograman web","jaringan komputer"];
    	return view('matakuliah', ['nama'=> $nama, 'matkul' => $mk]);
    }

    public function getNameFormUrl($nama){
    	return view('showname', ['nama' => $nama]);
    }

    public function formulir(){
    	return view('formulir');
    }

    public function proses(Request $req){
    	$nama = $req->input('nama');
    	$alamat = $req->input('alamat');
    	return "Nama : ".$nama." Dan Alamat :".$alamat;
    }

    public function home(){
    	return view('home');
    }

    public function tentang(){
    	return view('tentang');
    }

}
