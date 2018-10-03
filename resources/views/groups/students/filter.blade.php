<div>
    <form action="{{route('students.index')}}" method="POST">
        @csrf
        <select>
            @foreach($subjects as $subject)
                <option name="subject_name" value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>
            @endforeach
        </select>
        <input type="radio" name="mark" value="5">
        <label for="5">5</label>
        <input type="radio" name="mark" value=">=4.5">
        <label for=">=4.5">>=4.5</label>
        <input type="radio" name="mark" value="<3">
        <label for="<3"><3</label>
        <button type="submit">Submit</button>
    </form>
</div>
<div>
    <form action="{{route('students.index')}}" method="GET">

    </form>
</div>
