@extends('layouts.app')

@section('content')
    <div class="card-body">
        <h2>Subjects List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Subject ID</td>
                    <td>Subject Name</td>
                </tr>
            </thead>
            <tbody>
            @foreach($subjects as $subject)
                <tr>
                    <td>{{$subject->id}}</td>
                    <td>{{$subject->subject_name}}</td>
                    <td>
                        <form action="{{route('subjects.update', $subject->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="text" name="subject_name">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('subjects.destroy',$subject->id)}}" method="POST">
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
    @include('groups.students.edit.create_subject')
@endsection