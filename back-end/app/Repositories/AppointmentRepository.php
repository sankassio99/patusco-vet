<?php

namespace App\Repositories;

use App\Models\AddAppointmentRequest;

class AppointmentRepository {
    public function __construct() {}
    
    public function add(AddAppointmentRequest $appointment) {
        // Add the appointment to the database
    }
}