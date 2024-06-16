@extends('layout')

@section('content')
    <form method="POST" action="{{ route('teacher.update', $teacher->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->name }}">
        </div>
        <div class="form-group">
            <label for="class">Class</label>
            <input type="number" class="form-control" id="class" name="class" value="{{ $teacher->class }}">
        </div>
        <div class="form-group">
            <label for="degree">Section</label>
            <input type="text" class="form-control" id="degree" name="degree" value="{{ $teacher->degree }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
