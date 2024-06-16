@extends('layout')

@section('content')
    <div class="container">
        <a href="{{ route('learning.create') }}" class="btn btn-success mb-3">Create New Entry</a>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light text-white">
                    <div class="card-header bg-primary text-white text-center">CRUD</div>
                    <div class="card-body">

                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Fname</th>
                                <th scope="col">Semester</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Actions</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($learnings as $learning)
                                <tr>
                                    <td style="color: #232460;">{{ $learning->name }}</td>
                                    <td style="color: #522379;">{{ $learning->fathername }}</td>
                                    <td style="color: #105714;">{{ $learning->semester }}</td>
                                    <td style="color: #692626;">{{ $learning->contact }}</td>

                                    <td>
                                        <a href="{{ route('learning.edit', $learning->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('learning.destroy', $learning->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
