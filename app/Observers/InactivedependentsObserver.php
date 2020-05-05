<?php

namespace App\Observers;

use App\Models\Inactivedependents;

class InactivedependentsObserver
{
    /**
     * Handle the Inactivedependents "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Inactivedependents  $inactivedependents
     * @return void
     */
    public function retrieved(Inactivedependents $inactivedependents)
    {
        //
    }

    /**
     * Handle the Inactivedependents "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Inactivedependents  $inactivedependents
     * @return void
     */
    public function creating(Inactivedependents $inactivedependents)
    {
        //
    }

    /**
     * Handle the Inactivedependents "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Inactivedependents  $inactivedependents
     * @return void
     */
    public function created(Inactivedependents $inactivedependents)
    {
        //
    }

    /**
     * Handle the Inactivedependents "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Inactivedependents  $inactivedependents
     * @return void
     */
    public function updating(Inactivedependents $inactivedependents)
    {
        //
    }

    /**
     * Handle the Inactivedependents "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Inactivedependents  $inactivedependents
     * @return void
     */
    public function updated(Inactivedependents $inactivedependents)
    {
        //
    }

    /**
     * Handle the Inactivedependents "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Inactivedependents  $inactivedependents
     * @return void
     */
    public function saving(Inactivedependents $inactivedependents)
    {
        //
    }

    /**
     * Handle the Inactivedependents "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Inactivedependents  $inactivedependents
     * @return void
     */
    public function saved(Inactivedependents $inactivedependents)
    {
        //
    }

    /**
     * Handle the Inactivedependents "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Inactivedependents  $inactivedependents
     * @return void
     */
    public function deleting(Inactivedependents $inactivedependents)
    {
        //
    }

    /**
     * Handle the Inactivedependents "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Inactivedependents  $inactivedependents
     * @return void
     */
    public function deleted(Inactivedependents $inactivedependents)
    {
        //
    }

    /**
     * Handle the Inactivedependents "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Inactivedependents  $inactivedependents
     * @return void
     */
    public function restoring(Inactivedependents $inactivedependents)
    {
        //
    }

    /**
     * Handle the Inactivedependents "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Inactivedependents  $inactivedependents
     * @return void
     */
    public function restored(Inactivedependents $inactivedependents)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Inactivedependents  $inactivedependents
     * @return void
     */
    public function forceDeleted(Inactivedependents $inactivedependents)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Inactivedependents;
use App\Observers\InactivedependentsObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Inactivedependents::observe(InactivedependentsObserver::class);

... }

