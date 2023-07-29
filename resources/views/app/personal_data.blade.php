<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Data</title>
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
  <div class="step active">Step 2</div>
  <div class="step">Step 3</div>
  <div class="step">Step 4</div>
  <div class="step">Step 5</div>
  <div class="step">Step 6</div>
</div>
<hr>
</div>

<h5 class="h5">Step 2 of 6: Personal Data</h5>

<form class="form-group" action="{{ route('submit-personal-data') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="Given_name">Given Name<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="Given_name" required>
                </div>
                <div class="col">
                    <label for="SurName">Surname<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="SurName" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="DateOfBirth">Date of Birth<span style="color:red;">*</span></label>
                    <input type="date" class="form-control" name="DateOfBirth" required>
                </div>
                <div class="col">
                    <label for="Gender">Gender<span style="color:red;">*</span></label>
                    <select class="form-select" aria-label="Gender" name="Gender" required>
                        <option selected></option>
                        <option>Male</option>
                        <option>Female</option>
                        <!-- <option>Other</option> -->
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="MartialStatus">Marital Status<span style="color:red;">*</span></label>
                    <select class="form-select" aria-label="MartialStatus" name="MartialStatus" required>
                        <option selected></option>
                        <option>Single</option>
                        <option>Married</option>
                        <option>Divorced</option>
                        <option>Widowed</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="col">
                    <label for="PhoneNumber">Phone Number<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="PhoneNumber" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="Email">Email<span style="color:red;">*</span></label>
                    <input type="email" class="form-control" name="Email" required>
                </div>
                <div class="col">
                    <label for="ConfirmEmail">Confirm Email<span style="color:red;">*</span></label>
                    <input type="email" class="form-control" name="ConfirmEmail" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="CountryOfResidence">Country of Residence<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="CountryOfResidence" required>
                </div>
                <div class="col">
                    <label for="CurrentResidenceAddress">Current Residence Address<span style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="CurrentResidenceAddress" required>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save and Continue</button>
</form>

</body>
</html>
