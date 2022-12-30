<section>
    <div class="container">
        <div class="row">  
            <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <hgroup>
                    <h2>Password Reset</h2>
                </hgroup>
                
                <form class="log-form">
                    @if(session()->has('message'))
                        <div class="group log-input">
                            <input type="password" id="password" name="password"  placeholder="Password" wire:model="password">
                            @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="group log-input">
                            <input type="password" id="password_confirmation" name="password_confirmation"  placeholder="Confirm Password" wire:model="password_confirmation">
                            @error('password_confirmation') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <a class="read-more btn btn-lg btn-primary text-white" wire:click.prevent="newPassword">Submit</a>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>

    </div>
</section>