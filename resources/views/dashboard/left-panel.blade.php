    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/admin"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
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
                 
                    <!---
                    <li class="menu-item">
                        <a href="{{route('links')}}" > <i class="menu-icon fa fa-cogs"></i>Links</a>
                    </li>
                    ---->
                
                    <!-----Institute end------>
<!--------------------------------------------------------------------------------------------->                    
                    <!--------USERS------->
                    <li class="menu-title">USERS</li><!-- /.menu-title -->
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>STUDENTS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('StudentRead')}}">View</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('StudentAddForm')}}">Add</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>STAFF</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('StaffRead')}}">View</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('StaffAddForm')}}">Add</a></li>
                        </ul>
                    </li>
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
                <li class="menu-title">MESSAGE FROM</li><!-- /.menu-title -->
                    <li class="menu-item">
                        <a href="{{route('MessageRead')}}" > <i class="menu-icon fa fa-cogs"></i>View</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('MessageAddForm')}}" > <i class="menu-icon fa fa-cogs"></i>Add</a>
                 </li>  
<!--************************other*******************************************---->
                   <li class="menu-title">OTHERS</li><!-- /.menu-title -->
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>SLIDDER</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('SlidderRead')}}">View</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('SlidderAddForm')}}">Add</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>BANNER</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('BannerRead')}}">View</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('BannerAddForm')}}">Add</a></li>
                        </ul>
                    </li>
<!--************************other end*******************************************---->
<!---*************************SEO**************************************************--->
     <li class="menu-title">SEO</li><!-- /.menu-title -->
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>SEO</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('SeoRead')}}">View</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('SeoAddForm')}}">Add</a></li>
                        </ul>
                    </li>
<!----************************SEO END*********************************************---->
                    <!-----end left panel---->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->