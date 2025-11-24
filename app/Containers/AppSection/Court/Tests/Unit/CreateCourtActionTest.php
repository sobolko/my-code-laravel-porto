<?php

namespace App\Containers\AppSection\Court\Tests\Unit;

use App\Containers\AppSection\Court\Actions\CreateCourtAction;
use App\Containers\AppSection\Court\Tasks\CreateCourtTask;
use App\Containers\AppSection\Court\Models\Court;
use Tests\TestCase;
use Mockery;

class CreateCourtActionTest extends TestCase
{
    public function test_run_delegates_to_task(): void
    {
        $task = Mockery::mock(CreateCourtTask::class);
        $task->shouldReceive('run')->once()->with(['court_name' => 'Court A'])->andReturn(new Court(['court_name' => 'Court A']));

        $action = new CreateCourtAction($task);
        $result = $action->run(['court_name' => 'Court A']);

        $this->assertInstanceOf(Court::class, $result);
        $this->assertEquals('Court A', $result->court_name);
    }
}
