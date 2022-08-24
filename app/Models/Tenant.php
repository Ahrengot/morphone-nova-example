<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Tenant extends Model {

    public function landingPage(): MorphOne
    {
        return $this->morphOne(LandingPage::class, 'owner')
                    ->withDefault();
    }

}
