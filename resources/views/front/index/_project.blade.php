      <!-- Cases Section -->
      <section class="cases-section" style="background-image: url(images/bg1.jpg)">
          <div class="auto-container">
              <!-- Sec Title -->
              <div class="sec-title centered">
                  <div class="circle-box"></div>
                  <div class="title">SEE WHAT WE DO</div>
                  <h2>Projects</h2>
              </div>
              <div class="row clearfix">
                  @foreach ($notices as $notice)
                      <!-- Case Block -->
                      <div class="case-block col-lg-6 col-md-12 col-sm-12">
                          <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                              <div class="pattern-layer" style="background-image: url(front/images/pattern-1.png)">
                              </div>
                              <div class="image">
                                  <img src="{{ $notice->image }}" alt="" />
                                  <div class="overlay-box">
                                      <div class="box-inner">
                                          <h4><a href="#">{{ $notice->title }}</a></h4>
                                          <div class="text">{{ $notice->description }}</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endforeach

              </div>

              <!-- Button Box -->
              <div class="button-box text-center">
                  <a href="services.html" class="theme-btn btn-style-one"><span class="txt">view all
                          cases</span></a>
              </div>

          </div>
      </section>
      <!-- End Cases Section -->
