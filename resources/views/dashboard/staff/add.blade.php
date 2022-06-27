@extends('layouts.dashboard')
    @section("index")
        @include('dashboard.left-panel')
            @include('dashboard.navbar')
            <!----------Contentes------------>
                                 <!----form start------>
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <form action="{{route('StaffStore')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="card">
                            <div class="card-header">
                                <strong>Add</strong> <small>TOP RANKED STUDENT</small>
                            </div>
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
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Teacher Name</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                            </svg>
                                        </div>
                                        <input type="text" name="name" class="form-control" value="{{$commonpage->title ?? ''}}">
                                    </div>
                                    <small class="form-text text-muted">ex. Amit Khuranas</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Subject</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input name="subject" type="text" class="form-control" value="">
                                    </div>
                                    <small class="form-text text-muted">ex. Mathematics</small>
                                </div>     
                                <div class="form-group">
                                    <label class=" form-control-label">Describe</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input name="describes" type="text" class="form-control" value="">
                                    </div>
                                    <small class="form-text text-muted">ex. As Dean, I express my commitment for the highest quality in the Bachelor, Master, M. Phil. and Ph.D. programs.</small>
                                </div>                           
                                      
                                    <div class="form-group">
                                    <label class=" form-control-label">teacher image</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
  <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
</svg></div>
                                        <input type="file" name="image" class="form-control">
                                        <input type="hidden" name="id" value="{{$commonpage->id ?? ''}}">
                                    </div>
                                    <small class="form-text text-muted">
                                        upload student image
                                      <div class="round-img">
                                           <a href="#"><img class="rounded-circle" src="{{$commonpage->image ?? ''}}" alt="" width=30px height=30px onerror="this.style.display='none'"></a>
                                     </div>
                                    </small>
                                </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                               </div>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
    <!----form end---------------->
                           <!-------------form end------------------>
<!------------------------modal end------------------------------------------->
@endsection