<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Other Data - Step 4</title>
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
  <div class="step active">Step 4</div>
  <div class="step">Step 5</div>
  <div class="step">Step 6</div>
</div>
<hr>
</div>


<h5 class="h5">Step 4 of 6: Other Data</h5>

<form class="form-group" action="{{ route('submit-other-data') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="hostaddress">Host Address<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="hostaddress" required>
                </div>
                <div class="col">
                    <label for="travelhistory">Travel History<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="travelhistory" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="purposeofvisit">Purpose of Visit<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="purposeofvisit" required>
                </div>
                <div class="col">
                    <label for="dateofarrival">Date of Arrival<span style="color:red;">*</span></label>
                    <input type="date" class="form-control" name="dateofarrival" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="visapersonalized">Where to have the visa personalized<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="visapersonalized" required>
                </div>
                <div class="col">
                    <label for="durationofstay">Duration of Stay Requested<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="durationofstay" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="specifyperiod">Specify period in days, months, or years<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="specifyperiod" required>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save and Continue</button>
</form>

</body>
</html>
