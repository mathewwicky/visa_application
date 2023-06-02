<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <div class="background">
        <div class="card-container">
            <div class="card">
                <h4 class="card-header">Welcome back </h4>
            
                <div class="card-body">
                <p class="p">
                Enter your credentials to access your account
                
                    <form action="{{Route('login-user')}}" method="post">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        @csrf 
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" placeholder="example@gmail.com" name="email" value="{{old('email')}}">
                            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" placeholder="*********" name="password" value="">
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                            <div class="forgotpassword">
          <!-- Simple link -->
              <a href="#!" class="a">Forgot password?</a>
        </div>
          
                        <!-- </div> -->
                        <br>
                        <div class="login-btn">
                            <button class="btn btn-block btn-primary" type="submit">SignIn</button>
                        </div>
                        <br>
                        <a  class="a" href="registration">Don't have an account? Register Here</a>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
