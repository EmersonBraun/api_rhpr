<?php

namespace App\Observers;

use App\Models\Opmpmpr;

class OpmpmprObserver
{
    /**
     * Handle the Opmpmpr "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Opmpmpr  $opmpmpr
     * @return void
     */
    public function retrieved(Opmpmpr $opmpmpr)
    {
        //
    }

    /**
     * Handle the Opmpmpr "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Opmpmpr  $opmpmpr
     * @return void
     */
    public function creating(Opmpmpr $opmpmpr)
    {
        //
    }

    /**
     * Handle the Opmpmpr "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Opmpmpr  $opmpmpr
     * @return void
     */
    public function created(Opmpmpr $opmpmpr)
    {
        //
    }

    /**
     * Handle the Opmpmpr "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Opmpmpr  $opmpmpr
     * @return void
     */
    public function updating(Opmpmpr $opmpmpr)
    {
        //
    }

    /**
     * Handle the Opmpmpr "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Opmpmpr  $opmpmpr
     * @return void
     */
    public function updated(Opmpmpr $opmpmpr)
    {
        //
    }

    /**
     * Handle the Opmpmpr "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Opmpmpr  $opmpmpr
     * @return void
     */
    public function saving(Opmpmpr $opmpmpr)
    {
        //
    }

    /**
     * Handle the Opmpmpr "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Opmpmpr  $opmpmpr
     * @return void
     */
    public function saved(Opmpmpr $opmpmpr)
    {
        //
    }

    /**
     * Handle the Opmpmpr "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Opmpmpr  $opmpmpr
     * @return void
     */
    public function deleting(Opmpmpr $opmpmpr)
    {
        //
    }

    /**
     * Handle the Opmpmpr "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Opmpmpr  $opmpmpr
     * @return void
     */
    public function deleted(Opmpmpr $opmpmpr)
    {
        //
    }

    /**
     * Handle the Opmpmpr "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Opmpmpr  $opmpmpr
     * @return void
     */
    public function restoring(Opmpmpr $opmpmpr)
    {
        //
    }

    /**
     * Handle the Opmpmpr "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Opmpmpr  $opmpmpr
     * @return void
     */
    public function restored(Opmpmpr $opmpmpr)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Opmpmpr  $opmpmpr
     * @return void
     */
    public function forceDeleted(Opmpmpr $opmpmpr)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Opmpmpr;
use App\Observers\OpmpmprObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Opmpmpr::observe(OpmpmprObserver::class);

... }

