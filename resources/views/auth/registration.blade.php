<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .image-section {
            background-image: url("/images/visa.jpg");
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .registration-card {
            position: absolute;
            
            top: 46%;
            left: 77%;
            transform: translate(-50%, -50%);
            background-color: #FFFFFF;
            color: #000000;
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.16);
        }

        .registration-card h4 {
            margin-top: 0;
        }

        .registration-card a {
            color: #0000FF;
            text-decoration: none;
        }

        .container-fluid {
            background-color: #C9EDEDCC;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 image-section"></div>
            <div class="col-md-6">
                <div class="registration-card">
                    <h4>Sign Up</h4>
                    <br>
                    <a href="login">Already have an account? Sign In</a>
                    <form action="{{Route('register')}}" method="post">
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
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="Submit">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
