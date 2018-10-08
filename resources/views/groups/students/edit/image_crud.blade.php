@if ($photo === null )
<div class="container">
  <div>
    <img src="/public/storage/avatar.png" class="img-thumbnail">
  </div>
  <form enctype="multipart/form-data" action="{{route('photos.store')}}" method="POST">
    <div class="form-group">
      @csrf
      <input type="hidden" name="student_id" value="{{ $student->id }}">
      <input type="file" name="file" id="file" required>
      <button type="submit">Загрузить</button>
    </div>
  </form>
</div>
@else
<div  class="container">
  <img src="/public/storage/{{$photo->photo}}" class='img-thumbnail'>
    <form enctype="multipart/form-data" action="{{route('photos.update', $photo->id)}}" method="POST">
      <div class="form-group">
        @method('PUT')
        @csrf
        <input type="hidden" name="student_id" value="{{ $student->id }}">
        <input type="file" name="file" id="file" required>
        <button type="submit">Обновить</button>
      </div>
    </form>
</div>
@endif
