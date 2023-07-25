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
    <!-- <a class="logout-button">Log Out</button> -->
    <button class="btn btn-primary" ><a  class="a" href="logout">Logout</a></button>

    <!-- <a  class="a" href="logout">Log out</a> -->
  </div>
</nav>
<div class="dashboard-content">
    <p class="underline">Application process</p>
  </div>
  <div class="steps-tracker">
  <div class="step active">Step 1</div>
  <div class="step">Step 2</div>
  <div class="step">Step 3</div>
  <div class="step">Step 4</div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>