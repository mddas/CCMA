       <!-- Choose Start -->
       @foreach($messages as $key=>$message)
            @if($key%2==0)
                <section class="choose-area pb-40 pt-35">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="choose-content text-start">
                                    <style>
                                        .choose-content h2{                                            
                                            font-size: 25px;
                                        }
                                        .choose-content span{                                            
                                            color: #fefefe;
                                            font-size: 15px;
                                            font-family: 'Muli', sans-serif;
                                            font-weight: 700;
                                            text-transform: uppercase;
                                        }
                                    </style>
                                <h2>Message From {{$message->position}}(<span>{{$message->name}}</span>)</h2>
                                <p>{{$message->messages}}</p>
                                <a class="blue-button" href="#">Read More</a>
                                </div>  
                            </div>
                            <div class="col-sm-4">
                                <div class="chairman-img">
                                    <img src="{{$message->image}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @else
            <section class="choose-area choose-left pb-40 pt-35">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="chairman-img">
                                <img src="{{$message->image}}">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="choose-content text-start">
                                 <style>
                                        .choose-content h2{                                            
                                            font-size: 25px;
                                        }
                                        .choose-content span{                                            
                                            color: #fefefe;
                                            font-size: 15px;
                                            font-family: 'Muli', sans-serif;
                                            font-weight: 700;
                                            text-transform: uppercase;
                                        }
                                    </style>
                                <h2>Message From {{$message->position}}(<span>{{$message->name}}</span>)</h2>
                                <p>{{$message->messages}}</p>
                                <a class="blue-button" href="#">Read More</a>
                            </div>  
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach