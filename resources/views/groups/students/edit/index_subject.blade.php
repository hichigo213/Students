@extends('layouts.app')

@section('content')
    <div>
        <table class="table-striped">
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
                        <form action="{{route('subjects.destroy',$subject->id)}}" method="post">
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