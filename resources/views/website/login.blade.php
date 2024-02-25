@extends('website.web_master')
@section('content')

<main class="main">
			<div class="page-header">
				<div class="container d-flex flex-column align-items-center">
					<nav aria-label="breadcrumb" class="breadcrumb-nav">
						<div class="container">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">
									My Account
								</li>
							</ol>
						</div>
					</nav>

					<h1>My Account</h1>
				</div>
			</div>

			<div class="container login-container">
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">

		<?php if(Session::get('succes') != null) { ?>
			<div class="alert alert-info alert-dismissible" role="alert">
				<a href="#" class="fa fa-times" data-dismiss="alert" aria-label="close"></a>
				<strong><?php echo Session::get('success') ;  ?></strong>
				<?php Session::put('success',null) ;  ?>
			</div>
		<?php } ?>
		<?php
			if(Session::get('login_failed') != null) { ?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<a href="#" class="fa fa-times" data-dismiss="alert" aria-label="close"></a>
				<strong><?php echo Session::get('login_failed') ; ?></strong>
				<?php echo Session::put('login_failed',null) ; ?>
			</div>
		<?php } ?>

		@if (count($errors) > 0)
		@foreach ($errors->all() as $error)      
			<div class="alert alert-danger alert-dismissible" role="alert">
				<a href="#" class="fa fa-times" data-dismiss="alert" aria-label="close"></a>
				<strong>{{ $error }}</strong>
			</div>
		@endforeach
		@endif

								<div class="heading mb-1">
									<br><h2 class="title">Login</h2>
								</div>

								{!! Form::open(['url' =>'loginProcess','method' => 'post','role' => 'form','files' => true]) !!}
									<label for="login-email">
										Username or email address
										<span class="required">*</span>
									</label>
									<input type="email" name="email" class="form-input form-wide" id="login-email" required />

									<label for="login-password">
										Password
										<span class="required">*</span>
									</label>
									<input type="password" name="password" class="form-input form-wide" id="login-password" required />

									<div class="form-footer">
										<div class="custom-control custom-checkbox mb-0">
											<input type="checkbox" class="custom-control-input" id="lost-password" />
											<label class="custom-control-label mb-0" for="lost-password">Remember
												me</label>
										</div>

										<a href="forgot-password.html"
											class="forget-password text-dark form-footer-right">Forgot
											Password?</a>
									</div>
									<button type="submit" class="btn btn-dark btn-md w-100">
										LOGIN
									</button>
								{!! Form::close() !!}
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>
				</div>
			</div>
		</main><!-- End .main -->

@endsection
@section('script')
@if (count($errors) > 0)
@foreach ($errors->all() as $error) 
<script type="text/javascript">
	$(document).ready(function(){
		Swal.fire({
		  title: 'Error!',
		  text: 'Do you want to continue',
		  icon: 'error',
		  confirmButtonText: 'Cool'
		})
	});
</script>
@endforeach
@endif
@if(Session::get('login_failed') != null)
<script type="text/javascript">
	$(document).ready(function(){
		Swal.fire({
		  title: 'Error!',
		  text: Session::get('login_failed'),
		  icon: 'error',
		  confirmButtonText: 'Ok'
		})
	});
</script>
{{ Session::put('failed',null) }}
@endif
@endsection
