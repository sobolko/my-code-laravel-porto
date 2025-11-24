<?php

declare(strict_types=1);

namespace App\Containers\AppSection\Court\Actions;

use App\Containers\AppSection\Court\Tasks\DeleteCourtTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteCourtAction extends ParentAction
{
    public function __construct(
        private readonly DeleteCourtTask $deleteCourtTask
    ) {}

    public function run(int $courtId): void
    {
        $this->deleteCourtTask->run($courtId);
    }
}
