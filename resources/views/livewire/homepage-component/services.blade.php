<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

<!-- hom -->
    <div class="row gy-4">
        @foreach($service_data as $sv)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box iconbox-{{ get_service_icon_color($sv->service_name) }}">
                    <div class="icon">
                        {!! get_service_icons($sv->service_name) !!}
                    </div>
                    <h4><a href="">{{ $sv->service_name }}</a></h4>
                    <p>{{ $sv->service_description }}</p>
                </div>
            </div>
        @endforeach

    </div>

    </div>
</section><!-- End Services Section