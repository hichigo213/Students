<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Mark;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Photo;

use App\Http\Requests\StoreStudent;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::query()->with('marks');
        $subjects = Subject::all();
        $students = $students
                    ->filter()
                    ->paginate(2)
                    ->appends('group_id', request()->group_id)
                    ->appends('name', request()->name);

        return view('groups.students.show.index', compact('students', 'marks', 'subjects'));
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
        Student::create($request->all());

        return redirect('students')->with('success', 'Student has been added');
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
        $photo = Photo::find($id);
        $marks = Mark::where('student_id', $id)->get();
        $student = Student::find($id);

        return view('groups.students.show', compact('student', 'subjects', 'marks', 'photo'));
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
        Student::find($id)->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();

        return redirect('students.show')->with('success', 'Student has been deleted');
    }
}
