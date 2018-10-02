@extends('layouts.app')

@section('content')
    <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>Group ID</td>
                <td>Group Name</td>
                <td>Group Description</td>
            </tr>
            </thead>
            <tbody>
            @foreach($groups as $group)
                <tr>
                    <td>{{$group->id}}</td>
                    <td>{{$group->group_name}}</td>
                    <td>{{$group->description}}</td>
                    <td><a href="{{route('groups.edit',$group->id)}}" class="btn btn-primary">Edit</a></td>
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
@endsection