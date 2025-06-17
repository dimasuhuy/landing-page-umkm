<!doctype html>
<html lang="en">
  <head>
  	<title>Side House Coffe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{asset('img/logo-removebg.png')}}" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('user/login.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<img style="object-fit: cover; min-height:auto; height: 424px; width: -webkit-fill-available;" src="{{ asset('img/login.png') }}">
								{{-- <h2>Welcome to login</h2> --}}
								{{-- <p>Don't have an account?</p>
								<a href="#" class="btn btn-white btn-outline-white">Sign Up</a> --}}
								{{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTddh5KSjMVRt-ZUeLxxHVrwgvFlcSJIjuxjw&s"> --}}
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<a href="{{ route('index') }}" class="mb-4" style="font-family: fangsong; font-weight: bold; font-size:1.75rem; color:black">Side House Coffe</a>
			      		</div>
								{{-- <div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div> --}}
			      	</div>
					<form method="POST" action="{{ route('post-login') }}" class="signin-form">
					@csrf
						<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="email" class="form-control" placeholder="Username" name="email" value="{{ old('email') }}" required>
			      		</div>
						<div class="form-group mb-3">
							<label class="label" for="password">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="password" required>
						</div>
						@if ($errors->any())
							<div class="mb-3 mx-auto" style="color:red;">
								{{ $errors->first() }}
							</div>
						@endif
						<div class="form-group">
							<button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
						</div>
		            {{-- <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div> --}}
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('user/jquery.min.js') }}"></script>
	<script src="{{ asset('user/popper.js') }}"></script>
	<script src="{{ asset('user/bootstrap.min.js') }}"></script>
	<script src="{{ asset('user/main.js') }}"></script>

	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"939d1033a93a68de","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.4.0-1-g37f21b1","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>

