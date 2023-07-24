<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar">
    <div class="navbar-left">
        <span><img src="/images/log.png" alt="Logo"></span>
    </div>
    <div class="navbar-right">
        <button class="btn btn-primary"><a class="a" href="logout">Logout</a></button>
    </div>
</nav>

<h5 class="h5">Step 2 of 4: Personal Data</h5>

<form class="form-group" action="{{ route('submit-personal-data') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="Given_name">Given Name</label>
                    <input type="text" class="form-control" name="Given_name" required>
                </div>
                <div class="col">
                    <label for="SurName">Surname</label>
                    <input type="text" class="form-control" name="SurName" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="DateOfBirth">Date of Birth</label>
                    <input type="date" class="form-control" name="DateOfBirth" required>
                </div>
                <div class="col">
                    <label for="Gender">Gender</label>
                    <select class="form-select" aria-label="Gender" name="Gender" required>
                        <option selected></option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="MartialStatus">Marital Status</label>
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
                    <label for="PhoneNumber">Phone Number</label>
                    <input type="text" class="form-control" name="PhoneNumber" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" name="Email" required>
                </div>
                <div class="col">
                    <label for="ConfirmEmail">Confirm Email</label>
                    <input type="email" class="form-control" name="ConfirmEmail" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="CountryOfResidence">Country of Residence</label>
                    <input type="text" class="form-control" name="CountryOfResidence" required>
                </div>
                <div class="col">
                    <label for="CurrentResidenceAddress">Current Residence Address</label>
                    <input type="text" class="form-control" name="CurrentResidenceAddress" required>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save and Continue</button>
</form>

</body>
</html>
