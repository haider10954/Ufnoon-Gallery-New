<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @include('includes.style')
</head>

<body style="background: #d69460;">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div class="account-pages mt-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5 col-xl-4">
                    <div class="card shadow-lg p-3 mb-5 bg-white roundedshadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-body">

                            <div class="d-flex align-items-center p-2">
                                <div>
                                    <a class="">
                                        <img src="{{ asset('assets/images/Logo-dark.png') }}" alt="" height="40">
                                        <!-- <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="" height="22"> -->
                                    </a>
                                </div>
                                <div class="ms-auto text-end">
                                    <h4 class="font-size-18">Welcome Back !</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1g-12 text-center">
                                    <p class="text-muted mb-0">Sign in to continue to Ufnoon.</p>
                                </div>
                            </div>
                            <div class="p-3">

                                <form class="form-horizontal">

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="customControlInline">
                                                <label class="form-check-label" for="customControlInline">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <a class="btn w-md waves-effect waves-light text-white" type="submit" href="{{ route('dashboard')}}" style="background:#d69460;">Log In</a>
                                        </div>
                                    </div>

                                    <div class="mb-0 row">
                                        <div class="col-12 mt-4 text-center">
                                            <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center position-relative">
                        <p class="text-white-50"> © <script>
                                document.write(new Date().getFullYear())
                            </script> Ufnoon Gallery.
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('includes.script')
</body>

</html>