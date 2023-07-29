<!-- resources/views/app/document_upload.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Documents - Step 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <style>
        .steps-tracker {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #f1f1f1;
  padding: 10px;
  border-radius: 5px;
}

.step {
  flex: 1;
  text-align: center;
  padding: 10px;
  background-color: #ccc;
  border-radius: 5px;
}

.step.active {
  background-color: #007bff;
  color: #fff;
}

    </style>
</head>
<body>
<img src="images/flag.png" width="100%" height="9px">
<nav class="navbar">
    <div class="navbar-left">
        <span><img src="/images/log.png" alt="Logo"></span>
    </div>
    <div class="navbar-right">
        <button class="btn btn-primary"><a class="a" href="logout">Logout</a></button>
    </div>
</nav>
<div>
<br>
<div class="steps-tracker">
  <div class="step">Step 1</div>
  <div class="step">Step 2</div>
  <div class="step">Step 3</div>
  <div class="step">Step 4</div>
  <div class="step">Step 5</div>
  <div class="step active">Step 6</div>
</div>
<hr>
</div>

<h5 class="h5">Step 6 of 6: Upload Documents</h5>

<form class="form-group" action="{{ route('submit-document-upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-body"><br>
            <div class="form-group">
                <label for="passport"><b>Upload Passport<span style="color:red;">*</span></b></label>
                <input type="file" class="form-control" name="passport" required>
            </div><br>
            <div class="form-group">
                <label for="vaccination_certificate"><b>Upload Vaccination Certificate<span style="color:red;">*</span></b></label>
                <input type="file" class="form-control" name="vaccination_certificate" required>
            </div><br>
            <div class="form-group">
                <label for="passport_photo"><b>Upload Recent Passport Photo<span style="color:red;">*</span></b></label>
                <input type="file" class="form-control" name="passport_photo" required>
            </div><br><br>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit Application</button>
</form>
</body>
</html>
