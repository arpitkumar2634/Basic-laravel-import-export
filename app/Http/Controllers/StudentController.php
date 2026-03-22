<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImport;
use Illuminate\Support\Facades\Validator;
use App\Jobs\ImportStudentsJob;


class StudentController extends Controller
{
    public function index(Request $request) {
        $students = Student::latest('id');

        if ($request->get('keyword') != "") {
            $students = $students->where('name', 'like', '%' . $request->get('keyword') . '%');
        }

        $data['students'] = $students->get();
        return view("students", $data);
    }

    public function export(Request $request) {
        return Excel::download(new StudentsExport($request), 'Students.xlsx');
    }

    public function import(Request $request) 
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);

        Excel::Import(new StudentsImport, $request->file('file'));

        return back()->with('success', 'Employee data is being imported in background.');
    }

}
