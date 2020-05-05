<?php

namespace App\Observers;

use App\Models\Funcpriv;

class FuncprivObserver
{
    /**
     * Handle the Funcpriv "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Funcpriv  $funcpriv
     * @return void
     */
    public function retrieved(Funcpriv $funcpriv)
    {
        //
    }

    /**
     * Handle the Funcpriv "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Funcpriv  $funcpriv
     * @return void
     */
    public function creating(Funcpriv $funcpriv)
    {
        //
    }

    /**
     * Handle the Funcpriv "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Funcpriv  $funcpriv
     * @return void
     */
    public function created(Funcpriv $funcpriv)
    {
        //
    }

    /**
     * Handle the Funcpriv "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Funcpriv  $funcpriv
     * @return void
     */
    public function updating(Funcpriv $funcpriv)
    {
        //
    }

    /**
     * Handle the Funcpriv "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Funcpriv  $funcpriv
     * @return void
     */
    public function updated(Funcpriv $funcpriv)
    {
        //
    }

    /**
     * Handle the Funcpriv "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Funcpriv  $funcpriv
     * @return void
     */
    public function saving(Funcpriv $funcpriv)
    {
        //
    }

    /**
     * Handle the Funcpriv "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Funcpriv  $funcpriv
     * @return void
     */
    public function saved(Funcpriv $funcpriv)
    {
        //
    }

    /**
     * Handle the Funcpriv "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Funcpriv  $funcpriv
     * @return void
     */
    public function deleting(Funcpriv $funcpriv)
    {
        //
    }

    /**
     * Handle the Funcpriv "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Funcpriv  $funcpriv
     * @return void
     */
    public function deleted(Funcpriv $funcpriv)
    {
        //
    }

    /**
     * Handle the Funcpriv "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Funcpriv  $funcpriv
     * @return void
     */
    public function restoring(Funcpriv $funcpriv)
    {
        //
    }

    /**
     * Handle the Funcpriv "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Funcpriv  $funcpriv
     * @return void
     */
    public function restored(Funcpriv $funcpriv)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Funcpriv  $funcpriv
     * @return void
     */
    public function forceDeleted(Funcpriv $funcpriv)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Funcpriv;
use App\Observers\FuncprivObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Funcpriv::observe(FuncprivObserver::class);

... }

