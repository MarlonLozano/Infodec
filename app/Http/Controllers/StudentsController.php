<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students']=Students::paginate(10);
        return view('students.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $dataStudent=request()->except('_token');
        Students::insert($dataStudent);
        
        return redirect('students')->with('Message','Empleado Agregado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student= Students::findOrFail($id);

        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataStudent=request()->except(['_token','_method']);
        Students::where('id','=',$id)->update($dataStudent);

        //$student= Students::findOrFail($id);
        return redirect('students')->with('Message','Empleado Editado con Exito');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Students::destroy($id);
        return redirect('students')->with('Message','Empleado Eliminado con Exito');;
    }
}
