 <section class="notice-area pt-70 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="introduce">
                            <div class="introduce-left mb-25 pb-25">
                                <h3>{{$institute->name ?? ''." "}}<span>Introduction</span></h3>
                                <p class="mb-15">{{$institute->discription ?? ''}}</p>
                                <a href="#" class="red-button">Read More</a>
                            </div>
                            <iframe width="460" height="380" src="https://www.youtube.com/embed/TXutpEyJG_Q" frameborder="0" allowfullscreen="" data-gtm-yt-inspected-9="true"></iframe>   
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="notice-right">
                            <h3>News & <span>Notices</span></h3>
                            <!------notice------------>
                            @foreach($notices as $notice)
                                <div class="single-notice-right mb-25 pb-25">
                                    <h4>{{$notice->title ?? ''}}: {{substr($notice->discription ?? '',0,50)}} <span>{{$notice->created_at ?? ''}}</span></h4>
                                </div>
                            @endforeach
                            <!------------notice end--------------->
                        </div>
                    </div>
                </div>
            </div>
        </section>