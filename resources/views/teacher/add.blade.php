@extends('layout')

@section('content')
    <form method="POST" action="{{ route('teacher.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="class">Class</label>
            <input type="number" class="form-control" id="class" name="class">
        </div>
        <div class="form-group">
            <label for="degree">Degree</label>
            <input type="text" class="form-control" id="degree" name="degree">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
