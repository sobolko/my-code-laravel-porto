<?php

declare(strict_types=1);

namespace App\Containers\AppSection\Court\Tasks;

use App\Containers\AppSection\Court\Data\Repositories\CourtRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use App\Containers\AppSection\Court\Models\Court;

class UpdateCourtTask extends ParentTask
{
    public function __construct(
        private readonly CourtRepository $repository,
    ) {}

    public function run(int $id, array $properties): Court
    {
        return $this->repository->update($properties, $id);
    }
}
