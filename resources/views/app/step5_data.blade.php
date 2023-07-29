<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 5 - Other Data</title>
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
  <div class="step active">Step 5</div>
  <div class="step">Step 6</div>
</div>
<hr>
</div>

    <h5 class="h5">Step 5 of 6: Other Data</h5>

    <form class="form-group" action="{{ route('submit-step5-data') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-check">
                    <label class="form-check-label" for="denied_visa_yes"><span style="color:red;">*</span>Have you ever been denied a visa?</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input class="form-check-input" type="radio" name="denied_visa" id="denied_visa_yes" value="yes" required>YES</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input class="form-check-input" type="radio" name="denied_visa" id="denied_visa_no" value="no" required>NO</label>
                </div><br>
                <div class="form-check">
                    <label class="form-check-label" for="denied_visa_yes"><span style="color:red;">*</span>Have you ever been deported before?</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input class="form-check-input" type="radio" name="deported_before" id="deported_before_yes" value="yes" required>YES</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input class="form-check-input" type="radio" name="deported_before" id="deported_before_no" value="no" required>NO</label>
                </div><br>
                <div class="form-check">
                    <label class="form-check-label" for="denied_visa_yes"><span style="color:red;">*</span>Have you ever been convicted in any country?</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input class="form-check-input" type="radio" name="convicted_in_any_country" id="convicted_in_any_country_yes" value="yes" required>YES</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input class="form-check-input" type="radio" name="convicted_in_any_country" id="convicted_in_any_country_no" value="no" required>NO</label>
                </div><br>
                <div class="form-check">
                    <label class="form-check-label" for="denied_visa_yes"><span style="color:red;">*</span>Are there criminal proceedings against you?</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input class="form-check-input" type="radio" name="criminal_proceedings" id="criminal_proceedings_yes" value="yes" required>YES</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input class="form-check-input" type="radio" name="criminal_proceedings" id="criminal_proceedings_no" value="no" required>NO</label>
                </div><br>
                <div class="form-check">
                    <label class="form-check-label" for="denied_visa_yes"><span style="color:red;">*</span>Are you suffering from mental illness?</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input class="form-check-input" type="radio" name="mental_illness" id="mental_illness_yes" value="yes" required>YES</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input class="form-check-input" type="radio" name="mental_illness" id="mental_illness_no" value="no" required>NO</label>
                </div><br>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="information_accuracy_confirmation" id="information_accuracy_confirmation_checkbox" value="1" required>
                    <label class="form-check-label" for="information_accuracy_confirmation_checkbox">
                        I confirm that all information provided in this form is accurate and valid
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save and Continue</button>
    </form>

    <!-- Rest of the footer content -->

</body>
</html>
