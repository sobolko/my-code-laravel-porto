<?php

namespace App\Containers\AppSection\Court\Tests\Unit;

use App\Containers\AppSection\Court\Tasks\CreateCourtTask;
use App\Containers\AppSection\Court\Data\Repositories\CourtRepository;
use App\Containers\AppSection\Court\Models\Court;
use Tests\TestCase;
use Mockery;

class CreateCourtTaskTest extends TestCase
{
    public function test_run_creates_court(): void
    {
        $repo = Mockery::mock(CourtRepository::class);
        $repo->shouldReceive('create')->once()->with(['court_name' => 'Test Court'])->andReturn(new Court(['court_name' => 'Test Court']));

        $task = new CreateCourtTask($repo);
        $result = $task->run(['court_name' => 'Test Court']);

        $this->assertInstanceOf(Court::class, $result);
        $this->assertEquals('Test Court', $result->court_name);
    }
}
