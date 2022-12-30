@if(empty(auth()->user()->email_verified_at))
<section>
    <div class="container">
        <div class="row">  
            <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <hgroup>
                    <h2>Account not verified</h2>
                </hgroup>
                
                <form class="log-form">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                            <script>
                                setTimeout(function(){
                                    window.location.href = '/u/dashboard'
                                },5000);
                            </script>
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <p>
                        Please Verify you account click the button below to resend an email to verify you account.
                    </p>
                    <div class="pt-1 mb-4">
                        <a class="read-more btn btn-lg btn-primary text-white" wire:click.prevent="resendEmail" wire:loading.remove>Resend Verification Email</a>
                        <div wire:loading>
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
@endif

@if(!empty(auth()->user()->email_verified_at))
<section style="background-color: #eee;">
    <div class="container py-5">
        <!-- <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
                </nav>
            </div>
        </div> -->
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
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{ !empty(auth()->user()->profile_picture) ? asset('storage/'.auth()->user()->profile_picture) : 'https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp' }}" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{ auth()->user()->firstname.' '.auth()->user()->lastname }}</h5>
                        <!-- <p class="text-muted mb-1">Full Stack Developer</p>
                        <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> -->
                        <div class="d-flex justify-content-center mb-2">
                            <div class="form-group">
                                <input type="file" class="form-control" id="profile_picture" name="profile_picture" wire:model="profile_picture" />
                                @error('profile_picture')<small><span class="text-danger error">{{ $message }}</span></small>@enderror
                                <button type="button" class="btn btn-primary" wire:click.prevent="uploadImage">Update Profile Picture</button>
                            </div>
                            <!-- <button type="button" class="btn btn-outline-primary ms-1">Message</button> -->
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <div class="text-center">
                            <h5 class="my-3">Change Password</h5>
                        </div>
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <input type="password" name="old_password" id="old_password" placeholder="Current Password" wire:model="old_password">
                                @error('old_password')<small><span class="text-danger error">{{ $message }}</span></small>@enderror
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <input type="password" name="password" id="password" placeholder="New Password" wire:model="password">
                                @error('password')<small><span class="text-danger error">{{ $message }}</span></small>@enderror
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm New Password" wire:model="password_confirmation">
                                @error('password_confirm')<small><span class="text-danger error">{{ $message }}</span></small>@enderror
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <button class="btn btn-lg btn-success" wire:click.prevent="changePassword">Submit</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fas fa-globe fa-lg text-warning"></i>
                                <p class="mb-0">https://mdbootstrap.com</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                <p class="mb-0">@mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">First Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    <input type="text" id="firstname" name="firstname" placeholder="First Name" wire:model="firstname">
                                    @error('firstname')<small><span class="text-danger error">{{ $message }}</span><small>@enderror
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Last Name</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="lastname" name="lastname" placeholder="Last Name" wire:model="lastname">
                                @error('lastname')<small><span class="text-danger error">{{ $message }}</span><small>@enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="email" id="email" name="email" placeholder="Email Address" wire:model="email">
                                @error('email')<small><span class="text-danger error">{{ $message }}</span><small>@enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Birthday</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="date" id="birthday" name="birthday" placeholder="Birthday" wire:model="birthday">
                                @error('birthday')<small><span class="text-danger error">{{ $message }}</span><small>@enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Contact Number</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="contact_number" name="contact_number" placeholder="Contact Number" wire:model="contact_number">
                                @error('contact_number')<small><span class="text-danger error">{{ $message }}</span><small>@enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="address" name="address" placeholder="Address" wire:model="address">
                                @error('address')<small><span class="text-danger error">{{ $message }}</span><small>@enderror
                            </div>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary" wire:click.prevent="updateInfo">Update Profile Info</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
