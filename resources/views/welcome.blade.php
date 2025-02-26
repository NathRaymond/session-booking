@extends("layouts.master")
@section("contents")
@section("headlinks")
<!-- <style>
    .responsive-logo {
        width: 100%;
        max-width: 500px !important;
        height: auto;
        display: block;
        margin: 0 auto;
    }
</style> -->
@endsection
<!-- Hero Section -->
<section id="hero" class="dark-background" style="display: flex; flex-direction: column; justify-content: center; align-items: center; min-height: 100vh; text-align: center; padding: 20px; width: 100vw; box-sizing: border-box;">
    <img src="{{asset('assets/img/EZE_NWANYI_LOGO.png')}}" alt="Eze Nwanyi Logo" data-aos="fade-in" style="max-width: 105%; height: auto; object-fit: contain; ">

</section>
<section id="services" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Get in Touch</h2>
        <p class="lead" style="font-size: 1.2rem; color: #7f8c8d; max-width: 800px; margin: 0 auto; line-height: 1.6;">
            For any inquiries, support, or to schedule your session, please feel free to reach out to us. Our team is committed to providing you with world-class service.
        </p>
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