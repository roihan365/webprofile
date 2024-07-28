<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ProjectHasUrl extends Model
{
    protected $fillable = ['name', 'url', 'projectable_id', 'projectable_type'];

    public function projectable(): MorphTo
    {
        return $this->morphTo();
    }
}
