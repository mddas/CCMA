@extends('layouts.dashboard')
@section("index")
    @include('dashboard.left-panel')
    @include('dashboard.navbar')
    <!----------Contentes------------>

    <!--<button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                          Add     
    </button>---->
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
                                <strong class="card-title">Message From</strong><span> (Who what says)</span>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table" style="margin-bottom: 2rem;">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Messages</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($messages as $message)
                                        <tr>
                                            <td class="serial">1.</td>
                                            <td> {{$message->name}} </td>
                                            <td>  <span class="name">{{$message->position}}</span> </td>
                                            <td>  <span class="name">{{$message->messages}}</span> </td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{$message->image}}" alt=""></a>
                                                </div>
                                            </td>                                            
                                            <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                             <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-size:12px;">
                                                            <a class="dropdown-item" href="{{route('MessageEdit',$message->id)}}">Edit</a>
                                                            <a class="dropdown-item" href="{{route('MessageDelete',$message->id)}}">delete</a>                                                       
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
                        <form action="{{route('StoreInstituteDetails')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="card">
                            <div class="card-header">
                                <strong>Add</strong> <small> Institute Details</small>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Institute Name</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                            </svg>
                                        </div>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. Arniko H.S.S</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Institute Started from</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input name="date" type="date" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. 99/99/9999</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Contact Number</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input type="text" name="number" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. 9808059156</small>
                                </div>
                                 <div class="form-group">
                                    <label class=" form-control-label">E-mail</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. college@gmail.com</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Address</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
</svg></div>
                                        <input type="text" name="address" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. Biratnagar 5</small>
                                </div>
                                  <div class="form-group">
                                    <label class=" form-control-label">Institue description</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <textarea name="discription" class="form-control"></textarea>
                                    </div>
                                    <small class="form-text text-muted">ex. Describe your company</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Company Logo</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
  <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
</svg></div>
                                        <input type="file" name="logo" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">Upload suitable company logo</small>
                                </div>
                                    <div class="form-group">
                                    <label class=" form-control-label">Company Image</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
  <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
</svg></div>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">Upload suitable institute Image</small>
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