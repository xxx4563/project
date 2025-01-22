@extends('layouts/app')

@section('title')
	Register
@endsection

@section('content')
	<!-- <div class="p-body-header">
		<div class="test">
			<div class="p-title ">
				<h1 class="p-title-value">Register</h1>
			</div>
		</div>
	</div> -->
	<div class="p-body-main  ">
		<div class="p-body-contentCol"></div>
		<div class="p-body-content">
			<div class="p-body-pageContent">
				<form class="block" action="{{ __('/register/register') }}" method="POST">
					@csrf
					<div class="block-container-register">
						<h1 class="p-title-value-register">Register</h1>
						<div class="block-body">
							<dl class="formRow formRow--input">
								<dt>
									<div class="formRow-labelWrapper">
										<label class="formRow-label" for="name">Username</label>
									</div>
								</dt>
								<dd>
									<input type="text" class="input" name="name" id="name" value="{{ old('name') }}" required autofocus>
									<div class="inputValidationError js-validationError"></div>
								</dd>
							</dl>
							<dl class="formRow formRow--input">
								<dt>
									<div class="formRow-labelWrapper">
										<label class="formRow-label" for="email">Email</label>
									</div>
								</dt>
								<dd>
									<input type="email" class="input" name="email" id="email" value="{{ old('email') }}" required>
								</dd>
							</dl>
							<dl class="formRow formRow--input">
								<dt>
									<div class="formRow-labelWrapper">
										<label class="formRow-label" for="password">Password</label>
									</div>
								</dt>
								<dd>
									<div data-xf-init="password-strength password-hide-show" data-show-text="Show" data-hide-text="Hide">
										<div class="inputGroup inputGroup--joined">
											<input type="password" name="password" class="input js-password input--passwordHideShow" id="password" required>
										</div>
									</div>
								</dd>
							</dl>
							<dl class="formRow formRow--input">
								<dt>
									<div class="formRow-labelWrapper">
										<label class="formRow-label" for="password_confirmation">Confirm Password</label>
									</div>
								</dt>
								<dd>
									<div data-xf-init="password-strength password-hide-show" data-show-text="Show" data-hide-text="Hide">
										<div class="inputGroup inputGroup--joined">
											<input type="password" name="password_confirmation" class="input js-password input--passwordHideShow" id="password_confirmation" required>
										</div>
									</div>
								</dd>
								@error('password_confirmation')
									<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
								@enderror
							</dl>
						</div>
						<dl class="formRow formSubmitRow">
							<dt></dt>
							<dd>
								<div class="formSubmitRow-main">
									<div class="formSubmitRow-bar"></div>
									<div class="formSubmitRow-controls">
										<button type="submit" class="button--primary-register button" id="js-signUpButton">Sign Up</button>
									</div>
								</div>
							</dd>
						</dl>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection