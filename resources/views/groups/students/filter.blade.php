<div class="float-left">
    <a href="{{route('students.index')}}" class="btn btn-primary">Reset</a>
    <form action="{{route('students.index')}}" method="GET">
        @csrf
        <div class="align-content-center">
        <ul>
            @foreach($subjects as $subject)
             <li>
                <input type="radio" name="subject_name" value="{{ $subject->id }}">{{ $subject->subject_name }}>
             </li>
            @endforeach
        </ul>
        </div>
        <div class="align-content-around">
        <input type="radio" name="mark" value="5">
        <label for="5">5</label>
        <input type="radio" name="mark" value="4.5">
        <label for="4.5">>=4.5</label>
        <input type="radio" name="mark" value="3">
        <label for="3"><3</label>
        <button type="submit">Submit</button>
        </div>
    </form>
</div>
<div class="float-right align-content-center">
    <p>Input Student Name</p>
    <form action="{{route('students.index')}}" method="GET">
        @csrf
        <input type="text" name="name">
        <p>Input Group Number</p>
        <input type="text" name="group_id">
        <button type="submit">Filter</button>
    </form>
</div>
