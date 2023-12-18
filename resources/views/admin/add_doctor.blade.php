@include('admin.head')
<!-- partial:partials/_sidebar.html -->
@include('admin.slidebar')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
    <!-- partial -->
        <div class="er-fuild page-body-wrapper">
            <div class="container">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dissimis="alert">
                            x
                        </button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{ route('doctor.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="">Name</label>
                    <input required type="text" name="name" class="form-control" placeholder="Write the name">
                    <label for="">Phone</label>
                    <input required type="text" name="phone" class="form-control" placeholder="Write the phone">
                    <label for="">Speciality</label>
                    <select required name="speciality" id="">
                        <option value="0">--Speciality--</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Dentist">Dentist</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Orthopedic">Orthopedic</option>
                        <option value="Pathology">Pathology</option>
                        <option value="Urology">Urology</option>
                    </select>
                    <label for="">Room no</label>
                    <input required type="text" name="room_no" class="form-control" placeholder="Write the room no">
                    <label for="">Doctor image</label>
                    <input required type="file" name="image" class="form-control">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
