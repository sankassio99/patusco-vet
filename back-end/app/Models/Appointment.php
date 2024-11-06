<?php

namespace App\Models;

class Appointment {
    public $id;
    public $date;
    public $time;
    public $clientName;

    public function __construct($id, $date, $time, $clientName) {
        $this->id = $id;
        $this->date = $date;
        $this->time = $time;
        $this->clientName = $clientName;
    }
}