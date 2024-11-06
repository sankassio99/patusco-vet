<?php

namespace App\Models;

class Appointment {
    protected $id;
    protected $date;
    protected $time;
    protected $clientName;

    public function __construct($id, $date, $time, $clientName) {
        $this->id = $id;
        $this->date = $date;
        $this->time = $time;
        $this->clientName = $clientName;
    }
}