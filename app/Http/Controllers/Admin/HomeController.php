<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'Login | Employee Mgmt'
        ];

        return view('admin.index', $data);
    }
}
