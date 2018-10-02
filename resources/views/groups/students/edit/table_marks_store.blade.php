<div>
    <table class="table table-striped">
            <tbody>
                @foreach($subjects as $subject)
                    <td>
                        <div>
                            <h2>{{$subject->subject_name}}</h2>
                            <form action="{{route('marks.store')}}" method="POST">
                                <input type="hidden" name="student" value="{{ $student->id  }}">
                                <input type="hidden" name="subject" value="{{ $subject->id  }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                <select name="mark">
                                    <option value="" selected="selected"></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </td>
                @endforeach
            </tbody>
    </table>
</div>
