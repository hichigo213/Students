@extends('layouts.app')

@section('content')
    <div>
        <div>Add Group
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('groups.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Group Name</label>
                    <input type="text" class="form-control" name="group_name" />
                </div>
                <div class="form-group">
                    <label for="birthday">Group Description</label>
                    <input type="text" class="form-control" name="description" />
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection