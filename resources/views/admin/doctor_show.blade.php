<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
        <div style="width: 200px">
            <a class="nav-link btn btn-success create-new-button" href="{{ route('doctor.create') }}">+ Create New Project</a>
        </div>
        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach($doctors as $doctor)
                    <div class="item">
                        <div class="card-doctor">
                            <div class="header">
                                <img src="images/{{$doctor->image}}" alt="">
                                <div class="meta">
                                    <a href="tel:{{$doctor->phone}}"><span class="mai-call"></span></a>
                                    <a href="tel:{{$doctor->phone}}"><span class="mai-logo-whatsapp"></span></a>
                                </div>
                            </div>
                            <div class="body">
                                <p class="text-xl mb-0">{{$doctor->name}}</p>
                                <span class="text-sm text-grey">{{$doctor->speciality}}</span>
                            </div>
                           <div style="display: flex; justify-content: space-around">
                               <a style="width: 80px; height: 40px" href="{{ route('doctor.show',$doctor->id) }}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/></svg>
                               </a>
                               <a href="{{route('doctor.edit',$doctor->id)}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="currentColor" d="m2.292 13.36l4.523 4.756L.5 20zM12.705 2.412l4.522 4.755L7.266 17.64l-4.523-4.754zM16.142.348l2.976 3.129c.807.848.086 1.613.086 1.613l-1.521 1.6l-4.524-4.757L14.68.334l.02-.019c.119-.112.776-.668 1.443.033"/></svg>
                               </a>
                               <form action="{{ route('doctor.destroy', $doctor->id) }}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   <button onclick="return confirm('Are you sure delete this doctor')">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z"/></svg>
                                   </button>
                               </form>
                           </div>
                        </div>

                    </div>
            @endforeach
        </div>
    </div>
</div>
