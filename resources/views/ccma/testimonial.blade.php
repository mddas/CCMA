  <!-- Testimonial Area Start -->
        <div class="testimonial-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 pt-110 pb-105 ">
                    <div class="testimonial-owl owl-theme owl-carousel">
                      <!---success student starts------>
                      @foreach($success_students as $success)
                        <div class="single-testimonial">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                    <img src="{{$success->image}}" alt="testimonial">
                                </div>
                                <div class="testimonial-content">
                                    <p>{{$success->message}}</p>
                                    <h4>{{$success->name}}</h4>
                                    <h5>{{$success->rank}}</h5>
                                </div>
                            </div>
                        </div>
                     @endforeach
                     <!------success student end--->
                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="highlight-sec">
                            <h3>CCMA <span>Highlights</span></h3>
                            <div class="highlist-list">
                                <ul>
                                @foreach($notices as $notice)
                                <li>{{$notice->title}}: {{substr($notice->discription,0,50)}} <span>{{$notice->created_at}}</span></li>
                                    <!-- <li>CA Classes with BBS Facilities.</li> -->
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->