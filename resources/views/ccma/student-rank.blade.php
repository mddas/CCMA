 <div class="teacher-area courses-area pt-70 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>GLIMPSES OF SUCCESS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="glimpses-owl owl-theme owl-carousel">
            @foreach($students as $student)
            <!-- start items------------------- -->
                    <div class="item">
                        <div class="single-teacher mb-5">
                            <div class="single-teacher-img">
                                <img src="{{$student->image}}" alt="student">
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2>{{$student->name}}</h2>
                                <h4>{{$student->rank}}</h4>
                            </div>
                        </div>
                    </div>  
            @endforeach                                 
        <!----------end item------------->
                    </div>
                </div>
            </div>
        </div>