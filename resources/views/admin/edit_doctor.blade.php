@extends('admin.main')

@section('content')
    @include('admin.slidebar')
    <!-- partial -->
    @include('admin.navbar')
    <form action="{{route('doctor.update',$doctor->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$doctor->id}}">
        <input type="hidden" value="{{$doctor->image}}" name="old_image">
        <div class="container-fluid page-body-wrapper">
            <div class="page-section">
                <div class="container">
                    <h1 class="text-center mb-5 wow fadeInUp">Doctor</h1>
                    <div class="item container">
                        <div class="card-doctor">
                            <div class="header">
                                <img width="300px" src="{{asset('images/'.$doctor->image)}}" alt="images/1702842310.doctor_2.jpg">
                                <input type="file" name="image"  class="form-control">
                                <div class="meta">
                                    <a href="tel:{{$doctor->phone}}"><span class="mai-call"></span></a>
                                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                </div>
                            </div>
                            <div class="body">
                                <input name="name" class="form-control" value="{{$doctor->name}}">
                                <input name="speciality" value="{{$doctor->speciality}}" class="form-control">
                                <input name="phone" value="{{$doctor->phone}}" class="form-control">
                                <input name="room" value="{{$doctor->room}}" class="form-control">
                                <button type="submit" class="btn btn-outline-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form >
    <!-- page-body-wrapper ends -->
@endsection
