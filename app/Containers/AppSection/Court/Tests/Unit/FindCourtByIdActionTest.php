<?php

namespace App\Containers\AppSection\Court\Tests\Unit;

use App\Containers\AppSection\Court\Actions\FindCourtByIdAction;
use App\Containers\AppSection\Court\Tasks\FindCourtByIdTask;
use App\Containers\AppSection\Court\Data\Dto\CourtData;
use Tests\TestCase;
use Mockery;

class FindCourtByIdActionTest extends TestCase
{
    public function test_run_delegates_to_task(): void
    {
        $task = Mockery::mock(FindCourtByIdTask::class);

        $data = CourtData::fromArray([
            'court_id' => 22,
            'court_name' => 'XYZ',
            'court_email' => 'xyz@example.com',
            'court_type' => 'type',
            'judges' => collect(),
        ]);

        $task->shouldReceive('run')->once()->with(22)->andReturn($data);

        $action = new FindCourtByIdAction($task);
        $result = $action->run(22);

        $this->assertSame($data, $result);
        $this->assertInstanceOf(CourtData::class, $result);
        $this->assertSame(22, $result->court_id);
        $this->assertSame('XYZ', $result->court_name);
    }
}
