 <!-- Counter Section -->
 <section class="counter-section" style="background-image: url({{$featureVideo->image}})">
     <div class="auto-container">
         <div class="row clearfix">
             <!-- Video Column -->
             @if ($featureVideo)
                 <div class="video-column col-lg-6 col-md-12 col-sm-12">
                     <div class="inner-column">
                         <a href="{{ $featureVideo->url }}" class="lightbox-image video-box"><span
                                 class="fa fa-play"><i class="ripple"></i></span></a>
                         <h2>{{ $featureVideo->title }}</h2>
                     </div>
                 </div>
             @endif <!-- Counter Column -->
             <div class="counter-column col-lg-6 col-md-12 col-sm-12">
                 <div class="inner-column">

                     <!-- Fact Counter -->
                     <div class="fact-counter">
                         <!-- Column -->
                         @foreach($counters as $counter)

                             <div class="column counter-column">
                                 <div class="inner">
                                     <div class="icon flaticon-settings"></div>
                                     <div class="content">
                                         <div class="count-outer count-box">
                                             <span class="count-text" data-speed="2500"
                                                   data-stop="{{$counter->max}}">{{$counter->min}}</span>{{$counter->prifix}}
                                         </div>
                                         <h4 class="counter-title">{{$counter->title}}</h4>
                                     </div>
                                 </div>
                             </div>
                         @endforeach


                     </div>

                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End Counter Section -->
