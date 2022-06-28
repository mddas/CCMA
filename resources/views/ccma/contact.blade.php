         
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
                                        <li><a href="/">Home</a></li>
                                        <li>Contact</li>
                                    </ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!---banner Area end ----> 
        <!-- Contact Start -->
        <div class="contact-area pt-70 pb-70"> 
            <div class="container">     
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="contact-contents text-center">
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="img/contact/contact1.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>address</h3>
                                    <p>New Plaza Marga (North of Singha Durbar)</p>
                                    <p>Putalisadak, Kathmandu</p>
                                </div>
                            </div>
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="img/contact/contact2.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>phone</h3>
                                    <p><a href="tel:97714438197">+977-1-4438197</a></p>
                                    <p><a href="tel:9774542044">+977-4-542044</a></p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <img src="img/contact/contact3.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>mail</h3>
                                    <p><a href="mailto:ccma2003@gmail.com">ccma2003@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="col-lg-7 col-md-7">
                        <div class="reply-area">
                            <h3>Contact Us</h3>
                            <form id="contact-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Name</p>
                                        <input type="text" name="con_name">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Email</p>
                                        <input type="text" name="con_email">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Phone</p>
                                        <input type="text" name="con_phone">
                                        <p>Massage</p>
                                        <textarea name="con_message" cols="15" rows="10"></textarea>
                                    </div>
                                </div>
                                <button class="red-button" type="submit"><span>send message</span></button>
                                <p class="form-message"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.5271984778087!2d85.32125911438446!3d27.701004332379018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a8a2e2d45f%3A0x3f4b7d039eebd8fd!2sCCMA%20CA%20College%20Pvt.%20Ltd!5e0!3m2!1sen!2snp!4v1655880819449!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <!-- Contact End -->


    
        
        @endsection

