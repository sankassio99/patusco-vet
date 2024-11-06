<?php

namespace Tests\Unit;

use App\Models\Appointment;
use App\Repositories\AppointmentRepository;
use App\UseCases\AddAppointment;
use PHPUnit\Framework\TestCase;

class AddAppointmentTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_add_appointment(): void
    {
        // Arrange
        $appoitmentRepository = $this->createMock(AppointmentRepository::class);

        $addAppointment = new AddAppointment($appoitmentRepository);

        $appoitment = new Appointment(1, '2021-10-10', '10:00', 'John Doe');

        // Assert
        $appoitmentRepository->expects($this->once())
            ->method('add')
            ->with($this->callback(function($arg) use ($appoitment) {
                return $arg->clientName === $appoitment->clientName;
            }));
        
        
        // Act
        $addAppointment->add($appoitment);
    }
}
