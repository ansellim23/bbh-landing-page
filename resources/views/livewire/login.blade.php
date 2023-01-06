<section>
    <div class="container">
        <div class="row">  
            <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <hgroup>
                    <h2>Welcome back!</h2>
                    <p>Please enter your details to sign into your account</p>
                </hgroup>
                
                <form class="log-form">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                            <script>
                                setTimeout(function(){
                                    window.location.href = '/u/dashboard'
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
                        <input type="email" id="email" name="email" placeholder="Email" wire:model="email">
                        @error('email')<small><span class="text-danger error">{{ $message }}</span></small>@enderror
                    </div>

                    <div class="group log-input">
                        <input type="password" id="password" name="password"  placeholder="Password" wire:model="password">
                        @error('password')<small><span class="text-danger error">{{ $message }}</span></small>@enderror
                    </div>
                    <div class="remember_info">
                    <small><input type="checkbox" name="remember_me" id="remember_me" wire:model="remember_me"> Remember Me</small><br><br>
                    <div class="pt-1 mb-4">
                        <a class="read-more btn btn-lg btn-primary text-white" wire:click.prevent="login" wire:loading.remove>Login</a>
                        <div wire:loading>
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                    
                    <small><a href="{{ url('forgot-password') }}" class="forgot-password">Forgot Password?</a></small><br><br>
                </div>
                </form>
                <hgroup>
                    <p>Don't have an account? <a href="{{ url('/register') }}" class="register-now">Register now!</a></p>
                </hgroup>
            </div>
        </div>

    </div>
</section>