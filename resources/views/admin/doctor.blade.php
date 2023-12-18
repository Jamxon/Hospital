@include('admin.head')
<!-- partial:partials/_sidebar.html -->
@include('admin.slidebar')
<!-- partial -->
@include('admin.navbar')
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    <!-- partial -->
    @include('user.doctor')
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
