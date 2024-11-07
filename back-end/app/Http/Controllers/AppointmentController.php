<?php

namespace App\Http\Controllers;

use App\Enums\AnimalType;
use App\Models\AddAppointmentRequest;
use App\UseCases\AddAppointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    protected AddAppointment $addAppointment;

    public function __construct(AddAppointment $addAppointment)
    {
        $this->addAppointment = $addAppointment ;
    }

    public function store(Request $request){
        $appointment = new AddAppointmentRequest(
            $request->input('clientName'),
            $request->input('symptoms'),
            $request->input('animalAge'),
            $request->input('assigned'),
            $request->input('code'),
            $request->input('requesterName'),
            $request->input('requesterEmail'),
            $request->input('animalName'),
            $request->enum('type', AnimalType::class),
            $request->date('date'),
            $request->input('shift')
        );

        try {
            $this->addAppointment->add($appointment);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }

        return response()
            ->json(
                ['message' => 'Appointment created successfully'],
                201
            );
     } 
}
