@extends('layouts.dashboard')
@section("index")
    @include('dashboard.left-panel')
    @include('dashboard.navbar')
    <!----------Contentes------------>

  <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal" style="float:right;">
                         <img src="/images/add.png" width="50px" height="50px">  
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

                    <!-- @if(isset($link))
                        <script>
                           $("#mediumModal").modal()                           
                        </script>
                    @endif -->
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
                                            <th class="avatar">Facebook</th>
                                            <th>Twitter</th>
                                            <th>linkedln</th>
                                            <th>youtube</th>
                                            <th>Google Map</th>
                                             <th>Other</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($links ?? '' as $key=>$link)
                                        <tr>
                                            <td class="serial">{{$key+1}}</td>
                                            <td><a href="{{$link->facebook}}">  <span class="name">{{substr($link->facebook,0,50)."..."}}</span></a> </td>
                                             <td><a href="{{$link->twitter}}"><span class="name">{{$link->twitter}}</span></a></td>
                                            <td>  <a href="{{$link->linkedln}}" ><span class="name">{{substr($link->linkedln,0,50)."..."}}</span> </td>
                                            <td> <a href="{{$link->youtube}}" ><span class="name">{{substr($link->youtube,0,50)}}</span> </td>
                                            <td> <a href="{{$link->map}}" ><span class="name">{{substr($link->map,0,50)}}</span> </td>
                                            <td> <a href="{{$link->other}}" ><span class="name">{{substr($link->other,0,50)}}</span> </td>
                                            <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                             <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-size:12px;">
                                                            <!-- <a class="dropdown-item" href="{{route('linkedit',$link->id)}}">Edit</a> -->
                                                            <a class="dropdown-item" href="{{route('linkdelete',$link->id)}}">delete</a>
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
                            <h5 class="modal-title" id="mediumModalLabel">Add Links</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           <!--------------modal form-------------->

                                 <!----form start------>
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <form action="{{route('linkstore')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="card">
                            <div class="card-header">
                                <strong>Add</strong> <small> Links</small>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Facebook</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" name="facebook" class="form-control" value="{{$link->facebook ?? ''}}">
                                    </div>
                                    <small class="form-text text-muted">ex. https://facebook.com/ccma</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Twitter</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <input name="twitter" type="text" class="form-control" value="{{$link->twitter ?? ''}}">
                                    </div>
                                    <small class="form-text text-muted">ex. https://twitter.com/ccma</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Linkedln</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <input type="text" name="linkedln" class="form-control" value="{{$link->linkedln ?? ''}}">
                                    </div>
                                    <small class="form-text text-muted">hints. insert linkedln url</small>
                                </div>
                                 <div class="form-group">
                                    <label class=" form-control-label">Google Map</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <input type="text" name="map" class="form-control" value="{{$link->map ?? ''}}">
                                    </div>
                                    <small class="form-text text-muted">hints. put google location link</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Youtube</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-youtube-play" aria-hidden="true"></i></div>
                                        <input type="text" name="youtube" class="form-control" value="{{$link->youtube ?? ''}}">
                                    </div>
                                    <small class="form-text text-muted">ex.put youtube video link</small>
                                </div>
                                  <div class="form-group">
                                    <label class=" form-control-label">Other link</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-link" aria-hidden="true"></i></div>
                                        <input type="text" name="other" class="form-control" value="{{$link->other ?? ''}}">
                                    </div>
                                    <small class="form-text text-muted">ex. other link such as websites,instagram etc</small>
                                </div>
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