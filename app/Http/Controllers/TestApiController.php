<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class TestApiController extends Controller
{
    //
    public function test()
    {
    $data = [
    	'siswa'=>\App\Student::all(),
    ];

    	
    return Student::paginate(1);
	}	
	
}
