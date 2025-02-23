@extends("layouts.master")
@section("contents")

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <img src="{{asset("assets/img/service1.webp")}}" alt="" data-aos="fade-in">

    <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <br><br><br>
                <h2 style="font-size:45px;">Book Your Personalized Session</h2>
                <p>
                    A meaningful conversation awaits. Reserve your session with Eze Nwanyi now.</p>
                <!-- <a href="{{route("session-page")}}" class="btn-get-started"  style="border: solid white !important;">Book a Session</a> -->
                <a href="#" class="btn-get-started"  style="border: solid white !important;">Book a Session</a>
            </div>
        </div>
    </div>

</section><!-- /Hero Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Transformative Sessions, Just a Click Away</h2>
        <p>
            Fill out the form and take the first step toward growth and transformation.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-12">
                <form class="magicFormSubmit" action="{{ route('session.booking.add') }}"
                    method="POST" data-nextaction="reload">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="fullname" class="form-control" placeholder="Your Fullname" required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number" required="">
                        </div>
                        <div class="col-md-6 ">
                            <input type="text" class="form-control" name="country" placeholder="Your Country" required="">
                        </div>
                        <div class="col-md-6 ">
                            <input type="text" class="form-control" name="state" placeholder="Your State" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="session-topic" class="form-control" placeholder="Topic/Reason for the Session" required="">
                        </div>

                        <div class="col-md-6 ">
                            <select class="form-control" id="sessionType" name="session_type">
                                <option selected disabled>Session Type</option>
                                @foreach($sessiontypes as $sessiontype)
                                <option
                                    class="form-control"
                                    value="{{ $sessiontype->id }}"
                                    data-price="{{ $sessiontype->session_price ?? 0 }}">
                                    {{ $sessiontype->session_name ?? '' }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2">$</span>
                                <input type="text" id="sessionPrice" name="session_price" class="form-control" placeholder="Session Price" readonly>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-success"
                                style="background-color: #C395E4 !important; width:150px">Submit</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section>
@endsection
@section('scripts')
@include('admin-components.magic-submit')
@include('components.sessionOnchange')
@endsection