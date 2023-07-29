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

<script>
    function show_visa_types() {
      var visa_category = document.getElementById("visa_category").value;
      var typeSelect = document.getElementById("visa_type");

      // Reset options in the "type" select input
      typeSelect.innerHTML = "";

      // Add corresponding types based on the selected category
      if (visa_category === "non-immigrant") {
        typeSelect.innerHTML += `
          <option value="Tourist Visa">Tourist Visa</option>
          <option value="Business Visa">Business Visa</option>
          <option value="Student Visa">Student Visa</option>
          <option value="Work Visa">Work Visa</option>
          <option value="Transit Visa">Transit Visa</option>
        `;
      } else if (visa_category === "immigrant") {
        typeSelect.innerHTML += `
          <option value="Family/Dependent Visa">Family/Dependent Visa</option>
          <option value="Spousal/Partner Visa">Spousal/Partner Visa</option>
          <option value="Refugee/Asylum Visa">Refugee/Asylum Visa</option>
          <option value="Diplomatic/Official Visa">Diplomatic/Official Visa</option>
        `;
      }
    }
      </script>

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
  <div class="step active">Step 1</div>
  <div class="step">Step 2</div>
  <div class="step">Step 3</div>
  <div class="step">Step 4</div>
  <div class="step">Step 5</div>
  <div class="step">Step 6</div>
</div>
<hr>
</div>


<h5 class="h5">Step 1 of 6: Application Visa type</h5>
<h6>Select Visa type</h6>

<form class="form-group" action="{{ route('submit') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="Visa" placeholder="*****"><b>Visa<span style="color:red;">*</span></b></label>
                    <select class="form-select" aria-label="Visa" name="Visa" required min="1" id="visa_category" onchange="show_visa_types()">
                        <option value="" disabled selected>--select--</option>
                        <option value="non-immigrant">Non-Immigrant Visas</option>
                        <option value="immigrant">Immigrant Visas</option>
                    </select>
                </div>
                <div class="col">
                    <label for="Category"><b>Category<span style="color:red;">*</span></b></label>
                    <select class="form-select" aria-label="Category" name="Category" required min="1" id="visa_type">
                        <option value="" disabled selected>________________</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
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
    <br><br><br><br>
    <button type="submit" class="btn btn-primary">Next</button>
</form>
<hr>


<footer>
    <p>Copyright &copy; 2023 - Uganda | Ware Visa Expert.&nbsp; All Rights Reserved&trade;</p>
</footer>

</body>
</html>
