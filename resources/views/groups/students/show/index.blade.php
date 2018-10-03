@extends ('layouts.app')

@section ('content')
    @include('groups.students.filter')
    <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>Student ID</td>
                <td>Student Name</td>
                <td>Student Birthday</td>
                <td>Student Group</td>
                @foreach($subjects as $subject)
                    <td>{{$subject->subject_name}} Average</td>
                @endforeach
                <td>Average</td>
                <td>Destroy</td>
                <td>Bio</td>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->birthday}}</td>
                    <td>{{$student->group_id}}</td>
                    @foreach($subjects as $subject)
                        <td>{{round($student->marks->where('subject_id', $subject->id)->avg('mark'),2)}}</td>
                    @endforeach
                    @php
                        $var = $student->marks->avg('mark');
                    @endphp
                    <td bgcolor="
                        @if ($var == 5)
                            lightgreen
                        @elseif ($var >= 4.5)
                            yellow
                        @elseif ($var <= 3)
                            red
                        @else
                            white
                        @endif
                            ">
                        {{round($var ,2)}}
                    </td>
                    <td>
                        <form action="{{route('students.destroy',$student->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{route('students.show', $student->id)}}" class="btn btn-primary">Bio</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{$students->links()}}
    @include('groups.students.create')
@endsection