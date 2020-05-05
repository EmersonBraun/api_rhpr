<?php

namespace App\Observers;

use App\Models\Historicalpolice;

class HistoricalpoliceObserver
{
    /**
     * Handle the Historicalpolice "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Historicalpolice  $historicalpolice
     * @return void
     */
    public function retrieved(Historicalpolice $historicalpolice)
    {
        //
    }

    /**
     * Handle the Historicalpolice "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Historicalpolice  $historicalpolice
     * @return void
     */
    public function creating(Historicalpolice $historicalpolice)
    {
        //
    }

    /**
     * Handle the Historicalpolice "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Historicalpolice  $historicalpolice
     * @return void
     */
    public function created(Historicalpolice $historicalpolice)
    {
        //
    }

    /**
     * Handle the Historicalpolice "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Historicalpolice  $historicalpolice
     * @return void
     */
    public function updating(Historicalpolice $historicalpolice)
    {
        //
    }

    /**
     * Handle the Historicalpolice "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Historicalpolice  $historicalpolice
     * @return void
     */
    public function updated(Historicalpolice $historicalpolice)
    {
        //
    }

    /**
     * Handle the Historicalpolice "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Historicalpolice  $historicalpolice
     * @return void
     */
    public function saving(Historicalpolice $historicalpolice)
    {
        //
    }

    /**
     * Handle the Historicalpolice "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Historicalpolice  $historicalpolice
     * @return void
     */
    public function saved(Historicalpolice $historicalpolice)
    {
        //
    }

    /**
     * Handle the Historicalpolice "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Historicalpolice  $historicalpolice
     * @return void
     */
    public function deleting(Historicalpolice $historicalpolice)
    {
        //
    }

    /**
     * Handle the Historicalpolice "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Historicalpolice  $historicalpolice
     * @return void
     */
    public function deleted(Historicalpolice $historicalpolice)
    {
        //
    }

    /**
     * Handle the Historicalpolice "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Historicalpolice  $historicalpolice
     * @return void
     */
    public function restoring(Historicalpolice $historicalpolice)
    {
        //
    }

    /**
     * Handle the Historicalpolice "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Historicalpolice  $historicalpolice
     * @return void
     */
    public function restored(Historicalpolice $historicalpolice)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Historicalpolice  $historicalpolice
     * @return void
     */
    public function forceDeleted(Historicalpolice $historicalpolice)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Historicalpolice;
use App\Observers\HistoricalpoliceObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Historicalpolice::observe(HistoricalpoliceObserver::class);

... }

