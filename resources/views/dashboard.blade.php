<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
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

        .apply-button {
            background-color: #ff0000; /* Red color */
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            align:right;
        }

        .apply-button:hover {
            background-color: #cc0000; /* Darker red color on hover */
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
            <!-- <a class="logout-button">Log Out</button> -->
            <button class="btn btn-primary"><a class="a" href="logout">Logout</a></button>
            <!-- <a  class="a" href="logout">Log out</a> -->
        </div>
    </nav>
    <div class="dashboard-content">
        <p class="underline">Application process</p>
    </div>
    <div class="steps-tracker">
        <div class="step">Step 1</div>
        <div class="step">Step 2</div>
        <div class="step">Step 3</div>
        <div class="step">Step 4</div>
        <div class="step">Step 5</div>
    </div>

    <!-- Add the apply button that redirects to the application page -->
    <div class="apply-btn">
    <hr>
      </div>
      
      <div class="d-flex justify-content-center mt-3">
        <a href="{{ route('application') }}" class="btn btn-danger">Apply Now</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
