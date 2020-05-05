<?php

namespace App\Observers;

use App\Models\Reserva;

class ReservaObserver
{
    /**
     * Handle the Reserva "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Reserva  $reserva
     * @return void
     */
    public function retrieved(Reserva $reserva)
    {
        //
    }

    /**
     * Handle the Reserva "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Reserva  $reserva
     * @return void
     */
    public function creating(Reserva $reserva)
    {
        //
    }

    /**
     * Handle the Reserva "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Reserva  $reserva
     * @return void
     */
    public function created(Reserva $reserva)
    {
        //
    }

    /**
     * Handle the Reserva "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Reserva  $reserva
     * @return void
     */
    public function updating(Reserva $reserva)
    {
        //
    }

    /**
     * Handle the Reserva "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return void
     */
    public function updated(Reserva $reserva)
    {
        //
    }

    /**
     * Handle the Reserva "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Reserva  $reserva
     * @return void
     */
    public function saving(Reserva $reserva)
    {
        //
    }

    /**
     * Handle the Reserva "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Reserva  $reserva
     * @return void
     */
    public function saved(Reserva $reserva)
    {
        //
    }

    /**
     * Handle the Reserva "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return void
     */
    public function deleting(Reserva $reserva)
    {
        //
    }

    /**
     * Handle the Reserva "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return void
     */
    public function deleted(Reserva $reserva)
    {
        //
    }

    /**
     * Handle the Reserva "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return void
     */
    public function restoring(Reserva $reserva)
    {
        //
    }

    /**
     * Handle the Reserva "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return void
     */
    public function restored(Reserva $reserva)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return void
     */
    public function forceDeleted(Reserva $reserva)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Reserva;
use App\Observers\ReservaObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Reserva::observe(ReservaObserver::class);

... }

