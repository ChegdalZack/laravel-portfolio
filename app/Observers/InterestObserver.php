<?php

namespace App\Observers;

use App\Models\Interest;
use Illuminate\Support\Facades\Cache;

class InterestObserver
{
    /**
     * Handle the Interest "created" event.
     *
     * @param  \App\Models\Interest  $interest
     * @return void
     */
    public function creating(Interest $interest)
    {
        Cache::forget('interests');

    }

    /**
     * Handle the Interest "updated" event.
     *
     * @param  \App\Models\Interest  $interest
     * @return void
     */
    public function updating(Interest $interest)
    {
        Cache::forget('interests');

    }

    /**
     * Handle the Interest "deleted" event.
     *
     * @param  \App\Models\Interest  $interest
     * @return void
     */
    public function deleting(Interest $interest)
    {
        Cache::forget('interests');

    }

}
