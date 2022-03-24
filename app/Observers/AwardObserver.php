<?php

namespace App\Observers;

use App\Models\Award;
use Illuminate\Support\Facades\Cache;

class AwardObserver
{
    /**
     * Handle the Award "created" event.
     *
     * @param  \App\Models\Award  $award
     * @return void
     */
    public function creating(Award $award)
    {
        Cache::forget('awards');

    }

    /**
     * Handle the Award "updated" event.
     *
     * @param  \App\Models\Award  $award
     * @return void
     */
    public function updating(Award $award)
    {
        Cache::forget('awards');

    }

    /**
     * Handle the Award "deleted" event.
     *
     * @param  \App\Models\Award  $award
     * @return void
     */
    public function deleting(Award $award)
    {
        Cache::forget('awards');

    }

    
}
