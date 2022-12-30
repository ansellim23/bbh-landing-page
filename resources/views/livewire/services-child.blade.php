<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="{{ url()->previous() }}">Home</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/portfolio-1.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/portfolio-2.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{ $service_child_data->service_child_name; }}</h3>
              <ul>
                <li><strong>Category</strong>: {{ $service_child_data->service_child_name; }}</li>
                <!-- <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Description</h2>
              <p>
                {{ $service_child_data->service_child_description }}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->