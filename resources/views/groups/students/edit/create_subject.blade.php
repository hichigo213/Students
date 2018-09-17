@extends('layouts.app')

@section('content')
    <div>
        <div>Add Subject</div>
        <div class="card-body">
            <form action="{{ route('subjects.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Subject Name</label>
                    <input type="text" class="form-control" name="subject_name" />
                </div>
                <button type="submit" class="btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection