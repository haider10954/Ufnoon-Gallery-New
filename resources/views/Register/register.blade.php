<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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
                <div class="col-md-8 col-lg-5 col-xl-5">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-body">

                            <div class="d-flex p-3">
                                <div>
                                    <a class="">
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="" height="32">
                                        <!-- <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="" height="22"> -->
                                    </a>
                                </div>
                                <div class="ms-auto text-end">
                                    <h4 class="font-size-18">Free Register</h4>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-1g-12 text-center">
                                    <p class="text-muted mb-0">Get your free Ufnoon account now.</p>
                                </div>
                            </div>
                            <div class="p-3">

                                <form class="form-horizontal">

                                    <div class="mb-3">
                                        <label class="form-label" for="useremail">Email</label>
                                        <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                    </div>

                                    <div class="mb-3">
                                        <div class="text-end">
                                            <a class="btn  w-md waves-effect waves-light text-white" type="submit" style="background:#d69460;" href="{{ route('dashboard')}}">Register</a>
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center position-relative">
                        <p class="text-white-50">Already have an account ? <a class="fw-bold text-white" href="{{ route('login')}}">Login</a> </p>
                        <p class="text-white-50"> © <script>
                                document.write(new Date().getFullYear())
                            </script> Ufnoon Gallery </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('includes.script')

</body>

</html>