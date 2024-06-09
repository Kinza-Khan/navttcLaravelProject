@include("header");
<section class="section white-section section-padding-top-bottom">
		
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title">
						<h3>Sign Up Form</h3>
					</div>
				</div>
			
				<div class="clear"></div>
				
				<form name="" id="ajax-form" action="" method="post">
					<div class="eight columns">
						<label for="name"> 
							<span class="error" id="err-name">please enter name</span>
						</label>
						<input name="name" id="name" type="text"   placeholder="Your Name: *"/>
					</div>
					<div class="eight columns">
						<label for="email"> 
							<span class="error" id="err-email">please enter e-mail</span>
							<span class="error" id="err-emailvld">e-mail is not a valid format</span>
						</label>
						<input name="email" id="email" type="text"  placeholder="E-Mail: *"/>
					</div>
					<div class="eight columns">
						<label for="password"> 
							<span class="error" id="err-name">please enter Password</span>
						</label>
						<input name="password" id="password" type="password"   placeholder="Password: *"/>
					</div>
					<div class="eight columns">
						<label for="confirm_password"> 
							<span class="error" id="err-email">Confirm Password</span>
							<span class="error" id="err-emailvld">e-mail is not a valid format</span>
						</label>
						<input name="confirm_password" id="confirm_password" type="password"  placeholder="Confirm Password: *"/>
					</div>
					<div class="sixteen columns">
						<div id="button-con"><button class="send_message" name="submitSignup" id="send">submit</button></div>
					</div>
					<div class="clear"></div>	
					<div class="error text-align-center" id="err-form">There was a problem validating the form please check!</div>
					<div class="error text-align-center" id="err-timedout">The connection to the server timed out!</div>
					<div class="error" id="err-state"></div>
				</form>	
				
				<div class="clear"></div>
				
				<div id="ajaxsuccess">Successfully sent!!</div>	
				
			</div>
			
			<div class="clear"></div>
				
		</section>	
@include("footer");