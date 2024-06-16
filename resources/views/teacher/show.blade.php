@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark text-white">
                    <div class="card-header bg-primary text-white text-center">Teacher List</div>
<a href="{{url('/student')}}">Student Data</a>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Degree</th>
                                    <th scope="col">Actions</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teachers as $teacher)      
                                    <tr>
                                        <td style="color: white;">{{ $teacher->name }}</td>
                                        <td style="color: white;">{{ $teacher->class }}</td>
                                        <td style="color: white;">{{ $teacher->degree }}</td>
                                        <td>
                                            <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" style="display: inline;">
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
