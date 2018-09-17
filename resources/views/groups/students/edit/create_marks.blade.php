@extends('layouts.app')

@section('content')
    <div class="table-striped">
        <table>
            {{--@foreach ($group->students as $students)--}}
                <thead>
                    <tr>
                        <td>Student Name</td>
                        @foreach($subjects as $subject)
                            <td>{{ $subject->subject_name }}</td>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>$student->name</td>
                            @foreach ($students->marks as $mark)
                                <td>
                                    <form action="{{ route('marks.store') }}" method="POST" >
                                    <input type="text" class="form-control" name="mark" />
                                    <button type="submit" class="btn btn-primary">Add</button>
                                    </form>
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            {{--@endforeach--}}
        </table>

    </div>
@endsection