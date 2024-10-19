

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ExportersWay |  | Register company | Signup Business Online</title>
      <meta name="keywords" content="Signup, Register, Join Now , Create Account, Sign Up Form, New Member, Registration, Join Free, Start Now, Get Started, Become a Member, Sign Up Page, Gmail Signup "/>
        <meta name="description" content="Access your exportersway.com account. New here? Sign up for free now and explore the largest B2B marketplace to expand your business network. ">
   <link rel="icon" type="image/x-icon" href="{{ asset('companylogo/exportersway-logo.png')}}">
  <link href="{{ asset('assets/css/register.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
  
<div class="content-wrapper">
        <div class="content">
            <div class="signup-wrapper shadow-box">
                <div class="company-details ">
                  
                    <div class="shadow"></div>
                    <div class="wrapper-1">
                        <div class="logo">
       <div class="icon-food">
         
                    </div>
                        </div>
                        <h1 class="title">welcome To</h1>
                        <div class="slogan">Exportersway</div>
                    </div>

                </div>
                <div class="signup-form ">
                    <div class="wrapper-2">
                        <div class="form-title">Sign up today!</div>
                        <div class="form ">
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                                <p class="content-item">
                                    <label>Your Name
                                        <input id="name" type="text" class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus  required>
                                        <span class="focus-input100"></span>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                                    </label>
                                </p>

                                <p class="content-item">
                                    <label>Your Email
                                        <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="E-Mail Address">
                                        <span class="focus-input100"></span>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                                    </label>
                                </p>
                                <p class="content-item">
                                    <label>Your Number
                                        <input id="number" type="text"  name="mobile" required placeholder=" Your Number">
                                        <span class="focus-input100"></span>
                        @if ($errors->has('mobile'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
                        @endif
                                    </label>
                                </p>

                                <p class="content-item">

                                    <label>password
                                        <input type="password" placeholder="*****" name="password" id="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                        <span class="focus-input100"></span>
                         @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                                    </label>
                                </p>
                                <p class="content-item">
                                <label>password
                                <div class="wrap-input100 validate-input" data-validate="Password">
                       <input id="password-confirm" type="password"  name="password_confirmation" required placeholder="Confirm Password" class="input100">
                       <span class="focus-input100"></span>
                      
                    </div>
                    </label>
                                </p>


                                <button type="submit"  class="signup" style="cursor:pointer">{{ __('Register') }} </button>
                                <a href="{{url('login')}}" class="login">login</a>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</body>
</html>