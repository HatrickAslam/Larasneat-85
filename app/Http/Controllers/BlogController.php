<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
		$data['active_menu'] = "home";
		return view('home', $data);
	}

	public function tentang(){
		$data['active_menu'] = "about";
		return view('tentang', $data);
	}

	public function kontak(){
		$data['active_menu'] = "contact";
		return view('kontak', $data);
	}
}
