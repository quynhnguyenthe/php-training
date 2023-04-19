<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

     public function index($page = 1, $id) {
        return 'Page: ' . $page . $id;
        return view('cms.login');
     }
}
