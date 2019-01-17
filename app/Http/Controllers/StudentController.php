<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentFormRequest;
use App\Mail\StudentCreated;
use App\Student;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('CheckAge');

        view()->share('title','My Students List');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //me()
        $students = Student::all();

        return view('students.index',compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->can('create', Student::class)) {
            return view('students.create');
        }

        return redirect()->route('students.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentFormRequest $request)
    {
        if(!auth()->user()->can('create-student'))
        {
            return redirect()->route('students.index');
        }

        if ($request->hasFile('photo')) {

            $path = $request->file('photo')->store('students','public');

            $request->merge(['photo_url'=>$path]);
        }

        $student = Student::create($request->all());

        //Alert the student
        //without queue
        Mail::to($student->email)
            ->send(new StudentCreated($student));

        //with queue
        Mail::to($student->email)
            ->queue(new StudentCreated($student));

       return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        if (auth()->user()->can('update', $student))
        {
            return view('students.update',compact('student'));
        }

        return redirect()->route('students.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        if (auth()->user()->can('update', $student)) {
            $student->update($request->all());
        }
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
