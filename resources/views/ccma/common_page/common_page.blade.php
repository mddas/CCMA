		       <!----this is common page---->
       @extends("layouts.ccmamaster")

        @section("contents")
      		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">   
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>About Us</h2>
                                    <ul class="banner-breadcrumb">
                                        <li><a href="index.html">Home</a></li>
                                        <li>About</li>
                                    </ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!---banner Area end ----> 
        <!-- About Start -->

        <div class="about-area pt-70 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="side-menu">
                            <ul>
                                @foreach($common_pages as $data)
                                    <li><a href="{{route('menu',$slug)}}/?id={{$data->id}}" @if($random->id==$data->id) class="active" @endif>{{$data->title}}</a></li>
                                @endforeach
                                <!-- <li><a href="message.html" class="active">Message Form Chirman</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!---------------------------->
                        <div class="about-content">
                            <h2>{{$random->title ?? ''}}</h2>
                            <div class="row">
                                <div class="col-md-8">
                                    <p>{{$random->discription ?? ''}}</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="message-person-img">
                                        <img src="{{$random->image ?? ''}}">
                                    </div>
                                    <div class="pesonal-detail">
                                    <h3 class="name">{{$random->title ?? ''}}</h3>
                                    <!-- <<h5 class="post">FCA Chairman</h5> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----------------------------->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        @endsection