@include('admin.head')
<!-- partial:partials/_sidebar.html -->
@include('admin.slidebar')
<!-- partial -->
@include('admin.navbar')
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    <!-- partial -->
    <table class="form-control" style="margin: 15px;">
        <thead>
        <tr>
            <th>Id</th>
            <th>Doctor Name</th>
            <th>Patient Name</th>
            <th>Appointment Date</th>
            <th>Appointment Status</th>
            <th>Appointment Message</th>
            <th>Approved</th>
            <th>Canceled</th>
        </tr>
        </thead>
        <tbody>
        @foreach($appointments as $appointment)
            <tr>
                <td>{{$appointment->id}}</td>
                <td>{{$appointment->doctor}}</td>
                <td>{{$appointment->name}}</td>
                <td>{{$appointment->date}}</td>
                <td>{{$appointment->status}}</td>
                <td>{{$appointment->message}}</td>
                <td>
                    <form action="{{route('admin.approve',$appointment->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success">Approve</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('admin.cancel',$appointment->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Cancel</button>
                    </form>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
