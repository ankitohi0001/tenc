@extends('layout')

@section('content')
    <form method="POST" action="{{ route('practice.update', $practice->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $practice->name }}">
        </div>
        <div class="form-group">
            <label for="class">Class</label>
            <input type="number" class="form-control" id="class" name="class" value="{{ $practice->class }}">
        </div>
        <div class="form-group">
            <label for="section">Section</label>
            <input type="text" class="form-control" id="section" name="section" value="{{ $practice->section }}">
        </div>
        <div class="form-group">
            <label for="rollno">Roll No</label>
            <input type="number" class="form-control" id="rollno" name="rollno" value="{{ $practice->rollno }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
