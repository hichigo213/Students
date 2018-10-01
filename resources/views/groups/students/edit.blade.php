    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <div class="card-header">Edit Student
        </div>
        <br />
        <form method="post" action="{{route('students.update', $student->id)}}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" class="form-control" name="name" value={{$student->name}} />
            </div>
            <div class="form-group">
                <label for="birthday">Student Birthday</label>
                <input type="date" class="form-control" name="birthday" value={{$student->birthday}} />
            </div>
            <div class="form-group">
                <label for="group">Group ID</label>
                <input type="text" class="form-control" name="group_id" value={{$student->group_id}} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>