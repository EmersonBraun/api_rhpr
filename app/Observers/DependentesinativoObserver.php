<?php

namespace App\Observers;

use App\Models\Dependentesinativo;

class DependentesinativoObserver
{
    /**
     * Handle the Dependentesinativo "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Dependentesinativo  $dependentesinativo
     * @return void
     */
    public function retrieved(Dependentesinativo $dependentesinativo)
    {
        //
    }

    /**
     * Handle the Dependentesinativo "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Dependentesinativo  $dependentesinativo
     * @return void
     */
    public function creating(Dependentesinativo $dependentesinativo)
    {
        //
    }

    /**
     * Handle the Dependentesinativo "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Dependentesinativo  $dependentesinativo
     * @return void
     */
    public function created(Dependentesinativo $dependentesinativo)
    {
        //
    }

    /**
     * Handle the Dependentesinativo "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Dependentesinativo  $dependentesinativo
     * @return void
     */
    public function updating(Dependentesinativo $dependentesinativo)
    {
        //
    }

    /**
     * Handle the Dependentesinativo "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Dependentesinativo  $dependentesinativo
     * @return void
     */
    public function updated(Dependentesinativo $dependentesinativo)
    {
        //
    }

    /**
     * Handle the Dependentesinativo "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Dependentesinativo  $dependentesinativo
     * @return void
     */
    public function saving(Dependentesinativo $dependentesinativo)
    {
        //
    }

    /**
     * Handle the Dependentesinativo "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Dependentesinativo  $dependentesinativo
     * @return void
     */
    public function saved(Dependentesinativo $dependentesinativo)
    {
        //
    }

    /**
     * Handle the Dependentesinativo "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Dependentesinativo  $dependentesinativo
     * @return void
     */
    public function deleting(Dependentesinativo $dependentesinativo)
    {
        //
    }

    /**
     * Handle the Dependentesinativo "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Dependentesinativo  $dependentesinativo
     * @return void
     */
    public function deleted(Dependentesinativo $dependentesinativo)
    {
        //
    }

    /**
     * Handle the Dependentesinativo "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Dependentesinativo  $dependentesinativo
     * @return void
     */
    public function restoring(Dependentesinativo $dependentesinativo)
    {
        //
    }

    /**
     * Handle the Dependentesinativo "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Dependentesinativo  $dependentesinativo
     * @return void
     */
    public function restored(Dependentesinativo $dependentesinativo)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Dependentesinativo  $dependentesinativo
     * @return void
     */
    public function forceDeleted(Dependentesinativo $dependentesinativo)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Dependentesinativo;
use App\Observers\DependentesinativoObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Dependentesinativo::observe(DependentesinativoObserver::class);

... }

