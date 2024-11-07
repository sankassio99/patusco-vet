<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model {

    protected $fillable = [
        'id',
        'clientName',
        'symptoms',
        'animalAge',
        'assigned',
        'code',
        'requesterName',
        'requesterEmail',
        'animalName',
        'type',
        'date',
        'shift'
    ];

    protected $table = 'schedule' ;

    public function doctor(){
        return $this->hasOne(Doctor::class);
    }
}