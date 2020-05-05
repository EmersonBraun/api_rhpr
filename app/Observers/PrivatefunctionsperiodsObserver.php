<?php

namespace App\Observers;

use App\Models\Privatefunctionsperiods;

class PrivatefunctionsperiodsObserver
{
    /**
     * Handle the Privatefunctionsperiods "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Privatefunctionsperiods  $privatefunctionsperiods
     * @return void
     */
    public function retrieved(Privatefunctionsperiods $privatefunctionsperiods)
    {
        //
    }

    /**
     * Handle the Privatefunctionsperiods "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Privatefunctionsperiods  $privatefunctionsperiods
     * @return void
     */
    public function creating(Privatefunctionsperiods $privatefunctionsperiods)
    {
        //
    }

    /**
     * Handle the Privatefunctionsperiods "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Privatefunctionsperiods  $privatefunctionsperiods
     * @return void
     */
    public function created(Privatefunctionsperiods $privatefunctionsperiods)
    {
        //
    }

    /**
     * Handle the Privatefunctionsperiods "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Privatefunctionsperiods  $privatefunctionsperiods
     * @return void
     */
    public function updating(Privatefunctionsperiods $privatefunctionsperiods)
    {
        //
    }

    /**
     * Handle the Privatefunctionsperiods "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Privatefunctionsperiods  $privatefunctionsperiods
     * @return void
     */
    public function updated(Privatefunctionsperiods $privatefunctionsperiods)
    {
        //
    }

    /**
     * Handle the Privatefunctionsperiods "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Privatefunctionsperiods  $privatefunctionsperiods
     * @return void
     */
    public function saving(Privatefunctionsperiods $privatefunctionsperiods)
    {
        //
    }

    /**
     * Handle the Privatefunctionsperiods "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Privatefunctionsperiods  $privatefunctionsperiods
     * @return void
     */
    public function saved(Privatefunctionsperiods $privatefunctionsperiods)
    {
        //
    }

    /**
     * Handle the Privatefunctionsperiods "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Privatefunctionsperiods  $privatefunctionsperiods
     * @return void
     */
    public function deleting(Privatefunctionsperiods $privatefunctionsperiods)
    {
        //
    }

    /**
     * Handle the Privatefunctionsperiods "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Privatefunctionsperiods  $privatefunctionsperiods
     * @return void
     */
    public function deleted(Privatefunctionsperiods $privatefunctionsperiods)
    {
        //
    }

    /**
     * Handle the Privatefunctionsperiods "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Privatefunctionsperiods  $privatefunctionsperiods
     * @return void
     */
    public function restoring(Privatefunctionsperiods $privatefunctionsperiods)
    {
        //
    }

    /**
     * Handle the Privatefunctionsperiods "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Privatefunctionsperiods  $privatefunctionsperiods
     * @return void
     */
    public function restored(Privatefunctionsperiods $privatefunctionsperiods)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Privatefunctionsperiods  $privatefunctionsperiods
     * @return void
     */
    public function forceDeleted(Privatefunctionsperiods $privatefunctionsperiods)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Privatefunctionsperiods;
use App\Observers\PrivatefunctionsperiodsObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Privatefunctionsperiods::observe(PrivatefunctionsperiodsObserver::class);

... }

