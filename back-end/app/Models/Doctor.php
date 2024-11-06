<?php

namespace App\Models;

class DoctorModel {
    public string $id;
    public string $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
}
