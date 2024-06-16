
<form method="POST" action="{{ route('doctor.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="patient">Patient</label>
        <input type="number" class="form-control" id="patient" name="patient">
    </div>

    <div class="form-group">
        <label for="wardno">WardNo.</label>
        <input type="text" class="form-control" id="wardno" name="wardno">
    </div>
    <div class="form-group">
        <label for="disease">Disease</label>
        <input type="number" class="form-control" id="disease" name="disease">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
