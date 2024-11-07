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
            'clientName' => $request->clientName,
            'symptoms' => $request->symptoms,
            'animalAge' => $request->animalAge,
            'assigned' => $request->assigned,
            'code' => $request->code,
            'requesterName' => $request->requesterName,
            'requesterEmail' => $request->requesterEmail,
            'animalName' => $request->animalName,
            'type' => $request->type,
            'date' => $request->date,
            'shift' => $request->shift,
        ]);
    }
}