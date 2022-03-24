<?php

namespace App\Providers;

use App\Models\Award;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Interest;
use App\Models\Project;
use App\Observers\AwardObserver;
use App\Observers\EducationObserver;
use App\Observers\ExperienceObserver;
use App\Observers\InterestObserver;
use App\Observers\ProjectObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Project::Observe(ProjectObserver::class);
        Award::Observe(AwardObserver::class);
        Education::Observe(EducationObserver::class);
        Experience::observe(ExperienceObserver::class);
        Interest::observe(InterestObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
