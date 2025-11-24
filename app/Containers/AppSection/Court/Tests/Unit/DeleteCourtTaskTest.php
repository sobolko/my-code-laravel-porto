<?php

namespace App\Containers\AppSection\Court\Tests\Unit;

use App\Containers\AppSection\Court\Tasks\DeleteCourtTask;
use App\Containers\AppSection\Court\Data\Repositories\CourtRepository;
use Tests\TestCase;
use Mockery;

class DeleteCourtTaskTest extends TestCase
{
    public function test_run_deletes_court(): void
    {
        $repo = Mockery::mock(CourtRepository::class);
        $repo->shouldReceive('delete')->once()->with(10);

        $task = new DeleteCourtTask($repo);
        $task->run(10);
        $this->assertTrue(true); // Если mock ожидание выполнено — тест пройден.
    }
}
