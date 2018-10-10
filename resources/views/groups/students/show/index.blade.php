@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('groups.students.filter')
                <div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>student id</td>
                            <td>student name</td>
                            <td>student birthday</td>
                            <td>student group</td>
                            @foreach($subjects as $subject)
                                <td>{{$subject->subject_name}} average</td>
                            @endforeach
                            <td>average</td>
                            <td>destroy</td>
                            <td>bio</td>
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
                                <td
                                    @if ($var == 5)
                                        bgcolor="lightgreen"
                                    @elseif ($var >= 4.5)
                                        bgcolor="yellow"
                                    @elseif ($var <= 3)
                                        bgcolor="red"
                                    @else
                                    @endif
                                    >
                                    {{round($var ,2)}}
                                </td>
                                <td>
                                    <form action="{{route('students.destroy',$student->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">delete</button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{route('students.show', $student->id)}}" class="btn btn-primary">bio</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$students->links()}}
                @include('groups.students.create')
            </div>
        </div>
    </div>
@endsection
