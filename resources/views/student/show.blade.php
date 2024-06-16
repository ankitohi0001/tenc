    @extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark text-white">
                    <div class="card-header bg-primary text-white text-center">Student List</div>
<a href="{{url('/teacher')}}">Teacher Data</a>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Roll No</th>
                                    <th scope="col">Actions</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td style="color: white;">{{ $student->name }}</td>
                                        <td style="color: white;">{{ $student->class }}</td>
                                        <td style="color: white;">{{ $student->section }}</td>
                                        <td style="color: white;">{{ $student->rollno }}</td>
                                        
                                        <td>
                                            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display: inline;">
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
