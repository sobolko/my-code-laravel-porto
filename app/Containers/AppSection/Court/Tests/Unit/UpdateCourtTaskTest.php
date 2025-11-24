<?php

namespace App\Containers\AppSection\Court\Tests\Unit;

use App\Containers\AppSection\Court\Tasks\UpdateCourtTask;
use App\Containers\AppSection\Court\Data\Repositories\CourtRepository;
use App\Containers\AppSection\Court\Models\Court;
use Tests\TestCase;
use Mockery;

class UpdateCourtTaskTest extends TestCase
{
    public function test_run_updates_court(): void
    {
        $repo = Mockery::mock(CourtRepository::class);
        $updated = new Court(['court_name' => 'Updated']);
        $repo->shouldReceive('update')->once()->with(['court_name' => 'Updated'], 5)->andReturn($updated);

        $task = new UpdateCourtTask($repo);
        $result = $task->run(5, ['court_name' => 'Updated']);

        $this->assertSame($updated, $result);
        $this->assertEquals('Updated', $result->court_name);
    }
}
