<?php

declare(strict_types=1);

namespace App\Containers\AppSection\Court\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;
use App\Containers\AppSection\Court\Models\Court as Model;
use App\Containers\AppSection\Court\Data\Dto\CourtData as Data;
use Illuminate\Database\Eloquent\Collection;

class CourtRepository extends Repository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Model::class;
    }

    /**
     * @return string
     */
    protected function getDataClass(): string
    {
        return Data::class;
    }

    public function getList(): Collection
    {
        return $this->collect($this->startConditions()::orderBy('court_name')->get());
    }

    public function getById(int $userId): Data
    {
        return $this->from($this->startConditions()->findOrFail($userId));
    }

    public function update(array $properties, int $id): Model
    {
        $user = $this->startConditions()->findOrFail($id);
        $user->fill($properties)->save();

        return $user;
    }

    public function delete(int $id): void
    {
        $this->startConditions()->destroy($id);
    }

    public function create(array $properties): Model
    {
        return $this->startConditions()->create($properties);
    }
}
