@extends("layouts.ccmamaster")
@section("contents")
            @include("ccma.background-slider")
            <div class="brand-banner">
                <img src="{{$banners->image}}" ><!--style="height:188px;"---1351x188 or 1351x223
            </div>
            <!-- Notice Start--->
                @include("ccma.notice")
            <!-- Notice End ------>
            <!----Message from --->
                @include("ccma.message-from")
            <!----Message end----->
            <!----Student Rank---->
                @include("ccma.student-rank")
            <!----student rank end--->
            <!-- Testimonial Area Start -->
                @include("ccma.testimonial")
            <!-- Testimonial Area End -->
            <!---footer start------>
@endsection