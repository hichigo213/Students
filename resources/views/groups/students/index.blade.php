@extends('layouts.app')

@section('content')
        <div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Student ID</td>
                    <td>Student Name</td>
                    <td>Student Birthday</td>
                    <td>Student Group</td>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->birthday}}</td>
                        <td>{{$student->group_id}}</td>
                        <td><a href="{{route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{route('students.destroy',$student->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection