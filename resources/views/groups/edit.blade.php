@extends('layouts.app')

@section('content')
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
        <div class="card-header">Add Group
        </div>
        <br />
        <div class="card-body">
            <form method="post" action="{{ route('groups.update', $group->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Group Name</label>
                    <input type="text" class="form-control" name="group_name" value={{$group->group_name}} />
                </div>
                <div class="form-group">
                    <label for="birthday">Group Description</label>
                    <input type="text" class="form-control" name="description" value={{$group->description}} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection