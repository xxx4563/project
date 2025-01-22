@extends('layouts/app')

@section('title')
	Profile
@endsection

@section('content')
	<div class="p-body-header">
		<div class="test">
			<div class="p-title ">
				<h1 class="p-title-value">Profile</h1>
			</div>
		</div>
	</div>
	<div class="p-body-main  p-body-main--withSideNav">
		<div class="p-body-sideNavCol"></div>
		<div class="p-body-contentCol"></div>
		<div class="p-body-content">
			<div class="p-body-pageContent">
				<div class="block">
					<div class="block-container-grid">
						<div class="block-body">
							<div class="productList-grid items-per-row-4">
							<h1>@ {{ Auth::user()->id }}</h1>
                                <h2>{{ Auth::user()->name }}</h2>
                                <p>{{ Auth::user()->email }}</p>
                                <p>
                                    Registration: 
                                    <small>{{ Auth::user()->created_at }}</small>
                                </p>
							</div>
						</div>
					</div>
					<div class="block-outer block-outer--after block-outer--pagination">
						<div class="block-outer-main">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection