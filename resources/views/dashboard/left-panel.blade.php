    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
<!------------------------------------------------------------------------------------------------->                    
                        <!--------Institute------>
                    <li class="menu-title">Institute</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="{{route('InstituteDetails')}}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Institute Details</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('InstituteDetails')}}">View Institue detail</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('AddInstituteDetails')}}">Add detail</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{route('InstituteDetails')}}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>SEO</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('InstituteDetails')}}">Title</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('InstituteDetails')}}">Keywords</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('InstituteDetails')}}">Description</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('InstituteDetails')}}">images</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('links')}}" > <i class="menu-icon fa fa-cogs"></i>Links</a>
                    </li>
                
                    <!-----Institute end------>
<!--------------------------------------------------------------------------------------------->                    
                    <!--------Users start------>
                    <li class="menu-title">USERS</li><!-- /.menu-title -->
                    <li class="menu-item">
                        <a href="{{route('student')}}" > <i class="menu-icon fa fa-cogs"></i>Students</a>
                    </li>
        
                    <li class="menu-item">
                        <a href="{{route('InstituteDetails')}}" > <i class="menu-icon fa fa-cogs"></i>Staff</a>
                    </li>
                    <!-----users end------>
<!------------------------------------------------------------------------------------------------>
                    <li class="menu-title">NAVIGATION</li><!-- /.menu-title -->
                    <li class="menu-item">
                        <a href="{{route('categoryread')}}" > <i class="menu-icon fa fa-cogs"></i>Menu</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('subcategoryread')}}" > <i class="menu-icon fa fa-cogs"></i>Sub Menu</a>
                    </li>                   
<!------------------------------------------------------------------------------------------------->
                                         <!---   <option value="common">SINGLE COMMON PAGE</option>
                                            <option value="galary">SINGLE GALLARY PAGE </option>
                                            <option value="video">SINGLE VIDEO PAGE</option>
                                            <option value="notice">SINGLE NOTICE PAGE</option>--->
                       <!--------Page Type------>
                    <li class="menu-title">PAGE TYPE</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="{{route('CommonPageRead')}}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>COMMON PAGE</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('CommonPageRead')}}">View</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('CommonPageAddForm')}}">Add</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{route('GalaryPageRead')}}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>GALARY PAGE</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('GalaryPageRead')}}">View</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('GalaryPageAddForm')}}">Add</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{route('InstituteDetails')}}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>VIDEO PAGE</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('VideoPageRead')}}">View</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('VideoPageAddForm')}}">Add</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{route('InstituteDetails')}}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>NOTICE PAGE</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('NoticePageRead')}}">View</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('NoticePageAddForm')}}">Add</a></li>
                        </ul>
                    </li>
<!--************************************************************************************************-->

                    <!-----end left panel---->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->