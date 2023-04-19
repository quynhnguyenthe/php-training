<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseDemoController extends Controller
{
    public function __construct()
    {
    }

    public function stringBasicResponse() {
        return 'String basic response';
    }

    public function arrayBasicResponse() {
        $data['data'] = ['id' => 1, 'name' => 'test', '123'];
        $data['code'] = 400;
        return $data;
    }

    public function OBJResponse() {
        $data['data'] = ['id' => 1, 'name' => 'test', '123'];
        $data['code'] = 400;
        return response($data, 400);
    }

    public function addHeader() {
        $data = ['id' => 1, 'name' => 'test'];
        return response($data, 200)
            ->header('Content-Type', 'text/plain')
            ->header('X-Header-One', 'Header Value')
            ->header('X-Header-Two', 'Header Value');
    }

    public function addCookie() {
        $data = ['id' => 1, 'name' => 'test'];
        $minutes = 60;
        return response($data, 200)
            ->header('Content-Type', 'text/plain')
            ->cookie('name', 'value', $minutes, '/', 'quynh.site');
    }

    public function viewResponse() {
        $data['name'] = '<b>test</b>';
        $data['records'] = ['id' => 1, 'address' => 'test'];
        $data['status'] = 200;
        return response()
            ->view('cms.login', $data, 200)
            ->header('Content-Type', 'text/plain');
    }

}
