
    <form method="POST" action="{{ route('practice .store') }}">
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
