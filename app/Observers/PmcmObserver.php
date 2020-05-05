<?php

namespace App\Observers;

use App\Models\Pmcm;

class PmcmObserver
{
    /**
     * Handle the Pmcm "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Pmcm  $pmcm
     * @return void
     */
    public function retrieved(Pmcm $pmcm)
    {
        //
    }

    /**
     * Handle the Pmcm "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Pmcm  $pmcm
     * @return void
     */
    public function creating(Pmcm $pmcm)
    {
        //
    }

    /**
     * Handle the Pmcm "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Pmcm  $pmcm
     * @return void
     */
    public function created(Pmcm $pmcm)
    {
        //
    }

    /**
     * Handle the Pmcm "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Pmcm  $pmcm
     * @return void
     */
    public function updating(Pmcm $pmcm)
    {
        //
    }

    /**
     * Handle the Pmcm "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Pmcm  $pmcm
     * @return void
     */
    public function updated(Pmcm $pmcm)
    {
        //
    }

    /**
     * Handle the Pmcm "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Pmcm  $pmcm
     * @return void
     */
    public function saving(Pmcm $pmcm)
    {
        //
    }

    /**
     * Handle the Pmcm "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Pmcm  $pmcm
     * @return void
     */
    public function saved(Pmcm $pmcm)
    {
        //
    }

    /**
     * Handle the Pmcm "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Pmcm  $pmcm
     * @return void
     */
    public function deleting(Pmcm $pmcm)
    {
        //
    }

    /**
     * Handle the Pmcm "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Pmcm  $pmcm
     * @return void
     */
    public function deleted(Pmcm $pmcm)
    {
        //
    }

    /**
     * Handle the Pmcm "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Pmcm  $pmcm
     * @return void
     */
    public function restoring(Pmcm $pmcm)
    {
        //
    }

    /**
     * Handle the Pmcm "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Pmcm  $pmcm
     * @return void
     */
    public function restored(Pmcm $pmcm)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Pmcm  $pmcm
     * @return void
     */
    public function forceDeleted(Pmcm $pmcm)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Pmcm;
use App\Observers\PmcmObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Pmcm::observe(PmcmObserver::class);

... }

