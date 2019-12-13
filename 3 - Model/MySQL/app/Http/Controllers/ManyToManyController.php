<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use Illuminate\Http\Request;

class ManyToManyController extends Controller
{
 	public function index()
 	{
 		$doctors = Doctor::with('patients')->get();
 		$patients = Patient::with('doctors')->get();
 		return view('many-to-many.index', compact('doctors', 'patients'));
 	}   
}
