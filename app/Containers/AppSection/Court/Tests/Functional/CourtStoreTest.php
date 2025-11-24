<?php

namespace App\Containers\AppSection\Court\Tests\Functional;

use Tests\TestCase;
use Mockery;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CourtStoreTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_creates_and_redirects(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(['create Courts']);
        $this->actingAs($user);

        $payload = [
            'court_name' => 'New Court',
            'court_county_lowcaps' => 'new',
            'court_email' => 'new@example.com',
        ];

        $mock = Mockery::mock(\App\Containers\AppSection\Court\Actions\CreateCourtAction::class);
        $mock->shouldReceive('run')->once()->with($payload)->andReturn(new \App\Containers\AppSection\Court\Models\Court($payload));
        $this->app->instance(\App\Containers\AppSection\Court\Actions\CreateCourtAction::class, $mock);

        $response = $this->post(route('courts.store'), $payload);
        $response->assertRedirect(route('courts.index'));
        $response->assertSessionHas([
            'status' => 'success',
            'message' => 'Court has been created!'
        ]);
    }
}
