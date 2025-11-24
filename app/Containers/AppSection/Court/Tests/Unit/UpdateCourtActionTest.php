<?php

namespace App\Containers\AppSection\Court\Tests\Unit;

use App\Containers\AppSection\Court\Actions\UpdateCourtAction;
use App\Containers\AppSection\Court\Tasks\UpdateCourtTask;
use App\Containers\AppSection\Court\Models\Court;
use Tests\TestCase;
use Mockery;

class UpdateCourtActionTest extends TestCase
{
    public function test_run_delegates_to_task(): void
    {
        $task = Mockery::mock(UpdateCourtTask::class);
        $updated = new Court(['court_name' => 'Changed']);
        $task->shouldReceive('run')->once()->with(3, ['court_name' => 'Changed'])->andReturn($updated);

        $action = new UpdateCourtAction($task);
        $result = $action->run(3, ['court_name' => 'Changed']);

        $this->assertSame($updated, $result);
    }
}
