
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
    <div>Add Student
    </div>
    <div class="card-body">
        <form  action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">
                <label for="birthday">Student Birthday</label>
                <input type="date" class="form-control" name="birthday"/>
            </div>
            <div class="form-group">
                <label for="group_id">Group Number</label>
                <input type="text" class="form-control" name="group_id"/>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
