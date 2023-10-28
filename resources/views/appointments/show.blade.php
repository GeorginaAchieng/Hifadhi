@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Appointment Information
                </div>
                <div class="float-end">
                    <a href="{{ route('appointments.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="date" class="col-md-4 col-form-label text-md-end text-start"><strong>Date:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $appointment->date }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="appointmentType" class="col-md-4 col-form-label text-md-end text-start"><strong>appointmentType:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $appointment->appointmentType }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection