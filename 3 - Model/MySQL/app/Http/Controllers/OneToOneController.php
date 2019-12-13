<?php

namespace App\Http\Controllers;

use App\Sample;
use Illuminate\Http\Request;

class OneToOneController extends Controller
{
    public function index()
    {
    	$samples = Sample::with(['relation'])->get();
    	return view('one-to-one.index', compact('samples'));
    }
}
