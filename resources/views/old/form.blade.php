<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=4">
    <title>form validation with Laravel
        
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="m-4">
        <form action="{{url('/')}}/form" method="POST">
            <div class="row mb-3">
                @csrf
                <label for="inputEmail" class="col-sm-1 col-form-label"><b>First name</b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail" name="fname" placeholder="First name" value="{{old('fname')}}">
                    <span class="text-danger">
                        @error('fname')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-1 col-form-label"><b>Last name</b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="lname" placeholder="Last name" value="{{old('lname')}}">
                    <span class="text-danger">
                        @error('lname')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-1 col-form-label"><b>Email</b></label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value="{{old('email')}}">
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-1 col-form-label"><b>Passsword</b></label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputEmail" name="password" placeholder="password" >

                    <span class="text-danger"> @error('password')
                        {{$message}}
                        @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-1 col-form-label"><b>Confirm Password</b></label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputEmail" name="confirm_password" placeholder="confirm password">

                    <span class="text-danger"> @error('confirm_password')
                        {{$message}}
                        @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>