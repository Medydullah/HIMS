<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title {{ config('app.name', 'Laravel') }} -->
    <title>Pharmacist</title>

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




<body style="background:  #e6ecf0">

    <div id="app">


        @include('expert.components.drug_top_nav')
        <!-- ==================add menu ====================================== -->
        <div>
            <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h4>
                            <i class="fa fa-plus"> </i>
                            Add Drug using Excell file

                        </h4>
                <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                    <div class="custom-file text-left">
                        <input type="file" name="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <button class="btn btn-primary">Import data</button>
                <a class="btn btn-success" href="{{ route('file-export') }}">Export data</a>
            </form>

<br><br>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hce.pharmacy.add.drug.form') }}">
                        <i class="fa fa-user-plus"></i>
                        Add drugs
                    </a>
                </li>

            </ul>
        </div>



        <table class="table">
            <thead>
                <div style="float:right">
                    <a href="{{ route('drug_pdf',['download'=>'pdf']) }}" class="btn btn-success mb-2" >Export PDF</a>
                    </div>
                <tr>
                    <th>S/N</th>
                    <th>Stock No</th>
                    <th>Stock Date</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Total Price</th>
                    <th>Packets No</th>
                    <th>Expire Date</th>
                </tr>
            </thead>
            <tbody>



                @foreach( $drugs as $drug )
                <tr class="table-success">
                <td>{{ $drug->id }}</td>
                    <td>{{ $drug->stock_no }}</td>
                    <td>{{ $drug->stock_date }}</td>
                    <td>{{ $drug->drug_id}}</td>
                    <td>{{ $drug->drug_name }}</td>
                    <td>{{ $drug->price}}</td>
                    <td>{{ $drug->packet_no }}</td>
                    <td>{{ $drug->expire_date}}</td>

                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
