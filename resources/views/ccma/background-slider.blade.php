 <section id="slider-container" class="slider-area"> 
            <div class="slider-owl owl-theme owl-carousel"> 
                <!-- Start Slingle Slide -->
            @foreach($slidders as $slidder)
                <div class="single-slide item" style="background-image: url({{$slidder->image}})">
                    <!-- Start Slider Content -->
                    <div class="slider-content-area">  
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-offset-left-5"> 
                                    <div class="slide-content-wrapper">
                                        <div class="slide-content">
                                            <h3>Achieving Excellence</h3>
                                            <h2>Together</h2>
                                            <p>CCMA College is an accredited institution for CA professional studies by the Institute of Chartered Accountants of Nepal (ICAN). </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Slingle Slide -->	
            @endforeach    		
            </div>
        </section>
		<!-- Background Area End -->