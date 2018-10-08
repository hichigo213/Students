@extends ('layouts.app')

@section ('content')
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>Group ID</td>
            <td>Group Name</td>
            <td>Group Description</td>
            <td>Group Average</td>
            @foreach ($subjects as $subject)
                <td>Group {{$subject->subject_name}} Average</td>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($groups as $group)
            <tr>
                <td>{{$group->id}}</td>
                <td>{{$group->group_name}}</td>
                <td>{{$group->description}}</td>
                @php
                $collect = collect();
                $collect1 = collect();
                $collect2 = collect();
                $collect3 = collect();
                @endphp
                @foreach($group->students as $student)
                    @php
                        $collect->push($student->marks->avg('mark'));
                        $collect1->push($student->marks->where('subject_id', 1)->avg('mark'));
                        $collect2->push($student->marks->where('subject_id', 2)->avg('mark'));
                        $collect3->push($student->marks->where('subject_id', 3)->avg('mark'));
                    @endphp
                @endforeach
                <td>{{round($collect->avg(),2)}}</td>
                <td>{{round($collect1->avg(),2)}}</td>
                <td>{{round($collect2->avg(),2)}}</td>
                <td>{{round($collect3->avg(),2)}}</td>
                <td>
                    <form action="{{route('groups.destroy',$group->id)}}" method="post">
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
@include('groups.create')
@endsection
