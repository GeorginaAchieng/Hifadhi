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
                        <label for="client" class="col-md-4 col-form-label text-md-end text-start"><strong>Client:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $appointment->client }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label text-md-end text-start"><strong>Profile_pic:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="image" @error('image') is-invalid @enderror>
                              </div>
                            {{ $appointment->image }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="age" class="col-md-4 col-form-label text-md-end text-start"><strong>Age:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $appointment->age }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="sex" class="col-md-4 col-form-label text-md-end text-start"><strong>Sex:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $appointment->sex }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="appointmentType" class="col-md-4 col-form-label text-md-end text-start"><strong>appointmentType:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $appointment->appointmentType }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="nextAppointmentDate" class="col-md-4 col-form-label text-md-end text-start"><strong>nextAppointmentDate:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $appointment->nextAppointmentDate }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection