@extends ('layouts.app')

@section ('content')
        <div>
            <h1>{{$student->name}}</h1>
            @include('groups.students.edit.image_crud')
            @include('groups.students.edit')
            <table class="table">
                <thead class="thead-dark">
                    <tr class="table-striped">
                        @foreach($subjects as $subject)
                        <td>
                            {{$subject->subject_name}}
                        </td>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="table table-striped">
                    <tr>
                        @foreach($subjects as $subject)
                            <td>
                                <dl class="list-group ">
                                @foreach($student->marks as $mark)
                                        @if($subject->id == $mark->subject_id)
                                            <dd class="align-content-center">
                                                {{$mark->mark}}
                                                    <form action="{{route('marks.destroy', $mark->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                            </dd>
                                        @endif
                                @endforeach
                                </dl>
                            </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    @include('groups.students.edit.table_marks_store')
@endsection
