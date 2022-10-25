<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Softing - Software Landing Page">


    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('assets/js/html5/html5shiv.min.js') }}"></script>
      <script src="{{ asset('assets/js/html5/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body>
    <div id="contact" class="contact-us-area">
        <div class="pricing-item">
            <ul>
                <li class="pricing-header">
                    <h2 style="font-size: 30px;">Schedule a Brief Meeting to Discuss</h2>
                    @if (Session::has('success'))
                        <p style="font-size: 20px; color: green;padding-top: 20px;">{!! Session('success') !!}</p>
                    @endif
                </li>
                <form action="{{ route('freequotesend') }}" class="free-quote" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <input type="text" class="form-control" placeholder="Your Name"name="name">
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <input type="text" class="form-control" placeholder="Phone Number" name="phone">
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <input type="email" class="form-control" placeholder="Email Address" name="email">
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <input type="text" class="form-control" placeholder="Facebook Page/Website Url"
                                name="url">
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <select name="mainservice" id="mainservice" class="form-control" rel="2">
                                <option value="" style="display: none" selected>Select Services</option>
                                @foreach ($frontServices as $service)
                                    @if ($service->parent_id == null)
                                        <option value="{{ $service->id }}" rel="{{ $service->id }}"
                                            class="mainservice"> {{ $service->title }}</option>
                                    @endif
                                @endforeach


                            </select>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <select name="subservice" id="subservice" class="form-control">


                            </select>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *" rows="5"></textarea>
                        </div>
                    </div>
                    <li class="footer">
                        <button class="btn circle btn-theme border btn-sm">Send</button>
                    </li>
                </form>

            </ul>
        </div>
    </div>



    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script>
        $(document).ready(function() {

            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#mainservice').on('change', function() {
                var mainId = this.value;
                alert(mainId);
                $("#subservice").html('');
                $.ajax({
                    type: 'get',
                    url: '/submain/' + mainId,
                    success: function(response) {
                        $('#subservice').html('<option value="all">Selecet All</option>');

                        $.each(response, function(key, value) {
                            $('#subservice').append('<option value="' + value
                                .id + '">' + value.title + '</option>');
                        });


                    },
                    error: function(error) {

                    }
                });
            });

            /*------------------------------------------
            --------------------------------------------
            State Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
        });
    </script>

</body>

</html>
