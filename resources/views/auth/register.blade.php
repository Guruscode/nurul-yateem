
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url("admin_assets/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url("admin_assets/css/sb-admin-2.min.css")}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-0 col-lg-12 col-md-1">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create An account</h1>
                                    </div>
                                    <form action="{{ route('register.save')}}" method="POST" class="user">
                                        @csrf

                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error )
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>

                                        </div>
                                            
                                        @endif
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input name="firstname" type="text" class="form-control form-control-user @error('firstname')is-invalid @enderror "  id="exampleFirstName"
                                                    placeholder="First Name">
                                                    @error('firstname')
                                                        <span class="invalid-feedback">{{$message}}</span>
                                                    @enderror
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="lastname" type="text" class="form-control form-control-user @error('lastname')is-invalid @enderror " id="exampleLastName"
                                                    placeholder="Last Name">
                                                    @error('lastname')
                                                    <span class="invalid-feedback">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user  @error('email')is-invalid @enderror "
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                                @error('email')
                                                <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input name="password" type="password" class="form-control form-control-user  @error('password')is-invalid @enderror "
                                                id="exampleInputPassword" placeholder="Password">
                                                @error('password')
                                                <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="password_confirmation" type="password" class="form-control form-control-user  @error('password_confirmation')is-invalid @enderror"
                                                    id="exampleRepeatPassword" placeholder="Repeat Password">
                                                    @error('password_confirmation')
                                                    <span class="invalid-feedback">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-sm-10">
                                            <select name="user_type" class="form-control mr-10" aria-label="Default select example">
                                                <option selected>----ACCOUNT TYPE----</option>
                                                <option  value="2">Sponsor</option>
                                                <option value="3">Guidian</option>
                                              </select>
                                        </div>
                                    </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                                    
                                       
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{route('login')}}"> Already have an account?? SIgn in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>