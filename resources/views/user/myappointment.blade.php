@extends('layouts.main')

@section('content')

    @include('user.banner')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>My Appointments</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Doctor</th>
                        <th>Appointment Date</th>
                        <th>Message</th>
                        <th>Appointment Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->doctor }}</td>
                            <td>{{ $appointment->date }}</td>
                            <td>{{ $appointment->message }}</td>
                            <td>{{ $appointment->status }}</td>
                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure delete this appointment')" href="{{ url('cancel_appoint',$appointment->id) }}">Cancel</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection
