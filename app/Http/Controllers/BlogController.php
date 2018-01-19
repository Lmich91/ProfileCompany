<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class BlogController extends Controller
{
    public function home()
    {
        $datas = article::orderBy('id', 'DESC')->paginate(4);
        return view('home')->with('datas', $datas);
    }

    public function profil()
    {
    	return view('profil');
    }

    public function customer()
    {
    	return view('customer');
    }

    public function produk()
    {
    	return view('produk');
    }

    public function blog()
    {
        $datas = article::orderBy('id', 'DESC')->paginate(4);
        return view('blog')->with('datas', $datas);
    }
}
