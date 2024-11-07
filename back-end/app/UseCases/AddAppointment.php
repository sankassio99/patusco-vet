<?php

namespace App\UseCases;

use App\Entities\Appointment;
use App\Models\AddAppointmentRequest;

class AddAppointment {
    private Appointment $appointment;

    public function __construct(Appointment $appointment){
        $this->appointment = $appointment;
    }
    
    public function add(AddAppointmentRequest $request){
        $this->appointment->create([
            'client_name' => $request->clientName,
            'symptoms' => $request->symptoms,
            'animal_age' => $request->animalAge,
            'assigned' => $request->assigned,
            'code' => $request->code,
            'requester_name' => $request->requesterName,
            'requester_email' => $request->requesterEmail,
            'animal_name' => $request->animalName,
            'type' => $request->type,
            'date' => $request->date,
            'shift' => $request->shift,
        ]);
    }
}