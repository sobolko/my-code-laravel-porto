<?php

declare(strict_types=1);

namespace App\Containers\AppSection\Court\Actions;

use App\Containers\AppSection\Court\Models\Court;
use App\Containers\AppSection\Court\Tasks\CreateCourtTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateCourtAction extends ParentAction
{
    public function __construct(
        private readonly CreateCourtTask $createCourtTask
    ) {}

    public function run(array $data): Court
    {
        return $this->createCourtTask->run($data);
    }
}
