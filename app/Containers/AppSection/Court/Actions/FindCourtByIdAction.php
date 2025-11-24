<?php

declare(strict_types=1);

namespace App\Containers\AppSection\Court\Actions;

use App\Containers\AppSection\Court\Tasks\FindCourtByIdTask;
use App\Ship\Parents\Actions\Action as ParentAction;
use Spatie\LaravelData\Data;

class FindCourtByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindCourtByIdTask $findCourtByIdTask,
    ) {}

    public function run(int $courtId): Data
    {
        return $this->findCourtByIdTask->run($courtId);
    }
}
