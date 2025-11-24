<?php

namespace App\Containers\AppSection\Court\Tests\Unit;

use App\Containers\AppSection\Court\Actions\DeleteCourtAction;
use App\Containers\AppSection\Court\Tasks\DeleteCourtTask;
use Tests\TestCase;
use Mockery;

class DeleteCourtActionTest extends TestCase
{
    public function test_run_delegates_to_task(): void
    {
        $task = Mockery::mock(DeleteCourtTask::class);
        $task->shouldReceive('run')->once()->with(9);

        $action = new DeleteCourtAction($task);
        $action->run(9);
        $this->assertTrue(true);
    }
}
