@extends('layouts/app')

@section('title')
	Login
@endsection

@section('content')
	<!-- <div class="p-body-header">
		<div class="test">
			<div class="p-title ">
				<h1 class="p-title-value p-title-login">Login</h1>
			</div>
		</div>
	</div> -->
	<div class="p-body-main">
		<div class="p-body-contentCol"></div>
		<div class="p-body-content">
			<div class="p-body-pageContent">
				<div class="blocks">
					<form class="block" action="{{ __('/login/login') }}" method="POST">
						@csrf
						<div class="block-container-login">
							<h1 class="p-title-value-login">Login</h1>
							<div class="block-body">
								<dl class="formRow formRow--input">
									<dt>
										<div class="formRow-labelWrapper">
											<label class="formRow-label" for="email">User name or email address</label>
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
										<div data-xf-init=" password-hide-show" data-show-text="Show" data-hide-text="Hide">
											<div class="inputGroup inputGroup--joined">
												<input type="password" name="password" class="input js-password input--passwordHideShow" id="password" required>
												
											</div>
										</div>
										<a class="link-forgot" href="{{ __('/forgot-password') }}" data-xf-click="overlay">Forgot your password?</a>
									</dd>
								</dl>
								<dl class="formRow">
									<dt>
										<div class="formRow-labelWrapper"></div>
									</dt>
									<dd>
										<ul class="inputChoices">
											<li class="inputChoices-choice">
												<label class="iconic">
													<input type="checkbox" name="remember" value="1" checked="checked">
													<i aria-hidden="true"></i>
													<span class="iconic-label">Remember me</span>
												</label>
											</li>
										</ul>
									</dd>
								</dl>
							</div>
							<dl class="formRow formSubmitRow">
								<dt></dt>
								<dd>
									<div class="formSubmitRow-main">
										<div class="formSubmitRow-bar"></div>
										<div class="formSubmitRow-controls">
											<button type="submit" class="button--primary-login button button--icon button--icon--login">
												<span class="button-text">Login</span>
											</button>
										</div>
									</div>
								</dd>
							</dl>
						</div>
						<div class="block-outer block-outer--after">
							<div class="block-outer-middle">
								Don't you have an account yet?
								<a href="{{ __('/register/') }}" class="button-login">
									<span class="button-text">Sign Up</span>
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection