<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model {

    protected $fillable = ['id', 'name'];

    protected $table = 'doctor';
}