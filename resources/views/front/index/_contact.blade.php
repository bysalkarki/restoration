<!-- Appointment Section -->
<section class="appointment-section">
    <div class="inner-container">
        <div class="side-image">
            <img src="images/appointment.png" alt="" />
        </div>
        <div class="icon-layer-one" style="background-image: url(images/appointment-layer.png)"></div>
        <div class="icon-layer-two" style="background-image: url(images/pattern-2.png)"></div>
        <div class="sec-title">
            <h2>Book an appointment</h2>
            <div class="text">Get appointments from your website. Turn your followers into new
                clients.</div>
        </div>
        <div class="row clearfix">

            <!-- Info Column -->
            <div class="info-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <ul class="list">
                        <li class="text-capitalize">{{ config('settings.address') }}</li>
                        <li><a href="tel:{{ config('settings.phone') }}">{{ config('settings.phone') }}</a> <br> <a
                                href="mailto:{{ config('settings.email') }}">{{ config('settings.email') }}</a></li>
                    </ul>
                </div>
            </div>

            <!-- Form Column -->
            <div class="form-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Appointment Form -->
                    <div class="appointment-form">
                        <form method="post" action="">

                            <div class="form-group">
                                <input type="text" name="username" placeholder="Complate Name" required="">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" required="">
                            </div>

                            <div class="form-group">
                                <textarea class="darma" name="message" placeholder="Your Message"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                        class="txt">send message</span></button>
                            </div>

                        </form>
                    </div>
                    <!-- End Appointment Form -->

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Appointment Section -->
