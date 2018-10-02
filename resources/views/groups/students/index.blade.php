@extends('layouts.app')

@section('content')

        <div>
            <h2>Students List</h2>
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
                                <td>
                                    <a href="{{route('students.show', $student->id)}}" class="btn btn-primary">Marks</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        <div>
             <a href="{{route('students.create')}}" class="btn btn-primary">Add Student</a>
        </div>
        <div>
        <h3>A marks</h3>
        <table class="table table-active">
            <thead class="thead-light">
            <tr>
                <td>Student Name</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
                @if(($student->marks->avg('mark')) == 5)
                    <tr>
                        <td>
                            {{$student->name}}
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
        <h3>Nearly A marks</h3>
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <td>
                    Student Name
                </td>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                @if($student->marks->avg('mark') >= 4.5)
                    @if($student->marks->avg('mark') <> 5 )
                        <tr>
                            <td>
                                {{$student->name}}
                            </td>
                        </tr>
                    @endif
                @endif
            @endforeach
            </tbody>
        </table>
        </div>
@endsection