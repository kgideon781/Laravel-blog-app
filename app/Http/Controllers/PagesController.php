<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel';
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'title' => 'Services we offer',
            'services' => ['UI UX design', 'Android  App Dev', 'Web Development', 'SEO']

        );
        return view('pages.services')->with($data);
    }
}
