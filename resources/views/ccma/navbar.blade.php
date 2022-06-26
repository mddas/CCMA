            <!---header-top---->
			<div class="header-area header-sticky fixed">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="logo">
								<a href="index.html"><img src="/ccma/img/logo/CCMA.png" alt="CCMA" /></a>
							</div>
						</div>
						<div class="col-md-9">
                            <div class="content-wrapper one">
                                <!-- Main Menu Start -->
                                <div class="main-menu one text-end">
                                    <nav>
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            @foreach($menus as $menu)
                                                <li><a href="#">{{$menu->name}}</a></li>
                                            @endforeach
                                            <li><a href="course.html">courses</a>
                                                <ul>
                                                <li><a href="course.html">courses</a></li>
                                                <li><a href="course-details.html">courses details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu one"></div>
                                <!-- Main Menu End -->
                            </div>
						</div>
					</div>
				</div>
			</div>