@if ($photo === null )
<div>
    <img src="/public/storage/avatar.png">
</div>
<div>
    <form enctype="multipart/form-data" action="{{route('photos.store')}}" method="POST">
        @csrf
        <input type="hidden" name="student_id" value="{{ $student->id }}">
        <input type="file" name="file" id="file" required>
        <button type="submit">Загрузить</button>
    </form>
</div>
@else
    <img src="/public/storage/{{$photo->photo}}">
        <div>
            <form enctype="multipart/form-data" action="{{route('photos.update', $photo->id)}}" method="POST">
                @method('PUT')
                @csrf
                <input type="hidden" name="student_id" value="{{ $student->id }}">
                <input type="file" name="file" id="file" required>
                <button type="submit">Обновить</button>
            </form>
        </div>
@endif