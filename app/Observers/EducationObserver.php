<?php

namespace App\Observers;

use App\Models\Education;
use Illuminate\Support\Facades\Cache;

class EducationObserver
{
    /**
     * Handle the Education "created" event.
     *
     * @param  \App\Models\Education  $education
     * @return void
     */
    public function creating(Education $education)
    {
        Cache::forget('educations');

    }

    /**
     * Handle the Education "updated" event.
     *
     * @param  \App\Models\Education  $education
     * @return void
     */
    public function updating(Education $education)
    {
        Cache::forget('educations');

    }

    /**
     * Handle the Education "deleted" event.
     *
     * @param  \App\Models\Education  $education
     * @return void
     */
    public function deleting(Education $education)
    {
        Cache::forget('educations');

    }

    
     
}
