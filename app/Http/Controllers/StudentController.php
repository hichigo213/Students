<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\StoreStudent;
use App\Mark;
use App\Subject;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('groups.students.index', compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudent $request)
    {
        $student = new Student([
            'name' => $request->get('name'),
            'birthday' => $request->get('birthday'),
            'group_id' => $request->get('group_id')
        ]);
        $student->save();
        $validated = $request->validated();
//        return back();
        return redirect('students')->with('success','Student has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subjects = Subject::all();
        $marks = Mark::where('student_id', $id)->get();
        $student = Student::find($id);
        return view('groups.students.show', compact('student', 'subjects', 'marks'));
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
        return view('groups.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStudent $request, $id)
    {
        $student = Student::find($id);
            $student->name = $request->get('name');
            $student->birthday = $request->get('birthday');
            $student->group_id = $request->get('group_id');
        $student->save();
        $validated = $request->validated();
        return redirect('students')->with('success','Student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('students')->with('success','Student has been deleted');
    }
}
