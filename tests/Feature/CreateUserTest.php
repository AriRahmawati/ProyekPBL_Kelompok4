<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as TestingTestCase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class createUserTest extends TestCase
{
/**
 * @test
 * 
 * @return void
 */
public function shouldCreateUser()
{
    $email = 'email@email.com';
    $response = $this->put('/v1/users/' . $email);

    $response->assertStatus(Response::HTTP_CREATED);
    $response->assertJson([
        'data' => [
            'email' => $email
        ]
    ]);
}
}
