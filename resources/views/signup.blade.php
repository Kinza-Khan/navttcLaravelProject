@include("header")
<section class="section white-section section-padding-top-bottom">
    <div class="container">
        <div class="sixteen columns">
            <div class="section-title">
                <h3>Sign Up Form</h3>
            </div>
        </div>

        <div class="clear"></div>
        
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="eight columns">
                <label for="">Your Name:</label>
                <input name="name" id="" type="text" value="">
                {{-- @error('user_name')
                    <span class="error">{{ $message }}</span>
                @enderror --}}
            </div>

            <div class="eight columns">
                <label for="">E-Mail:</label>
                <input name="email" id="" type="text" value="">
                {{-- @if ($errors->has('user_email'))
                    <span class="error" id="">{{ $errors->first('user_email') }}</span>
                @endif --}}
            </div>

            <div class="eight columns">
                <label for="">Password:</label>
                <input name="password" id="" type="password">
                {{-- @if ($errors->has('user_password'))
                    <span class="error" id="">{{ $errors->first('user_password') }}</span>
                @endif --}}
            </div>

            <div class="eight columns">
                <label for="">Confirm Password:</label>
                <input name="password_confirmation" id="" type="password">
                
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
</section>	
@include("footer")
