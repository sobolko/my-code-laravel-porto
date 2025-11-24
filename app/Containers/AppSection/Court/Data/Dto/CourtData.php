<?php

declare(strict_types=1);

namespace App\Containers\AppSection\Court\Data\Dto;

use App\Containers\AppSection\Court\Models\Court;
use Spatie\LaravelData\Data;
use Illuminate\Database\Eloquent\Collection;
use App\Containers\AppSection\Judge\Data\Dto\JudgeData;

/**
 * @property \App\Containers\AppSection\Judge\Data\Dto\JudgeData[] $judges
 */
class CourtData extends Data
{
    public function __construct(
        public ?int $court_id,
        public ?string $court_county_lowcaps,
        public ?string $court_name,
        public ?string $court_address1,
        public ?string $court_address2,
        public ?string $court_city,
        public ?string $court_state,
        public ?string $court_zip,
        public ?string $court_phone,
        public ?string $court_fax,
        public ?string $court_extension,
        public ?string $court_contact,
        public string $court_email,
        public string $court_type,
        public readonly Collection|array $judges,
        public ?string $docket_number,
        public ?string $plaintiff_caption,
        public ?string  $defendant_caption
    ) {}


    public static function fromModel(Court $court): CourtData
    {
        $pivot = $court->pivot ?? null;

        return new self(
            ...$court->only([
                'court_id',
                'court_county_lowcaps',
                'court_name',
                'court_address1',
                'court_address2',
                'court_city',
                'court_state',
                'court_zip',
                'court_phone',
                'court_fax',
                'court_extension',
                'court_contact',
                'court_email',
                'court_type'
            ]),
            judges: JudgeData::collect($court->judges),
            docket_number: $pivot->docket_number ?? null,
            plaintiff_caption: $pivot->plaintiff_caption ?? null,
            defendant_caption: $pivot->defendant_caption ?? null,
        );
    }
}
