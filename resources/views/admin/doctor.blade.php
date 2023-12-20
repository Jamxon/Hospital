@extends('admin.main')

@section('content')
    @include('admin.slidebar')
    <!-- partial -->
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <!-- partial -->
        @include('admin.doctor_show')

    </div>
    <!-- page-body-wrapper ends -->
    </div>
@endsection
