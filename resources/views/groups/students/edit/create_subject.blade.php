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
    <h3>Add Subject</h3>
    <div class="card-body">
        <form action="{{ route('subjects.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="subject_name">Subject Name</label>
                <input type="text" class="form-control" name="subject_name" />
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
