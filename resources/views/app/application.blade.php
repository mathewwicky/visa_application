<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <img src="/images/log.png" alt="Logo">
    <button class="btn btn-primary">Logout</button>
  </div>
</nav>

<div>
    <h5 class="h5">Step 1 of 4: Application Visa type</h5>
    <h6>Select Visa type</h6>
</div>

<form class="form-group" action="/submit" method="POST">
@csrf
   <div class="card">
      <div class="card-body">
         <div class="row">
            <div class="col">
               <label for="Visa" placeholder="*****">Visa</label>
               <select class="form-select" aria-label="Visa" name="Visa" required min="1" >
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
   <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<div>
<p>Application Fee
   <span>USD  100</span></p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
//    $(document).ready(function() {
//    // Validate the Visa field
//    $('#visa').on('change', function() {
//       if (this.value == '') {
//          alert('Please select a visa type.');
//       }
//    });

//    // Validate the Category field
//    $('#category').on('change', function() {
//       if (this.value == '') {
//          alert('Please select a category.');
//       }
//    });
// });
</script>
</body>
</html>
