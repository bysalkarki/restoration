@extends('front.layouts.front')

@section('content')
    <x-front.breadcrumb title="blog" image="front/images/2.jpg" />
    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <!-- Title Box -->
            <div class="title-box">
                <div class="icon flaticon-clipboard"></div>
                <div class="title">Contact Details Questions Or Inquiries</div>
                <h2>Don't Be a Stranger <br> Just Say Hello.</h2>
            </div>
            <div class="row clearfix">
                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text">{{ config('settings.contactText') }}</div>
                        <h4>{{ config('settings.country') }}</h4>
                        <ul class="info-list">
                            <li class="text-capitalize"><span
                                    class="icon flaticon-maps-and-flags"></span>{{ config('settings.address') }}</li>
                            <li><span class="icon flaticon-call-1"></span><a
                                    href="tel:{{ config('settings.phone') }}">{{ config('settings.phone') }}</a></li>
                            <li><span class="icon flaticon-email-2"></span><a
                                    href="mailto:username@domain.com">{{ config('settings.email') }}</a></li>
                        </ul>

                        <ul class="social-links">
                            <li class="facebook"><a class="fab fa-facebook-f"
                                    href="{{ config('settings.facebook') }}"></a></li>
                            <li class="google"><a class="fab fa-google"
                                    href="{{ config('settings.google') }}"></a>
                            </li>
                            <li class="twitter"><a class="fab fa-twitter"
                                    href="{{ config('settings.twitter') }}"></a></li>
                            <li class="google"><a class="fab fa-youtube"
                                    href="{{ config('settings.youtube') }}"></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" id="contact-form">

                                <div class="form-group">
                                    <input type="text" name="name" id="name" placeholder="Your Name *" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Email *" required="">
                                </div>

                                <div class="form-group">
                                    <textarea class="" name="message" id="message"
                                        placeholder="Your Message *"></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                            class="txt">send message</span></button>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Page Section -->
    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="auto-container">
            <!-- Map Boxed -->
            <div class="map-boxed">
                <!--Map Outer-->
                <div class="map-outer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113020.59650060449!2d85.16326069726564!3d27.720570000000023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb193b330bff2f%3A0x7e30d64c5ce5e7ea!2sB.%20M.%20Nepal%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1696156120893!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Map Section -->
@endsection
@push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            var setNull = function() {
                $('#name').val('');
                $('#message').val('');
                $('#email').val('');
            }
            $('#contact-form').on('submit', function(e) {
                e.preventDefault();
                var route = "{{ route('contact.store') }}";
                var name = $('#name').val();
                var message = $('#message').val();
                var email = $('#email').val();

                axios.post(route, {
                        'name': name,
                        'email': email,
                        'message': message,
                        '_token': '{{ csrf_token() }}',
                    }).then(function(response) {
                        toastr.success(response.data);
                        setNull();
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            })
        })
    </script>
@endpush
