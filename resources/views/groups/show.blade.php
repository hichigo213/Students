@extends ('layouts.app')

@section ('content')
    <div>
        <table class="table table-striped">
            <thead>
              <tr>
                  <td>Student ID</td>
                  <td>Student Name</td>
                  <td>Student Birthday</td>
                  <td>Student Group</td>
                  @foreach($subjects as $subject)
                      <td>{{ $subject->subject_name }}</td>
                  @endforeach
                  @foreach($subjects as $subject)
                      <td>{{ $subject->subject_name }} Average</td>
                  @endforeach
                  <td>Average</td>
              </tr>
            </thead>

            <tbody>
            @php
            $collect = collect();
            @endphp
            @foreach($students as $student)
                @php
                    $collect->push($student->marks->avg('mark'));
                @endphp
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }</td>
                    <td>{{ $student->birthday }}</td>
                    <td>{{ $student->group_id }}</td>

                    @foreach($subjects as $subject)
                        <td>
                            @foreach($student->marks as $mark)
                                @if($subject->id == $mark->subject_id)
                                    {{$mark->mark}}
                                @endif
                            @endforeach
                        </td>
                    @endforeach
                    @foreach($subjects as $subject)
                        <td>{{round($mark->where('student_id', $student->id)->where('subject_id', $subject->id)->avg('mark'),2)}}</td>
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
                    ">{{round($var ,2)}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <span>Group Average = {{ round($collect->avg(), 2) }}</span>
    </div>
@endsection
