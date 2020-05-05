<?php

namespace App\Observers;

use App\Models\Activedependents;

class ActivedependentsObserver
{
    /**
     * Handle the Activedependents "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Activedependents  $activedependents
     * @return void
     */
    public function retrieved(Activedependents $activedependents)
    {
        //
    }

    /**
     * Handle the Activedependents "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Activedependents  $activedependents
     * @return void
     */
    public function creating(Activedependents $activedependents)
    {
        //
    }

    /**
     * Handle the Activedependents "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Activedependents  $activedependents
     * @return void
     */
    public function created(Activedependents $activedependents)
    {
        //
    }

    /**
     * Handle the Activedependents "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Activedependents  $activedependents
     * @return void
     */
    public function updating(Activedependents $activedependents)
    {
        //
    }

    /**
     * Handle the Activedependents "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Activedependents  $activedependents
     * @return void
     */
    public function updated(Activedependents $activedependents)
    {
        //
    }

    /**
     * Handle the Activedependents "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Activedependents  $activedependents
     * @return void
     */
    public function saving(Activedependents $activedependents)
    {
        //
    }

    /**
     * Handle the Activedependents "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Activedependents  $activedependents
     * @return void
     */
    public function saved(Activedependents $activedependents)
    {
        //
    }

    /**
     * Handle the Activedependents "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Activedependents  $activedependents
     * @return void
     */
    public function deleting(Activedependents $activedependents)
    {
        //
    }

    /**
     * Handle the Activedependents "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Activedependents  $activedependents
     * @return void
     */
    public function deleted(Activedependents $activedependents)
    {
        //
    }

    /**
     * Handle the Activedependents "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Activedependents  $activedependents
     * @return void
     */
    public function restoring(Activedependents $activedependents)
    {
        //
    }

    /**
     * Handle the Activedependents "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Activedependents  $activedependents
     * @return void
     */
    public function restored(Activedependents $activedependents)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Activedependents  $activedependents
     * @return void
     */
    public function forceDeleted(Activedependents $activedependents)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Activedependents;
use App\Observers\ActivedependentsObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Activedependents::observe(ActivedependentsObserver::class);

... }

