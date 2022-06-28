            <!---header-top---->
			<div class="header-area header-sticky fixed">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="logo">
								<a href="index.html"><img src="{{App\Models\InstituteDetails::getInstituteDetails()->first()->logo ?? ''}}" alt="CCMA" onerror="this.style.display='none'"/></a>
							</div>
						</div>
						<div class="col-md-9">
                            <div class="content-wrapper one">
                                <!-- Main Menu Start -->
                                <div class="main-menu one text-end">
                                    <nav>
                                        <ul>
                                            <li><a href="/">Home</a></li>
                                            @foreach($menus as $menu)
                                            <li><a href="{{route('menu',$menu->name)}}">{{$menu->name}}</a>
                                                @if($menu->type=="group")
                                                    <ul>
                                                        @foreach($menu->getSubcategory as $sub)
                                                            <li><a href="{{route('submenu',$sub->name)}}">{{$sub->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                            @endforeach
                                            
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