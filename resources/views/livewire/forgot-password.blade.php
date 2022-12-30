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
                        <input type="email" id="email" name="email"  placeholder="Email Address" wire:model="email">
                    </div>
                    <a class="read-more btn btn-lg btn-primary text-white" wire:click.prevent="sendEmailForgot">Submit</a>
                </form>
                <hgroup>
                    <p>Don't have an account? <a href="{{ url('/register') }}">Register now!</a></p>
                </hgroup>
            </div>
        </div>

    </div>
</section>