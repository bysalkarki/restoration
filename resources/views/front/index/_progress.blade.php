  <!-- Progress Section -->
  <section class="progress-section">
    <div class="icon-layer-one" style="background-image: url(images/icon-3.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Title Box -->
                    <div class="title-box">
                        <div class="title"><span class="circle"></span>Annual Progression
                        </div>
                        <h2>{{$progress->where('key','header')->first()['value']}}</h2>
                        <div class="text">{!! $progress->where('key','description')->first()['value']!!}</div>
                    </div>

                    <!-- Skills -->
                    <div class="skills">

                        <!-- Skill Item -->
                       @foreach($progressCounter as $pro)
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">{{$pro->title}}/div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="{{$pro->min}}">
                                            <div class="skill-percentage">
                                                <div class="count-box"><span class="count-text"
                                                                             data-speed="2000" data-stop="{{$pro->max}}">0</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       @endforeach


                    </div>

                </div>
            </div>
            <!-- Images Column -->
            <div class="images-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="icon-layer-two" style="background-image: url({{$progress->where('key','background1')->first()['value']}})"></div>
                    <div class="icon-layer-three" style="background-image: url({{$progress->where('key','background2')->first()['value']}})"></div>
                    <div class="icon-layer-four" style="background-image: url({{$progress->where('key','background3')->first()['value']}})"></div>
                    <div class="image">
                        <img src="{{$progress->where('key','image1')->first()['value']}}" alt="" />
                    </div>
                    <div class="image-two">
                        <img src="{{$progress->where('key','image2')->first()['value']}}" alt="" />
                    </div>
                    <div class="image-three">
                        <img src="{{$progress->where('key','image3')->first()['value']}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Progress Section -->
