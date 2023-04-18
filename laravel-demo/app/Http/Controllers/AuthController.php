<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        $data['name'] = '<b>test</b>';
        $data['records'] = ['id' => 1, 'address' => 'test'];
        $data['status'] = 200;
        return view('cms.login')->with($data);
    }
}
