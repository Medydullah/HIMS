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
     
        .permission-group{
            border-left: 6px Solid #ddd690;
            padding-top: 0.5em;
            padding-bottom: 0.5em;
            background: #fff8b3;
            margin: 0.2em 0.4em 1em 0.2em;
            border-top-right-radius: 1em;
        }

        /*** Left Nav ***/
        .nav-link.active{
            background: #D1F2EB !important;
            border-color:#D1F2EB !important ;
        }

        .logo-text{
            text-align: center;
            color: #fff;
        }
        .section-divider{
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

        .section-heading h5{
            color: #414141;
            padding: 4px 1em;
            margin: 0
        }

        .new-employee-wrapper{
            padding: 1em;
            border: 2px dashed #cccccc;
            background: #f4f4f1;
            margin-top: 2em;
        }

        .content-wrapper{
            padding: 1em;
            border-left: 1px solid #cccccc;
            border-right: 1px solid #cccccc;
            border-bottom: 1px solid #cccccc;
        }

        .list-wrapper{
            padding: 1em;
         }

        .navbar-nav{

            /*background: #ffa23b;*/
        }
        .nav-item-heading{
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
                                @if(  $editMode=='none' )
                                              <div class="content-wrapper" style="background: #f8fafc;">
                                                  <div class="list-wrapper">

                                                          <div>
                                                              <div>
                                                                  <ul class="nav">
                                                                      <li class="nav-item">
                                                                          <a class="nav-link"
                                                                             href="#">
                                                                              <i class="fa fa-ambulance"></i>
                                                                              Add Drugs
                                                                              </a>
                                                                      </li>

                                                                  </ul>
                                                              </div>
                                           


<!--  =====================================Drug stock===================================== -->

                                    <div class="content-wrapper" style="background: #f8fafc;">
                                        <div class= "list-wrapper">

                                                
                                                              <table class="table">
                                                                  <thead>
                                                                  <tr>
                                                                      <th>S/N</th>
                                                                      <th>Stock No</th>
                                                                      <th>Stock Date</th>
                                                                      <th>Name</th>
                                                                      <th>Total Price</th>
                                                                      <th>Packets No</th>
                                                                      <th>Tablets No</th>
                                                                      <th>Expire Date</th>
                                                                                                                                                                        </tr>
                                                                  </thead>
                                                                  <tbody>



                                                                  @foreach( $drugs as $drug )
                                                                      <tr class="table-success">
                                                                          <td>{{ $drug->id }}</td>
                                                                          <td>{{ $drug->name }}</td>
                                                                          <td>{{ $drug->email }}</td>
                                                                          <td>{{ $drug->qualification }}</td>
                                                                          <td>{{ $drug->id }}</td>
                                                                          <td>{{ $drug->name }}</td>
                                                                          <td>{{ $drug->email }}</td>
                                                                          <td>{{ $drug->qualification }}</td>
                                                                         
                                                                          </td>
                                                                          
                                                                          </tr>
                                                            @endforeach

                                                            </tbody>
                                                              </table>
                                                          </div>
                                                      @endif

                                                      @if( $editMode=='new_doctor' )
                                                      <!-- New Employee -->
                                                          <form method="POST" action="" >

                                                              {{ @csrf_field() }}
                                                              <input name="active_tab" type="hidden" value="{{ $activeTab }}">
                                                              <input name="expert_id" type="hidden" value="{{ $selectedDrugs->id }}">

                                                              <div class="card col-md-10 offset-1 new-employee-wrapper">

                                                                  <div>
                                                                      <h4>
                                                                           <i class="fa fa-user-plus"> </i>
                                                                              New Drug
                                                                          @endif


                                                                          <a class="btn btn-sm btn-danger float-right"
                                                                             href="#">
                                                                              <i class="fa fa-times-circle"> </i>  Cancel
                                                                          </a>
                                                                      </h4>
                                                                  </div>
                                                                   <div class="card-body">

                                                                      <!-- New Employee Validation -->
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
                                                                      </div>
                  

                                                                      <div class="card-body">

                        <!-- ==================New Drug Validation===================== -->
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
                                                                               </div>
<!-- ========== =================== Add NEw Drug Form================================== -->
                                                                         <div class="section-divider" style="margin-top: 1em" >
                                                                      </div>
                                                                      <div class="section-heading">
                                                                          <h5>
                                                                              <i class="fa fa-user-circle"> </i>
                                                                            New Drug
                                                                          </h5>
                                                                      </div>

                                                                      <!--1.1 Full Name -->
                                                                      <div class="form-group row">
                                                                          <label for="name" class="col-md-4 col-form-label text-md-right">Drug Name</label>

                                                                          <div class="col-md-8">
                                                                              <input id="name" type="text" class="form-control"
                                                                                     placeholder=" "
                                                                                     name="name" value="" required autofocus>
                                                                          </div>
                                                                      </div>

                                                                      <!--1.2 Email -->
                                                                      <div class="form-group row">
                                                                          <label for="email" class="col-md-4 col-form-label text-md-right">Stock No</label>

                                                                          <div class="col-md-8">
                                                                              <input id="email" type="text" class="form-control"
                                                                                     placeholder=""
                                                                                     name="stock_no" value=""  required autofocus>
                                                                          </div>
                                                                      </div>

                                                                      <!--1.2 Phone -->
                                                                      <div class="form-group row">
                                                                          <label for="phone" class="col-md-4 col-form-label text-md-right">Stock Date</label>

                                                                          <div class="col-md-8">
                                                                              <input id="phone" type="text" class="form-control"
                                                                                     placeholder=" "
                                                                                     name="phone" value="" required autofocus>
                                                                          </div>
                                                                      </div>

                                                                      <!--1.3 Employment ID -->
                                                                      <div class="form-group row">
                                                                          <label for="employment_id" class="col-md-4 col-form-label text-md-right">
                                                                              Employment ID N<u>o</u>
                                                                          </label>

                                                                          <div class="col-md-8">
                                                                              <input id="employment_id" type="text" class="form-control"
                                                                                     placeholder=" "
                                                                                     name="employment_id" value="" required >
                                                                          </div>
                                                                      </div>

                                                                      <!--1.4 Qualification -->
                                                                      <div class="form-group row">
                                                                          <label for="qualification" class="col-md-4  col-form-label text-md-right">Qualification</label>

                                                                          <div class="col-md-8">
                                                                              <input id="qualification" type="text" class="form-control"
                                                                                     placeholder=", "
                                                                                     name="qualification" value=""  >
                                                                          </div>
                                                                      </div>

                                                                      <!--1.5 Specialization -->
                                                                      <div class="form-group row">
                                                                          <label for="specialization" class="col-md-4 col-form-label text-md-right">
                                                                              Specialization
                                                                          </label>

                                                                          <div class="col-md-8">
                                                                              <input id="specialization" type="text" class="form-control"
                                                                                     placeholder=""
                                                                                     name="specialization" value="" >
                                                                          </div>
                                                                      </div>















  
                                                                          
