<?php

namespace App\Containers\AppSection\Court\Tests\Functional;

use Tests\TestCase;
use Mockery;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Containers\AppSection\Court\Models\Court;

class CourtIndexTest extends TestCase
{
    use RefreshDatabase;
    public function test_index_displays_list(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(['create Courts', 'edit Courts']);
        $this->actingAs($user);

        $courtA = Court::factory()->make(['court_name' => 'Alpha']);
        $courtB = Court::factory()->make(['court_name' => 'Beta']);

        $mock = Mockery::mock(ListCourtsAction::class);
        $mock->shouldReceive('run')->once()->andReturn(collect([$courtA, $courtB]));
        $this->app->instance(ListCourtsAction::class, $mock);

        $response = $this->get(route('courts.index'));
        $response->assertStatus(200);
        $response->assertViewHas('courts', function ($courts) {
            return $courts->pluck('court_name')->contains('Alpha') &&
                $courts->pluck('court_name')->contains('Beta');
        });
    }
}
