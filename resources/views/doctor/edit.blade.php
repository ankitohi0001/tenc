@extends('layout')

@section('content')
    <form method="POST" action="{{ route('doctor.update', $doctor->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $doctor->name }}">
        </div>
        <div class="form-group">
            <label for="patient">Patient</label>
            <input type="number" class="form-control" id="patient" name="patient" value="{{ $doctor->patient }}">
        </div>
        <div class="form-group">
            <label for="wardno">WardNo.</label>
            <input type="text" class="form-control" id="wardno" name="wardno" value="{{ $doctor->wardno }}">
        </div>
        <div class="form-group">
            <label for="disease">Disease</label>
            <input type="number" class="form-control" id="disease" name="disease" value="{{ $doctor->disease }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
