@extends('layouts.dashboard')
@section("index")
    @include('dashboard.left-panel')
    @include('dashboard.navbar')
    <!----------Contentes------------>

    <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                          Medium     
    </button>
       <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    @if(Session::has('message'))
                        <script>
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: '{{Session::get('message')}}',
                                showConfirmButton: false,
                                timer: 1500
                                })
                        </script>
                    @endif
                    @if ($errors->any())
                    @php
                        $er = ""
                    @endphp
                       @foreach($errors->all() as $error)  
                        @php
                            $er=$er.$error
                        @endphp
                       @endforeach
                       
                        <script>
                          Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: '{{$er}}',
                            footer: '<a href="">input error</a>'
                            })
                        </script>
                    @endif

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Institute</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table" style="margin-bottom: 2rem;">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th>Sub menu</th>
                                            <th>Sub menu type</th>
                                            <th>menus</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($subcategories as $subcategory)
                                        <tr>
                                            <td class="serial">1.</td>
                                            <td> {{$subcategory->name}} </td>
                                            <td>  <span class="name">{{$subcategory->type}}</span> </td>
                                            <td> <span class="product">{{$subcategory->getCategory->name}}</span> </td>
                                            <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                             <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-size:12px;">
                                                            <a class="dropdown-item" href="{{route('subcategoryedit',$subcategory->id)}}">Edit</a>
                                                            <a class="dropdown-item" href="{{route('subcategorydelete',$subcategory->id)}}">delete</a>
                                                            <a class="dropdown-item" href="{{route('subcategoryview',$subcategory->id)}}">View</a>                                                            
                                                        </div>
                                                        </div>                                                 
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                    
                </div>

            </div>

        </div>
    </div><!-- .animated -->
</div><!-- .content -->

    <!-----------contents  end------->
<!-------------------------------Modal--------------------------------------->
    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           <!--------------modal form-------------->

                                 <!----form start------>
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <form action="{{route('subcategoryadd')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="card">
                            <div class="card-header">
                                <strong>Add</strong> <small> Menus</small>
                            </div>
                            <div class="card-body card-block">
                                
                                <div class="form-group">
                                    <label class=" form-control-label">Menu Name</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input name="name" type="text" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. Notice</small>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Category</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <select class="form-select" aria-label="Default select example" name="category_id">
                                            <option selected>Please Select Category</option>
                                              @foreach($categories as $category)
                                                 <option value="{{$category->id}}">{{$category->name}}</option>
                                               @endforeach
                                            </select>
                                    </div>
                                    <small class="form-text text-muted">Common/gallary/video/notice/</small>
                                </div>     
                                <div class="form-group">
                                    <label class=" form-control-label">Page Type</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <select class="form-select" aria-label="Default select example" name="type">
                                            <option selected>Open this select menu</option>
                                            <option value="common">SINGLE COMMON PAGE</option>
                                            <option value="galary">SINGLE GALLARY PAGE </option>
                                            <!----
                                            <option value="video">SINGLE VIDEO PAGE</option>
                                            ----->
                                            <option value="notice">SINGLE NOTICE PAGE</option>
                                        </select>
                                     </div>
                                    <small class="form-text text-muted">Common/gallary/video/notice/</small>
                                </div>                                      
                              <!------form group closed---->                              

                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                               </div>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
    <!----form end---------------->
                           <!-------------form end------------------>
                        </div>
                    </div>
                </div>
            </div>
<!------------------------modal end------------------------------------------->
@endsection