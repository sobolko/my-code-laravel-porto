<?php

declare(strict_types=1);

namespace App\Containers\AppSection\Court\Tasks;

use App\Containers\AppSection\Court\Data\Repositories\CourtRepository;
use Spatie\LaravelData\Data;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindCourtByIdTask extends ParentTask
{
    public function __construct(
        private readonly CourtRepository $repository,
    ) {}

    public function run(int $courtId): Data
    {
        return $this->repository->getById($courtId);
    }
}
