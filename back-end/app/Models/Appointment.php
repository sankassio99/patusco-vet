<?php

namespace App\Models;

use App\Enums\AnimalType;
use DateTime;

class Appointment {
    public string $id;
    public $clientName;
    public string $symptoms;
    public int $animalAge;
    public DoctorModel $assigned;
    public string $code;
    public string $requesterName;
    public string $requesterEmail;
    public string $animalName;
    public AnimalType $type;
    public DateTime $date;
    public string $shift;

    public function __construct(string $id, DateTime $date, string $clientName) {
        $this->id = $id;
        $this->date = $date;
        $this->clientName = $clientName;
    }
}