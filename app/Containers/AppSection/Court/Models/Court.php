<?php

declare(strict_types=1);

namespace App\Containers\AppSection\Court\Models;

use App\Containers\AppSection\Judge\Models\Judge;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Court extends Model
{
    protected $table = 'court_master';
    protected $primaryKey = 'court_id';
    public $timestamps = false;

    protected $fillable = [
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
    ];

    public function judges(): BelongsToMany
    {
        return $this->belongsToMany(Judge::class, 'courtXref', 'court_id', 'judge_id')
            ->withPivot('case_file_id');
    }
}
