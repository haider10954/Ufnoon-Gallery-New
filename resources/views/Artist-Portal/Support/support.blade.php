@extends('Artist-Portal.Layout.layout')

@section('title', 'Support')


@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Support</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="live-preview">
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="accordion custom-accordionwithicon accordion-fill-success" id="accordionFill">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accordionFillExample1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_fill1" aria-expanded="true" aria-controls="accor_fill1">
                                            Why do we use it?
                                        </button>
                                    </h2>
                                    <div id="accor_fill1" class="accordion-collapse collapse show" aria-labelledby="accordionFillExample1" data-bs-parent="#accordionFill">
                                        <div class="accordion-body">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accordionFillExample2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_fill2" aria-expanded="false" aria-controls="accor_fill2">
                                            What is Lorem Ipsum?
                                        </button>
                                    </h2>
                                    <div id="accor_fill2" class="accordion-collapse collapse" aria-labelledby="accordionFillExample2" data-bs-parent="#accordionFill">
                                        <div class="accordion-body">
                                            Long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accordionFillExample3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_fill3" aria-expanded="false" aria-controls="accor_fill3">
                                            Where does it come from?
                                        </button>
                                    </h2>
                                    <div id="accor_fill3" class="accordion-collapse collapse" aria-labelledby="accordionFillExample3" data-bs-parent="#accordionFill">
                                        <div class="accordion-body">
                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accordionFillExample4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_fill4" aria-expanded="false" aria-controls="accor_fill4">
                                            Where can I get some?
                                        </button>
                                    </h2>
                                    <div id="accor_fill4" class="accordion-collapse collapse" aria-labelledby="accordionFillExample4" data-bs-parent="#accordionFill">
                                        <div class="accordion-body">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
</div>



@endsection