@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Appointment List</div>
    <div class="card-body">
        @can('create-appointment')
            <a href="{{ route('appointments.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Appointment</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">Visit-Date</th>
                <th scope="col">Client</th>
                <th scope="col">Age</th>
                <th scope="col">Sex</th>
                <th scope="col">Appointment-Type</th>
                <th scope="col">Next-Appointment-Date</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($appointments as $appointment)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->client }}</td>
                    <td>{{ $appointment->age }}</td>
                    <td>{{ $appointment->sex }}</td>
                    <td>{{ $appointment->appointmentType}}</td>
                    <td>{{ $appointment->nextAppointmentDate}}</td>
                    <td>
                        <form action="{{ route('appointments.destroy', $appointment->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                            @can('edit-appointment')
                                <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            @endcan

                            @can('delete-appointment')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this appointment?');"><i class="bi bi-trash"></i> Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="4">
                        <span class="text-danger">
                            <strong>No Appointment Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $appointments->links() }}

    </div>
</div>
@endsection