<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modern Multiple Select Dropdown</title>

<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />

<!-- Bootstrap CSS (optional, for styling) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery (required for Select2) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

<!-- Bootstrap JS (optional, for styling) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Optional: Select2 Bootstrap 4 theme -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap4-theme/1.0.2/select2-bootstrap4.min.css" rel="stylesheet" />

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    .form-label {
        font-weight: bold;
    }
</style>
</head>
<body>

<div class="container">
    <h1>Modern Multiple Select Dropdown</h1>
    <div class="form-group">
        <label for="selectIndustries" class="form-label">Select Industries</label>
        <select id="selectIndustries" class="form-control" multiple>
            <option value="Technology">Technology</option>
            <option value="Finance">Finance</option>
            <option value="Healthcare">Healthcare</option>
            <option value="Education">Education</option>
            <option value="Hospitality">Hospitality</option>
            <!-- Add more options as needed -->
        </select>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#selectIndustries').select2({
        theme: 'bootstrap4' // Apply Bootstrap 4 theme for a modern look
    });
});
</script>

</body>
</html>
