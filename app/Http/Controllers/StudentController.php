<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function listStudent() {
        $data = Students::all();
        
        return view('student.list', [
            'hocvien' => $data
        ]);
    }

    public function createStudent(){
        return view('student.create');
    }

    public function storeStudent(Request $request){
        $data = $request->except('_token');
        Students::create($data);
        return redirect()->route('list');
    }
}
