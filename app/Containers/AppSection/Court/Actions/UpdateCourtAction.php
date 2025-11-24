<?php

declare(strict_types=1);

namespace App\Containers\AppSection\Court\Actions;

use App\Ship\Parents\Actions\Action as ParentAction;
use App\Containers\AppSection\Court\Models\Court;
use App\Containers\AppSection\Court\Tasks\UpdateCourtTask;

class UpdateCourtAction extends ParentAction
{
    public function __construct(
        private readonly UpdateCourtTask $updateCourtTask
    ) {}

    public function run(int $courtId, array $data): Court
    {
        return $this->updateCourtTask->run($courtId, $data);
    }
}
