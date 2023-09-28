
        <!-- Business Section -->
        <section class="business-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="{{$director->where('key','directorLogo')->first()['value']}}" alt="" />
                            </div>
                            <div class="image-two">
                                <img src="{{$director->where('key','directorLogo1')->first()['value']}}" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h2>Message From The Director</h2>
                            <div class="text">
                                <p>{!! $director->where('key','header')->first()['value'] !!}</p>
                            </div>
                            <div class="founder">
                                {!! $director->where('key','founder')->first()['value'] !!}
                                <span class="signature"><img src="{{$director->where('key','signature')->first()['value']}}" alt="" /></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Business Section -->
