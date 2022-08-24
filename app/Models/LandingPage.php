<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class LandingPage extends Model {

    public function owner(): MorphTo
    {
        return $this->morphTo();
    }

}
