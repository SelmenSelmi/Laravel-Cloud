<?php

use App\Models\ServiceRequest;

test('a visitor can submit a service request', function () {
    $response = $this->post(route('service-requests.store'), [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'phone' => '+1-555-0135',
        'email' => 'john@example.com',
        'issue_description' => 'The kitchen sink is leaking under the cabinet.',
    ]);

    $response
        ->assertRedirect(route('home'))
        ->assertSessionHas('status');

    $this->assertDatabaseHas('service_requests', [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'phone' => '+1-555-0135',
        'email' => 'john@example.com',
    ]);
});

test('service request submission requires all fields', function () {
    $response = $this->post(route('service-requests.store'), []);

    $response
        ->assertSessionHasErrors([
            'first_name',
            'last_name',
            'phone',
            'email',
            'issue_description',
        ]);

    expect(ServiceRequest::count())->toBe(0);
});