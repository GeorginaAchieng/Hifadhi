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
                          <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ $appointment->name }}">
                            @if ($errors->has('date'))
                                <span class="text-danger">{{ $errors->first('date') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="appointmentType" class="col-md-4 col-form-label text-md-end text-start">appointmentType</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('appointmentType') is-invalid @enderror" id="appointmentType" name="appointmentType">{{ $appointment->description }}</textarea>
                            @if ($errors->has('appointmentType'))
                                <span class="text-danger">{{ $errors->first('appointmentType') }}</span>
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