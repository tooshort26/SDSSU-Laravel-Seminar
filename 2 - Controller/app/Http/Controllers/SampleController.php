<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
    	return 'Example of a Class Controller';
    }

    public function sample()
    {
        $data = [
            'users' => [
                'firstname' => 'Christopher',
                'middlename' => 'Platino',
                'lastname' => 'Vistal'
            ],
        ];
        
    	return view('sample2')->with('sample', $data);
    }

    public function dashboard()
    {
    	return view('admin.dashboard');
    }
}
