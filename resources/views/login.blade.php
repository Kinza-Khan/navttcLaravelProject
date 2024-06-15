@include("header");

<section class="section white-section section-padding-top-bottom">
		
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title">
						<h3>Login Form</h3>
					</div>
				</div>
			
				<div class="clear"></div>
				@if(session('success'))
					<div style="color: green;">
						{{ session('success') }}
					</div>
				@endif

				@if(session('error'))
					<div style="color: red;">
						{{ session('error') }}
					</div>
				@endif
				<form name="" id="" action="{{ route('userLogin') }}" method="post">
					@csrf
					<div class="eight columns">
						<label for="">E-Mail:</label>
						<input name="user_email" id="" type="email" value="">
						@if ($errors->has('user_email'))
							<span class="error" id="err-email">{{ $errors->first('user_email') }}</span>
						@endif
					</div>

					<div class="eight columns">
						<label for="">Password:</label>
						<input name="user_password" id="" type="password">
						@if ($errors->has('user_password'))
							<span class="error" id="err-password">{{ $errors->first('user_password') }}</span>
						@endif
					</div>
					<div class="sixteen columns">
						<div id="button-con"><button class="send_message" id="">submit</button></div>
					</div>
				</form>	
				
				<div class="clear"></div>
				
				<div id="ajaxsuccess">Successfully sent!!</div>	
				
			</div>
			
			<div class="clear"></div>
				
</section>	
@include("footer");