<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passport Application - Step 3</title>
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

<h5 class="h5">Step 3 of 4: Passport Details</h5>

<form class="form-group" action="{{ route('submit-passport') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="passporttype">Passport Type</label>
                    <input type="text" class="form-control" name="passporttype" required>
                </div>
                <div class="col">
                    <label for="passportnumber">Passport Number</label>
                    <input type="text" class="form-control" name="passportnumber" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="issueingcountry">Issuing Country</label>
                    <input type="text" class="form-control" name="issueingcountry" required>
                </div>
                <div class="col">
                    <label for="placeofissue">Place of Issue</label>
                    <input type="text" class="form-control" name="placeofissue" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="dateofissue">Date of Issue</label>
                    <input type="date" class="form-control" name="dateofissue" required>
                </div>
                <div class="col">
                    <label for="dateofexpire">Date of Expiry</label>
                    <input type="date" class="form-control" name="dateofexpire" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="previouspassportnumber">Previous Passport Number</label>
                    <input type="text" class="form-control" name="previouspassportnumber">
                </div>
                <div class="col">
                    <label for="countryofresidence">Country of Residence</label>
                    <input type="text" class="form-control" name="countryofresidence" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cityofresidence">City of Residence</label>
                    <input type="text" class="form-control" name="cityofresidence" required>
                </div>
                <div class="col">
                    <label for="residentialaddress">Residential Address</label>
                    <input type="text" class="form-control" name="residentialaddress" required>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save and Continue</button>
</form>

</body>
</html>
