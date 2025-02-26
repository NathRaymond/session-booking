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
<section id="hero" class="dark-background" style="display: flex; flex-direction: column; justify-content: center; align-items: center; min-height: 100vh; text-align: center; padding: 20px; width: 100vw; box-sizing: border-box;">
    <img src="{{asset('assets/img/EZE_NWANYI_LOGO.png')}}" alt="Eze Nwanyi Logo" data-aos="fade-in" style="max-width: 90%; height: auto; object-fit: contain; ">
   
</section>
<!-- About Section -->
<section id="about" class="about section">
    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset('assets/img/appointement1.webp')}}" alt="" class="img-fluid" style="height: 510px; object-fit: cover;">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="about-content ps-0 ps-lg-3">
                    <h3 style="text-align: center; font-size:19px"> Empowerment and Growth: Transformative Coaching for Leaders and Innovators </h3>
                    <br>
                    <p style="font-size: 16px; font-family:Georgia, 'Times New Roman', Times, serif;">
                        What to Expect from Your Session

                        <!-- When you book a session with Eze Nwanyi, you can expect a tailored experience focused on achieving your unique goals. -->
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h4>Strategy and Visionary Consultation</h4>
                                <p style="text-align: justify;"> Craft a clear and compelling vision for your future. This session is designed for forward-thinking leaders who seek strategic insight and transformative ideas to shape groundbreaking initiatives and lasting impact. </p>
                            </div>
                        </li>
                        <li style="margin-top:-10px">
                            <i class="bi bi-fullscreen-exit"></i>

                            <div>
                                <h4> Leadership and Personal Development Sessions
                                </h4>
                                <p style="text-align: justify;"> Enhance your leadership excellence and personal growth. Through tailored coaching, we help you harness your strengths, overcome challenges, and inspire those around you with purpose and confidence. </p>
                            </div>
                        </li>
                        <li style="margin-top:-10px">
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h4> Business and Financial Strategy Coaching</h4>
                                <p style="text-align: justify;"> Navigate complex business landscapes with clarity and precision. Our expert-driven coaching empowers you to make informed financial decisions, optimize operations, and achieve sustainable growth and profitability.
                                </p>
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
        <h2>Why Choose Us</h2>
        <p class="lead" style="font-size: 1.2rem; color: #7f8c8d; max-width: 800px; margin: 0 auto; line-height: 1.6;">
            <b>We offer more than consultation — we offer transformation. Designed exclusively for global leaders and visionaries,
                our bespoke sessions provide strategic clarity, inspired guidance, and unparalleled insights to empower your next big move.</b>
        </p>
    </div><!-- End Section Title -->
    <div class="container">
        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item" style="background-color: #C395E4; box-shadow: 0 4px 10px rgba(100, 50, 150, 0.4);">
                    <a href="#" class="stretched-link">
                        <h3 style="color:white">Personalized Consultations</h3>
                    </a>
                    <p style="color:white">Gain exclusive access to one-on-one sessions tailored to your goals and challenges.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item" style="background-color: #C395E4; box-shadow: 0 4px 10px rgba(150, 75, 200, 0.4);">
                    <a href="#" class="stretched-link">
                        <h3 style="color:white">Leadership Strategy Sessions</h3>
                    </a>
                    <p style="color:white">Explore innovative strategies and gain insights that empower you to lead with confidence</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item" style="background-color: #C395E4; box-shadow: 0 4px 10px rgba(200, 100, 250, 0.4);">
                    <a href="#" class="stretched-link">
                        <h3 style="color:white">Customized Workshops</h3>
                    </a>
                    <p style="color:white">Book group sessions designed to address key organizational and professional needs.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item" style="background-color: #C395E4; box-shadow: 0 4px 10px rgba(180, 90, 220, 0.4);">
                    <a href="#" class="stretched-link">
                        <h3 style="color:white">Mentorship Opportunities</h3>
                    </a>
                    <p style="color:white">Connect with a visionary mentor who is committed to your personal and professional growth.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item" style="background-color: #C395E4; box-shadow: 0 4px 10px rgba(160, 80, 200, 0.4);">
                    <a href="#" class="stretched-link">
                        <h3 style="color:white">Visionary Planning Sessions</h3>
                    </a>
                    <p style="color:white">Collaborate on long-term strategies that align your vision with actionable steps for success.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item" style="background-color: #C395E4; box-shadow: 0 4px 10px rgba(220, 120, 240, 0.4);">
                    <a href="#" class="stretched-link">
                        <h3 style="color:white">Exclusive Networking Events</h3>
                    </a>
                    <p style="color:white">Join industry leaders and like-minded individuals for meaningful collaborations and opportunities.</p>
                </div>
            </div><!-- End Service Item -->

        </div><!-- End Row -->
    </div><!-- End Container -->

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
        <h2>What Our Clients Say</h2>
        <p>At Eze Nwanyi Sessions, we are proud of the positive impact we’ve made on our clients' journeys. Here's what some of them have to say about their experiences:</p>
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
                        <h3>Hon.Adedeji Mattew</h3>
                        <h4>Business Manager</h4>
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
                        <h3>Dr.John Ibiwoye</h3>
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
                        <h3>Dr.Mattew</h3>
                        <h4>Accountant</h4>
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

</section>
<section id="services" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Get in Touch</h2>
        <p class="lead" style="font-size: 1.2rem; color: #7f8c8d; max-width: 800px; margin: 0 auto; line-height: 1.6;">
            For any inquiries, support, or to schedule your session, please feel free to reach out to us. Our team is committed to providing you with world-class service.
        </p>
    </div><!-- End Section Title -->
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item" style="background-color: #C395E4; box-shadow: 0 4px 10px rgba(100, 50, 150, 0.4);">
                    <a href="#" class="stretched-link">
                        <h3 style="color:white">For Session Bookings</h3>
                    </a>
                    <p style="color:white">Interested in scheduling a session
                        with our renowned experts? You can directly book your preferred date and time
                        through our secure booking system. If you require
                        further details or assistance, don’t hesitate to
                        reach out.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item" style="background-color: #C395E4; box-shadow: 0 4px 10px rgba(150, 75, 200, 0.4);">
                    <a href="#" class="stretched-link">
                        <h3 style="color:white">For General Inquiries</h3>
                    </a>
                    <p style="color:white">Have a question about our services, platform,
                        or expert availability? We are happy to assist you.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item" style="background-color: #C395E4; box-shadow: 0 4px 10px rgba(200, 100, 250, 0.4);">
                    <a href="#" class="stretched-link">
                        <h3 style="color:white">For Business & Partnership Opportunities</h3>
                    </a>
                    <p style="color:white">If you are interested in exploring partnership
                        opportunities or collaborations, please contact our
                        business development team.</p>
                </div>
            </div>
        </div><!-- End Row -->

    </div>
</section>
<section id="contact" class="contact section">
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
                <form action="#" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <!-- <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div> -->
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section>

@endsection