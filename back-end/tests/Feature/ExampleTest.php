<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     * 
     */
    public function test_store_an_appointment(): void
    {
        $response = $this->post('/appointment', [
            'id' => 'some-id',
            'clientName' => 'John Doe',
            'symptoms' => 'Coughing',
            'animalAge' => 5,
            'assigned' => 'Dr. Smith',
            'code' => 'APPT123',
            'requesterName' => 'Jane Doe',
            'requesterEmail' => 'jane.doe@example.com',
            'animalName' => 'Buddy',
            'type' => 'Dog',
            'date' => '2023-10-01',
            'shift' => 'Morning'
        ]);

        $response->assertStatus(201);
        $response->assertJson(['message' => 'success!']);
    }
}
