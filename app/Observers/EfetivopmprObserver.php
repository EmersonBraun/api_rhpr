<?php

namespace App\Observers;

use App\Models\Efetivopmpr;

class EfetivopmprObserver
{
    /**
     * Handle the Efetivopmpr "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Efetivopmpr  $efetivopmpr
     * @return void
     */
    public function retrieved(Efetivopmpr $efetivopmpr)
    {
        //
    }

    /**
     * Handle the Efetivopmpr "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Efetivopmpr  $efetivopmpr
     * @return void
     */
    public function creating(Efetivopmpr $efetivopmpr)
    {
        //
    }

    /**
     * Handle the Efetivopmpr "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Efetivopmpr  $efetivopmpr
     * @return void
     */
    public function created(Efetivopmpr $efetivopmpr)
    {
        //
    }

    /**
     * Handle the Efetivopmpr "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Efetivopmpr  $efetivopmpr
     * @return void
     */
    public function updating(Efetivopmpr $efetivopmpr)
    {
        //
    }

    /**
     * Handle the Efetivopmpr "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Efetivopmpr  $efetivopmpr
     * @return void
     */
    public function updated(Efetivopmpr $efetivopmpr)
    {
        //
    }

    /**
     * Handle the Efetivopmpr "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Efetivopmpr  $efetivopmpr
     * @return void
     */
    public function saving(Efetivopmpr $efetivopmpr)
    {
        //
    }

    /**
     * Handle the Efetivopmpr "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Efetivopmpr  $efetivopmpr
     * @return void
     */
    public function saved(Efetivopmpr $efetivopmpr)
    {
        //
    }

    /**
     * Handle the Efetivopmpr "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Efetivopmpr  $efetivopmpr
     * @return void
     */
    public function deleting(Efetivopmpr $efetivopmpr)
    {
        //
    }

    /**
     * Handle the Efetivopmpr "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Efetivopmpr  $efetivopmpr
     * @return void
     */
    public function deleted(Efetivopmpr $efetivopmpr)
    {
        //
    }

    /**
     * Handle the Efetivopmpr "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Efetivopmpr  $efetivopmpr
     * @return void
     */
    public function restoring(Efetivopmpr $efetivopmpr)
    {
        //
    }

    /**
     * Handle the Efetivopmpr "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Efetivopmpr  $efetivopmpr
     * @return void
     */
    public function restored(Efetivopmpr $efetivopmpr)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Efetivopmpr  $efetivopmpr
     * @return void
     */
    public function forceDeleted(Efetivopmpr $efetivopmpr)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Efetivopmpr;
use App\Observers\EfetivopmprObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Efetivopmpr::observe(EfetivopmprObserver::class);

... }

