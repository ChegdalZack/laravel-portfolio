<?php

namespace App\Observers;

use App\Models\Experience;
use Illuminate\Support\Facades\Cache;

class ExperienceObserver
{
    /**
     * Handle the Experience "created" event.
     *
     * @param  \App\Models\Experience  $experience
     * @return void
     */
    public function creating(Experience $experience)
    {
        Cache::forget('experiences');

    }

    /**
     * Handle the Experience "updated" event.
     *
     * @param  \App\Models\Experience  $experience
     * @return void
     */
    public function updating(Experience $experience)
    {
        Cache::forget('experiences');

    }

    /**
     * Handle the Experience "deleted" event.
     *
     * @param  \App\Models\Experience  $experience
     * @return void
     */
    public function deleting(Experience $experience)
    {
        Cache::forget('experiences');

    }

    
}
