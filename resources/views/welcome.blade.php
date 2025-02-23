@extends("layouts.master")
@section("contents")
@section("headlinks")
<style>
    .responsive-logo {
        width: 100%;
        max-width: 450px;
        height: auto;
        display: block;
        margin: 0 auto;
    }
</style>
@endsection
<!-- Hero Section -->
<section id="hero" class="dark-background" style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
    <img src="{{asset('assets/img/EZE_NWANYI_LOGO.png')}}" alt="" data-aos="fade-in" style="max-width: 100%; height: auto; object-fit: contain;">
</section>


<!-- About Section -->
<section id="about" class="about section">

    <div class="container">

        <div class="row gy-3">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset("assets/img/service2.jpg")}}" alt="" class="img-fluid">
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="about-content ps-0 ps-lg-3">
                    <h3> What to Expect from Your Session
                    </h3>
                    <p class="fst-italic">
                        When you book a session with Eze Nwanyi, you can expect a tailored experience focused on achieving your unique goals.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h4>Personalized Guidance</h4>
                                <p>Get advice and strategies specific to your challenges and aspirations.
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-fullscreen-exit"></i>

                            <div>
                                <h4>Actionable Insights</h4>
                                <p> Walk away with clear steps to implement in your professional or personal journey.</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h4>Confidentiality</h4>
                                <p> Trust that your discussions remain private, enabling an open and honest exchange.</p>
                            </div>
                        </li>
                    </ul>
                    <!-- <p>
                        Step into the world of visionary leadership with Eze Nwanyi,
                        the esteemed Executive Director. With a wealth of experience and a
                        passion for guiding others toward success, Eze Nwanyi offers a unique
                        opportunity for meaningful engagements that inspire growth, innovation,
                        and excellence.
                    </p> -->
                </div>

            </div>
        </div>

    </div>

</section><!-- /About Section -->

<!-- Services Section -->
<section id="services" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>What We Offer</h2>
        <p>Take the next step toward success. Book your session with Eze Nwanyi today!</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative">
                    <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                        </svg>
                        <i class="bi bi-activity"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Personalized Consultations</h3>
                    </a>
                    <p>Gain exclusive access to one-on-one sessions tailored to your goals and challenges.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item item-orange position-relative">
                    <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                        </svg>
                        <i class="bi bi-broadcast"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Leadership Strategy Sessions</h3>
                    </a>
                    <p>Explore innovative strategies and gain insights that empower you to lead with confidence</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item item-teal position-relative">
                    <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                        </svg>
                        <i class="bi bi-easel"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Customized Workshops</h3>
                    </a>
                    <p>Book group sessions designed to address key organizational and professional needs.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item item-red position-relative">
                    <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                        </svg>
                        <i class="bi bi-bounding-box-circles"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Mentorship Opportunities</h3>
                    </a>
                    <p>
                        Connect with a visionary mentor who is committed to your personal and professional growth.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item item-indigo position-relative">
                    <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                        </svg>
                        <i class="bi bi-calendar4-week icon"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Visionary Planning Sessions</h3>
                    </a>
                    <p>
                        Collaborate on long-term strategies that align your vision with actionable steps for success.
                    </p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item item-pink position-relative">
                    <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                        </svg>
                        <i class="bi bi-chat-square-text"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Problem-Solving Clinics</h3>
                    </a>
                    Address specific challenges with tailored solutions and actionable insights from a seasoned leader.
                    <p></p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div><!-- End Service Item -->

        </div>

    </div>

</section><!-- /Services Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

    <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
                <div class="text-center">
                    <h3>Ready to Transform Your Journey?
                    </h3>
                    <p>Take the first step toward unlocking your full potential. Book a session with Eze Nwanyi and
                        experience unparalleled guidance, strategic insights,
                        and transformative leadership.
                    </p>
                    <!-- <a class="cta-btn" href="{{route("session-page")}}" style="border: solid 1px white">Book a Session</a> -->
                    <a class="cta-btn" href="#" style="border: solid 1px white">Book a Session</a>
                </div>
            </div>
        </div>
    </div>

</section><!-- /Call To Action Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>At Eze Nwanyi Sessions, we are proud of the positive impact we’ve made on our clients' journeys.
            Here’s what some of them have to say about their experiences with Eze Nwanyi:</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                        },
                        "1200": {
                            "slidesPerView": 3,
                            "spaceBetween": 1
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Eze Nwanyi’s insights have been invaluable to my career. The strategic advice I received not only helped me lead my team more effectively but also guided me through complex decision-making processes. Every session is a step toward growth."
                            </span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="{{asset("assets/img/testimonials/testiomial-avatar.png")}}" class="testimonial-img" alt="">
                        <h3>Saul John</h3>
                        <h4>Ceo &amp; Founder</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Eze Nwanyi’s mentorship has been a turning point in my leadership journey. She brings clarity, vision, and actionable strategies that make all the difference.
                                I leave every session feeling empowered and ready to tackle new challenges.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="{{asset("assets/img/testimonials/testiomial-avatar.png")}}" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Booking a session with Eze Nwanyi was one of the best professional decisions I’ve made.
                                Her leadership philosophy and approach are unparalleled, and the guidance
                                I received has helped me scale my business and overcome challenges.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="{{asset("assets/img/testimonials/testiomial-avatar.png")}}" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>I’ve worked with several business coaches, but none compare to the profound impact
                                Eze Nwanyi has had on my personal and professional development.
                                Her sessions are transformative, and the level of expertise she offers is second to none</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="{{asset("assets/img/testimonials/testiomial-avatar.png")}}" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>The personalized approach Eze Nwanyi offers made a world of difference for me.
                                She took the time to understand my goals and provided clear, practical advice that has had an
                                immediate positive effect on my work.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="{{asset("assets/img/testimonials/testiomial-avatar.png")}}" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Testimonials Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>We’re here to assist you! Whether you have questions about booking a session,
            need more information, or want to share feedback, feel free to reach out. Our team
            is committed to providing you with the best possible experience.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-4">

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+1 (504) 335-5668</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>Ezenwanyi@gmail.com</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="col-lg-8">
                <form action="#" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->
@endsection