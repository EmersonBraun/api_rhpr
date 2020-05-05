<?php

namespace App\Observers;

use App\Models\Reservations;

class ReservationsObserver
{
    /**
     * Handle the Reservations "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Reservations  $reservations
     * @return void
     */
    public function retrieved(Reservations $reservations)
    {
        //
    }

    /**
     * Handle the Reservations "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Reservations  $reservations
     * @return void
     */
    public function creating(Reservations $reservations)
    {
        //
    }

    /**
     * Handle the Reservations "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Reservations  $reservations
     * @return void
     */
    public function created(Reservations $reservations)
    {
        //
    }

    /**
     * Handle the Reservations "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Reservations  $reservations
     * @return void
     */
    public function updating(Reservations $reservations)
    {
        //
    }

    /**
     * Handle the Reservations "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return void
     */
    public function updated(Reservations $reservations)
    {
        //
    }

    /**
     * Handle the Reservations "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Reservations  $reservations
     * @return void
     */
    public function saving(Reservations $reservations)
    {
        //
    }

    /**
     * Handle the Reservations "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Reservations  $reservations
     * @return void
     */
    public function saved(Reservations $reservations)
    {
        //
    }

    /**
     * Handle the Reservations "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return void
     */
    public function deleting(Reservations $reservations)
    {
        //
    }

    /**
     * Handle the Reservations "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return void
     */
    public function deleted(Reservations $reservations)
    {
        //
    }

    /**
     * Handle the Reservations "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return void
     */
    public function restoring(Reservations $reservations)
    {
        //
    }

    /**
     * Handle the Reservations "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return void
     */
    public function restored(Reservations $reservations)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return void
     */
    public function forceDeleted(Reservations $reservations)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Reservations;
use App\Observers\ReservationsObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Reservations::observe(ReservationsObserver::class);

... }

