<?php

namespace App\Observers;

use App\Models\Efetivopracas;

class EfetivopracasObserver
{
    /**
     * Handle the Efetivopracas "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Efetivopracas  $efetivopracas
     * @return void
     */
    public function retrieved(Efetivopracas $efetivopracas)
    {
        //
    }

    /**
     * Handle the Efetivopracas "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Efetivopracas  $efetivopracas
     * @return void
     */
    public function creating(Efetivopracas $efetivopracas)
    {
        //
    }

    /**
     * Handle the Efetivopracas "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Efetivopracas  $efetivopracas
     * @return void
     */
    public function created(Efetivopracas $efetivopracas)
    {
        //
    }

    /**
     * Handle the Efetivopracas "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Efetivopracas  $efetivopracas
     * @return void
     */
    public function updating(Efetivopracas $efetivopracas)
    {
        //
    }

    /**
     * Handle the Efetivopracas "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Efetivopracas  $efetivopracas
     * @return void
     */
    public function updated(Efetivopracas $efetivopracas)
    {
        //
    }

    /**
     * Handle the Efetivopracas "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Efetivopracas  $efetivopracas
     * @return void
     */
    public function saving(Efetivopracas $efetivopracas)
    {
        //
    }

    /**
     * Handle the Efetivopracas "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Efetivopracas  $efetivopracas
     * @return void
     */
    public function saved(Efetivopracas $efetivopracas)
    {
        //
    }

    /**
     * Handle the Efetivopracas "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Efetivopracas  $efetivopracas
     * @return void
     */
    public function deleting(Efetivopracas $efetivopracas)
    {
        //
    }

    /**
     * Handle the Efetivopracas "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Efetivopracas  $efetivopracas
     * @return void
     */
    public function deleted(Efetivopracas $efetivopracas)
    {
        //
    }

    /**
     * Handle the Efetivopracas "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Efetivopracas  $efetivopracas
     * @return void
     */
    public function restoring(Efetivopracas $efetivopracas)
    {
        //
    }

    /**
     * Handle the Efetivopracas "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Efetivopracas  $efetivopracas
     * @return void
     */
    public function restored(Efetivopracas $efetivopracas)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Efetivopracas  $efetivopracas
     * @return void
     */
    public function forceDeleted(Efetivopracas $efetivopracas)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Efetivopracas;
use App\Observers\EfetivopracasObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Efetivopracas::observe(EfetivopracasObserver::class);

... }

