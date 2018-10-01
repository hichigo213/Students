@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Group</td>
                    <td>Student</td>
                    <td>Birthday</td>
                    @foreach($subjects as $subject)
                        <td>{{$subject->subject_name}}</td>
                    @endforeach
                    <td>Average Mark</td>
                    <td>Bio</td>
                    <td>Delete</td>
                </tr>
            </thead>
        </table>
    </div>
@endsection