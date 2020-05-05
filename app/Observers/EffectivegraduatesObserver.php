<?php

namespace App\Observers;

use App\Models\Effectivegraduates;

class EffectivegraduatesObserver
{
    /**
     * Handle the Effectivegraduates "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Effectivegraduates  $effectivegraduates
     * @return void
     */
    public function retrieved(Effectivegraduates $effectivegraduates)
    {
        //
    }

    /**
     * Handle the Effectivegraduates "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Effectivegraduates  $effectivegraduates
     * @return void
     */
    public function creating(Effectivegraduates $effectivegraduates)
    {
        //
    }

    /**
     * Handle the Effectivegraduates "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Effectivegraduates  $effectivegraduates
     * @return void
     */
    public function created(Effectivegraduates $effectivegraduates)
    {
        //
    }

    /**
     * Handle the Effectivegraduates "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Effectivegraduates  $effectivegraduates
     * @return void
     */
    public function updating(Effectivegraduates $effectivegraduates)
    {
        //
    }

    /**
     * Handle the Effectivegraduates "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Effectivegraduates  $effectivegraduates
     * @return void
     */
    public function updated(Effectivegraduates $effectivegraduates)
    {
        //
    }

    /**
     * Handle the Effectivegraduates "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Effectivegraduates  $effectivegraduates
     * @return void
     */
    public function saving(Effectivegraduates $effectivegraduates)
    {
        //
    }

    /**
     * Handle the Effectivegraduates "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Effectivegraduates  $effectivegraduates
     * @return void
     */
    public function saved(Effectivegraduates $effectivegraduates)
    {
        //
    }

    /**
     * Handle the Effectivegraduates "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Effectivegraduates  $effectivegraduates
     * @return void
     */
    public function deleting(Effectivegraduates $effectivegraduates)
    {
        //
    }

    /**
     * Handle the Effectivegraduates "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Effectivegraduates  $effectivegraduates
     * @return void
     */
    public function deleted(Effectivegraduates $effectivegraduates)
    {
        //
    }

    /**
     * Handle the Effectivegraduates "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Effectivegraduates  $effectivegraduates
     * @return void
     */
    public function restoring(Effectivegraduates $effectivegraduates)
    {
        //
    }

    /**
     * Handle the Effectivegraduates "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Effectivegraduates  $effectivegraduates
     * @return void
     */
    public function restored(Effectivegraduates $effectivegraduates)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Effectivegraduates  $effectivegraduates
     * @return void
     */
    public function forceDeleted(Effectivegraduates $effectivegraduates)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Effectivegraduates;
use App\Observers\EffectivegraduatesObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Effectivegraduates::observe(EffectivegraduatesObserver::class);

... }

