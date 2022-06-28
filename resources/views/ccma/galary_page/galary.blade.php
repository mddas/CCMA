@extends("layouts.ccmamaster")
    @section("contents")
      		<!-- Banner Area Start -->
		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">   
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>
                                        @if(isset($submenuslug))
                                         {{$submenuslug}}
                                       @else
                                         {{$slug}}
                                      @endif
                                    </h2>
                                    <ul class="banner-breadcrumb">
                                      @if(isset($menuslug))
                                        <li><a href="/">HOME</a></li>
                                        <li>{{$menuslug}}</li>
                                        <li><a href="">{{$submenuslug}}</a></li>
                                      @else
                                        <li><a href="/">HOME</a></li>
                                        <li><a href=".">{{$slug}}</a></li>
                                      @endif
                                    </ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
		<!-- Banner Area End -->
        <!-- Gallery Start -->

        <!-- Gallery End -->
        <section class="pt-70">
         <div class="container">
                <div class="row">
                    <div id="filter-id" class="col-md-12 gallery">
                        <button type="button" class="btn btn-outline-black filter" data-rel="all">All</button>
                        <!---
                        <button type="button" class="btn btn-outline-black filter" data-rel="16">Picnic 2018</button>
                        <button type="button" class="btn btn-outline-black filter" data-rel="17">Event</button>
                        <button type="button" class="btn btn-outline-black filter" data-rel="15">Library</button>  
                        ---->
                    </div>
                </div>
                
                    <div class="gallery-view">
                        <div class="row" id="lightgallery"> 
            <!----------galary start-------------------------------------------------------->
                @foreach($galary_pages as $page)
                            <div class="item col-md-4 all 17" data-src="{{$page->image}}" data-sub-html="<h4>{{$page->title}}</h4>">
                                <a href="">
                                    <img src="{{$page->image}}" alt="{{$page->title}}">
                                </a>
                            </div>
                @endforeach
                 <!-------------------galary end----------->
                        </div>
                    </div>
          </div>
        </section>
        <!-- End gallery -->
        <script src="/ccma/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="/ccma/js/vendor/jquery-migrate-3.3.2.min.js"></script>
        <script src="/ccma/js/bootstrap.bundle.min.js"></script>
        <script src="/ccma/js/jquery.meanmenu.js"></script>
        <script src="/ccma/js/jquery.magnific-popup.js"></script>
        <script src="/ccma/js/ajax-mail.js"></script>
        <script src="/ccma/js/owl.carousel.min.js"></script>
        <script src="/ccma/js/jquery.mb.YTPlayer.js"></script>
        <script src="/ccma/js/jquery.nicescroll.min.js"></script>
        <script src="/ccma/js/plugins.js"></script>
        

        <!-- gllery js -->
        <script src="/ccma/js/gallery/picturefill.min.js"></script>
        <script src="/ccma/js/gallery/lightgallery.js"></script>
        <script src="/ccma/js/gallery/lg-pager.js"></script>
        <script src="/ccma/js/gallery/lg-autoplay.js"></script>
        <script src="/ccma/js/gallery/lg-fullscreen.js"></script>
        <script src="/ccma/js/gallery/lg-zoom.js"></script>
        <script src="/ccma/js/gallery/lg-hash.js"></script>
        <script src="/ccma/js/gallery/lg-share.js"></script>
        <!--End gllery js -->

        <script src="/ccma/js/main.js"></script>

        <script>
    lightGallery(document.getElementById('lightgallery'));

    $(function() {
    var selectedClass = "";
    $(".filter").click(function(){
    selectedClass = $(this).attr("data-rel");
    $("#lightgallery").fadeTo(100, 0.1);
    $("#lightgallery div").not("."+selectedClass).fadeOut().removeClass('animation');
    setTimeout(function() {
    $("."+selectedClass).fadeIn().addClass('animation');
    $("#lightgallery").fadeTo(300, 1);
    }, 300);
    });
    });
</script>

@endsection
  