<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Improved Form</title>
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #f8f9fa;
        }
        .form-group label {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container form-container">
    <form method="POST" action="{{ route('learning.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="fathername">Father's Name</label>
            <input type="text" class="form-control" id="fathername" name="fathername" placeholder="Enter your father's name" required>
        </div>
        <div class="form-group">
            <label for="semester">Semester</label>
            <input type="text" class="form-control" id="semester" name="semester" placeholder="Enter your semester" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter your contact number" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
