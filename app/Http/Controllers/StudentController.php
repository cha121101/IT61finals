<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        //show the data
       
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        DB::insert('insert into students (age, studentname , yearandsection) values (?, ?, ?)', [$request->age , $request->studentname , $request->yearandsection]);
        return redirect()->route('show.student');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('welcome' , ['student' => DB::table('students')->get()] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
        return view('edit' , ['student' => DB::select('select * from students where id = ?', [$id])]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('students')->where('id' , $request->id)->update(
                [
                    'studentname' => $request->studentname,
                    'age' => $request->age,
                    'yearandsection' => $request->yearandsection
                ]
                );
        return redirect()->route('show.student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Students::destroy($id);
        return redirect()->route('show.student');
    }
}