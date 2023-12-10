<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Exports\AppointmentsExport;
use App\Imports\AppointmentsImport;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class AppointmentController extends Controller
{
    /**
     * Instantiate a new AppointmentController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
    //    $this->middleware('permission:create-appointment|edit-appointment|delete-appointment', ['only' => ['index','show']]);
       $this->middleware('permission:create-appointment', ['only' => ['create','store']]);
       $this->middleware('permission:edit-appointment', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-appointment', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('appointments.index', [
            'appointments' => Appointment::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentRequest $request): RedirectResponse
    {
        Appointment::create($request->all());
        return redirect()->route('appointments.index')
                ->withSuccess('New appointment is added successfully.');
                
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment): View
    {
        return view('appointments.show', [
            'appointment' => $appointment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment): View
    {
        return view('appointments.edit', [
            'appointment' => $appointment
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment): RedirectResponse
    {
        $appointment->update($request->all());
        return redirect()->back()
                ->withSuccess('Appointment is updated successfully.');
                
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment): RedirectResponse
    {
        $appointment->delete();
        return redirect()->route('appointments.index')
                ->withSuccess('Appointment is deleted successfully.');
    }


   

     

}