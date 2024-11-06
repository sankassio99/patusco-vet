<?php

namespace App\UseCases;

use App\Models\Appointment;
use App\Repositories\AppointmentRepository;

class AddAppointment {
    private AppointmentRepository $appointmentRepository;

    public function __construct(AppointmentRepository $appointmentRepository) {
        $this->appointmentRepository = $appointmentRepository;
    }
    
    public function add(Appointment $appointment){
        $clientName = $appointment->clientName;

        echo "Client Name: " . $clientName;

        $this->appointmentRepository->add($appointment);
    }
}