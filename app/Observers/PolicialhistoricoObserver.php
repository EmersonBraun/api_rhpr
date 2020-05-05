<?php

namespace App\Observers;

use App\Models\Policialhistorico;

class PolicialhistoricoObserver
{
    /**
     * Handle the Policialhistorico "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Policialhistorico  $policialhistorico
     * @return void
     */
    public function retrieved(Policialhistorico $policialhistorico)
    {
        //
    }

    /**
     * Handle the Policialhistorico "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Policialhistorico  $policialhistorico
     * @return void
     */
    public function creating(Policialhistorico $policialhistorico)
    {
        //
    }

    /**
     * Handle the Policialhistorico "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Policialhistorico  $policialhistorico
     * @return void
     */
    public function created(Policialhistorico $policialhistorico)
    {
        //
    }

    /**
     * Handle the Policialhistorico "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Policialhistorico  $policialhistorico
     * @return void
     */
    public function updating(Policialhistorico $policialhistorico)
    {
        //
    }

    /**
     * Handle the Policialhistorico "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Policialhistorico  $policialhistorico
     * @return void
     */
    public function updated(Policialhistorico $policialhistorico)
    {
        //
    }

    /**
     * Handle the Policialhistorico "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Policialhistorico  $policialhistorico
     * @return void
     */
    public function saving(Policialhistorico $policialhistorico)
    {
        //
    }

    /**
     * Handle the Policialhistorico "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Policialhistorico  $policialhistorico
     * @return void
     */
    public function saved(Policialhistorico $policialhistorico)
    {
        //
    }

    /**
     * Handle the Policialhistorico "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Policialhistorico  $policialhistorico
     * @return void
     */
    public function deleting(Policialhistorico $policialhistorico)
    {
        //
    }

    /**
     * Handle the Policialhistorico "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Policialhistorico  $policialhistorico
     * @return void
     */
    public function deleted(Policialhistorico $policialhistorico)
    {
        //
    }

    /**
     * Handle the Policialhistorico "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Policialhistorico  $policialhistorico
     * @return void
     */
    public function restoring(Policialhistorico $policialhistorico)
    {
        //
    }

    /**
     * Handle the Policialhistorico "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Policialhistorico  $policialhistorico
     * @return void
     */
    public function restored(Policialhistorico $policialhistorico)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Policialhistorico  $policialhistorico
     * @return void
     */
    public function forceDeleted(Policialhistorico $policialhistorico)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Policialhistorico;
use App\Observers\PolicialhistoricoObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Policialhistorico::observe(PolicialhistoricoObserver::class);

... }

