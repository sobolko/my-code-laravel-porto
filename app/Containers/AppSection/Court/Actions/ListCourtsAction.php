<?php

declare(strict_types=1);

namespace App\Containers\AppSection\Court\Actions;

use App\Containers\AppSection\Court\Data\Repositories\CourtRepository;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ListCourtsAction extends ParentAction
{
    public function __construct(
        private readonly CourtRepository $repository,
    ) {}

    public function run(): Collection|LengthAwarePaginator
    {
        return $this->repository->getList();
    }
}
