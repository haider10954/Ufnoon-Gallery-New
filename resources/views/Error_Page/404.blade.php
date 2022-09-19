<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
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
                    <div class="card">
                        <div class="card">

                            <div class="ex-page-content text-center">
                                <h1 class="">4<i class="mdi mdi-emoticon-sad-outline text-primary error-icon align-bottom"></i>4!</h1>
                                <h4 class="fw-bolder">Sorry, page not found</h4><br>

                                <a class="btn btn-info mb-5 waves-effect waves-light" href="{{ route('dashboard')}}"><i class="mdi mdi-home"></i> Back to Dashboard</a>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center position-relative">
                        <p class="text-white-50"> © <script>
                                document.write(new Date().getFullYear())
                            </script> Ufnoon Gallery</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('includes.script')
</body>

</html>