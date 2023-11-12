@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Appointment
                </div>
                <div class="float-end">
                    <a href="{{ route('appointments.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('appointments.update', $appointment->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="date" class="col-md-4 col-form-label text-md-end text-start">Date</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ $appointment->date }}">
                            @if ($errors->has('date'))
                                <span class="text-danger">{{ $errors->first('date') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="client" class="col-md-4 col-form-label text-md-end text-start">Client</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('client') is-invalid @enderror" id="client" name="client">{{ old('client') }}</textarea>
                            @if ($errors->has('client'))
                                <span class="text-danger">{{ $errors->first('client') }}</span>
                            @endif
                        </div>

                        <div class="mb-3 row">
                            <label for="age" class="col-md-4 col-form-label text-md-end text-start">Age</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('age') is-invalid @enderror" id="age" name="age">{{ old('age') }}</textarea>
                                @if ($errors->has('age'))
                                    <span class="text-danger">{{ $errors->first('age') }}</span>
                                @endif
                            </div>
                        </div>
    
                        <div class="mb-3 row">
                            <label for="sex" class="col-md-4 col-form-label text-md-end text-start">Sex</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('sex') is-invalid @enderror" id="sex" name="sex">{{ old('sex') }}</textarea>
                                @if ($errors->has('sex'))
                                    <span class="text-danger">{{ $errors->first('sex') }}</span>
                                @endif
                            </div>
                        </div>
    

                    <div class="mb-3 row">
                        <label for="appointmentType" class="col-md-4 col-form-label text-md-end text-start">appointmentType</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('appointmentType') is-invalid @enderror" id="appointmentType" name="appointmentType">{{ $appointment->appointment }}</textarea>
                            @if ($errors->has('appointmentType'))
                                <span class="text-danger">{{ $errors->first('appointmentType') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nextAppointmentDate" class="col-md-4 col-form-label text-md-end text-start">nextAppointmentDate</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="nextAppointmentDate" value="{{ old('nextAppointmentDate') }}">
                            @if ($errors->has('nextAppointmentDate'))
                                <span class="text-danger">{{ $errors->first('nextAppointmentDate') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection