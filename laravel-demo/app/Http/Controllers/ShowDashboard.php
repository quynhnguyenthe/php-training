<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowDashboard extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return 'Dashboard';
    }
}
