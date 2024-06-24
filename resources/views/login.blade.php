@include("header");

<section class="section white-section section-padding-top-bottom">
		
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title">
						<h3>Login Form</h3>
					</div>
				</div>
			
				<div class="clear"></div>
				
				<form action="{{ route('loginUser') }}" method="post">
					@csrf
					<div class="eight columns">
						<label for="">E-Mail:</label>
						<input name="email" id="" type="email" value="">
						{{-- @if ($errors->has('user_email'))
							<span class="error" id="err-email">{{ $errors->first('user_email') }}</span>
						@endif --}}
					</div>

					<div class="eight columns">
						<label for="">Password:</label>
						<input name="password" id="" type="password">
						{{-- @if ($errors->has('user_password'))
							<span class="error" id="err-password">{{ $errors->first('user_password') }}</span>
						@endif --}}
					</div>
					<div class="sixteen columns">
						<div id="button-con"><button class="send_message" id="">submit</button></div>
					</div>
				</form>	
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
			
			<div class="clear"></div>
				
</section>	
@include("footer");