@extends('layouts.app')

@section('title')
	Users
@endsection

@section('content')
	<div class="p-body-header">
		<div class="test">
			<div class="p-title ">
				<h1 class="p-title-value">Users</h1>
			</div>
		</div>
	</div>
	<div class="p-body-main">
		<div class="p-body-contentCol"></div>
		<div class="p-body-content">
			<div class="p-body-pageContent">
				<div>
					<h2>{{ Auth::user()->name }}</h2>
					<p>{{ Auth::user()->email }}</p>
					<p>
						Registration: 
						<small>{{ Auth::user()->created_at }}</small>
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection