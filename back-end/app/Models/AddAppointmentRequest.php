<?php

namespace App\Models;

use App\Enums\AnimalType;
use DateTime;

class AddAppointmentRequest {
    public ?string $id;
    public string $clientName;
    public string $symptoms;
    public int $animalAge;
    public string $assigned;
    public string $code;
    public string $requesterName;
    public string $requesterEmail;
    public string $animalName;
    public AnimalType $type;
    public DateTime $date;
    public string $shift;

    public function __construct(
        string $clientName,
        string $symptoms,
        int $animalAge,
        string $assigned,
        string $code,
        string $requesterName,
        string $requesterEmail,
        string $animalName,
        AnimalType $type,
        DateTime $date,
        string $shift,
        ?string $id = null,
    ) {
        $this->id = $id;
        $this->clientName = $clientName;
        $this->symptoms = $symptoms;
        $this->animalAge = $animalAge;
        $this->assigned = $assigned;
        $this->code = $code;
        $this->requesterName = $requesterName;
        $this->requesterEmail = $requesterEmail;
        $this->animalName = $animalName;
        $this->type = $type;
        $this->date = $date;
        $this->shift = $shift;
    }
}