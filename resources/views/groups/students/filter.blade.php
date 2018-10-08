<div class="container">
  <a href="{{route('students.index')}}" class="btn btn-primary">Reset</a>
    <form action="{{route('students.index')}}" method="GET" class="form from-group">
        <div class="form-group">

          <div class="form-group">
            <ul class="list-group">
                @foreach($subjects as $subject)
                 <li class="list-group-item">
                    <input type="radio" @if ($subject->id == request()->subject_id) checked @endif name="subject_id" value="{{ $subject->id }}">{{ $subject->subject_name }}
                 </li>
                @endforeach
            </ul>
          </div>

          <div class="form-group">
            <select name="mark">
              <option @if (5 == request()->mark) selected @endif>5</option>
              <option @if (4.5 == request()->mark) selected @endif>4.5</option>
              <option @if (3 == request()->mark) selected @endif>3</option>
            </select>
          </div>

        </div>
      <button type="submit" class="btn">Filter</button>
    </form>
    <br>

<form action="{{route('students.index')}}" method="GET">
  <div class="form-group">

        <div class=form-group>
          <label for="name">Input Student Name</label>
          <input type="text" name="name" value="{{ request()->name }}">
        </div>

        <div class='form-group'>
          <label for="group_id">Input Group Number</label>
          <input type="text" name="group_id"  value="{{ request()->group_id }}">
        </div>

      <button type="submit" class="btn">Filter</button>
    </div>
  </form>

</div>
