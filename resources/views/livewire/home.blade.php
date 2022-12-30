@section('hero-banner')
<div class="vid_show">
    <div class="desktop_view_vid">
        <div class="row justify-content-center">
        <video class="hero-video" playsinline="1" autoplay="1" muted="1" loop="1">
            <source src="{{ asset('vids/BBH_Desktop_720.mp4') }}" type="video/mp4">
        </video>
        </div>
    </div>
    <div class="mobile_view_vid">
        <div class="row justify-content-center">
            <video class="hero-video" playsinline="1" autoplay="1" muted="1" loop="1">
                <source src="{{ asset('vids/BBH_Mobile_480.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>
</div>
@endsection

<livewire:homepage-component.about/>
<livewire:homepage-component.counts/>
<livewire:homepage-component.services/>
<livewire:homepage-component.features/>
<livewire:homepage-component.faq/>
<livewire:homepage-component.contact/>
