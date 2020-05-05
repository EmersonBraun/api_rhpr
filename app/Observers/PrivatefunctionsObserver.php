<?php

namespace App\Observers;

use App\Models\Privatefunctions;

class PrivatefunctionsObserver
{
    /**
     * Handle the Privatefunctions "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Privatefunctions  $privatefunctions
     * @return void
     */
    public function retrieved(Privatefunctions $privatefunctions)
    {
        //
    }

    /**
     * Handle the Privatefunctions "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Privatefunctions  $privatefunctions
     * @return void
     */
    public function creating(Privatefunctions $privatefunctions)
    {
        //
    }

    /**
     * Handle the Privatefunctions "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Privatefunctions  $privatefunctions
     * @return void
     */
    public function created(Privatefunctions $privatefunctions)
    {
        //
    }

    /**
     * Handle the Privatefunctions "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Privatefunctions  $privatefunctions
     * @return void
     */
    public function updating(Privatefunctions $privatefunctions)
    {
        //
    }

    /**
     * Handle the Privatefunctions "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Privatefunctions  $privatefunctions
     * @return void
     */
    public function updated(Privatefunctions $privatefunctions)
    {
        //
    }

    /**
     * Handle the Privatefunctions "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Privatefunctions  $privatefunctions
     * @return void
     */
    public function saving(Privatefunctions $privatefunctions)
    {
        //
    }

    /**
     * Handle the Privatefunctions "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Privatefunctions  $privatefunctions
     * @return void
     */
    public function saved(Privatefunctions $privatefunctions)
    {
        //
    }

    /**
     * Handle the Privatefunctions "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Privatefunctions  $privatefunctions
     * @return void
     */
    public function deleting(Privatefunctions $privatefunctions)
    {
        //
    }

    /**
     * Handle the Privatefunctions "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Privatefunctions  $privatefunctions
     * @return void
     */
    public function deleted(Privatefunctions $privatefunctions)
    {
        //
    }

    /**
     * Handle the Privatefunctions "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Privatefunctions  $privatefunctions
     * @return void
     */
    public function restoring(Privatefunctions $privatefunctions)
    {
        //
    }

    /**
     * Handle the Privatefunctions "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Privatefunctions  $privatefunctions
     * @return void
     */
    public function restored(Privatefunctions $privatefunctions)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Privatefunctions  $privatefunctions
     * @return void
     */
    public function forceDeleted(Privatefunctions $privatefunctions)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Privatefunctions;
use App\Observers\PrivatefunctionsObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Privatefunctions::observe(PrivatefunctionsObserver::class);

... }

