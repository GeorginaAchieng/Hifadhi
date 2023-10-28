@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Appointment
                </div>
                <div class="float-end">
                    <a href="{{ route('appointments.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('appointments.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="date" class="col-md-4 col-form-label text-md-end text-start">Date</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}">
                            @if ($errors->has('date'))
                                <span class="text-danger">{{ $errors->first('date') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="appointmentType" class="col-md-4 col-form-label text-md-end text-start">appointmentType</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('appointmentType') is-invalid @enderror" id="appointmentType" name="appointmentType">{{ old('appointmentType') }}</textarea>
                            @if ($errors->has('appointmentType'))
                                <span class="text-danger">{{ $errors->first('appointmentType') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Appointment">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection