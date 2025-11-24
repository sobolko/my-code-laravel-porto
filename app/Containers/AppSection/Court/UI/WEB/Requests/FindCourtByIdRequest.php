<?php

namespace App\Containers\AppSection\Court\UI\WEB\Requests;

use App\Containers\AppSection\Court\Models\Court;
use App\Ship\Parents\Requests\Request as ParentRequest;
use Illuminate\Contracts\Auth\Access\Gate;

class FindCourtByIdRequest extends ParentRequest
{
    protected array $decode = [
        'court_id',
    ];

    protected array $urlParameters = [
        'court_id',
    ];

    public function rules(): array
    {
        return [];
    }

    public function authorize(Gate $gate): bool
    {
        return $gate->allows('show', [Court::class]);
    }
}
