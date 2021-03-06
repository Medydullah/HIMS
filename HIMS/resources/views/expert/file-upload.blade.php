<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title {{ config('app.name', 'Laravel') }} -->
    <title>Pharmacist</title>
<!-- Scripts {{ config('app.name', 'Laravel') }} -->
<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Scripts {{ config('app.name', 'Laravel') }} -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/widgets.css') }}" rel="stylesheet">

    <style>
    .permission-group {
        border-left: 6px Solid #ddd690;
        padding-top: 0.5em;
        padding-bottom: 0.5em;
        background: #fff8b3;
        margin: 0.2em 0.4em 1em 0.2em;
        border-top-right-radius: 1em;
    }

    /*** Left Nav ***/
    .nav-link.active {
        background: #D1F2EB !important;
        border-color: #D1F2EB !important;
    }

    .logo-text {
        text-align: center;
        color: #fff;
    }

    .section-divider {
        height: 2px;
        background: #dddddd;
        margin-top: 4em
    }

    .section-heading {
        background: #dddddd;
        margin-bottom: 1em;
        display: inline-block;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
    }

    .section-heading h5 {
        color: #414141;
        padding: 4px 1em;
        margin: 0
    }

    .new-employee-wrapper {
        padding: 1em;
        border: 2px dashed #cccccc;
        background: #f4f4f1;
        margin-top: 2em;
    }

    .content-wrapper {
        padding: 1em;
        border-left: 1px solid #cccccc;
        border-right: 1px solid #cccccc;
        border-bottom: 1px solid #cccccc;
    }

    .list-wrapper {
        padding: 1em;
    }

    .navbar-nav {

        /*background: #ffa23b;*/
    }

    .nav-item-heading {
        border-bottom: 1px solid #fff8b3;
        border-bottom-left-radius: 8px;
        color: #fff;
        padding: 0.2em;
        margin-top: 1em;
        width: 100%;

    }

    .left-menu-link {
        color: #eeeeee !important;
    }

    /*** [[End]] Left Nav ***/
    </style>
</head>


<body>

    <body style="background:  #e6ecf0; width:100%">

                <body style="background:  #e6ecf0">

<div id="app">
    <div class="container-fluid">
        <div class="row">

            @include('expert.components.left-nav')

            <div class="col-lg-9" style="padding-left:0; padding-right: 0;">

                @include('expert.components.top_nav')

                        <div class="container">

                                        <div class="card" style="margin:5px;">
                                            <!-- HealthCare provider heading -->
                                            <div class="card-header">
                                                <form action="{{route('pharmacist.upload.file')}}" method="post"
                                                    enctype="multipart/form-data">
                                                    <h3 class="text-center mb-5">Upload Report to Admin</h3>
                                                    @csrf
                                                    @if ($message = Session::get('success'))
                                                    <div class="alert alert-success">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                    @endif

                                                    @if (count($errors) > 0)
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif

                                                    <div class="custom-file">
                                                        <input type="file" name="file" class="custom-file-input"
                                                            id="chooseFile" >
                                                        <label class="custom-file-label" for="chooseFile">Select
                                                            file</label>
                                                    </div>

                                                    <button type="submit" name="submit"
                                                        class="btn btn-primary btn-block mt-4">
                                                        Upload Files
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>

                    </div>
                </div>

                <script type="application/javascript">
                    $('input[type="file"]').change(function(e){
                        var fileName = e.target.files[0].name;
                        $('.custom-file-label').html(fileName);
                    });
                </script>

</html>
