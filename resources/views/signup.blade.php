@include("header")
<section class="section white-section section-padding-top-bottom">
    <div class="container">
        <div class="sixteen columns">
            <div class="section-title">
                <h3>Sign Up Form</h3>
            </div>
        </div>

        <div class="clear"></div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form name="" id="" action="{{ route('submitSignup') }}" method="post">
            @csrf
            <div class="eight columns">
                <label for="">Your Name:</label>
                <input name="user_name" id="" type="text" value="">
                {{-- @dump($errors->all()) --}}
                @error('user_name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="eight columns">
                <label for="">E-Mail:</label>
                <input name="user_email" id="" type="text" value="">
                @if ($errors->has('user_email'))
                    <span class="error" id="">{{ $errors->first('user_email') }}</span>
                @endif
            </div>

            <div class="eight columns">
                <label for="">Password:</label>
                <input name="user_password" id="" type="password">
                @if ($errors->has('user_password'))
                    <span class="error" id="">{{ $errors->first('user_password') }}</span>
                @endif
            </div>

            <div class="eight columns">
                <label for="">Confirm Password:</label>
                <input name="user_password_confirmation" id="" type="password">
                
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
@include("footer")
