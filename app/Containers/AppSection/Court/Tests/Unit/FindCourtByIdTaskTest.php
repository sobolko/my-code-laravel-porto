<?php

namespace App\Containers\AppSection\Court\Tests\Unit;

use App\Containers\AppSection\Court\Tasks\FindCourtByIdTask;
use App\Containers\AppSection\Court\Data\Repositories\CourtRepository;
use App\Containers\AppSection\Court\Data\Dto\CourtData;
use Tests\TestCase;
use Mockery;

class FindCourtByIdTaskTest extends TestCase
{
    public function test_run_returns_data(): void
    {
        $repo = Mockery::mock(CourtRepository::class);

        $data = CourtData::fromArray([
            'court_id' => 15,
            'court_name' => 'X',
            'court_email' => 'x@example.com',
            'court_type' => 'type',
            'judges' => collect(),
        ]);

        $repo->shouldReceive('getById')->once()->with(15)->andReturn($data);

        $task = new FindCourtByIdTask($repo);
        $result = $task->run(15);

        $this->assertSame($data, $result);
        $this->assertInstanceOf(CourtData::class, $result);
        $this->assertSame(15, $result->court_id);
        $this->assertSame('X', $result->court_name);
    }
}
