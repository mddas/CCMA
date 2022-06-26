@extends("layouts.ccmamaster")
@section("contents")
            @include("ccma.background-slider")
            <div class="brand-banner">
                <img src="/ccma/img/banner/banner1.jpg">
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