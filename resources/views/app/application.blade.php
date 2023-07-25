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

    </style>
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
<div>
<br>
<div class="steps-tracker">
  <div class="step active">Step 1</div>
  <div class="step">Step 2</div>
  <div class="step">Step 3</div>
  <div class="step">Step 4</div>
</div>
<hr>
</div>


<h5 class="h5">Step 1 of 4: Application Visa type</h5>
<h6>Select Visa type</h6>

<form class="form-group" action="{{ route('submit') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="Visa" placeholder="*****">Visa</label>
                    <select class="form-select" aria-label="Visa" name="Visa" required min="1">
                        <option selected></option>
                        <!-- Add your visa options here -->
                        <option>Entry permit</option>
                        <option>Student Visa</option>
                        <option>Tourist Visa</option>
                        <option>Conference Visa</option>
                    </select>
                </div>
                <div class="col">
                    <label for="Category">Category</label>
                    <select class="form-select" aria-label="Category" name="Category" required min="1">
                        <option selected></option>
                        <!-- Add your visa options here -->
                        <option>3 months</option>
                        <option>4 months</option>
                        <option>6 months</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Next</button>
</form>
<hr>
<div>
    <p>Application Fee
        <span>USD 100</span>
    </p>
    <div id="page2-div3">
        Payment must be done before processing the application. This payment <b>MUST</b> be done online.
        <br>The application will not be processed until the payment is done. Please note that online payments are Non-Refundable
        and may be subjected to a surcharge fee
    </div>
</div>

<footer>
    <hr>
    <p>Copyright &copy; 2023 - Uganda | Ware Visa Expert.&nbsp; All Rights Reserved&trade;</p>
</footer>

</body>
</html>
