<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Services</h2>
        <p>
        When you're a business owner, you have a lot on your plate. You have to keep track of every aspect of 
        your business—from marketing to accounting to customer service. The last thing you need is another thing to worry about! <br><br>
        But what if there was an easy way to get all of those things done? What if 
        there was a way to make sure your customers have time for everything they need from you? <br><br>
        BB is that way.
        </p>
    </div>

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

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
                <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                        <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                    </svg>
                    <i class="bx bx-arch"></i>
                </div>
                <h4><a href="">Coming Soon</a></h4>
                <p>More Services Coming, we are constantly imporving our services and adding them to cater to your needs</p>
            </div>
        </div>

    </div>

    </div>
</section><!-- End Services Section -->