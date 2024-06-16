@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark text-white">
                    <div class="card-header bg-primary text-white text-center">Doctor List</div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Patient</th>
                                <th scope="col">WardNo</th>
                                <th scope="col">Disease</th>
                                <th scope="col">Actions</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($doctors as $doctor)
                                <tr>
                                    <td style="color: #e87373;">{{ $doctor->name }}</td>
                                    <td style="color: #643e83;">{{ $doctor->patient }}</td>
                                    <td style="color: #79af7c;">{{ $doctor->wardno }}</td>
                                    <td style="color: #484646;">{{ $doctor->disease }}</td>

                                    <td>
                                        <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('doctor.destroy', $doctor->id) }}" method="POST" style="display: inline;">
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
