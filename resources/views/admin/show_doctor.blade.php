@extends('admin.main')

@section('content')
    @include('admin.slidebar')
    <!-- partial -->
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">
        <div class="page-section">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp">Doctor</h1>
                <div class="item container">
                        <div class="card-doctor">
                            <div class="header">
                                <img src="{{asset('images/'.$doctor->image)}}" alt="images/1702842310.doctor_2.jpg">
                                <div class="meta">
                                    <a href="#"><span class="mai-call"></span></a>
                                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                </div>
                            </div>
                            <div class="body">
                                <p class="text-xl mb-0">{{$doctor->name}}</p>
                                <p class="text-sm text-grey">{{$doctor->speciality}}</p>
                                <p class="text-sm text-grey">{{$doctor->phone}}</p>
                                <p class="text-sm text-grey">{{$doctor->room}}</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>
    <!-- page-body-wrapper ends -->
    </div>
@endsection
