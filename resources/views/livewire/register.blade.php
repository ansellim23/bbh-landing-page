<section>
    <div class="container">
        <div class="row">  
            <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <hgroup>
                    <h2>Register to enjoy our site's greatness</h2>
<!--                     <p>lorem ipsum</p>
 -->                </hgroup>
                
                <form class="log-form registration_form">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                            <script>
                                setTimeout(function(){
                                    window.location.href = '/'
                                },2000);
                            </script>
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="group log-input">
                        <input type="text" id="firstname" name="firstname" placeholder="First Name" wire:model="firstname">
                        @error('firstname')<small><span class="text-danger error">{{ $message }}</span></small>@enderror
                    </div>
                    <div class="group log-input">
                        <input type="text" id="lastname" name="lastname" placeholder="Last Name" wire:model="lastname">
                        @error('lastname')<small><span class="text-danger error">{{ $message }}</span></small>@enderror
                    </div>
                    <div class="group log-input">
                        <input type="email" id="email" name="email" placeholder="Email" wire:model="email">
                        @error('email')<small><span class="text-danger error">{{ $message }}</span><small>@enderror
                    </div>
                    <div class="group log-input">
                        <input type="text" id="mobile_number" name="mobile_number" placeholder="Mobile Number" wire:model="mobile_number">
                        @error('mobile_number')<small><span class="text-danger error">{{ $message }}</span></small>@enderror
                    </div>
                    <div class="group log-input">
                        <input type="date" id="birthday" name="birthday" placeholder="M/D/YYYY" wire:model="birthday">
                        @error('birthday')<small><span class="text-danger error">{{ $message }}</span></small>@enderror
                    </div>
                    <div class="group log-input">
                        <input type="password" id="password" name="password" placeholder="Password" wire:model="password">
                        @error('password')<small><span class="text-danger error">{{ $message }}</span></small>@enderror
                    </div>
                    <div class="group log-input">
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" wire:model="password_confirmation">
                        @error('password_confirmation')<small><span class="text-danger error">{{ $message }}</span></small>@enderror
                    </div>
                    <div class="pt-1 mb-4 text-center">
                        <a class="btn btn-lg btn-primary text-white register-now" wire:click.prevent="registerUser" wire:loading.remove>Register</a>
                        <div wire:loading>
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </form>
                <hgroup>
                    <p>Already have an account? <a href="{{ url('/login') }}" class="login-now">Login now!</a></p>
                </hgroup>
            </div>
        </div>
    </div>
</section><!-- End Register Section -->