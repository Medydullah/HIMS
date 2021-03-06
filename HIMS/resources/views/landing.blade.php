<!DOCTYPE html>
<html lang="en">
<head>
    <title> Universal Medical Records </title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
    </script>
    <!-- //Meta-Tags -->

    <!-- css files -->
    <link href="css/fontawesome.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/welcome.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- //css files -->

    <!-- google fonts -->
    <link href="" rel="stylesheet">


    <style>
        .form-wrapper{
            background: #eeeeee;
            padding: 0.8em;
            border: 2px solid #3498DB;
            border-radius: 0.7em;
        }

        .left-banner{
            padding: 1em;
        }

        .input-group{
            border-radius: 8px;
        }

        .login-heading{
            margin: 0;
            padding: 0.2em 1em;
            background: #3498DB;
            display: inline-block;
            color: #ffffff;
            border-top-left-radius: 0.8em;
            border-top-right-radius: 0.8em;
        }

        .logo{
            color: #fff;
            background: #3498DB;
            padding: 10px;
            border-radius: 1em;
        }

        .system-text-logo{
            font-family: 'Bree Serif', serif;
        }

        .description-p{
            font-family: 'Noto Sans', sans-serif;
            padding: 1em;
        }

        .page-activity-title{

        }
    </style>

</head>
<body>


    <div class="container-fluid">

        <!-- main content -->
        <div class="agile_info">

            <!-- LEft landing INfo -->
            <div class="w3l_form left-banner">
                <div class="left_grid_info">
                    <h1 class="system-text-logo" style="text-align: center; display: block; ">
                        <i class="fa fa-stethoscope logo"> </i>
                        HOSPITAL INFORMATION MANAGEMENT SYSTEM (HIMS) 
                    </h1>
                    <p class="description-p">
                        Integrated computerized patient medical records
                        that give all health care providers a unique
                        and clinically focused Dashboard for review of
                        all data generated by its partners.
                    </p>
                    <img src="{{ asset('images/cloud.png') }}" alt="" />
                </div>
            </div>


            <!-- Login form -->
            <div class=" w3_info" style="background: #fff">

                <div style="text-align: center">
                    <p class="login-heading"> LOGIN </p>
                </div>

                <div   class="form-wrapper">
                    <form  method="POST" action="{{ route('login') }}" >

                        {{ @csrf_field() }}
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <label>Email Address</label>
                        <div class="input-group">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        </div>

                        <label>Password</label>
                        <div class="input-group">
                            <span class="fa fa-lock" aria-hidden="true"></span>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        </div>

                        <button class="btn btn-danger btn-block" type="submit">Login</button >

                        <div class="login-check" style="margin-top: 0.8em">
                            <label class="checkbox" style="color: #000000">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                                        ><i> </i> Remember me
                            </label>
                        </div>

                        <p class="account1">Dont have an account? <a href="{{ route('user.register') }}">Register here</a></p>
                    </form>
                </div>

                <div style="padding: 0.8em 0">
                    <p style="text-align: center">
                        <a href="{{ route('health_provider.admin.login.form') }}"> Health Care Provider  </a> |
                        <a href="#"> Privacy  </a> |
                        <a href="#"> Terms  </a>
                    </p>
                </div>

            </div>
        </div>
        <!-- //main content -->
    </div>

</body>
</html>