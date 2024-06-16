@extends('layout')

@section('content')
    <form method="POST" action="{{ route('student.store') }}">
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
            <label for="section">Section</label>
            <input type="text" class="form-control" id="section" name="section">
        </div>
        <div class="form-group">
            <label for="rollno">Roll No</label>
            <input type="number" class="form-control" id="rollno" name="rollno">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
<script>
   let a =10;
    b=20;
    c=30;

    a > 9 ? console.log(11) : 'dsd' ;
    if(a > 9)
    {
       let a = 20;
        console.log("before"+a)
    }
    console.log("after block"+a)
//alert("Hello! I am an alert box!!");
</script>