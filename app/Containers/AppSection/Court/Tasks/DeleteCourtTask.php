<?php

declare(strict_types=1);

namespace App\Containers\AppSection\Court\Tasks;

use App\Containers\AppSection\Court\Data\Repositories\CourtRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class DeleteCourtTask extends ParentTask
{
    public function __construct(
        private readonly CourtRepository $repository,
    ) {}

    public function run(int $id): void
    {
        $this->repository->delete($id);
    }
}
