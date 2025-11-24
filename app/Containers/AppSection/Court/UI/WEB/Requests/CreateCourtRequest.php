<?php

declare(strict_types=1);

namespace App\Containers\AppSection\Court\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class CreateCourtRequest extends ParentRequest
{
    protected array $decode = [
        'court_id',
    ];

    protected array $urlParameters = [
        'court_id',
    ];

    public function rules(): array
    {
        return [
            'court_county_lowcaps' => 'required',
            'court_name' => 'required',
            'court_address1' => '',
            'court_address2' => '',
            'court_city' => '',
            'court_state' => '',
            'court_zip' => '',
            'court_phone' => '',
            'court_fax' => '',
            'court_extension' => '',
            'court_contact' => '',
            'court_email' => 'email|required',
            'court_type' => ''
        ];
    }

    public function authorize(): bool
    {
        return $this->user()->can('create Courts');
    }
}
