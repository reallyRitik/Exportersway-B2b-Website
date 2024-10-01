<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>ExportersWay | Login to Your Exporters Way Accounts</title>
        <meta name="keywords" content="Login, Sign In, Access Account, Member Login, Secure Login, Login Portal, User Login, Account Login, Login Page, Login Credentialstr"/>
        <meta name="google-site-verification" content="AyO2_SgJ7H1RYH8StqldojMzYEgxcLeS30SQIwXvqls" />
        <meta name="description" content="Login to your exportersway.com account. New here? Explore the largest B2B marketplace for free now and expand your business network.">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="revisit-after" content="Daily days">
        <meta name="author" content="Exporters Way">
        <link rel="canonical" href="https://www.exportersway.com/"/>
		<link rel="icon" type="image/x-icon" href="{{ asset('companylogo/exportersway-logo.png')}}">
		<meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.exportersway.com/">
        <meta property="og:title" content="Exporters Way - Exporters and Suppliers in India">
        <meta property="og:description" content="Export Way - World Fastest Growing B2B Network of exporters Suppliers and importers, Indian Exporters, Buy Sell offers from India & foreign Countries.">
        <meta property="og:image" content="https://www.exportersway.com//img/VerifyBuyers.jpg">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://www.exportersway.com/">
        <meta property="twitter:title" content="Exporters Way - Exporters and Suppliers in India">
        <meta property="twitter:description" content="Export Way - World Fastest Growing B2B Network of exporters Suppliers and importers, Indian Exporters, Buy Sell offers from India & foreign Countries.">
        <meta property="twitter:image" content="https://www.exportersway.com//img/VerifyBuyers.jpg">

        <meta name="geo.region" content="IN-DL" />
        <meta name="geo.placename" content="Delhi" />
        <meta name="geo.position" content="28.694715;77.154261" />
        <meta name="ICBM" content="28.694715, 77.154261" />

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.exportersway.com/"
  },
  "headline": "Exporters Way - Indian Exporters Supplier B2B Marketplace",
  "description": "Exporters Way - Global B2B Marketplace of exporters Suppliers and importers, Indian Exporters, Buy Sell offers from India & foreign Countries.",
  "image": {
    "@type": "ImageObject",
    "url": "https://www.exportersway.com//img/VerifyBuyers.jpg",
    "width": "696",
    "height": "300"
  },
  "author": {
    "@type": "Person",
    "name": "Exporters Way"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Exporters Way",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.exportersway.com//img/logo.jpg",
      "width": "200",
      "height": "60"
    }
  },
  "datePublished": "2021-09-01",
  "dateModified": "2021-09-02"
}
</script>
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
	<img class="wave" src="{{ asset('assets/images/B2B-Business-Marketplace.png')}}">
	<div class="container">
		<div class="img">
			<!-- <img src="{{ asset('assets/images/PNG.png')}}" > -->
		</div>
		<div class="login-content">
			<form method="post" action="{{ route('login') }}">
        @csrf
      <a href="/"><img id="headerLogo" src="{{ asset('companylogo/exportersway-logo.png')}}" alt="Exportersway"></a>
      <br><br>
				<!-- <h2 class="title">Welcome</h2> -->
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Your Email</h5>
           		   		<input type="text" class="input validate"  type='email' name='email' id='email'   class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"      required autofocus  >
                    
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input validate"  type='password'  id='password' class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
           		    	 <i id="togglePassword" class="password-toggle"><i id="togglePassword" class="password-toggle">👁️</i></i>
						   <script>
    var passwordInput = document.getElementById("password");
    var togglePassword = document.getElementById("togglePassword");
    
    togglePassword.addEventListener("click", function() {
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
      } else {
        passwordInput.type = "password";
      }
    });
  </script>
            	   </div>
            	</div>
				<br>
              <label style='float: right;'>
              @if (Route::has('password.request'))
                        <a class="txt1" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password ?') }} 
                            
                        </a>
                        @endif
							</label>
            	<!-- <input type="submit" class="btn" value="Login"> -->
              <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>{{ __('Login') }}</button>
            </form>
        </div>
    </div>
    <style>
     .password-toggle {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
    }
      *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
}

.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	z-index: -1;
}

.container{
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap :7rem;
    padding: 0 2rem;
}

.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

.login-content{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	text-align: center;
}

.img img{
	width: 500px;
}

form{
	width: 360px;
	margin-left: 6vh;
}

.login-content img{
    height: 100px;
}



.login-content .input-div{
	position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #d9d9d9;
}

.login-content .input-div.one{
	margin-top: 0;
}

.i{
	color: black;
	display: flex;
	justify-content: center;
	align-items: center;
}

.i i{
	transition: .3s;
}

.input-div > div{
    position: relative;
	height: 45px;
}

.input-div > div > h5{
	position: absolute;
	left: 10px;
	top: 50%;
	transform: translateY(-50%);
	color: #999;
	font-size: 18px;
	transition: .3s;
}

.input-div:before, .input-div:after{
	content: '';
	position: absolute;
	bottom: -2px;
	width: 0%;
	height: 2px;
	background-color: #974302;
	transition: .4s;
}

.input-div:before{
	right: 50%;
}

.input-div:after{
	left: 50%;
}

.input-div.focus:before, .input-div.focus:after{
	width: 50%;
}

.input-div.focus > div > h5{
	top: -5px;
	font-size: 15px;
}

.input-div.focus > .i > i{
	color: #974302;
}

.input-div > div > input{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	border: none;
	outline: none;
	background: none;
	padding: 0.5rem 0.7rem;
	font-size: 1.2rem;
	color: black;
	font-family: 'poppins', sans-serif;
}

.input-div.pass{
	margin-bottom: 4px;
}

a{
	display: block;
	text-align: right;
	text-decoration: none;
	color: #999;
	font-size: 0.9rem;
	transition: .3s;
}

a:hover{
	color: #974302;
}

.btn{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 15px;
	outline: none;
	border: none;
	background-color: #974302;
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	margin-top: 50px;
	cursor: pointer;
	transition: .5s;
}
.btn:hover{
	background-position: right;
}


@media screen and (max-width: 1050px){
	.container{
		grid-gap: 5rem;
	}
}

@media screen and (max-width: 1000px){
	form{
		width: 290px;
		margin-bottom: 15vh;
		margin-left: 2vh;
	}

	.login-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
	}

	.img img{
		width: 400px;
	}
	.input-div > div > h5{
		color: black;
	}
	a{
		color: black;
	}
}

@media screen and (max-width: 900px){
	.container{
		grid-template-columns: 1fr;
	}
	.login-content .input-div{
		border-bottom: 2px solid #652222;
	}
	.img{
		display: none;
	}
	.login-content img {
    height: 100px;
    margin-bottom: 5vh;
}

	.wave{
		width: 150%;
    height: 81vh;
    opacity: 0.5;
    margin-left: -17vh;
	}

	.login-content{
		justify-content: center;
	}
}
    </style>
    <script>
      const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
    </script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>